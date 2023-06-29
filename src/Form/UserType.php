<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
<<<<<<< HEAD
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
=======
>>>>>>> 03cac5210b637b523cf1e5268619f4499407c9f9
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
<<<<<<< HEAD
            ->add('Nom',TextType::class)
            ->add('Prenom',TextType::class)
            ->add('Age',NumberType::class)
            ->add('Adresse',TextType::class)
=======
            ->add('Nom')
            ->add('prenom')
            ->add('CIN')
            ->add('addresse')
>>>>>>> 03cac5210b637b523cf1e5268619f4499407c9f9
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
