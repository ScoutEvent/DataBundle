<?php

namespace ScoutEvent\DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * HealthForm
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class HealthForm
{
    /**
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="ScoutEvent\DataBundle\Entity\Participant")
     * @ORM\JoinColumn(name="participant_id", referencedColumnName="id")
     */
    private $participant;
    
    /**
     * @var string
     *
     * @ORM\Column(name="knownAs", type="string", nullable=true, length=31)
     */
    private $knownAs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateOfBirth", type="date")
     */
    private $dateOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="membershipNumber", type="string", length=10)
     */
    private $membershipNumber;
    
    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text")
     */
    private $address;
    
    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=16)
     */
    private $phone;
    
    /**
     * @var string
     *
     * @ORM\Column(name="emergencyContact", type="string", length=64)
     */
    private $emergencyContact;
    
    /**
     * @var string
     *
     * @ORM\Column(name="emergencyPhone", type="string", length=16)
     * @Assert\Regex(
     *     pattern="/^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/",
     *     match=true,
     *     message="Please enter a valid UK phone number")
     */
    private $emergencyPhone;
    
    /**
     * @var string
     *
     * @ORM\Column(name="doctor", type="string", length=64)
     */
    private $doctor;
    
    /**
     * @var string
     *
     * @ORM\Column(name="doctorAddress", type="text")
     */
    private $doctorAddress;
    
    /**
     * @var string
     *
     * @ORM\Column(name="doctorPhone", type="string", length=16)
     * @Assert\Regex(
     *     pattern="/^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/",
     *     match=true,
     *     message="Please enter a valid UK phone number")
     */
    private $doctorPhone;
    
    /**
     * @var string
     *
     * @ORM\Column(name="allergies", type="text")
     */
    private $allergies;
    
    /**
     * @var string
     *
     * @ORM\Column(name="dietary", type="text")
     */
    private $dietary;

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="string", length=64)
     */
    private $signature;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="signatureDate", type="datetime")
     */
    private $signatureDate;
    
    /**
     * @param Participant $participant
     */
    public function __construct($participant)
    {
        $this->participant = $participant;
    }

    /**
     * @return Participant
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Set knownAs
     *
     * @param string $knownAs
     * @return HealthForm
     */
    public function setKnownAs($knownAs)
    {
        $this->knownAs = $knownAs;

        return $this;
    }

    /**
     * Get knownAs
     *
     * @return string 
     */
    public function getKnownAs()
    {
        return $this->knownAs;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     * @return HealthForm
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime 
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set membershipNumber
     *
     * @param string $membershipNumber
     * @return HealthForm
     */
    public function setMembershipNumber($membershipNumber)
    {
        $this->membershipNumber = $membershipNumber;

        return $this;
    }

    /**
     * Get membershipNumber
     *
     * @return string 
     */
    public function getMembershipNumber()
    {
        return $this->membershipNumber;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return HealthForm
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return HealthForm
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

    /**
     * Set emergencyContact
     *
     * @param string $emergencyContact
     * @return HealthForm
     */
    public function setEmergencyContact($emergencyContact)
    {
        $this->emergencyContact = $emergencyContact;

        return $this;
    }

    /**
     * Get emergencyContact
     *
     * @return string 
     */
    public function getEmergencyContact()
    {
        return $this->emergencyContact;
    }

    /**
     * Set emergencyPhone
     *
     * @param string $emergencyPhone
     * @return HealthForm
     */
    public function setEmergencyPhone($emergencyPhone)
    {
        $this->emergencyPhone = $emergencyPhone;

        return $this;
    }

    /**
     * Get emergencyPhone
     *
     * @return string 
     */
    public function getEmergencyPhone()
    {
        return $this->emergencyPhone;
    }

    /**
     * Set doctor
     *
     * @param string $doctor
     * @return HealthForm
     */
    public function setDoctor($doctor)
    {
        $this->doctor = $doctor;

        return $this;
    }

    /**
     * Get doctor
     *
     * @return string 
     */
    public function getDoctor()
    {
        return $this->doctor;
    }

    /**
     * Set doctorAddress
     *
     * @param string $doctorAddress
     * @return HealthForm
     */
    public function setDoctorAddress($doctorAddress)
    {
        $this->doctorAddress = $doctorAddress;

        return $this;
    }

    /**
     * Get doctorAddress
     *
     * @return string 
     */
    public function getDoctorAddress()
    {
        return $this->doctorAddress;
    }

    /**
     * Set doctorPhone
     *
     * @param string $doctorPhone
     * @return HealthForm
     */
    public function setDoctorPhone($doctorPhone)
    {
        $this->doctorPhone = $doctorPhone;

        return $this;
    }

    /**
     * Get doctorPhone
     *
     * @return string 
     */
    public function getDoctorPhone()
    {
        return $this->doctorPhone;
    }

    /**
     * Set allergies
     *
     * @param string $allergies
     * @return HealthForm
     */
    public function setAllergies($allergies)
    {
        $this->allergies = $allergies;

        return $this;
    }

    /**
     * Get allergies
     *
     * @return string 
     */
    public function getAllergies()
    {
        return $this->allergies;
    }

    /**
     * Set dietary
     *
     * @param string $dietary
     * @return HealthForm
     */
    public function setDietary($dietary)
    {
        $this->dietary = $dietary;

        return $this;
    }

    /**
     * Get dietary
     *
     * @return string 
     */
    public function getDietary()
    {
        return $this->dietary;
    }

    /**
     * Set signature
     *
     * @param string $signature
     * @return HealthForm
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;

        return $this;
    }

    /**
     * Get signature
     *
     * @return string 
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Set signatureDate
     *
     * @param \DateTime $signature
     * @return HealthForm
     */
    public function setSignatureDate($signatureDate)
    {
        $this->signatureDate = $signatureDate;

        return $this;
    }

    /**
     * Get signatureDate
     *
     * @return \DateTime 
     */
    public function getSignatureDate()
    {
        return $this->signatureDate;
    }

}
