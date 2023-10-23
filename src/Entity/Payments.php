<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Payments
 *
 * @ORM\Table(name="Payments", indexes={@ORM\Index(name="OrderID", columns={"OrderID"})})
 * @ORM\Entity
 */
class Payments
{
    /**
     * @var int
     *
     * @ORM\Column(name="PaymentID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paymentid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Amount", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $amount;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="PaymentDate", type="datetime", nullable=true)
     */
    private $paymentdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PaymentMethod", type="string", length=50, nullable=true)
     */
    private $paymentmethod;

    /**
     * @var \Orders
     *
     * @ORM\ManyToOne(targetEntity="Orders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="OrderID", referencedColumnName="OrderID")
     * })
     */
    private $orderid;

    public function getPaymentid(): ?int
    {
        return $this->paymentid;
    }

    public function getAmount(): ?string
    {
        return $this->amount;
    }

    public function setAmount(?string $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getPaymentdate(): ?\DateTimeInterface
    {
        return $this->paymentdate;
    }

    public function setPaymentdate(?\DateTimeInterface $paymentdate): static
    {
        $this->paymentdate = $paymentdate;

        return $this;
    }

    public function getPaymentmethod(): ?string
    {
        return $this->paymentmethod;
    }

    public function setPaymentmethod(?string $paymentmethod): static
    {
        $this->paymentmethod = $paymentmethod;

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
