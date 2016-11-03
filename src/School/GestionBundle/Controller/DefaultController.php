<?php

namespace School\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('SchoolGestionBundle:Default:index.html.twig');
    }

}
