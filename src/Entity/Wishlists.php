<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wishlists
 *
 * @ORM\Table(name="Wishlists")
 * @ORM\Entity
 */
class Wishlists
{
    /**
     * @var int
     *
     * @ORM\Column(name="WishlistID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wishlistid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CustomerID", type="integer", nullable=true)
     */
    private $customerid;

    public function getWishlistid(): ?int
    {
        return $this->wishlistid;
    }

    public function getCustomerid(): ?int
    {
        return $this->customerid;
    }

    public function setCustomerid(?int $customerid): static
    {
        $this->customerid = $customerid;

        return $this;
    }


}
