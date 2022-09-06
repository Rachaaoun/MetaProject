<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Seance;
use App\Form\SeanceType;
use App\Form\SearchformType;
use App\Repository\SeanceRepository;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twilio\Rest\Client;

use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer; 

/**
 * @Route("/seance")
 */
class SeanceController extends AbstractController
{
    const ATTRIBUTES_TO_SERIALIZE =['id','idCoach','date','duree','nbrParticipants','prix'];
    /**
     * @Route("/", name="app_seance_index", methods={"GET"})
     */
    public function index(SeanceRepository $seanceRepository): Response
    {
        return $this->render('seance/index.html.twig', [
            'seances' => $seanceRepository->findAll(),
        ]);
    }

     /**
     * @Route("/list", name="app_seance_list", methods={"GET"})
     */
    public function list(SeanceRepository $seanceRepository,Request $request): Response
    {
        $data = new SearchData();
        $form = $this->createForm(SearchformType::class, $data);
        $form->handleRequest($request);

     
        return $this->render('seance/list.html.twig', [
            'seances' => $seanceRepository->findSearch($data),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/new", name="app_seance_new", methods={"GET", "POST"})
     */
    public function new(Request $request, SeanceRepository $seanceRepository, \Swift_Mailer $mailer): Response
    {
        $seance = new Seance();
        $form = $this->createForm(SeanceType::class, $seance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $sid    = "AC2f95912a6c870c252abfe1521ca8db3b"; 
            $token  = "eddbed7cba98178e0b7850981d63c957"; 
            $twilio = new Client($sid, $token); 
            
            $message = $twilio->messages 
            ->create("+21653640155", // to 
                     array(  
                         "messagingServiceSid" => "MGf2c8ed5ccddd95739bd9e0b6f6caa224",      
                         "body" => "test again " 
                     ) 
            ); 

            
            print($message->sid);


            $message = (new \Swift_Message('Hello Email')) //subject
            ->setFrom('racha.aoun@esprit.tn')
            ->setTo('mohamedaziz.khelifa@esprit.tn')
            ->setBody("la seance a été ajouté "
            ) ;

try{
            $mailer->send($message);}
            catch(Exception $e){

            }
           
            $seanceRepository->add($seance, true);
                //send email
              
                
            return $this->redirectToRoute('app_seance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('seance/new.html.twig', [
            'seance' => $seance,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_seance_show", methods={"GET"})
     */
    public function show(Seance $seance): Response
    {
        return $this->render('seance/show.html.twig', [
            'seance' => $seance,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_seance_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Seance $seance, SeanceRepository $seanceRepository): Response
    {
        $form = $this->createForm(SeanceType::class, $seance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $seanceRepository->add($seance, true);

            return $this->redirectToRoute('app_seance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('seance/edit.html.twig', [
            'seance' => $seance,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_seance_delete", methods={"POST"})
     */
    public function delete(Request $request, Seance $seance, SeanceRepository $seanceRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$seance->getId(), $request->request->get('_token'))) {
            $seanceRepository->remove($seance, true);
        }

        return $this->redirectToRoute('app_seance_index', [], Response::HTTP_SEE_OTHER);
    }

//mobile

    /**
     * @Route("/All/seances/json")
     * @param SeanceRepository $repo
     */
    public function getList(SeanceRepository $repo,SerializerInterface $serializer):Response{
     
        $seances=$repo->findAll();
        $json=$serializer->serialize($seances,'json', ['groups' => ['seance:read']]);


        return $this->json(['seance'=>$seances],Response::HTTP_OK,[],[
            'attributes'=>self::ATTRIBUTES_TO_SERIALIZE
        ]);

    }

    /**
     * @Route("/Add/seance/json", name="AddSeance")
     */
    public function AddSeanceJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $seance = new Seance();
        $seance->setDate($request->get('date'));
        $seance->setIdCoach($request->get('idCoach'));
        $seance->setDuree($request->get('duree'));
        $seance->setNbrParticipants($request->get('nbrParticipants'));
        $seance->setPrix($request->get('prix'));
       
        $em->persist($seance);
        $em->flush();

        $jsonContent= $Normalizer->normalize($seance,'json',['groups'=>"seance:read"]);
        return new Response(json_encode($jsonContent));;
    }


    /**
     * @Route("/edit/seance/json/{id}" , name="seance_modifier" ,  methods={"GET", "POST"}, requirements={"id":"\d+"})
     */
    public function editSeance(Request $request,SerializerInterface $serializer,$id,SeanceRepository $repo)
    {
        //idCoach=10&date=7yaayya&duree=9&nbrParticipants=8&prix=10
        $seance=$repo->findOneById($id);
        $idCoach=$request->query->get('idCoach');
        $date=$request->query->get('date');
        $duree=$request->query->get('duree');
        $nbrParticipants=$request->query->get('nbrParticipants');
        $prix=$request->query->get('prix');
        
        $em=$this->getDoctrine()->getManager();
       $seance->setIdCoach($idCoach);
       $seance->setDate($date);
       $seance->setDuree($duree);
       $seance->setNbrParticipants($nbrParticipants);
       $seance->setPrix($prix);

        $em->persist($seance);
        $em->flush();
        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted=$serializer->normalize($seance);
        return new JsonResponse($formatted);
    }
    /**
     * @Route("/delete/seance/json", name="supprimer_seance")
     */
    public function supprimerSeance(Request $request, SeanceRepository $repo): Response
    {

        $id =$request->get("id");
        $em=$this->getDoctrine()->getManager();

     $d=   $repo->find($id);

        if($d != null){
            $em->remove($d);
            $em->flush();
            $serializer=new Serializer([new ObjectNormalizer()]);
            $formatted=$serializer->normalize("seance a eté supprimeé");
            return new JsonResponse($formatted);
        }

       return  new JsonResponse("Id Invalide");
    }

    

}
