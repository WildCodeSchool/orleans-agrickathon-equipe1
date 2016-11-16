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
        return $this->render('FrontBundle:Default:index.html.twig');
    }

    /**
     * @Route("/profilAgri")
     */
    public function profilAgriAction()
    {
        return $this->render('FrontBundle:Default:profilAgri.html.twig');
    }

    /**
     * @Route("/profilUser")
     */
    public function profilUserAction()
    {
        return $this->render('FrontBundle:Default:profilUser.html.twig');
    }
}
