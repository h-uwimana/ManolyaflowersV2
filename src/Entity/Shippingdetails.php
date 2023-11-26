<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shippingdetails
 *
 * @ORM\Table(name="ShippingDetails", indexes={@ORM\Index(name="FK_ShippingDetails_Order", columns={"OrderID"})})
 * @ORM\Entity
 */
class Shippingdetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="ShippingID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $shippingid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="City", type="string", length=100, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PostalCode", type="string", length=20, nullable=true)
     */
    private $postalcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Country", type="string", length=100, nullable=true)
     */
    private $country;

    /**
     * @var \Orders
     *
     * @ORM\ManyToOne(targetEntity="Orders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="OrderID", referencedColumnName="OrderID")
     * })
     */
    private $orderid;

    public function getShippingid(): ?int
    {
        return $this->shippingid;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getPostalcode(): ?string
    {
        return $this->postalcode;
    }

    public function setPostalcode(?string $postalcode): static
    {
        $this->postalcode = $postalcode;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function getOrderid(): ?Orders
    {
        return $this->orderid;
    }

    public function setOrderid(?Orders $orderid): static
    {
        $this->orderid = $orderid;

        return $this;
    }


}
