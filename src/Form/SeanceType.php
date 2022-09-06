<?php

namespace App\Form;

use App\Entity\Seance;
use App\Entity\Skill;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SeanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idCoach',IntegerType::class,[
                'attr' => ['class' => 'form-control' , 'placeholder' => 'Duree',
                    ]
            ])
            ->add('date',TextType::class,[
                'attr' => ['class' => 'form-control' , 'placeholder' => 'Date',
                    ]
            ])
            ->add('duree',IntegerType::class,[
                'attr' => ['class' => 'form-control' , 'placeholder' => 'Duree',
                    ]
            ])
            ->add('nbrParticipants',IntegerType::class,[
                'attr' => ['class' => 'form-control' , 'placeholder' => 'Participants',
                    ]
            ])
            ->add('prix',IntegerType::class,[
                'attr' => ['class' => 'form-control' , 'placeholder' => 'Prix',
                    ]
            ])
            ->add('skills')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Seance::class,
        ]);
    }
}
