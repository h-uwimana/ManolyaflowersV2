<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Shipments
 *
 * @ORM\Table(name="Shipments", indexes={@ORM\Index(name="OrderID", columns={"OrderID"})})
 * @ORM\Entity
 */
class Shipments
{
    /**
     * @var int
     *
     * @ORM\Column(name="ShipmentID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $shipmentid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ShipDate", type="datetime", nullable=true)
     */
    private $shipdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TrackingNumber", type="string", length=50, nullable=true)
     */
    private $trackingnumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ShippingCarrier", type="string", length=50, nullable=true)
     */
    private $shippingcarrier;

    /**
     * @var \Orders
     *
     * @ORM\ManyToOne(targetEntity="Orders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="OrderID", referencedColumnName="OrderID")
     * })
     */
    private $orderid;

    public function getShipmentid(): ?int
    {
        return $this->shipmentid;
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

    public function getTrackingnumber(): ?string
    {
        return $this->trackingnumber;
    }

    public function setTrackingnumber(?string $trackingnumber): static
    {
        $this->trackingnumber = $trackingnumber;

        return $this;
    }

    public function getShippingcarrier(): ?string
    {
        return $this->shippingcarrier;
    }

    public function setShippingcarrier(?string $shippingcarrier): static
    {
        $this->shippingcarrier = $shippingcarrier;

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
