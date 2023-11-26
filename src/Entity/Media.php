<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="Media", indexes={@ORM\Index(name="FK_Media_Page", columns={"PageID"})})
 * @ORM\Entity
 */
class Media
{
    /**
     * @var int
     *
     * @ORM\Column(name="MediaID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mediaid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="URL", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Type", type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="UploadDate", type="datetime", nullable=true)
     */
    private $uploaddate;

    /**
     * @var \Pages
     *
     * @ORM\ManyToOne(targetEntity="Pages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PageID", referencedColumnName="PageID")
     * })
     */
    private $pageid;

    public function getMediaid(): ?int
    {
        return $this->mediaid;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): static
    {
        $this->url = $url;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getUploaddate(): ?\DateTimeInterface
    {
        return $this->uploaddate;
    }

    public function setUploaddate(?\DateTimeInterface $uploaddate): static
    {
        $this->uploaddate = $uploaddate;

        return $this;
    }

    public function getPageid(): ?Pages
    {
        return $this->pageid;
    }

    public function setPageid(?Pages $pageid): static
    {
        $this->pageid = $pageid;

        return $this;
    }


}
