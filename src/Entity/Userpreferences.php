<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userpreferences
 *
 * @ORM\Table(name="UserPreferences", indexes={@ORM\Index(name="FK_UserPreferences_User", columns={"UserID"})})
 * @ORM\Entity
 */
class Userpreferences
{
    /**
     * @var int
     *
     * @ORM\Column(name="PreferenceID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $preferenceid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PreferenceType", type="string", length=255, nullable=true)
     */
    private $preferencetype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PreferenceValue", type="string", length=255, nullable=true)
     */
    private $preferencevalue;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UserID", referencedColumnName="UserID")
     * })
     */
    private $userid;

    public function getPreferenceid(): ?int
    {
        return $this->preferenceid;
    }

    public function getPreferencetype(): ?string
    {
        return $this->preferencetype;
    }

    public function setPreferencetype(?string $preferencetype): static
    {
        $this->preferencetype = $preferencetype;

        return $this;
    }

    public function getPreferencevalue(): ?string
    {
        return $this->preferencevalue;
    }

    public function setPreferencevalue(?string $preferencevalue): static
    {
        $this->preferencevalue = $preferencevalue;

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
