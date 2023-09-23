<?php

namespace App\Entity;

use App\Repository\OrderLineRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderLineRepository::class)]
class OrderLine
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'orderLines')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Order $oderlist = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOderlist(): ?Order
    {
        return $this->oderlist;
    }

    public function setOderlist(?Order $oderlist): static
    {
        $this->oderlist = $oderlist;

        return $this;
    }
}
