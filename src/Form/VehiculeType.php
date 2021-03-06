<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Vehicule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class VehiculeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('marque', TextType::class, [
                'required' => true,
                'label' => 'Marque',
                'attr' => [
                    'placeholder' => ''
                ]
            ])
            ->add('modele', TextType::class, [
                'required' => true,
                'label' => 'Modèle',
                'attr' => [
                    'placeholder' => ''
                ]
            ])
            ->add('immatriculation', TextType::class,[
                'required' => true,
                'label' => 'Immatriculation',
                'attr' => [
                    'placeholder' => 'Ex: AA-123-BB'
                ]
            ])
            ->add('carburant', TextType::class, [
                'required' => true,
                'label' => 'Carburant',
                'attr' => [
                    'placeholder' => ''
                ] 
            ])
            ->add('nombre_place', IntegerType::class, [
                'required' => true,
                'label' => 'Nombre de places',
                'attr' => [
                    'placeholder' => '',
                    'min' => 1,
                    'max' => 10,
                ]
            ])
            ->add('couleur', TextType::class, [
                'required' => true,
                'label' => 'Couleur',
                'attr' => [
                    'placeholder' => ''
                ] 
            ])
            ->add('img1', FileType::class, [
                'required' => true,
                'label' => 'Photo n°1',
                'mapped' => false,
                'help' => 'png, jpg, jpeg ou jp2 - 1 Mo maximum',
                'constraints' => [
                    new Image([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/png',
                            'image/jpg',
                            'image/jpeg',
                            'image/jp2'
                        ],
                        'mimeTypesMessage' => 'Merci de sélectionner une image au format PNG, JPG, JPEG ou JP2'
                    ])
                ]
            ])
            ->add('img2', FileType::class, [
                'required' => true,
                'label' => 'Photo n°2',
                'mapped' => false,
                'help' => 'png, jpg, jpeg ou jp2 - 1 Mo maximum',
                'constraints' => [
                    new Image([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/png',
                            'image/jpg',
                            'image/jpeg',
                            'image/jp2'
                        ],
                        'mimeTypesMessage' => 'Merci de sélectionner une image au format PNG, JPG, JPEG ou JP2'
                    ])
                ]
            ])
            ->add('prix', IntegerType::class, [
                'required' => true,
                'label' => 'Prix journalier indicatif (€)',
                'attr' => [
                    'placeholder' => '',
                    'min' => 0,
                    'max' => 250
                ]
            ])
            ->add('disponibilite', ChoiceType::class,[
                'required' => true,
                'label' => 'Disponible',
                'choices' => [
                    'Oui' => true,
                    'Non' => false
                ],
                'expanded' => true
            ])
            ->add('type_vehicule', TextType::class, [
                'required' => true,
                'label' => 'Type de véhicule',
                'attr' => [
                    'placeholder' => 'Ex: Camping-car'
                ] 
            ])
            ->add('valider', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Vehicule::class,
        ]);
    }
}
