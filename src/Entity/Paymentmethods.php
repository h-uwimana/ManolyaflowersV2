<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Paymentmethods
 *
 * @ORM\Table(name="PaymentMethods")
 * @ORM\Entity
 */
class Paymentmethods
{
    /**
     * @var int
     *
     * @ORM\Column(name="PaymentMethodID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paymentmethodid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MethodName", type="string", length=100, nullable=true)
     */
    private $methodname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="IsActive", type="boolean", nullable=true)
     */
    private $isactive;

    public function getPaymentmethodid(): ?int
    {
        return $this->paymentmethodid;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

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
