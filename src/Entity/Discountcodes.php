<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Discountcodes
 *
 * @ORM\Table(name="DiscountCodes")
 * @ORM\Entity
 */
class Discountcodes
{
    /**
     * @var int
     *
     * @ORM\Column(name="DiscountCodeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $discountcodeid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Code", type="string", length=50, nullable=true)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DiscountAmount", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $discountamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MinimumOrderAmount", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $minimumorderamount;

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
     * @var int|null
     *
     * @ORM\Column(name="UsageLimit", type="integer", nullable=true)
     */
    private $usagelimit;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IsActive", type="boolean", nullable=true)
     */
    private $isactive;

    public function getDiscountcodeid(): ?int
    {
        return $this->discountcodeid;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;

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

    public function getMinimumorderamount(): ?string
    {
        return $this->minimumorderamount;
    }

    public function setMinimumorderamount(?string $minimumorderamount): static
    {
        $this->minimumorderamount = $minimumorderamount;

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

    public function getUsagelimit(): ?int
    {
        return $this->usagelimit;
    }

    public function setUsagelimit(?int $usagelimit): static
    {
        $this->usagelimit = $usagelimit;

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
