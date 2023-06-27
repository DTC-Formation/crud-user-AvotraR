<?php

namespace App\components;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\ComponentWithFormTrait;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


#[AsLiveComponent('delete')]
class Delete extends AbstractController
{
    use DefaultActionTrait;
    public ?User $user = null;
   
    public function __construct(private UserRepository $userRepository)
    {
    }

    #[LiveAction]
    public function deleteUser(User $user)
    {
            $this->userRepository->remove($user, true);
            $this->addFlash('danger', 'User is deleted!');
    }
}