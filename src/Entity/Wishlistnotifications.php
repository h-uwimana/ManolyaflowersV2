<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Wishlistnotifications
 *
 * @ORM\Table(name="WishlistNotifications", indexes={@ORM\Index(name="FK_WishlistNotifications_Item", columns={"WishlistItemID"})})
 * @ORM\Entity
 */
class Wishlistnotifications
{
    /**
     * @var int
     *
     * @ORM\Column(name="NotificationID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $notificationid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NotificationType", type="string", length=255, nullable=true)
     */
    private $notificationtype;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="SentDate", type="datetime", nullable=true)
     */
    private $sentdate;

    /**
     * @var \Wishlistitems
     *
     * @ORM\ManyToOne(targetEntity="Wishlistitems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="WishlistItemID", referencedColumnName="WishlistItemID")
     * })
     */
    private $wishlistitemid;

    public function getNotificationid(): ?int
    {
        return $this->notificationid;
    }

    public function getNotificationtype(): ?string
    {
        return $this->notificationtype;
    }

    public function setNotificationtype(?string $notificationtype): static
    {
        $this->notificationtype = $notificationtype;

        return $this;
    }

    public function getSentdate(): ?\DateTimeInterface
    {
        return $this->sentdate;
    }

    public function setSentdate(?\DateTimeInterface $sentdate): static
    {
        $this->sentdate = $sentdate;

        return $this;
    }

    public function getWishlistitemid(): ?Wishlistitems
    {
        return $this->wishlistitemid;
    }

    public function setWishlistitemid(?Wishlistitems $wishlistitemid): static
    {
        $this->wishlistitemid = $wishlistitemid;

        return $this;
    }


}
