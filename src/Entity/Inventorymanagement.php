<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventorymanagement
 *
 * @ORM\Table(name="InventoryManagement", indexes={@ORM\Index(name="FK_InventoryManagement_Product", columns={"ProductID"}), @ORM\Index(name="FK_InventoryManagement_Variant", columns={"VariantID"})})
 * @ORM\Entity
 */
class Inventorymanagement
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
     * @var int|null
     *
     * @ORM\Column(name="ReorderLevel", type="integer", nullable=true)
     */
    private $reorderlevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ReorderQuantity", type="integer", nullable=true)
     */
    private $reorderquantity;

    /**
     * @var \Productvariants
     *
     * @ORM\ManyToOne(targetEntity="Productvariants")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="VariantID", referencedColumnName="VariantID")
     * })
     */
    private $variantid;

    /**
     * @var \Products
     *
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ProductID", referencedColumnName="ProductID")
     * })
     */
    private $productid;

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

    public function getReorderlevel(): ?int
    {
        return $this->reorderlevel;
    }

    public function setReorderlevel(?int $reorderlevel): static
    {
        $this->reorderlevel = $reorderlevel;

        return $this;
    }

    public function getReorderquantity(): ?int
    {
        return $this->reorderquantity;
    }

    public function setReorderquantity(?int $reorderquantity): static
    {
        $this->reorderquantity = $reorderquantity;

        return $this;
    }

    public function getVariantid(): ?Productvariants
    {
        return $this->variantid;
    }

    public function setVariantid(?Productvariants $variantid): static
    {
        $this->variantid = $variantid;

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
