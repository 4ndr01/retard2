<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PrinciapleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Prenom')
            ->add('Sujet', ChoiceType::class,[
                'choices' =>[
                    'Docteur' => 'Docteur',
                    'greve' => 'grève',
                    'meteo' => 'météo',
                ],
                'placeholder' => 'Choisissez votre sujet',
            ])
            ->add('Choix', ChoiceType::class, [
                'choices' => [
                    'Choix 1' => 'choix1',
                    'Choix 2' => 'choix2',
                    'Choix 3' => 'choix3',
                ],
                'placeholder' => 'Choisissez votre phrase',
            ])

            ->add('Envoyer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
