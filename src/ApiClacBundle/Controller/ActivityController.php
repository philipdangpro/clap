<?php
/**
 * Created by PhpStorm.
 * User: matthieu
 * Date: 26/11/16
 * Time: 05:49
 */

namespace ApiClacBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\View\View; // Utilisation de la vue de FOSRestBundle
use ApiClacBundle\Entity\Activity;

class ActivityController extends Controller {
    /**
     * @Rest\View()
     * @Rest\Get("/activities")
     */
    public function getActivitiesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $activites = $em->getRepository('ApiClacBundle:Activity')
            ->findAll();
        return $activites;
    }
} 