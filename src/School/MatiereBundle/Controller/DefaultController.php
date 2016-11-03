<?php

namespace School\MatiereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SchoolMatiereBundle:Default:index.html.twig', array('name' => $name));
    }
}
