<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('Nom',TextType::class,[
            'attr'=>[
                "class"=>"nom-input",
                "placeholder" => "Nom"
            ]
        ])
        ->add('Prenom',TextType::class,[
            'attr'=>[
                "class"=>"nom",
                "placeholder" => "Prenom"
            ]
        ])
        ->add('Age',NumberType::class,[
            'attr'=>[
                "class"=>"age-input",
                "placeholder" => "Age"
            ]
        ])
        ->add('Adresse',TextType::class,[
            'attr'=>[
                "class"=>"adresse-input",
                "placeholder" => "Adresse"
            ]
        ])
        ->add('height',NumberType::class,[
            'attr'=>[
                "class"=>"height-input",
                "placeholder" => "Height ffff"
            ]
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
