<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reviews
 *
 * @ORM\Table(name="Reviews")
 * @ORM\Entity
 */
class Reviews
{
    /**
     * @var int
     *
     * @ORM\Column(name="ReviewID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reviewid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ProductID", type="integer", nullable=true)
     */
    private $productid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CustomerID", type="integer", nullable=true)
     */
    private $customerid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Rating", type="integer", nullable=true)
     */
    private $rating;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ReviewDate", type="datetime", nullable=true)
     */
    private $reviewdate;

    public function getReviewid(): ?int
    {
        return $this->reviewid;
    }

    public function getProductid(): ?int
    {
        return $this->productid;
    }

    public function setProductid(?int $productid): static
    {
        $this->productid = $productid;

        return $this;
    }

    public function getCustomerid(): ?int
    {
        return $this->customerid;
    }

    public function setCustomerid(?int $customerid): static
    {
        $this->customerid = $customerid;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): static
    {
        $this->rating = $rating;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): static
    {
        $this->comment = $comment;

        return $this;
    }

    public function getReviewdate(): ?\DateTimeInterface
    {
        return $this->reviewdate;
    }

    public function setReviewdate(?\DateTimeInterface $reviewdate): static
    {
        $this->reviewdate = $reviewdate;

        return $this;
    }


}
