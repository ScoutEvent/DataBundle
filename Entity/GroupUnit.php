<?php

namespace ScoutEvent\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ScoutEvent\BaseBundle\Entity\User;

/**
 * GroupUnit
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GroupUnit
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
     * @ORM\Column(name="name", type="string", length=128)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=255)
     */
    private $contact;

    /**
     * @ORM\ManyToOne(targetEntity="ScoutEvent\BaseBundle\Entity\User")
     */
    private $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=16)
     */
    private $phone;


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
     * @return GroupUnit
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
     * Set contact
     *
     * @param string $contact
     * @return GroupUnit
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set owner
     *
     * @param User $owner
     * @return GroupUnit
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
     * Set phone
     *
     * @param string $phone
     * @return GroupUnit
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }
    
    public function __toString() {
        return $this->name;
    }

}
