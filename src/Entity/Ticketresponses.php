<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ticketresponses
 *
 * @ORM\Table(name="TicketResponses", indexes={@ORM\Index(name="TicketID", columns={"TicketID"}), @ORM\Index(name="RespondedBy", columns={"RespondedBy"})})
 * @ORM\Entity
 */
class Ticketresponses
{
    /**
     * @var int
     *
     * @ORM\Column(name="ResponseID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $responseid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Message", type="text", length=65535, nullable=true)
     */
    private $message;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateResponded", type="datetime", nullable=true)
     */
    private $dateresponded;

    /**
     * @var \Supporttickets
     *
     * @ORM\ManyToOne(targetEntity="Supporttickets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TicketID", referencedColumnName="TicketID")
     * })
     */
    private $ticketid;

    /**
     * @var \Customers
     *
     * @ORM\ManyToOne(targetEntity="Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="RespondedBy", referencedColumnName="CustomerID")
     * })
     */
    private $respondedby;

    public function getResponseid(): ?int
    {
        return $this->responseid;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getDateresponded(): ?\DateTimeInterface
    {
        return $this->dateresponded;
    }

    public function setDateresponded(?\DateTimeInterface $dateresponded): static
    {
        $this->dateresponded = $dateresponded;

        return $this;
    }

    public function getTicketid(): ?Supporttickets
    {
        return $this->ticketid;
    }

    public function setTicketid(?Supporttickets $ticketid): static
    {
        $this->ticketid = $ticketid;

        return $this;
    }

    public function getRespondedby(): ?Customers
    {
        return $this->respondedby;
    }

    public function setRespondedby(?Customers $respondedby): static
    {
        $this->respondedby = $respondedby;

        return $this;
    }


}
