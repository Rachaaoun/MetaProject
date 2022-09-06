<?php

namespace App\Controller;

use App\Entity\Skill;
use App\Form\SkillType;
use App\Repository\SeanceRepository;
use App\Repository\SkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * @Route("/skill")
 */
class SkillController extends AbstractController
{

    const ATTRIBUTES_TO_SERIALIZE =['id','name','description','diffculty'];

    /**
     * @Route("/", name="app_skill_index", methods={"GET"})
     */
    public function index(SkillRepository $skillRepository): Response
    {
        return $this->render('skill/index.html.twig', [
            'skills' => $skillRepository->findAll(),
        ]);
    }

    /**
     * @Route("/tri", name="app_skill_tri", methods={"GET"})
     */
    public function tri(SkillRepository $skillRepository): Response
    {
        return $this->render('skill/tri.html.twig', [
            'skills' => $skillRepository->tri(),
        ]);
    }


     /**
     * @Route("/list/seance/{id}", name="app_skill_seance", methods={"GET"})
     */
    public function listbyseance(SkillRepository $skillRepository,$id,SeanceRepository $seanceRepository): Response
    {
        $seance = $seanceRepository->findOneById($id);
        return $this->render('skill/listbyseance.html.twig', [
            'skills' => $seance->getSkills(),
        ]);
    }

    /**
     * @Route("/new", name="app_skill_new", methods={"GET", "POST"})
     */
    public function new(Request $request, SkillRepository $skillRepository): Response
    {
        $skill = new Skill();
        $form = $this->createForm(SkillType::class, $skill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $skillRepository->add($skill, true);

            return $this->redirectToRoute('app_skill_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('skill/new.html.twig', [
            'skill' => $skill,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_skill_show", methods={"GET"})
     */
    public function show(Skill $skill): Response
    {
        return $this->render('skill/show.html.twig', [
            'skill' => $skill,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_skill_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Skill $skill, SkillRepository $skillRepository): Response
    {
        $form = $this->createForm(SkillType::class, $skill);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $skillRepository->add($skill, true);

            return $this->redirectToRoute('app_skill_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('skill/edit.html.twig', [
            'skill' => $skill,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_skill_delete", methods={"POST"})
     */
    public function delete(Request $request, Skill $skill, SkillRepository $skillRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$skill->getId(), $request->request->get('_token'))) {
            $skillRepository->remove($skill, true);
        }

        return $this->redirectToRoute('app_skill_index', [], Response::HTTP_SEE_OTHER);
    }

    //mobile

    /**
     * @Route("/All/skills/json")
     * @param SkillRepository $repo
     */
    public function getList(SkillRepository $repo,SerializerInterface $serializer):Response{
     
        $skills=$repo->findAll();
        $json=$serializer->serialize($skills,'json', ['groups' => ['skill:read']]);


        return $this->json(['skill'=>$skills],Response::HTTP_OK,[],[
            'attributes'=>self::ATTRIBUTES_TO_SERIALIZE
        ]);

    }

    /**
     * @Route("/Add/skill/json", name="AddSkills")
     */
    public function AddSkillsJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $skill = new Skill();
        $skill->setName($request->get('name'));
        $skill->setDescription($request->get('description'));
        $skill->setDiffculty($request->get('diffculty'));
       
        $em->persist($skill);
        $em->flush();

        $jsonContent= $Normalizer->normalize($skill,'json',['groups'=>"skill:read"]);
        return new Response(json_encode($jsonContent));;
    }

      /**
     * @Route("/edit/skill/json/{id}", name="editSkills")
     */
    public function EditSkillsJSON(Request $request,NormalizerInterface $Normalizer,$id,SkillRepository $repo)
    {
        $em = $this->getDoctrine()->getManager();
        $skill = $repo->findOneById($id);
        $skill->setName($request->query->get('name'));
        $skill->setDescription($request->query->get('description'));
        $skill->setDiffculty($request->query->get('diffculty'));
       
        $em->persist($skill);
        $em->flush();

        $jsonContent= $Normalizer->normalize($skill,'json',['groups'=>"skill:read"]);
        return new Response(json_encode($jsonContent));;
    }

    /**
     * @Route("/delete/skill/json", name="supprimer_skill")
     */
    public function supprimerSkill(Request $request, SkillRepository $repo): Response
    {

        $id =$request->get("id");
        $em=$this->getDoctrine()->getManager();

     $d=   $repo->find($id);

        if($d != null){
            $em->remove($d);
            $em->flush();
            $serializer=new Serializer([new ObjectNormalizer()]);
            $formatted=$serializer->normalize("skill a eté supprimeé");
            return new JsonResponse($formatted);
        }

       return  new JsonResponse("Id Invalide");
    }



}
