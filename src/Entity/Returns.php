<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Returns
 *
 * @ORM\Table(name="Returns", indexes={@ORM\Index(name="FK_Returns_Order", columns={"OrderID"})})
 * @ORM\Entity
 */
class Returns
{
    /**
     * @var int
     *
     * @ORM\Column(name="ReturnID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $returnid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ReturnDate", type="datetime", nullable=true)
     */
    private $returndate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ReturnReason", type="text", length=65535, nullable=true)
     */
    private $returnreason;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ReturnStatus", type="string", length=255, nullable=true)
     */
    private $returnstatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RefundAmount", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $refundamount;

    /**
     * @var \Orders
     *
     * @ORM\ManyToOne(targetEntity="Orders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="OrderID", referencedColumnName="OrderID")
     * })
     */
    private $orderid;

    public function getReturnid(): ?int
    {
        return $this->returnid;
    }

    public function getReturndate(): ?\DateTimeInterface
    {
        return $this->returndate;
    }

    public function setReturndate(?\DateTimeInterface $returndate): static
    {
        $this->returndate = $returndate;

        return $this;
    }

    public function getReturnreason(): ?string
    {
        return $this->returnreason;
    }

    public function setReturnreason(?string $returnreason): static
    {
        $this->returnreason = $returnreason;

        return $this;
    }

    public function getReturnstatus(): ?string
    {
        return $this->returnstatus;
    }

    public function setReturnstatus(?string $returnstatus): static
    {
        $this->returnstatus = $returnstatus;

        return $this;
    }

    public function getRefundamount(): ?string
    {
        return $this->refundamount;
    }

    public function setRefundamount(?string $refundamount): static
    {
        $this->refundamount = $refundamount;

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
