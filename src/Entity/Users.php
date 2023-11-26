<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="Users")
 * @ORM\Entity
 */
class Users
{
    /**
     * @var int
     *
     * @ORM\Column(name="UserID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Role", type="string", length=50, nullable=true)
     */
    private $role;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CreationDate", type="datetime", nullable=true)
     */
    private $creationdate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="LastLoginDate", type="datetime", nullable=true)
     */
    private $lastlogindate;

    public function getUserid(): ?int
    {
        return $this->userid;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): static
    {
        $this->password = $password;

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

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): static
    {
        $this->role = $role;

        return $this;
    }

    public function getCreationdate(): ?\DateTimeInterface
    {
        return $this->creationdate;
    }

    public function setCreationdate(?\DateTimeInterface $creationdate): static
    {
        $this->creationdate = $creationdate;

        return $this;
    }

    public function getLastlogindate(): ?\DateTimeInterface
    {
        return $this->lastlogindate;
    }

    public function setLastlogindate(?\DateTimeInterface $lastlogindate): static
    {
        $this->lastlogindate = $lastlogindate;

        return $this;
    }


}
