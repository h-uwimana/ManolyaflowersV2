<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="Orders", indexes={@ORM\Index(name="FK_Orders_Customer", columns={"CustomerID"}), @ORM\Index(name="FK_Orders_BillingAddress", columns={"BillingAddressID"}), @ORM\Index(name="FK_Orders_ShippingAddress", columns={"ShippingAddressID"})})
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
     * @var string|null
     *
     * @ORM\Column(name="TotalAmount", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $totalamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var \Addresses
     *
     * @ORM\ManyToOne(targetEntity="Addresses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="BillingAddressID", referencedColumnName="AddressID")
     * })
     */
    private $billingaddressid;

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
     * @var \Addresses
     *
     * @ORM\ManyToOne(targetEntity="Addresses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ShippingAddressID", referencedColumnName="AddressID")
     * })
     */
    private $shippingaddressid;

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

    public function getTotalamount(): ?string
    {
        return $this->totalamount;
    }

    public function setTotalamount(?string $totalamount): static
    {
        $this->totalamount = $totalamount;

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

    public function getBillingaddressid(): ?Addresses
    {
        return $this->billingaddressid;
    }

    public function setBillingaddressid(?Addresses $billingaddressid): static
    {
        $this->billingaddressid = $billingaddressid;

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

    public function getShippingaddressid(): ?Addresses
    {
        return $this->shippingaddressid;
    }

    public function setShippingaddressid(?Addresses $shippingaddressid): static
    {
        $this->shippingaddressid = $shippingaddressid;

        return $this;
    }


}
