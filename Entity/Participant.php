<?php

namespace ScoutEvent\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use ScoutEvent\DataBundle\Entity\GroupUnit;
use ScoutEvent\DataBundle\Entity\Event;
use ScoutEvent\BaseBundle\Entity\User;

/**
 * Participant
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Participant
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    
    /**
     * @ORM\ManyToOne(targetEntity="ScoutEvent\BaseBundle\Entity\User")
     */
    private $owner;

    /**
     * @ORM\ManyToOne(targetEntity="GroupUnit")
     */
    private $groupUnit;

    /**
     * @ORM\ManyToOne(targetEntity="Event", inversedBy="participants")
     */
    private $event;

    /**
     * @var boolean
     *
     * @ORM\Column(name="youngPerson", type="boolean")
     */
    private $youngPerson;

    /**
     * @ORM\OneToOne(targetEntity="ScoutEvent\DataBundle\Entity\HealthForm", mappedBy="participant", cascade={"remove"})
     */
    private $healthForm;
    

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
     * @return Participant
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
     * Set owner
     *
     * @param User $owner
     * @return Participant
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
     * Set groupUnit
     *
     * @param GroupUnit $groupUnit
     * @return Participant
     */
    public function setGroupUnit($groupUnit)
    {
        $this->groupUnit = $groupUnit;

        return $this;
    }

    /**
     * Get groupUnit
     *
     * @return GroupUnit 
     */
    public function getGroupUnit()
    {
        return $this->groupUnit;
    }

    /**
     * Set event
     *
     * @param Event $event
     * @return Participant
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return User 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set youngPerson
     *
     * @param boolean $youngPerson
     * @return Participant
     */
    public function setYoungPerson($youngPerson)
    {
        $this->youngPerson = $youngPerson;

        return $this;
    }

    /**
     * Get youngPerson
     *
     * @return boolean 
     */
    public function getYoungPerson()
    {
        return $this->youngPerson;
    }
}
