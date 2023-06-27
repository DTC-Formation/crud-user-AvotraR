<?php

namespace App\components;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\ValidatableComponentTrait;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[AsLiveComponent('edit_user')]
final class EditCompo extends AbstractController
{
    use DefaultActionTrait;

    use ValidatableComponentTrait;

    #[LiveProp(['Nom', 'Prenom','Age','Adresse'])]
    #[Assert\Valid]
    public User $user;
    public $isEdit = false;
    public bool $isSaved = false;

    public function __construct(private UserRepository $userRepository)
    {
    }
    
    #[LiveAction]
    public function save(EntityManagerInterface $entityManager)
    {
        $this->validate();

        $this->isSaved = true;
        $entityManager->flush();
        
        $this->addFlash('edit', 'is edited!');
    }
    public function form(): FormInterface
    {
        return $this->createForm(UserType::class,$this->user);
    }
    #[LiveAction]
    public function Edit(){
        $this->isEdit = true;
    }

   
}
