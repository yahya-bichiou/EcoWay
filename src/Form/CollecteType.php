<?php

namespace App\Form;

use App\Entity\Collecte;
use App\Entity\Depot;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CollecteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('quantite')
            ->add('date', null, [
                'widget' => 'single_text',
            ])
            ->add('responsable')
            ->add('depot', EntityType::class, [
                'class' => Depot::class,
                'choice_label' => 'id', // Use the depot's ID as the choice label
                'attr' => ['style' => 'display: none;'], // Hide the field
            ])
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Collecte::class,
        ]);
    }
}
