<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Coupons
 *
 * @ORM\Table(name="Coupons", uniqueConstraints={@ORM\UniqueConstraint(name="CouponCode", columns={"CouponCode"})})
 * @ORM\Entity
 */
class Coupons
{
    /**
     * @var int
     *
     * @ORM\Column(name="CouponID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $couponid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CouponCode", type="string", length=50, nullable=true)
     */
    private $couponcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DiscountAmount", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $discountamount;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ExpiryDate", type="datetime", nullable=true)
     */
    private $expirydate;

    public function getCouponid(): ?int
    {
        return $this->couponid;
    }

    public function getCouponcode(): ?string
    {
        return $this->couponcode;
    }

    public function setCouponcode(?string $couponcode): static
    {
        $this->couponcode = $couponcode;

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

    public function getDiscountamount(): ?string
    {
        return $this->discountamount;
    }

    public function setDiscountamount(?string $discountamount): static
    {
        $this->discountamount = $discountamount;

        return $this;
    }

    public function getExpirydate(): ?\DateTimeInterface
    {
        return $this->expirydate;
    }

    public function setExpirydate(?\DateTimeInterface $expirydate): static
    {
        $this->expirydate = $expirydate;

        return $this;
    }


}
