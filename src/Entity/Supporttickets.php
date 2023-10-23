<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Supporttickets
 *
 * @ORM\Table(name="SupportTickets", indexes={@ORM\Index(name="CustomerID", columns={"CustomerID"})})
 * @ORM\Entity
 */
class Supporttickets
{
    /**
     * @var int
     *
     * @ORM\Column(name="TicketID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ticketid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Subject", type="string", length=255, nullable=true)
     */
    private $subject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Message", type="text", length=65535, nullable=true)
     */
    private $message;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateSubmitted", type="datetime", nullable=true)
     */
    private $datesubmitted;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Status", type="string", length=50, nullable=true)
     */
    private $status;

    /**
     * @var \Customers
     *
     * @ORM\ManyToOne(targetEntity="Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CustomerID", referencedColumnName="CustomerID")
     * })
     */
    private $customerid;

    public function getTicketid(): ?int
    {
        return $this->ticketid;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): static
    {
        $this->subject = $subject;

        return $this;
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

    public function getDatesubmitted(): ?\DateTimeInterface
    {
        return $this->datesubmitted;
    }

    public function setDatesubmitted(?\DateTimeInterface $datesubmitted): static
    {
        $this->datesubmitted = $datesubmitted;

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

    public function getCustomerid(): ?Customers
    {
        return $this->customerid;
    }

    public function setCustomerid(?Customers $customerid): static
    {
        $this->customerid = $customerid;

        return $this;
    }


}
