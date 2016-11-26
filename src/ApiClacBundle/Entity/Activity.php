<?php
namespace ApiClacBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="activity")
 */
class Activity {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     */
    private $latitude;

    /**
     * @ORM\Column(type="float")
     */
    private $longitude;

    /**
     * @ORM\Column(type="time")
     */
    private $openingTime;

    /**
     * @ORM\Column(type="time")
     */
    private $closingTime;

    /**
     * @ORM\Column(type="string")
     */
    private $airportCode;

    /**
     * @ORM\Column(type="string")
     */
    private $type;

    /**
     * @ORM\Column(type="time")
     */
    private $duration;

    /**
     * @ORM\Column(type="string")
     */
    private $target;

    /**
     * @ORM\Column(type="string")
     */
    private $cabinCode;

    /**
     * @ORM\Column(type="string")
     */
    private $picture;

    


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
     * @return Activity
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
     * Set description
     *
     * @param string $description
     * @return Activity
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return Activity
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Activity
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set openingTime
     *
     * @param \DateTime $openingTime
     * @return Activity
     */
    public function setOpeningTime($openingTime)
    {
        $this->openingTime = $openingTime;

        return $this;
    }

    /**
     * Get openingTime
     *
     * @return \DateTime 
     */
    public function getOpeningTime()
    {
        return $this->openingTime;
    }

    /**
     * Set closingTime
     *
     * @param \DateTime $closingTime
     * @return Activity
     */
    public function setClosingTime($closingTime)
    {
        $this->closingTime = $closingTime;

        return $this;
    }

    /**
     * Get closingTime
     *
     * @return \DateTime 
     */
    public function getClosingTime()
    {
        return $this->closingTime;
    }

    /**
     * Set airportCode
     *
     * @param string $airportCode
     * @return Activity
     */
    public function setAirportCode($airportCode)
    {
        $this->airportCode = $airportCode;

        return $this;
    }

    /**
     * Get airportCode
     *
     * @return string 
     */
    public function getAirportCode()
    {
        return $this->airportCode;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Activity
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set duration
     *
     * @param \DateTime $duration
     * @return Activity
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return \DateTime 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set target
     *
     * @param string $target
     * @return Activity
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string 
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set cabinCode
     *
     * @param string $cabinCode
     * @return Activity
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
     * Set picture
     *
     * @param string $picture
     * @return Activity
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }
}
