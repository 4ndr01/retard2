<?php

namespace App\Entity;

use App\Repository\ExcuseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExcuseRepository::class)]
class Excuse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $motif = null;

    #[ORM\Column(length: 255)]
    private ?string $destinataire = null;

    #[ORM\Column(length: 255)]
    private ?string $activite = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: Types::BLOB)]
    private $utilisee = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): static
    {
        $this->motif = $motif;

        return $this;
    }

    public function getDestinataire(): ?string
    {
        return $this->destinataire;
    }

    public function setDestinataire(string $destinataire): static
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    public function getActivite(): ?string
    {
        return $this->activite;
    }

    public function setActivite(string $activite): static
    {
        $this->activite = $activite;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getUtilisee()
    {
        return $this->utilisee;
    }

    public function setUtilisee($utilisee): static
    {
        $this->utilisee = $utilisee;

        return $this;
    }
}
