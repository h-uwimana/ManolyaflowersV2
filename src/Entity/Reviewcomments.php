<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reviewcomments
 *
 * @ORM\Table(name="ReviewComments", indexes={@ORM\Index(name="FK_ReviewComments_Review", columns={"ReviewID"})})
 * @ORM\Entity
 */
class Reviewcomments
{
    /**
     * @var int
     *
     * @ORM\Column(name="CommentID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="UserID", type="integer", nullable=true)
     */
    private $userid;

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
     * @var \Reviews
     *
     * @ORM\ManyToOne(targetEntity="Reviews")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ReviewID", referencedColumnName="ReviewID")
     * })
     */
    private $reviewid;

    public function getCommentid(): ?int
    {
        return $this->commentid;
    }

    public function getUserid(): ?int
    {
        return $this->userid;
    }

    public function setUserid(?int $userid): static
    {
        $this->userid = $userid;

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

    public function getReviewid(): ?Reviews
    {
        return $this->reviewid;
    }

    public function setReviewid(?Reviews $reviewid): static
    {
        $this->reviewid = $reviewid;

        return $this;
    }


}
