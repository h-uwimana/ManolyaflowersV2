<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="Products", indexes={@ORM\Index(name="FK_Products_Category", columns={"CategoryID"})})
 * @ORM\Entity
 */
class Products
{
    /**
     * @var int
     *
     * @ORM\Column(name="ProductID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Price", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $price;

    /**
     * @var int|null
     *
     * @ORM\Column(name="StockQuantity", type="integer", nullable=true)
     */
    private $stockquantity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Status", type="string", length=50, nullable=true)
     */
    private $status;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CategoryID", referencedColumnName="CategoryID")
     * })
     */
    private $categoryid;

    public function getProductid(): ?int
    {
        return $this->productid;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): static
    {
        $this->price = $price;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getCategoryid(): ?Categories
    {
        return $this->categoryid;
    }

    public function setCategoryid(?Categories $categoryid): static
    {
        $this->categoryid = $categoryid;

        return $this;
    }


}
