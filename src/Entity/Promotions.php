<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Promotions
 *
 * @ORM\Table(name="Promotions")
 * @ORM\Entity
 */
class Promotions
{
    /**
     * @var int
     *
     * @ORM\Column(name="PromotionID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $promotionid;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="StartDate", type="datetime", nullable=true)
     */
    private $startdate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="EndDate", type="datetime", nullable=true)
     */
    private $enddate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DiscountType", type="string", length=255, nullable=true)
     */
    private $discounttype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DiscountAmount", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $discountamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MinimumPurchaseAmount", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $minimumpurchaseamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CouponCode", type="string", length=50, nullable=true)
     */
    private $couponcode;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IsActive", type="boolean", nullable=true)
     */
    private $isactive;

    public function getPromotionid(): ?int
    {
        return $this->promotionid;
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

    public function getStartdate(): ?\DateTimeInterface
    {
        return $this->startdate;
    }

    public function setStartdate(?\DateTimeInterface $startdate): static
    {
        $this->startdate = $startdate;

        return $this;
    }

    public function getEnddate(): ?\DateTimeInterface
    {
        return $this->enddate;
    }

    public function setEnddate(?\DateTimeInterface $enddate): static
    {
        $this->enddate = $enddate;

        return $this;
    }

    public function getDiscounttype(): ?string
    {
        return $this->discounttype;
    }

    public function setDiscounttype(?string $discounttype): static
    {
        $this->discounttype = $discounttype;

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

    public function getMinimumpurchaseamount(): ?string
    {
        return $this->minimumpurchaseamount;
    }

    public function setMinimumpurchaseamount(?string $minimumpurchaseamount): static
    {
        $this->minimumpurchaseamount = $minimumpurchaseamount;

        return $this;
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

    public function isIsactive(): ?bool
    {
        return $this->isactive;
    }

    public function setIsactive(?bool $isactive): static
    {
        $this->isactive = $isactive;

        return $this;
    }


}
