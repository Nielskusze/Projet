<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $datecommande = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $montantcommande = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $statut = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatecommande(): ?\DateTime
    {
        return $this->datecommande;
    }

    public function setDatecommande(?\DateTime $datecommande): static
    {
        $this->datecommande = $datecommande;

        return $this;
    }

    public function getMontantcommande(): ?string
    {
        return $this->montantcommande;
    }

    public function setMontantcommande(?string $montantcommande): static
    {
        $this->montantcommande = $montantcommande;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }
}
