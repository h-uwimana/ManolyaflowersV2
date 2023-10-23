<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Inventory
 *
 * @ORM\Table(name="Inventory", indexes={@ORM\Index(name="ProductID", columns={"ProductID"}), @ORM\Index(name="SupplierID", columns={"SupplierID"})})
 * @ORM\Entity
 */
class Inventory
{
    /**
     * @var int
     *
     * @ORM\Column(name="InventoryID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $inventoryid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PurchasePrice", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $purchaseprice;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateReceived", type="datetime", nullable=true)
     */
    private $datereceived;

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
     * @var \Suppliers
     *
     * @ORM\ManyToOne(targetEntity="Suppliers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SupplierID", referencedColumnName="SupplierID")
     * })
     */
    private $supplierid;

    public function getInventoryid(): ?int
    {
        return $this->inventoryid;
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

    public function getPurchaseprice(): ?string
    {
        return $this->purchaseprice;
    }

    public function setPurchaseprice(?string $purchaseprice): static
    {
        $this->purchaseprice = $purchaseprice;

        return $this;
    }

    public function getDatereceived(): ?\DateTimeInterface
    {
        return $this->datereceived;
    }

    public function setDatereceived(?\DateTimeInterface $datereceived): static
    {
        $this->datereceived = $datereceived;

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

    public function getSupplierid(): ?Suppliers
    {
        return $this->supplierid;
    }

    public function setSupplierid(?Suppliers $supplierid): static
    {
        $this->supplierid = $supplierid;

        return $this;
    }


}
