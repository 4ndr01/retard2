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
                    'Choix1' => `Je`,
                    'Choix2' => 'test',
                    'Choix3' => 'En retard suite à une série inopinée de circonstances cosmiques. Alors que je m \' efforçais de suivre les méandres du temps et de l \'espace pour arriver à l \'heure, j \'ai été pris dans un vortex temporel impromptu, me catapultant brièvement dans l \'ère des dinosaures. Après m \'être échappé de l \'ère jurassique avec l \'aide d \'un gentil stégosaure, j \'ai enfin atteint Rennes. Pardonnez mon excentrique voyage, ô vénérables enseignants, pour ce retard inhabituel. Fait à Rennes le 20-09-2023.
',

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
