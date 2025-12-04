<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $nomproduit = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descriptionproduit = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $prixproduit = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $poidsproduit = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $categorieproduit = null;

    #[ORM\Column(nullable: true)]
    private ?int $stockproduit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomproduit(): ?string
    {
        return $this->nomproduit;
    }

    public function setNomproduit(?string $nomproduit): static
    {
        $this->nomproduit = $nomproduit;

        return $this;
    }

    public function getDescriptionproduit(): ?string
    {
        return $this->descriptionproduit;
    }

    public function setDescriptionproduit(?string $descriptionproduit): static
    {
        $this->descriptionproduit = $descriptionproduit;

        return $this;
    }

    public function getPrixproduit(): ?string
    {
        return $this->prixproduit;
    }

    public function setPrixproduit(?string $prixproduit): static
    {
        $this->prixproduit = $prixproduit;

        return $this;
    }

    public function getPoidsproduit(): ?string
    {
        return $this->poidsproduit;
    }

    public function setPoidsproduit(?string $poidsproduit): static
    {
        $this->poidsproduit = $poidsproduit;

        return $this;
    }

    public function getCategorieproduit(): ?string
    {
        return $this->categorieproduit;
    }

    public function setCategorieproduit(?string $categorieproduit): static
    {
        $this->categorieproduit = $categorieproduit;

        return $this;
    }

    public function getStockproduit(): ?int
    {
        return $this->stockproduit;
    }

    public function setStockproduit(?int $stockproduit): static
    {
        $this->stockproduit = $stockproduit;

        return $this;
    }
}
