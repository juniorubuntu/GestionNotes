<?php

namespace School\TeacherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SchoolTeacherBundle:Default:index.html.twig', array('name' => $name));
    }
}
