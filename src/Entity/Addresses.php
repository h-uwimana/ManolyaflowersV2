<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Addresses
 *
 * @ORM\Table(name="Addresses", indexes={@ORM\Index(name="FK_Addresses_User", columns={"UserID"})})
 * @ORM\Entity
 */
class Addresses
{
    /**
     * @var int
     *
     * @ORM\Column(name="AddressID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $addressid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AddressType", type="string", length=255, nullable=true)
     */
    private $addresstype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AddressLine1", type="string", length=255, nullable=true)
     */
    private $addressline1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AddressLine2", type="string", length=255, nullable=true)
     */
    private $addressline2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="City", type="string", length=100, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="State", type="string", length=100, nullable=true)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PostalCode", type="string", length=20, nullable=true)
     */
    private $postalcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Country", type="string", length=100, nullable=true)
     */
    private $country;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UserID", referencedColumnName="UserID")
     * })
     */
    private $userid;

    public function getAddressid(): ?int
    {
        return $this->addressid;
    }

    public function getAddresstype(): ?string
    {
        return $this->addresstype;
    }

    public function setAddresstype(?string $addresstype): static
    {
        $this->addresstype = $addresstype;

        return $this;
    }

    public function getAddressline1(): ?string
    {
        return $this->addressline1;
    }

    public function setAddressline1(?string $addressline1): static
    {
        $this->addressline1 = $addressline1;

        return $this;
    }

    public function getAddressline2(): ?string
    {
        return $this->addressline2;
    }

    public function setAddressline2(?string $addressline2): static
    {
        $this->addressline2 = $addressline2;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): static
    {
        $this->state = $state;

        return $this;
    }

    public function getPostalcode(): ?string
    {
        return $this->postalcode;
    }

    public function setPostalcode(?string $postalcode): static
    {
        $this->postalcode = $postalcode;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): static
    {
        $this->country = $country;

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
