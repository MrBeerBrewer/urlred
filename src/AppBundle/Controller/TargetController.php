<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TargetController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Target:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/target")
     */
    public function targetAction()
    {
        return $this->render('AppBundle:Target:target.html.twig', array(
            // ...
        ));
    }

}
