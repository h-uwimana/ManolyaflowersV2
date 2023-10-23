<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Shippingmethods
 *
 * @ORM\Table(name="ShippingMethods")
 * @ORM\Entity
 */
class Shippingmethods
{
    /**
     * @var int
     *
     * @ORM\Column(name="ShippingMethodID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $shippingmethodid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MethodName", type="string", length=255, nullable=true)
     */
    private $methodname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cost", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $cost;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EstimatedDeliveryTime", type="string", length=255, nullable=true)
     */
    private $estimateddeliverytime;

    public function getShippingmethodid(): ?int
    {
        return $this->shippingmethodid;
    }

    public function getMethodname(): ?string
    {
        return $this->methodname;
    }

    public function setMethodname(?string $methodname): static
    {
        $this->methodname = $methodname;

        return $this;
    }

    public function getCost(): ?string
    {
        return $this->cost;
    }

    public function setCost(?string $cost): static
    {
        $this->cost = $cost;

        return $this;
    }

    public function getEstimateddeliverytime(): ?string
    {
        return $this->estimateddeliverytime;
    }

    public function setEstimateddeliverytime(?string $estimateddeliverytime): static
    {
        $this->estimateddeliverytime = $estimateddeliverytime;

        return $this;
    }


}
