<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pages
 *
 * @ORM\Table(name="Pages", indexes={@ORM\Index(name="FK_Pages_Author", columns={"AuthorID"})})
 * @ORM\Entity
 */
class Pages
{
    /**
     * @var int
     *
     * @ORM\Column(name="PageID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pageid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Content", type="text", length=65535, nullable=true)
     */
    private $content;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CreationDate", type="datetime", nullable=true)
     */
    private $creationdate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="LastModifiedDate", type="datetime", nullable=true)
     */
    private $lastmodifieddate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Status", type="string", length=50, nullable=true)
     */
    private $status;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AuthorID", referencedColumnName="UserID")
     * })
     */
    private $authorid;

    public function getPageid(): ?int
    {
        return $this->pageid;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getCreationdate(): ?\DateTimeInterface
    {
        return $this->creationdate;
    }

    public function setCreationdate(?\DateTimeInterface $creationdate): static
    {
        $this->creationdate = $creationdate;

        return $this;
    }

    public function getLastmodifieddate(): ?\DateTimeInterface
    {
        return $this->lastmodifieddate;
    }

    public function setLastmodifieddate(?\DateTimeInterface $lastmodifieddate): static
    {
        $this->lastmodifieddate = $lastmodifieddate;

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

    public function getAuthorid(): ?Users
    {
        return $this->authorid;
    }

    public function setAuthorid(?Users $authorid): static
    {
        $this->authorid = $authorid;

        return $this;
    }


}
