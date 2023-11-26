<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Orderstatushistory
 *
 * @ORM\Table(name="OrderStatusHistory", indexes={@ORM\Index(name="FK_OrderStatusHistory_Order", columns={"OrderID"})})
 * @ORM\Entity
 */
class Orderstatushistory
{
    /**
     * @var int
     *
     * @ORM\Column(name="StatusHistoryID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $statushistoryid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Status", type="string", length=50, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="StatusDate", type="datetime", nullable=true)
     */
    private $statusdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="StatusDescription", type="text", length=65535, nullable=true)
     */
    private $statusdescription;

    /**
     * @var \Orders
     *
     * @ORM\ManyToOne(targetEntity="Orders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="OrderID", referencedColumnName="OrderID")
     * })
     */
    private $orderid;

    public function getStatushistoryid(): ?int
    {
        return $this->statushistoryid;
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

    public function getStatusdate(): ?\DateTimeInterface
    {
        return $this->statusdate;
    }

    public function setStatusdate(?\DateTimeInterface $statusdate): static
    {
        $this->statusdate = $statusdate;

        return $this;
    }

    public function getStatusdescription(): ?string
    {
        return $this->statusdescription;
    }

    public function setStatusdescription(?string $statusdescription): static
    {
        $this->statusdescription = $statusdescription;

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
