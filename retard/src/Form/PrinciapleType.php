<?php

namespace App\Form;

use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use function Sodium\add;
use App\Validator\Constraints\OnlyOneNotBlank;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
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
                    'Grève' => 'Grève',
                    'Météo' => 'Météo',
                ],
                'placeholder' => 'Choisissez votre sujet',
            ])
            ->add('Excuses', ChoiceType::class, [
                'required'=> false,

                'choices' => [
                    ' Retard Scolaire par Spectacle Street' => `Je soussigné , élève en classe de Première, souhaite présenter mes excuses pour mon retard à l'école ce matin. Mon retard est dû à des circonstances inattendues, car en me rendant à l'école, j'ai croisé un spectacle de rue absolument captivant mettant en scène des artistes de rue talentueux. Leurs performances m'ont retenu plus longtemps que prévu, car je ne pouvais détacher mes yeux de leur incroyable créativité. Je comprends l'importance de la ponctualité scolaire et je m'efforcerai de faire en sorte que cela ne se reproduise pas à l'avenir.`,
                    'Retard Scolaire par Mendiant Philosophe' => 'En retard suite à une conjonction de circonstances insidieuses. Encheminé vers le lieu de labeur, une rencontre fortuite avec un vénérable mendiant m\'a conduit dans une discussion philosophique des plus captivantes, prolongeant mes pas bien au-delà de l\'heure attendue. La dialectique enivrante de ses mots a volé mon attention, me retenant dans une réflexion profonde jusqu\'à mon arrivée à Rennes. Je sollicite votre indulgence pour ce retard inusité, empreint d\'un enseignement imprévu.',
                    'Retard Scolaire dû à Vortex' => 'En retard suite à une série inopinée de circonstances cosmiques. Alors que je m \' efforçais de suivre les méandres du temps et de l \'espace pour arriver à l \'heure, j \'ai été pris dans un vortex temporel impromptu, me catapultant brièvement dans l \'ère des dinosaures. Après m \'être échappé de l \'ère jurassique avec l \'aide d \'un gentil stégosaure, j \'ai enfin atteint Rennes. Pardonnez mon excentrique voyage, ô vénérables enseignants, pour ce retard inhabituel.',
                    'Retard dû à l\'Essaim Apicole' =>'En retard suite à un enchevêtrement de circonstances inattendues. Alors que je m\'apprêtais à quitter mon domicile pour me rendre au travail, un énorme essaim d\'abeilles a envahi mon jardin. Prise de compassion pour ces précieuses créatures, j\'ai dû improviser en tant qu\'apicultrice impromptue pour les guider vers un nouveau refuge sûr. J’ai finalement quitté mon rôle de gardienne des abeilles pour rejoindre mes obligations professionnelles. Veuillez excuser ce retard occasionné par cette mission inattendue au service de la nature.',
                    'Retard Scolaire par Découverte Souterraine'=>'Je soussigné , est en retard suite à une séance d\'exploration impromptue. Alors que je me rendais à l\'école, j\'ai découvert par inadvertance un passage souterrain secret, dissimulé sous un vieux chêne majestueux. Intrigué par cette trouvaille, j\'ai entrepris de l\'explorer, guidé par la lueur mystérieuse qui émanait de l\'obscurité. Les méandres souterrains m\'ont plongé dans une aventure inattendue, et c\'est ainsi que je suis finalement arrivé à l\'école, émerveillé par cette découverte insolite. ',
                    ' Retard au Travail par Carnaval'=>'Je soussigné , souhaite présenter mes plus sincères excuses pour mon retard inattendu au travail ce matin. En effet, en chemin vers le bureau, j\'ai été confrontée à un incident de circulation dû à une parade de carnaval improbable. Des artistes costumés et des chars décorés ont envahi la rue, bloquant la circulation de manière inattendue. Mes tentatives de contourner cette situation se sont révélées infructueuses, et je n\'ai pu rejoindre le bureau qu\'avec un retard imprévu. Je vous prie de bien vouloir accepter mes excuses pour cette situation exceptionnelle.'



                ],
            ])
            ->add('Vos_excuses', \Symfony\Component\Form\Extension\Core\Type\TextType::class,[
                'required'=> false,


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
