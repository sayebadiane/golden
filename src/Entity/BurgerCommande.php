<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\BurgerCommandeRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: BurgerCommandeRepository::class)]
#[ApiResource()]
class BurgerCommande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    #[Groups(['commande-post', 'commande-get'])]
    #[Assert\Positive(message:"quantite doit etre possitif")]
    private $quantite=1;

    #[ORM\ManyToOne(targetEntity: Burger::class, inversedBy: 'burgerCommandes')]
    #[Groups(['commande-post', 'commande-get'])]
    private $burger;

    #[ORM\ManyToOne(targetEntity: Commande::class, inversedBy: 'burgerCommandes')]
    private $commande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getBurger(): ?Burger
    {
        return $this->burger;
    }

    public function setBurger(?Burger $burger): self
    {
        $this->burger = $burger;

        return $this;
    }

    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): self
    {
        $this->commande = $commande;

        return $this;
    }
}
