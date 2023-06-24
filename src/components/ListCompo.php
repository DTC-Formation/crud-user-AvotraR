<?php

namespace App\components;

use App\Repository\UserRepository;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[AsLiveComponent('list_user')]
final class ListCompo extends AbstractController{
    use DefaultActionTrait;

    public function __construct(private UserRepository $userRepository)
    {
    }

    /**
     * @return array<array-key, Post>
     */
    public function getUsers(): array
    {
        return $this->userRepository->findAll();
    }
}