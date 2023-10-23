<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="Products", indexes={@ORM\Index(name="CategoryID", columns={"CategoryID"})})
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
     * @ORM\Column(name="ProductName", type="string", length=255, nullable=true)
     */
    private $productname;

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
     * @ORM\Column(name="Stock", type="integer", nullable=true)
     */
    private $stock;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ImageURL", type="string", length=255, nullable=true)
     */
    private $imageurl;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateAdded", type="datetime", nullable=true)
     */
    private $dateadded;

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

    public function getProductname(): ?string
    {
        return $this->productname;
    }

    public function setProductname(?string $productname): static
    {
        $this->productname = $productname;

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

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(?int $stock): static
    {
        $this->stock = $stock;

        return $this;
    }

    public function getImageurl(): ?string
    {
        return $this->imageurl;
    }

    public function setImageurl(?string $imageurl): static
    {
        $this->imageurl = $imageurl;

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
