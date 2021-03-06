<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Rollerworks\Component\PasswordStrength\Validator\Constraints\PasswordStrength;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civilite', TextType::class)
            ->add('prenom', TextType::class)
            ->add('nom', TextType::class)
            ->add('date_naissance', DateType::class, [
                'widget' => 'choice',
                'label' => 'Date de naissance',
                'years' => range(1970, 2021)
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'placeholder' => 'Ex.: prenom.nom@domaine.com'
                ]
            ])
            ->add('tel', TextType::class, [
                'label' => 'Tél',
            ])
            // ->add('img1', FileType::class, [
            //     'required' => true,
            //     'label' => 'Photo de profil',
            //     'mapped' => false,
            //     'help' => 'png, jpeg, pdf - 2 Mo maximum',
            //     'constraints' => [
            //         new Image([
            //             'maxSize' => '2048k',
            //             'mimeTypes' => [
            //                 'image/png',
            //                 'image/jpg',
            //                 'image/jpeg',
            //                 'image/jp2',
            //                 'application/pdf'
            //             ],
            //             'mimeTypesMessage' => 'Merci de sélectionner un fichier au format PNG, JPG, JPEG, JP2 ou PDF'
            //         ])
            //     ]
            // ])
            ->add('adresse', TextType::class)
            ->add('code_postal', TextType::class)
            ->add('ville', TextType::class)
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'label' => 'J\'accepte les termes et conditions',
                'constraints' => [
                    new IsTrue([
                        'message' => 'Vous devez accepter nos termes et conditions.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'label' => 'Mot de passe',
                'attr' => [
                    'placeholder' => '••••••••'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Merci de renseigner un mot de passe',
                    ]),
                    // new Length([
                    //     'min' => 6,
                    //     'minMessage' => 'Votre mot de passe doit contenir au moins {{ limit }} caractères',
                    //     // max length allowed by Symfony for security reasons
                    //     'max' => 4096,
                    // ]),
                    new PasswordStrength([
                        'minLength' => 8,
                        'tooShortMessage' => 'Le mot de passe doit contenir au moins {{length}} caractères',
                        'minStrength' => 4,
                        'message' => 'Le mot de passe doit contenir au moins une lettre minuscule, une lettre majuscule, un chiffre et un caractère spécial'
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}