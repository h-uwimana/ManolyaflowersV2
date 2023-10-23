<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Returns
 *
 * @ORM\Table(name="Returns", indexes={@ORM\Index(name="OrderID", columns={"OrderID"}), @ORM\Index(name="ProductID", columns={"ProductID"})})
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
     * @var string|null
     *
     * @ORM\Column(name="Reason", type="text", length=65535, nullable=true)
     */
    private $reason;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateReturned", type="datetime", nullable=true)
     */
    private $datereturned;

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
     * @var \Products
     *
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ProductID", referencedColumnName="ProductID")
     * })
     */
    private $productid;

    public function getReturnid(): ?int
    {
        return $this->returnid;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): static
    {
        $this->reason = $reason;

        return $this;
    }

    public function getDatereturned(): ?\DateTimeInterface
    {
        return $this->datereturned;
    }

    public function setDatereturned(?\DateTimeInterface $datereturned): static
    {
        $this->datereturned = $datereturned;

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

    public function getProductid(): ?Products
    {
        return $this->productid;
    }

    public function setProductid(?Products $productid): static
    {
        $this->productid = $productid;

        return $this;
    }


}
