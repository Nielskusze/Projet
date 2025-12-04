<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $nomclient = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $prenomclient = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $emailclient = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mdpclient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomclient(): ?string
    {
        return $this->nomclient;
    }

    public function setNomclient(?string $nomclient): static
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    public function getPrenomclient(): ?string
    {
        return $this->prenomclient;
    }

    public function setPrenomclient(?string $prenomclient): static
    {
        $this->prenomclient = $prenomclient;

        return $this;
    }

    public function getEmailclient(): ?string
    {
        return $this->emailclient;
    }

    public function setEmailclient(?string $emailclient): static
    {
        $this->emailclient = $emailclient;

        return $this;
    }

    public function getMdpclient(): ?string
    {
        return $this->mdpclient;
    }

    public function setMdpclient(?string $mdpclient): static
    {
        $this->mdpclient = $mdpclient;

        return $this;
    }
}
