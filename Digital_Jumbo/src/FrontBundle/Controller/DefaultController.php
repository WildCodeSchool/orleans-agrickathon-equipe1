<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {

        return $this->render('FrontBundle:Default:accueil.html.twig');
    }

    /**
     * @Route("/profilAgri", name="agri")
     */
    public function profilAgriAction()
    {
        return $this->render('FrontBundle:Default:profilAgri.html.twig');
    }

    /**
     * @Route("/profilUser", name="user")
     */
    public function profilUserAction()
    {
        return $this->render('FrontBundle:Default:profilUser.html.twig');
    }

    /**
     * @Route("/reservation", name="resa")
     */
    public function reservationAction()
    {
        return $this->render('FrontBundle:Default:formresa.html.twig');
    }

    /**
     * @Route("/map", name="mapgeo")
     */
    public function geolocAction()
    {
        $em = $this->getDoctrine()->getManager();

        $locations = $em->getRepository('FrontBundle:Site')->findAll();

        return $this->render('FrontBundle:Default:geolocation.html.twig', array('locations'=>$locations));
    }
}
