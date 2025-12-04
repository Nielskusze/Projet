<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivraisonRepository::class)]
class Livraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $modelivraison = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $prixlivraison = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $delai = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModelivraison(): ?string
    {
        return $this->modelivraison;
    }

    public function setModelivraison(?string $modelivraison): static
    {
        $this->modelivraison = $modelivraison;

        return $this;
    }

    public function getPrixlivraison(): ?string
    {
        return $this->prixlivraison;
    }

    public function setPrixlivraison(?string $prixlivraison): static
    {
        $this->prixlivraison = $prixlivraison;

        return $this;
    }

    public function getDelai(): ?string
    {
        return $this->delai;
    }

    public function setDelai(?string $delai): static
    {
        $this->delai = $delai;

        return $this;
    }
}
