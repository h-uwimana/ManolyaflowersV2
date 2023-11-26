<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productlabels
 *
 * @ORM\Table(name="ProductLabels")
 * @ORM\Entity
 */
class Productlabels
{
    /**
     * @var int
     *
     * @ORM\Column(name="LabelID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $labelid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LabelName", type="string", length=50, nullable=true)
     */
    private $labelname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LabelColor", type="string", length=20, nullable=true)
     */
    private $labelcolor;

    public function getLabelid(): ?int
    {
        return $this->labelid;
    }

    public function getLabelname(): ?string
    {
        return $this->labelname;
    }

    public function setLabelname(?string $labelname): static
    {
        $this->labelname = $labelname;

        return $this;
    }

    public function getLabelcolor(): ?string
    {
        return $this->labelcolor;
    }

    public function setLabelcolor(?string $labelcolor): static
    {
        $this->labelcolor = $labelcolor;

        return $this;
    }


}
