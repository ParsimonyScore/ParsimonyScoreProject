<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\NotificationRepository")
 */
class Notification
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNotif", type="datetime")
     */
    private $dateNotif;

    /**
     * @var bool
     *
     * @ORM\Column(name="seen", type="boolean")
     */
    private $seen=false;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSeen", type="datetime", nullable=true)
     */
    private $dateSeen;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Notification
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set dateNotif
     *
     * @param \DateTime $dateNotif
     * @return Notification
     */
    public function setDateNotif($dateNotif)
    {
        $this->dateNotif = $dateNotif;

        return $this;
    }

    /**
     * Get dateNotif
     *
     * @return \DateTime 
     */
    public function getDateNotif()
    {
        return $this->dateNotif;
    }

    /**
     * Set seen
     *
     * @param boolean $seen
     * @return Notification
     */
    public function setSeen($seen)
    {
        $this->seen = $seen;

        return $this;
    }

    /**
     * Get seen
     *
     * @return boolean 
     */
    public function getSeen()
    {
        return $this->seen;
    }

    /**
     * Set dateSeen
     *
     * @param \DateTime $dateSeen
     * @return Notification
     */
    public function setDateSeen($dateSeen)
    {
        $this->dateSeen = $dateSeen;

        return $this;
    }

    /**
     * Get dateSeen
     *
     * @return \DateTime 
     */
    public function getDateSeen()
    {
        return $this->dateSeen;
    }

    /**
     * Set user
     *
     * @param \AdminBundle\Entity\User $user
     * @return Notification
     */
    public function setUser(\AdminBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AdminBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
