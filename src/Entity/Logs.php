<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Logs
 *
 * @ORM\Table(name="Logs", indexes={@ORM\Index(name="FK_Logs_User", columns={"UserID"})})
 * @ORM\Entity
 */
class Logs
{
    /**
     * @var int
     *
     * @ORM\Column(name="LogID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $logid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Action", type="string", length=255, nullable=true)
     */
    private $action;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Timestamp", type="datetime", nullable=true)
     */
    private $timestamp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Details", type="text", length=65535, nullable=true)
     */
    private $details;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UserID", referencedColumnName="UserID")
     * })
     */
    private $userid;

    public function getLogid(): ?int
    {
        return $this->logid;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): static
    {
        $this->action = $action;

        return $this;
    }

    public function getTimestamp(): ?\DateTimeInterface
    {
        return $this->timestamp;
    }

    public function setTimestamp(?\DateTimeInterface $timestamp): static
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(?string $details): static
    {
        $this->details = $details;

        return $this;
    }

    public function getUserid(): ?Users
    {
        return $this->userid;
    }

    public function setUserid(?Users $userid): static
    {
        $this->userid = $userid;

        return $this;
    }


}
