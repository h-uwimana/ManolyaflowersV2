<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suppliers
 *
 * @ORM\Table(name="Suppliers")
 * @ORM\Entity
 */
class Suppliers
{
    /**
     * @var int
     *
     * @ORM\Column(name="SupplierID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $supplierid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SupplierName", type="string", length=255, nullable=true)
     */
    private $suppliername;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ContactName", type="string", length=255, nullable=true)
     */
    private $contactname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="City", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PostalCode", type="string", length=10, nullable=true)
     */
    private $postalcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Phone", type="string", length=20, nullable=true)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="string", length=255, nullable=true)
     */
    private $email;

    public function getSupplierid(): ?int
    {
        return $this->supplierid;
    }

    public function getSuppliername(): ?string
    {
        return $this->suppliername;
    }

    public function setSuppliername(?string $suppliername): static
    {
        $this->suppliername = $suppliername;

        return $this;
    }

    public function getContactname(): ?string
    {
        return $this->contactname;
    }

    public function setContactname(?string $contactname): static
    {
        $this->contactname = $contactname;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): static
    {
        $this->address = $address;

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

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }


}
