<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Productvariants
 *
 * @ORM\Table(name="ProductVariants", indexes={@ORM\Index(name="FK_ProductVariants_Product", columns={"ProductID"})})
 * @ORM\Entity
 */
class Productvariants
{
    /**
     * @var int
     *
     * @ORM\Column(name="VariantID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $variantid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VariantName", type="string", length=255, nullable=true)
     */
    private $variantname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AdditionalPrice", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $additionalprice;

    /**
     * @var int|null
     *
     * @ORM\Column(name="StockQuantity", type="integer", nullable=true)
     */
    private $stockquantity;

    /**
     * @var \Products
     *
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ProductID", referencedColumnName="ProductID")
     * })
     */
    private $productid;

    public function getVariantid(): ?int
    {
        return $this->variantid;
    }

    public function getVariantname(): ?string
    {
        return $this->variantname;
    }

    public function setVariantname(?string $variantname): static
    {
        $this->variantname = $variantname;

        return $this;
    }

    public function getAdditionalprice(): ?string
    {
        return $this->additionalprice;
    }

    public function setAdditionalprice(?string $additionalprice): static
    {
        $this->additionalprice = $additionalprice;

        return $this;
    }

    public function getStockquantity(): ?int
    {
        return $this->stockquantity;
    }

    public function setStockquantity(?int $stockquantity): static
    {
        $this->stockquantity = $stockquantity;

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
