<?php
namespace App\Form;

use App\Entity\Produit;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Validator\Constraints as Assert;

class Produit1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('qualite', ChoiceType::class, [
                'choices' => [
                    'Standard' => 'Standard',
                    'Premium' => 'Premium',
                    'Bio' => 'Bio',
                ],
                'placeholder' => 'Sélectionner une qualité', 
                'attr' => ['class' => 'form-select'],
            ])
            ->add('quantite_disponible')
            ->add('prix')
            // Utilisation correcte de DateTimeType avec option 'widget'
            ->add('date_ajout', DateTimeType::class, [
                'widget' => 'single_text',  // Affichage sous forme de champ texte unique
                'html5' => true,            // Autorise le format de date natif HTML5
                'attr' => ['class' => 'form-control'],  // Classe CSS pour personnaliser
            ])
            ->add('image', FileType::class, [
                'label' => 'Image du produit',
                'required' => false,
            ])
            ->add('categorie', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nom',
                'placeholder' => 'Sélectionner une catégorie',
                'attr' => ['class' => 'form-select'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
