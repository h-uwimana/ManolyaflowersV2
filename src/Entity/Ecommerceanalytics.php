<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ecommerceanalytics
 *
 * @ORM\Table(name="EcommerceAnalytics", indexes={@ORM\Index(name="FK_EcommerceAnalytics_Product", columns={"ProductID"}), @ORM\Index(name="FK_EcommerceAnalytics_Page", columns={"PageID"}), @ORM\Index(name="FK_EcommerceAnalytics_Customer", columns={"CustomerID"})})
 * @ORM\Entity
 */
class Ecommerceanalytics
{
    /**
     * @var int
     *
     * @ORM\Column(name="AnalyticsID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $analyticsid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EventName", type="string", length=255, nullable=true)
     */
    private $eventname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EventValue", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $eventvalue;

    /**
     * @var \Pages
     *
     * @ORM\ManyToOne(targetEntity="Pages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PageID", referencedColumnName="PageID")
     * })
     */
    private $pageid;

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

    public function getAnalyticsid(): ?int
    {
        return $this->analyticsid;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getEventname(): ?string
    {
        return $this->eventname;
    }

    public function setEventname(?string $eventname): static
    {
        $this->eventname = $eventname;

        return $this;
    }

    public function getEventvalue(): ?string
    {
        return $this->eventvalue;
    }

    public function setEventvalue(?string $eventvalue): static
    {
        $this->eventvalue = $eventvalue;

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
