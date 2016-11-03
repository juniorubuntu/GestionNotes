<?php

namespace School\StudentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SchoolStudentBundle:Default:index.html.twig', array('name' => $name));
    }
}
