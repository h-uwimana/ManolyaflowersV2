<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productattributes
 *
 * @ORM\Table(name="ProductAttributes", indexes={@ORM\Index(name="AttributeID", columns={"AttributeID"}), @ORM\Index(name="ProductID", columns={"ProductID"})})
 * @ORM\Entity
 */
class Productattributes
{
    /**
     * @var int
     *
     * @ORM\Column(name="ProductAttributeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productattributeid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Value", type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @var \Attributes
     *
     * @ORM\ManyToOne(targetEntity="Attributes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AttributeID", referencedColumnName="AttributeID")
     * })
     */
    private $attributeid;

    /**
     * @var \Products
     *
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ProductID", referencedColumnName="ProductID")
     * })
     */
    private $productid;

    public function getProductattributeid(): ?int
    {
        return $this->productattributeid;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getAttributeid(): ?Attributes
    {
        return $this->attributeid;
    }

    public function setAttributeid(?Attributes $attributeid): static
    {
        $this->attributeid = $attributeid;

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
