<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Discountrules
 *
 * @ORM\Table(name="DiscountRules", indexes={@ORM\Index(name="FK_DiscountRules_DiscountCode", columns={"DiscountCodeID"})})
 * @ORM\Entity
 */
class Discountrules
{
    /**
     * @var int
     *
     * @ORM\Column(name="RuleID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ruleid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RuleDescription", type="string", length=255, nullable=true)
     */
    private $ruledescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RuleConditions", type="text", length=65535, nullable=true)
     */
    private $ruleconditions;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RuleActions", type="text", length=65535, nullable=true)
     */
    private $ruleactions;

    /**
     * @var \Discountcodes
     *
     * @ORM\ManyToOne(targetEntity="Discountcodes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DiscountCodeID", referencedColumnName="DiscountCodeID")
     * })
     */
    private $discountcodeid;

    public function getRuleid(): ?int
    {
        return $this->ruleid;
    }

    public function getRuledescription(): ?string
    {
        return $this->ruledescription;
    }

    public function setRuledescription(?string $ruledescription): static
    {
        $this->ruledescription = $ruledescription;

        return $this;
    }

    public function getRuleconditions(): ?string
    {
        return $this->ruleconditions;
    }

    public function setRuleconditions(?string $ruleconditions): static
    {
        $this->ruleconditions = $ruleconditions;

        return $this;
    }

    public function getRuleactions(): ?string
    {
        return $this->ruleactions;
    }

    public function setRuleactions(?string $ruleactions): static
    {
        $this->ruleactions = $ruleactions;

        return $this;
    }

    public function getDiscountcodeid(): ?Discountcodes
    {
        return $this->discountcodeid;
    }

    public function setDiscountcodeid(?Discountcodes $discountcodeid): static
    {
        $this->discountcodeid = $discountcodeid;

        return $this;
    }


}
