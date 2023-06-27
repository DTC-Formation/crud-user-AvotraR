<?php

namespace App\components;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\ComponentWithFormTrait;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


#[AsLiveComponent('create_user')]
class CreateCompo extends AbstractController
{
    use DefaultActionTrait;
    use ComponentWithFormTrait;

    #[liveProp(fieldName: 'data')]
    public ?User $user = null;
    #[LiveAction]
    public function save(EntityManagerInterface $entityManager)
    {
        $this->submitForm();

        $user = $this->getFormInstance()->getData();
        $entityManager->persist($user);
        $entityManager->flush();

        $this->addFlash('success', 'is saved!');

    }
    protected function instantiateForm(): FormInterface
    {
        return $this->createForm(UserType::class,$this->user);
    }
}