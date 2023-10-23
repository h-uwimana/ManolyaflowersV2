<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attributes
 *
 * @ORM\Table(name="Attributes")
 * @ORM\Entity
 */
class Attributes
{
    /**
     * @var int
     *
     * @ORM\Column(name="AttributeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $attributeid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AttributeName", type="string", length=255, nullable=true)
     */
    private $attributename;

    public function getAttributeid(): ?int
    {
        return $this->attributeid;
    }

    public function getAttributename(): ?string
    {
        return $this->attributename;
    }

    public function setAttributename(?string $attributename): static
    {
        $this->attributename = $attributename;

        return $this;
    }


}
