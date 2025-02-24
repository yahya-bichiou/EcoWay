<?php
namespace App\Form; // Assure-toi que le namespace correspond à ton projet

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Produit;
use App\Entity\Categorie;

class Produit1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, [
            'constraints' => [
                new Assert\NotBlank(['message' => 'Le nom du produit est obligatoire.']),
                new Assert\Length([
                    'min' => 3,
                    'max' => 100,
                    'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères.',
                    'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères.',
                ]),
            ],
        ])
        ->add('description', TextareaType::class, [
            'constraints' => [
                new Assert\NotBlank(['message' => 'La description ne peut pas être vide.']),
                new Assert\Length([
                    'min' => 10,
                    'minMessage' => 'La description doit contenir au moins {{ limit }} caractères.',
                ]),
            ],
        ])
        ->add('qualite', ChoiceType::class, [
            'choices' => [
                'Standard' => 'Standard',
                'Premium' => 'Premium',
                'Bio' => 'Bio',
            ],
            'placeholder' => 'Sélectionner une qualité',
            'attr' => ['class' => 'form-select'],
            'constraints' => [
                new Assert\NotBlank(['message' => 'La qualité du produit est requise.']),
                new Assert\Choice([
                    'choices' => ['Standard', 'Premium', 'Bio'],
                    'message' => 'Choisissez une qualité valide : Standard, Premium ou Bio.',
                ]),
            ],
        ])
        ->add('quantiteDisponible', IntegerType::class, [
            'constraints' => [
                new Assert\NotNull(['message' => 'La quantité disponible est obligatoire.']),
                new Assert\PositiveOrZero(['message' => 'La quantité ne peut pas être négative.']),
            ],
        ])
        ->add('prix', MoneyType::class, [
            'currency' => 'EUR', // Change selon la devise utilisée
            'constraints' => [
                new Assert\NotNull(['message' => 'Le prix est obligatoire.']),
                new Assert\Positive(['message' => 'Le prix doit être supérieur à zéro.']),
            ],
        ])
        ->add('dateAjout', DateTimeType::class, [
            'widget' => 'single_text',
            'html5' => true,
            'attr' => ['class' => 'form-control'],
            'constraints' => [
                new Assert\NotNull(['message' => "La date d'ajout est requise."]),
                new Assert\Type([
                    'type' => \DateTimeInterface::class,
                    'message' => 'La date doit être valide.',
                ]),
            ],
        ])
        ->add('image', FileType::class, [
            'label' => 'Image du produit',
            'required' => false,
            'mapped' => false, // Ne pas lier directement au champ de l'entité
            'constraints' => [
                new Assert\File([
                    'maxSize' => '4M',
                    'mimeTypes' => ['image/jpeg', 'image/png'],
                    'mimeTypesMessage' => 'Veuillez uploader une image JPG ou PNG valide.',
                ]),
            ],
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
