<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/{id?}', name: 'app_user_index', methods: ['GET', 'POST'])]
    public function index(?User $user): Response
    {
        return $this->render('user/index.html.twig',[
            'user' => $user
        ]);
    }

}
