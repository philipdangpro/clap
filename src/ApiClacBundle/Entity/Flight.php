<?php
namespace ApiClacBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="flight")
 */
class Flight {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(type="string")
     */
    private $flightNumber;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateTimeDeparture;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateTimeArrival;
}
