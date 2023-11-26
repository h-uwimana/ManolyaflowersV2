<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Shoppingcarts
 *
 * @ORM\Table(name="ShoppingCarts", indexes={@ORM\Index(name="FK_ShoppingCarts_Customer", columns={"CustomerID"})})
 * @ORM\Entity
 */
class Shoppingcarts
{
    /**
     * @var int
     *
     * @ORM\Column(name="CartID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cartid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CartStatus", type="string", length=255, nullable=true)
     */
    private $cartstatus;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CreationDate", type="datetime", nullable=true)
     */
    private $creationdate;

    /**
     * @var \Customers
     *
     * @ORM\ManyToOne(targetEntity="Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CustomerID", referencedColumnName="CustomerID")
     * })
     */
    private $customerid;

    public function getCartid(): ?int
    {
        return $this->cartid;
    }

    public function getCartstatus(): ?string
    {
        return $this->cartstatus;
    }

    public function setCartstatus(?string $cartstatus): static
    {
        $this->cartstatus = $cartstatus;

        return $this;
    }

    public function getCreationdate(): ?\DateTimeInterface
    {
        return $this->creationdate;
    }

    public function setCreationdate(?\DateTimeInterface $creationdate): static
    {
        $this->creationdate = $creationdate;

        return $this;
    }

    public function getCustomerid(): ?Customers
    {
        return $this->customerid;
    }

    public function setCustomerid(?Customers $customerid): static
    {
        $this->customerid = $customerid;

        return $this;
    }


}
