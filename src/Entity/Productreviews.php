<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Productreviews
 *
 * @ORM\Table(name="ProductReviews", indexes={@ORM\Index(name="CustomerID", columns={"CustomerID"}), @ORM\Index(name="ProductID", columns={"ProductID"})})
 * @ORM\Entity
 */
class Productreviews
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
     * @ORM\Column(name="DateAdded", type="datetime", nullable=true)
     */
    private $dateadded;

    /**
     * @var \Products
     *
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ProductID", referencedColumnName="ProductID")
     * })
     */
    private $productid;

    /**
     * @var \Customers
     *
     * @ORM\ManyToOne(targetEntity="Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CustomerID", referencedColumnName="CustomerID")
     * })
     */
    private $customerid;

    public function getReviewid(): ?int
    {
        return $this->reviewid;
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

    public function getDateadded(): ?\DateTimeInterface
    {
        return $this->dateadded;
    }

    public function setDateadded(?\DateTimeInterface $dateadded): static
    {
        $this->dateadded = $dateadded;

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
