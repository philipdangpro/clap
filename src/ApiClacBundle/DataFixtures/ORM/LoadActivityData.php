<?php
/**
 * Created by PhpStorm.
 * User: matthieu
 * Date: 26/11/16
 * Time: 06:27
 */

namespace ApiClacBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use ApiClacBundle\Entity\Activity;

class LoadActivityData implements FixtureInterface {
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $activity1 = new Activity();
    }

} 