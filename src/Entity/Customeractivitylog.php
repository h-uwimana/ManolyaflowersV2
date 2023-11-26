<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Customeractivitylog
 *
 * @ORM\Table(name="CustomerActivityLog", indexes={@ORM\Index(name="FK_CustomerActivityLog_Customer", columns={"CustomerID"}), @ORM\Index(name="FK_CustomerActivityLog_Product", columns={"ProductID"}), @ORM\Index(name="FK_CustomerActivityLog_Page", columns={"PageID"})})
 * @ORM\Entity
 */
class Customeractivitylog
{
    /**
     * @var int
     *
     * @ORM\Column(name="ActivityID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $activityid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ActivityType", type="string", length=255, nullable=true)
     */
    private $activitytype;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ActivityDate", type="datetime", nullable=true)
     */
    private $activitydate;

    /**
     * @var \Customers
     *
     * @ORM\ManyToOne(targetEntity="Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CustomerID", referencedColumnName="CustomerID")
     * })
     */
    private $customerid;

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

    public function getActivityid(): ?int
    {
        return $this->activityid;
    }

    public function getActivitytype(): ?string
    {
        return $this->activitytype;
    }

    public function setActivitytype(?string $activitytype): static
    {
        $this->activitytype = $activitytype;

        return $this;
    }

    public function getActivitydate(): ?\DateTimeInterface
    {
        return $this->activitydate;
    }

    public function setActivitydate(?\DateTimeInterface $activitydate): static
    {
        $this->activitydate = $activitydate;

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


}
