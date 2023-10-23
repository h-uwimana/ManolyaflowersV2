<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Customers
 *
 * @ORM\Table(name="Customers", uniqueConstraints={@ORM\UniqueConstraint(name="Email", columns={"Email"})})
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
     * @ORM\Column(name="FirstName", type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LastName", type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PasswordHash", type="string", length=255, nullable=true)
     */
    private $passwordhash;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateRegistered", type="datetime", nullable=true)
     */
    private $dateregistered;

    public function getCustomerid(): ?int
    {
        return $this->customerid;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): static
    {
        $this->lastname = $lastname;

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

    public function getPasswordhash(): ?string
    {
        return $this->passwordhash;
    }

    public function setPasswordhash(?string $passwordhash): static
    {
        $this->passwordhash = $passwordhash;

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

    public function getDateregistered(): ?\DateTimeInterface
    {
        return $this->dateregistered;
    }

    public function setDateregistered(?\DateTimeInterface $dateregistered): static
    {
        $this->dateregistered = $dateregistered;

        return $this;
    }


}
