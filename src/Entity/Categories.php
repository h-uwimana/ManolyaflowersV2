<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="Categories")
 * @ORM\Entity
 */
class Categories
{
    /**
     * @var int
     *
     * @ORM\Column(name="CategoryID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CategoryName", type="string", length=255, nullable=true)
     */
    private $categoryname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description", type="text", length=65535, nullable=true)
     */
    private $description;

    public function getCategoryid(): ?int
    {
        return $this->categoryid;
    }

    public function getCategoryname(): ?string
    {
        return $this->categoryname;
    }

    public function setCategoryname(?string $categoryname): static
    {
        $this->categoryname = $categoryname;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }


}
