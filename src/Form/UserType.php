<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'prenom.nom@domaine.com'
                ]
            ])
            ->add('roles', ChoiceType::class, [
                'required' => false,
                'multiple' => true,
                'expanded' =>true,
                'choices' => [
                    // 'super admin' => 'ROLE_SUPER_ADMIN',
                    'Administrateur' => 'ROLE_ADMIN',
                    'Utilisateur' => 'ROLE_USER'
                ]
            ])
            // ->add('password')
            ->add('nom')
            ->add('prenom')
            ->add('tel')
            // ->add('img1', FileType::class, [
            //     'required' => false,
            //     'label' => 'Photo principale',
            //     'mapped' => false,
            //     'help' => 'png, jpg, jpeg ou jp2 - 1 Mo maximum',
            //     'constraints' => [
            //         new Image([
            //             'maxSize' => '1024k',
            //             'mimeTypes' => [
            //                 'image/png',
            //                 'image/jpg',
            //                 'image/jpeg',
            //                 'image/jp2'
            //             ],
            //             'mimeTypesMessage' => 'Merci de sélectionner une image au format PNG, JPG, JPEG ou JP2'
            //         ])
            //     ]
            // ])
            ->add('civilite')
            ->add('adresse')
            ->add('code_postal')
            ->add('ville')
            ->add('date_naissance', DateType::class, [
                'widget' => 'choice',
                'years' => range(1970, 2021)
            ])
            ->add('valider', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
