<?php

namespace App\components;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\UX\LiveComponent\ValidatableComponentTrait;

#[AsLiveComponent('edit_user')]
final class EditCompo extends AbstractController
{
    use DefaultActionTrait;

    use ValidatableComponentTrait;

    #[LiveProp(['Nom', 'Prenom','Age','Adresse'])]
    #[Assert\Valid]
    public User $user;

    public bool $isSaved = false;

    #[LiveAction]
    public function save(EntityManagerInterface $entityManager)
    {
        $this->validate();

        $this->isSaved = true;
        $entityManager->flush();
    }
}
