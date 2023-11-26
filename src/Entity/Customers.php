<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customers
 *
 * @ORM\Table(name="Customers", indexes={@ORM\Index(name="FK_Customers_User", columns={"UserID"})})
 * @ORM\Entity
 */
class Customers
{
    /**
     * @var int
     *
     * @ORM\Column(name="CustomerID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $customerid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PreferredPaymentMethod", type="string", length=50, nullable=true)
     */
    private $preferredpaymentmethod;

    /**
     * @var int|null
     *
     * @ORM\Column(name="LoyaltyPoints", type="integer", nullable=true)
     */
    private $loyaltypoints;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UserID", referencedColumnName="UserID")
     * })
     */
    private $userid;

    public function getCustomerid(): ?int
    {
        return $this->customerid;
    }

    public function getPreferredpaymentmethod(): ?string
    {
        return $this->preferredpaymentmethod;
    }

    public function setPreferredpaymentmethod(?string $preferredpaymentmethod): static
    {
        $this->preferredpaymentmethod = $preferredpaymentmethod;

        return $this;
    }

    public function getLoyaltypoints(): ?int
    {
        return $this->loyaltypoints;
    }

    public function setLoyaltypoints(?int $loyaltypoints): static
    {
        $this->loyaltypoints = $loyaltypoints;

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
