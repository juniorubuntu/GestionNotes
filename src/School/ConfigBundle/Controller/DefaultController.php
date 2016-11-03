<?php

namespace School\ConfigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SchoolConfigBundle:Default:index.html.twig', array('name' => $name));
    }
}
