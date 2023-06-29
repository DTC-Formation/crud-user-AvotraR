<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

<<<<<<< HEAD
    #[ORM\Column(length: 255)]
    private ?string $Prenom = null;

    #[ORM\Column]
    private ?int $Age = null;

    #[ORM\Column(length: 255)]
    private ?string $Adresse = null;
=======
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(length: 100)]
    private ?string $CIN = null;

    #[ORM\Column(length: 150)]
    private ?string $Addresse = null;
>>>>>>> 03cac5210b637b523cf1e5268619f4499407c9f9

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

<<<<<<< HEAD
    public function setNom(string $Nom): static
=======
    public function setNom(string $Nom): self
>>>>>>> 03cac5210b637b523cf1e5268619f4499407c9f9
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
<<<<<<< HEAD
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): static
    {
        $this->Prenom = $Prenom;
=======
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;
>>>>>>> 03cac5210b637b523cf1e5268619f4499407c9f9

        return $this;
    }

<<<<<<< HEAD
    public function getAge(): ?int
    {
        return $this->Age;
    }

    public function setAge(int $Age): static
    {
        $this->Age = $Age;
=======
    public function getCIN(): ?string
    {
        return $this->CIN;
    }

    public function setCIN(string $CIN): self
    {
        $this->CIN = $CIN;
>>>>>>> 03cac5210b637b523cf1e5268619f4499407c9f9

        return $this;
    }

<<<<<<< HEAD
    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): static
    {
        $this->Adresse = $Adresse;
=======
    public function getAddresse(): ?string
    {
        return $this->Addresse;
    }

    public function setAddresse(string $Addresse): self
    {
        $this->Addresse = $Addresse;
>>>>>>> 03cac5210b637b523cf1e5268619f4499407c9f9

        return $this;
    }
}
