<?php
namespace App\Manager;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserManager extends AbstractController
{
    Private EntityManagerInterface $entityManager;
    
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function save(User $user,bool $flush){
        $this->entityManager->persist($user);
        if($flush){
            $this->entityManager->flush();
        }
    }
    public function remove(User $user,bool $flush){
        $this->entityManager->remove($user);
        if($flush){
            $this->entityManager->flush();
        }
    }
}