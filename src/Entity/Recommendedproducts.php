<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recommendedproducts
 *
 * @ORM\Table(name="RecommendedProducts", indexes={@ORM\Index(name="FK_RecommendedProducts_RecommendedProduct", columns={"RecommendedProductID"}), @ORM\Index(name="FK_RecommendedProducts_Product", columns={"ProductID"})})
 * @ORM\Entity
 */
class Recommendedproducts
{
    /**
     * @var int
     *
     * @ORM\Column(name="RecommendationID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $recommendationid;

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
     * @var \Products
     *
     * @ORM\ManyToOne(targetEntity="Products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="RecommendedProductID", referencedColumnName="ProductID")
     * })
     */
    private $recommendedproductid;

    public function getRecommendationid(): ?int
    {
        return $this->recommendationid;
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

    public function getRecommendedproductid(): ?Products
    {
        return $this->recommendedproductid;
    }

    public function setRecommendedproductid(?Products $recommendedproductid): static
    {
        $this->recommendedproductid = $recommendedproductid;

        return $this;
    }


}
