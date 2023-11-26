<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Wishlistitems
 *
 * @ORM\Table(name="WishlistItems")
 * @ORM\Entity
 */
class Wishlistitems
{
    /**
     * @var int
     *
     * @ORM\Column(name="WishlistItemID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wishlistitemid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="WishlistID", type="integer", nullable=true)
     */
    private $wishlistid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ProductID", type="integer", nullable=true)
     */
    private $productid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="AddedDate", type="datetime", nullable=true)
     */
    private $addeddate;

    public function getWishlistitemid(): ?int
    {
        return $this->wishlistitemid;
    }

    public function getWishlistid(): ?int
    {
        return $this->wishlistid;
    }

    public function setWishlistid(?int $wishlistid): static
    {
        $this->wishlistid = $wishlistid;

        return $this;
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

    public function getAddeddate(): ?\DateTimeInterface
    {
        return $this->addeddate;
    }

    public function setAddeddate(?\DateTimeInterface $addeddate): static
    {
        $this->addeddate = $addeddate;

        return $this;
    }


}
