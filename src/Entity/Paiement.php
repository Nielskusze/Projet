<?php

namespace App\Entity;

use App\Repository\PaiementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaiementRepository::class)]
class Paiement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $typepaiement = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $montantpaiement = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $datepaiement = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $statutpaiement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypepaiement(): ?string
    {
        return $this->typepaiement;
    }

    public function setTypepaiement(?string $typepaiement): static
    {
        $this->typepaiement = $typepaiement;

        return $this;
    }

    public function getMontantpaiement(): ?string
    {
        return $this->montantpaiement;
    }

    public function setMontantpaiement(?string $montantpaiement): static
    {
        $this->montantpaiement = $montantpaiement;

        return $this;
    }

    public function getDatepaiement(): ?\DateTime
    {
        return $this->datepaiement;
    }

    public function setDatepaiement(?\DateTime $datepaiement): static
    {
        $this->datepaiement = $datepaiement;

        return $this;
    }

    public function getStatutpaiement(): ?string
    {
        return $this->statutpaiement;
    }

    public function setStatutpaiement(?string $statutpaiement): static
    {
        $this->statutpaiement = $statutpaiement;

        return $this;
    }
}
