<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Orderitems
 *
 * @ORM\Table(name="OrderItems", indexes={@ORM\Index(name="OrderID", columns={"OrderID"}), @ORM\Index(name="ProductID", columns={"ProductID"})})
 * @ORM\Entity
 */
class Orderitems
{
    /**
     * @var int
     *
     * @ORM\Column(name="OrderItemID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderitemid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PriceEach", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $priceeach;

    /**
     * @var \Products
     *
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ProductID", referencedColumnName="ProductID")
     * })
     */
    private $productid;

    /**
     * @var \Orders
     *
     * @ORM\ManyToOne(targetEntity="Orders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="OrderID", referencedColumnName="OrderID")
     * })
     */
    private $orderid;

    public function getOrderitemid(): ?int
    {
        return $this->orderitemid;
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

    public function getPriceeach(): ?string
    {
        return $this->priceeach;
    }

    public function setPriceeach(?string $priceeach): static
    {
        $this->priceeach = $priceeach;

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

    public function getOrderid(): ?Orders
    {
        return $this->orderid;
    }

    public function setOrderid(?Orders $orderid): static
    {
        $this->orderid = $orderid;

        return $this;
    }


}
