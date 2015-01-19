<?php

namespace ScoutEvent\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ScoutEvent\DataBundle\Validator\Constraints as CustomAssert;

use ScoutEvent\BaseBundle\Entity\User;

/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity
 * @CustomAssert\DateRange(message="The start date must be before the end date")
 */
class Event
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=127)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startTime", type="datetimetz")
     */
    private $startTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endTime", type="datetimetz")
     */
    private $endTime;

    /**
     * @var string
     *
     * @ORM\Column(name="coordinator", type="string", length=255)
     */
    private $coordinator;

    /**
     * @ORM\ManyToOne(targetEntity="\ScoutEvent\BaseBundle\Entity\User", cascade={"ALL"})
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="text")
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text")
     */
    private $summary;
    
    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=true)
     */
    private $link;

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
     * Set name
     *
     * @param string $name
     * @return Event
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     * @return Event
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime 
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param \DateTime $endTime
     * @return Event
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Get endTime
     *
     * @return \DateTime 
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set coordinator
     *
     * @param string $coordinator
     * @return Event
     */
    public function setCoordinator($coordinator)
    {
        $this->coordinator = $coordinator;

        return $this;
    }

    /**
     * Get coordinator
     *
     * @return string 
     */
    public function getCoordinator()
    {
        return $this->coordinator;
    }

    /**
     * Set owner
     *
     * @param User $owner
     * @return Event
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return User 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Event
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return Event
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Event
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }
    
    public function __toString() {
        return $this->name;
    }

}
