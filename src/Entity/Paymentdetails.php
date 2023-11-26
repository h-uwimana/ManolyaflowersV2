<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Paymentdetails
 *
 * @ORM\Table(name="PaymentDetails", indexes={@ORM\Index(name="FK_PaymentDetails_PaymentMethod", columns={"PaymentMethodID"}), @ORM\Index(name="FK_PaymentDetails_Order", columns={"OrderID"})})
 * @ORM\Entity
 */
class Paymentdetails
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
     * @ORM\Column(name="Status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var \Orders
     *
     * @ORM\ManyToOne(targetEntity="Orders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="OrderID", referencedColumnName="OrderID")
     * })
     */
    private $orderid;

    /**
     * @var \Paymentmethods
     *
     * @ORM\ManyToOne(targetEntity="Paymentmethods")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PaymentMethodID", referencedColumnName="PaymentMethodID")
     * })
     */
    private $paymentmethodid;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

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

    public function getPaymentmethodid(): ?Paymentmethods
    {
        return $this->paymentmethodid;
    }

    public function setPaymentmethodid(?Paymentmethods $paymentmethodid): static
    {
        $this->paymentmethodid = $paymentmethodid;

        return $this;
    }


}
