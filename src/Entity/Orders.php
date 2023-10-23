<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="Orders", indexes={@ORM\Index(name="CustomerID", columns={"CustomerID"}), @ORM\Index(name="ShippingMethodID", columns={"ShippingMethodID"}), @ORM\Index(name="CouponID", columns={"CouponID"})})
 * @ORM\Entity
 */
class Orders
{
    /**
     * @var int
     *
     * @ORM\Column(name="OrderID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="OrderDate", type="datetime", nullable=true)
     */
    private $orderdate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ShipDate", type="datetime", nullable=true)
     */
    private $shipdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ShippingAddress", type="string", length=255, nullable=true)
     */
    private $shippingaddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ShippingCity", type="string", length=255, nullable=true)
     */
    private $shippingcity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ShippingPostalCode", type="string", length=10, nullable=true)
     */
    private $shippingpostalcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ShippingCountry", type="string", length=255, nullable=true)
     */
    private $shippingcountry;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Total", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $total;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OrderStatus", type="string", length=50, nullable=true)
     */
    private $orderstatus;

    /**
     * @var \Coupons
     *
     * @ORM\ManyToOne(targetEntity="Coupons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CouponID", referencedColumnName="CouponID")
     * })
     */
    private $couponid;

    /**
     * @var \Customers
     *
     * @ORM\ManyToOne(targetEntity="Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CustomerID", referencedColumnName="CustomerID")
     * })
     */
    private $customerid;

    /**
     * @var \Shippingmethods
     *
     * @ORM\ManyToOne(targetEntity="Shippingmethods")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ShippingMethodID", referencedColumnName="ShippingMethodID")
     * })
     */
    private $shippingmethodid;

    public function getOrderid(): ?int
    {
        return $this->orderid;
    }

    public function getOrderdate(): ?\DateTimeInterface
    {
        return $this->orderdate;
    }

    public function setOrderdate(?\DateTimeInterface $orderdate): static
    {
        $this->orderdate = $orderdate;

        return $this;
    }

    public function getShipdate(): ?\DateTimeInterface
    {
        return $this->shipdate;
    }

    public function setShipdate(?\DateTimeInterface $shipdate): static
    {
        $this->shipdate = $shipdate;

        return $this;
    }

    public function getShippingaddress(): ?string
    {
        return $this->shippingaddress;
    }

    public function setShippingaddress(?string $shippingaddress): static
    {
        $this->shippingaddress = $shippingaddress;

        return $this;
    }

    public function getShippingcity(): ?string
    {
        return $this->shippingcity;
    }

    public function setShippingcity(?string $shippingcity): static
    {
        $this->shippingcity = $shippingcity;

        return $this;
    }

    public function getShippingpostalcode(): ?string
    {
        return $this->shippingpostalcode;
    }

    public function setShippingpostalcode(?string $shippingpostalcode): static
    {
        $this->shippingpostalcode = $shippingpostalcode;

        return $this;
    }

    public function getShippingcountry(): ?string
    {
        return $this->shippingcountry;
    }

    public function setShippingcountry(?string $shippingcountry): static
    {
        $this->shippingcountry = $shippingcountry;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(?string $total): static
    {
        $this->total = $total;

        return $this;
    }

    public function getOrderstatus(): ?string
    {
        return $this->orderstatus;
    }

    public function setOrderstatus(?string $orderstatus): static
    {
        $this->orderstatus = $orderstatus;

        return $this;
    }

    public function getCouponid(): ?Coupons
    {
        return $this->couponid;
    }

    public function setCouponid(?Coupons $couponid): static
    {
        $this->couponid = $couponid;

        return $this;
    }

    public function getCustomerid(): ?Customers
    {
        return $this->customerid;
    }

    public function setCustomerid(?Customers $customerid): static
    {
        $this->customerid = $customerid;

        return $this;
    }

    public function getShippingmethodid(): ?Shippingmethods
    {
        return $this->shippingmethodid;
    }

    public function setShippingmethodid(?Shippingmethods $shippingmethodid): static
    {
        $this->shippingmethodid = $shippingmethodid;

        return $this;
    }


}
