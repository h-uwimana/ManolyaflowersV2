<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productimages
 *
 * @ORM\Table(name="ProductImages")
 * @ORM\Entity
 */
class Productimages
{
    /**
     * @var int
     *
     * @ORM\Column(name="ImageID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $imageid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ProductID", type="integer", nullable=true)
     */
    private $productid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ImagePath", type="string", length=255, nullable=true)
     */
    private $imagepath;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AltText", type="string", length=255, nullable=true)
     */
    private $alttext;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IsMainImage", type="boolean", nullable=true)
     */
    private $ismainimage;

    public function getImageid(): ?int
    {
        return $this->imageid;
    }

    public function getProductid(): ?int
    {
        return $this->productid;
    }

    public function setProductid(?int $productid): static
    {
        $this->productid = $productid;

        return $this;
    }

    public function getImagepath(): ?string
    {
        return $this->imagepath;
    }

    public function setImagepath(?string $imagepath): static
    {
        $this->imagepath = $imagepath;

        return $this;
    }

    public function getAlttext(): ?string
    {
        return $this->alttext;
    }

    public function setAlttext(?string $alttext): static
    {
        $this->alttext = $alttext;

        return $this;
    }

    public function isIsmainimage(): ?bool
    {
        return $this->ismainimage;
    }

    public function setIsmainimage(?bool $ismainimage): static
    {
        $this->ismainimage = $ismainimage;

        return $this;
    }


}
