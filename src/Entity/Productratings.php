<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productratings
 *
 * @ORM\Table(name="ProductRatings", indexes={@ORM\Index(name="FK_ProductRatings_Review", columns={"ReviewID"})})
 * @ORM\Entity
 */
class Productratings
{
    /**
     * @var int
     *
     * @ORM\Column(name="RatingID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ratingid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="QualityRating", type="integer", nullable=true)
     */
    private $qualityrating;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DeliveryRating", type="integer", nullable=true)
     */
    private $deliveryrating;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ServiceRating", type="integer", nullable=true)
     */
    private $servicerating;

    /**
     * @var \Reviews
     *
     * @ORM\ManyToOne(targetEntity="Reviews")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ReviewID", referencedColumnName="ReviewID")
     * })
     */
    private $reviewid;

    public function getRatingid(): ?int
    {
        return $this->ratingid;
    }

    public function getQualityrating(): ?int
    {
        return $this->qualityrating;
    }

    public function setQualityrating(?int $qualityrating): static
    {
        $this->qualityrating = $qualityrating;

        return $this;
    }

    public function getDeliveryrating(): ?int
    {
        return $this->deliveryrating;
    }

    public function setDeliveryrating(?int $deliveryrating): static
    {
        $this->deliveryrating = $deliveryrating;

        return $this;
    }

    public function getServicerating(): ?int
    {
        return $this->servicerating;
    }

    public function setServicerating(?int $servicerating): static
    {
        $this->servicerating = $servicerating;

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
