<?php

namespace School\GestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use School\UserBundle\Entity\User;
use School\ConfigBundle\Entity\Constante;
use School\ConfigBundle\Entity\Ecole;
use School\MatiereBundle\Entity\EstDispense;

class DefaultController extends Controller {

    public function indexAction() {
        $userConnected = $this->container->get('security.context')->getToken()->getUser();


        $listUser = $this->getDoctrine()->getRepository('SchoolUserBundle:User')->findAll();
        $ecole = $this->getDoctrine()->getRepository('SchoolConfigBundle:Ecole')->findAll();
        $constante = $this->getDoctrine()->getRepository('SchoolConfigBundle:Constante')->findAll();
        if ((count($listUser) == 1) && (count($ecole) == 0) && (count($constante) == 0)) {
            $user = $listUser[0];
            $user->addRole('ROLE_SUPER_ADMIN');
            $this->getDoctrine()->getManager()->flush();
            return $this->redirect($this->generateUrl('constante_new'));
        } else if ((count($constante) == 1) && (count($ecole) == 0)) {
            return $this->redirect($this->generateUrl('ecole_new'));
        } else if ((count($listUser) >= 1) && (count($ecole) == 1) && (count($constante) == 1)) {
            $listDispense = $this->getDoctrine()->getRepository('SchoolMatiereBundle:EstDispense')
                    ->findBy(array('enseignant' => $userConnected));
            return $this->render('SchoolGestionBundle:Default:index.html.twig', array(
                        'listeDispense' => $listDispense));
        } else {
            return $this->render('SchoolGestionBundle:Error:error.html.twig');
        }
    }

    public function firstLunchAction() {
        return $this->render('SchoolGestionBundle:Default:index.html.twig');
    }

}
