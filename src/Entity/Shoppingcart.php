<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Shoppingcart
 *
 * @ORM\Table(name="ShoppingCart", indexes={@ORM\Index(name="CustomerID", columns={"CustomerID"}), @ORM\Index(name="ProductID", columns={"ProductID"})})
 * @ORM\Entity
 */
class Shoppingcart
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
     * @var int|null
     *
     * @ORM\Column(name="Quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateAdded", type="datetime", nullable=true)
     */
    private $dateadded;

    /**
     * @var \Customers
     *
     * @ORM\ManyToOne(targetEntity="Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CustomerID", referencedColumnName="CustomerID")
     * })
     */
    private $customerid;

    /**
     * @var \Products
     *
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ProductID", referencedColumnName="ProductID")
     * })
     */
    private $productid;

    public function getCartid(): ?int
    {
        return $this->cartid;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getDateadded(): ?\DateTimeInterface
    {
        return $this->dateadded;
    }

    public function setDateadded(?\DateTimeInterface $dateadded): static
    {
        $this->dateadded = $dateadded;

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

    public function getProductid(): ?Products
    {
        return $this->productid;
    }

    public function setProductid(?Products $productid): static
    {
        $this->productid = $productid;

        return $this;
    }


}
