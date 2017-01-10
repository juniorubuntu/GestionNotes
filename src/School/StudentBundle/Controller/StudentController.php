<?php

//src/School/StudentBundle/Controller/StudentController.php

namespace School\StudentBundle\Controller;

use School\StudentBundle\Entity\Student;
use School\StudentBundle\Form\StudentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StudentController extends Controller {

    public function listAction() {
        $students = $this->getDoctrine()
                ->getRepository('SchoolStudentBundle:Student')
                ->findAll();
        return $this->render('SchoolStudentBundle:Student:listStudents.html.twig', array(
                    'students' => $students));
    }

    public function showAction($id) {
        //On recupère l'entityManager
        $em = $this->getDoctrine()->getManager();

        $student = $em->getRepository('SchoolStudentBundle:Student')->find($id);

        if (null === $student) {
            throw $this->createNotFoundException("L'élève  d'id " . $id . " n'existe pas.");
        }

        return $this->render('SchoolStudentBundle:Student:showStudent.html.twig', array(
                    'student' => $student,
        ));
    }

    public function addAction(Request $request) {

        $student = new Student();

        $form = $this->createForm(new StudentType(), $student);

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($student);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Eleve bien enregistrée.');

            return $this->redirect($this->generateUrl('school_student_show', array(
                                'id' => $student->getId())));
        }

        //Si on n'est pas en POSt, on affiche  le forrmulaire
        return $this->render('SchoolStudentBundle:Student:addStudent.html.twig', array(
                    'form' => $form->createView())
        );
    }

    public function editAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();
        $student = $em->getRepository('SchoolStudentBundle:Student')->find($id);

        if ($student == null) {
            throw $this->createNotFoundException("l'élève d'id " . $id . " n'existe pas");
        }

        $form = $this->createForm(new StudentType(), $student);
        if ($form->handleRequest($request)->isValid()) {
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'élève bien mise à jour.');

            return $this->redirect($this->generateUrl('school_student_show', array(
                                'id' => $student->getId())));
        }

        return $this->render('SchoolStudentBundle:Student:addStudent.html.twig', array(
                    'student' => $student,
                    'form' => $form->createView(),
                    'editons' => ''
        ));
    }

    public function deleteAction($id, Request $request) {
        $student = $this->getDoctrine()->getRepository('SchoolStudentBundle:Student')
                ->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($student);
        $em->flush();
        return $this->redirect($this->generateUrl('school_student_list'));
    }

}

?>