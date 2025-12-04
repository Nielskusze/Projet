<?php

namespace App\Entity;

use App\Repository\LignecommandeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LignecommandeRepository::class)]
class Lignecommande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantitécommande = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $prixunitairecommande = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantitécommande(): ?int
    {
        return $this->quantitécommande;
    }

    public function setQuantitécommande(?int $quantitécommande): static
    {
        $this->quantitécommande = $quantitécommande;

        return $this;
    }

    public function getPrixunitairecommande(): ?string
    {
        return $this->prixunitairecommande;
    }

    public function setPrixunitairecommande(?string $prixunitairecommande): static
    {
        $this->prixunitairecommande = $prixunitairecommande;

        return $this;
    }
}
