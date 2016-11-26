<?php
namespace ApiClacBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User {

    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=100)
     */
    private $pnr;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     */
    private $surname;

    /**
     * @ORM\Column(type="string")
     */
    private $gender;

    /**
     * @ORM\Column(type="string")
     */
    private $civil;

    /**
     * @ORM\Column(type="string")
     */
    private $cabinCode;

    /**
     * @ORM\Column(type="string")
     */
    private $ticketNumber;

    /**
     * @ORM\Column(type="string")
     */
    private $services;

    /**
     * @ORM\Column(type="string")
     */
    private $frequentTravelerLevel;

    /**
     * @ORM\Column(type="string")
     */
    private $phoneNumber;

    /**
     * @ORM\Column(type="string")
     */
    private $email;

    

    /**
     * Set pnr
     *
     * @param string $pnr
     * @return User
     */
    public function setPnr($pnr)
    {
        $this->pnr = $pnr;

        return $this;
    }

    /**
     * Get pnr
     *
     * @return string 
     */
    public function getPnr()
    {
        return $this->pnr;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
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
     * Set surname
     *
     * @param string $surname
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set civil
     *
     * @param string $civil
     * @return User
     */
    public function setCivil($civil)
    {
        $this->civil = $civil;

        return $this;
    }

    /**
     * Get civil
     *
     * @return string 
     */
    public function getCivil()
    {
        return $this->civil;
    }

    /**
     * Set cabinCode
     *
     * @param string $cabinCode
     * @return User
     */
    public function setCabinCode($cabinCode)
    {
        $this->cabinCode = $cabinCode;

        return $this;
    }

    /**
     * Get cabinCode
     *
     * @return string 
     */
    public function getCabinCode()
    {
        return $this->cabinCode;
    }

    /**
     * Set ticketNumber
     *
     * @param string $ticketNumber
     * @return User
     */
    public function setTicketNumber($ticketNumber)
    {
        $this->ticketNumber = $ticketNumber;

        return $this;
    }

    /**
     * Get ticketNumber
     *
     * @return string 
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     * Set services
     *
     * @param string $services
     * @return User
     */
    public function setServices($services)
    {
        $this->services = $services;

        return $this;
    }

    /**
     * Get services
     *
     * @return string 
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Set frequentTravelerLevel
     *
     * @param string $frequentTravelerLevel
     * @return User
     */
    public function setFrequentTravelerLevel($frequentTravelerLevel)
    {
        $this->frequentTravelerLevel = $frequentTravelerLevel;

        return $this;
    }

    /**
     * Get frequentTravelerLevel
     *
     * @return string 
     */
    public function getFrequentTravelerLevel()
    {
        return $this->frequentTravelerLevel;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}
