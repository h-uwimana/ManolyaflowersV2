<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pagecategory
 *
 * @ORM\Table(name="PageCategory", indexes={@ORM\Index(name="FK_PageCategory_Page", columns={"PageID"}), @ORM\Index(name="FK_PageCategory_Category", columns={"CategoryID"})})
 * @ORM\Entity
 */
class Pagecategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="PageCategoryID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pagecategoryid;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CategoryID", referencedColumnName="CategoryID")
     * })
     */
    private $categoryid;

    /**
     * @var \Pages
     *
     * @ORM\ManyToOne(targetEntity="Pages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PageID", referencedColumnName="PageID")
     * })
     */
    private $pageid;

    public function getPagecategoryid(): ?int
    {
        return $this->pagecategoryid;
    }

    public function getCategoryid(): ?Categories
    {
        return $this->categoryid;
    }

    public function setCategoryid(?Categories $categoryid): static
    {
        $this->categoryid = $categoryid;

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


}
