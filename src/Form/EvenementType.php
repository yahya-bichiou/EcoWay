<?php

namespace App\Form;
use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('localisation')
            ->add('contact')
            ->add('date_debut', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'La date de début est obligatoire.']),
                    new Regex([
                        'pattern' => "/^\d{4}-\d{2}-\d{2}$/",
                        'message' => "Le format de la date doit être YYYY-MM-DD."
                    ]),
                ],
                'attr' => [
                    'placeholder' => 'YYYY-MM-DD',
                ],
            ])
            ->add('recomponse')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
