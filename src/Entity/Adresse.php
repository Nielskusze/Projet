<?php

namespace App\Entity;

use App\Repository\AdresseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdresseRepository::class)]
class Adresse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $telephoneadressse = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nomadresse = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $codepostaladresse = null;

    #[ORM\ManyToOne(inversedBy: 'adresses')]
    private ?Client $client = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTelephoneadressse(): ?string
    {
        return $this->telephoneadressse;
    }

    public function setTelephoneadressse(?string $telephoneadressse): static
    {
        $this->telephoneadressse = $telephoneadressse;

        return $this;
    }

    public function getNomadresse(): ?string
    {
        return $this->nomadresse;
    }

    public function setNomadresse(?string $nomadresse): static
    {
        $this->nomadresse = $nomadresse;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodepostaladresse(): ?string
    {
        return $this->codepostaladresse;
    }

    public function setCodepostaladresse(?string $codepostaladresse): static
    {
        $this->codepostaladresse = $codepostaladresse;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): static
    {
        $this->client = $client;

        return $this;
    }
}
