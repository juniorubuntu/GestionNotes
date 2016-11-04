<?php

namespace School\StudentBundle\Controller;;

use School\StudentBundle\Entity\Classe;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ClasseController extends Controller{

    public function listAction(){
        $classes = $this->getDoctrine()
        ->getRepository('SchoolStudentBundle:Classe')
        ->findAll();
        return $this->render('SchoolStudentBundle:Classe:listClasses.html.twig', array(
            'classes' => $classes));
    }

    public function addAction(Request $request){
        $classe = new Classe;
        /*Autre méthode de personnalisation du formulaire. Dans le cas de Student on a utilisé StudentType à cause du nombre de champs considérable.
        */
        $form = $this->createFormBuilder($classe)
                    ->add('nom', 'text')
                    ->add('abreviation', 'text')
                    ->add('save', 'submit', array('label' => 'Enregistrer','attr' => array('class' => 'btn btn-primary col-md-offset-5 col-sm-offset-5 col-xs-offset-5 col-md-2 col-sm-5 col-xs-5')))
                    ->getForm();

                    $form->handleRequest($request);
                    if ($form->isSubmitted() && $form->isValid()) {
                        $nom = $form['nom']->getData();


                        $classe->setNom($nom);

                        $em = $this->getDoctrine()->getManager();
                        $em->persist($classe);
                        $em->flush();

                        return $this->redirect($this->generateUrl('school_class_show', array(
                'id'=> $classe->getId())));
                    }

        //Si on n'est pas en POST, on affiche  le forrmulaire
        return $this->render('SchoolStudentBundle:Classe:addClass.html.twig', array(
            'form' => $form->createView()));
    }


    public function editAction(Request $request, $id){

        $classe = $this->getDoctrine()->getRepository('SchoolStudentBundle:Classe')
                    ->find($id);
        $classe->setNom($classe->getNom());

        $form = $this->createFormBuilder($classe)
                    ->add('nom', 'text')
                    ->add('save', 'submit', array('label' => 'Edit Class','attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
                    ->getForm();

                    $form->handleRequest($request);
                    if ($form->isSubmitted() && $form->isValid()) {
                        $nom = $form['nom']->getData();

                        $em = $this->getDoctrine()->getManager();
                        $classe = $em->getRepository('SchoolStudentBundle:Classe')->find($id);
                        $classe->setNom($nom);
                        $em->flush();

                        return $this->redirect($this->generateUrl('school_class_show', array(
                'id'=> $classe->getId())));
                    }
        return $this->render('SchoolStudentBundle:Classe:addClass.html.twig', array(
            'classe' => $classe,
            'form' => $form->createView()
            ));
    }


    public function showAction($id){
        $classe = $this->getDoctrine()->getRepository('SchoolStudentBundle:Classe')
                    ->find($id);
        return $this->render('SchoolStudentBundle:Classe:showClass.html.twig', array(
            'classe' => $classe));
    }

    public function deleteAction($id){
        $classe = $this->getDoctrine()->getRepository('SchoolStudentBundle:Classe')
                       ->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($classe);
        $em->flush();
        return $this->redirect($this->generateUrl('school_class_list'));
    }
}
