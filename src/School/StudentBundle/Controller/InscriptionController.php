<?php

namespace School\StudentBundle\Controller;

use School\StudentBundle\Form\InscriptionEditType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use School\ConfigBundle\Entity\Ecole;
use School\StudentBundle\Entity\Inscription;
use School\StudentBundle\Form\InscriptionType;

/**
 * Inscription controller.
 *
 */
class InscriptionController extends Controller {

    /**
     * Lists all Inscription entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SchoolStudentBundle:Inscription')->findAll();

        return $this->render('SchoolStudentBundle:Inscription:index.html.twig', array(
                    'entities' => $entities,
        ));
    }


    public function aInscrireAction(){
        $em = $this->getDoctrine()->getManager();
        $school = $em->getRepository('SchoolConfigBundle:Ecole')->findAll();
        $anneEncour = $school[0]->getAnneeEnCour();

        $subQueryBuilder = $em->createQueryBuilder();
        $subQuery = $subQueryBuilder
            ->select('(i.student)')
            ->from('SchoolStudentBundle:Inscription', 'i')
            ->where('i.annee= :annee')
            //->orWhere('i.status= :status')
            ->setParameters( array(
                'annee'=> $anneEncour,
             //   'status'=> 0,
            ))
            ->getQuery()
            ->getArrayResult();

        $queryBuilder = $em->createQueryBuilder();
        $query = $queryBuilder
            ->select('s')
            ->from('SchoolStudentBundle:Student', 's')
            ->where($queryBuilder->expr()->notIn('s.id', ':subQuery'))
            ->setParameter('subQuery', $subQuery)
            ->getQuery();

        $students = $query->getResult();

        $incriptionsNonComplets = $this->getDoctrine()->getRepository('SchoolStudentBundle:Inscription')->findBy(
            array(
                'status' => 0,
                'annee' => $anneEncour,
            ));



        return $this->render('SchoolStudentBundle:Inscription:listeElevesNonInscrits.html.twig', array(
            'entities' => $students,
            'incriptionsNonCompletes' => $incriptionsNonComplets,
        ));
    }

    /**
     * Creates a new Inscription entity.
     *
     */
    public function createAction(Request $request, $idStudent) {
        $entity = new Inscription();
        $ecole = $this->getDoctrine()->getRepository('SchoolConfigBundle:Ecole')->findAll();
        $entity->setAnnee($ecole[0]->getAnneeEnCour());

        $student = $this->getDoctrine()->getRepository('SchoolStudentBundle:Student')->find($idStudent);
        $entity->setStudent($student);

        $form = $this->createCreateForm($entity, $idStudent);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $entity->setStudent($student);
            $entity->setAnnee($ecole[0]->getAnneeEnCour());
            $inscriptionExist = $this->getDoctrine()->getRepository('SchoolStudentBundle:Inscription')->findBy(
                array(
                    'student' => $entity->getStudent(),
                    'annee' => $ecole[0]->getAnneeEnCour(),
                ));
            if($inscriptionExist){
                $request->getSession()->getFlashBag()->add('notice', 'Incription déjà effectuée');
            }
            else{

                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
                return $this->redirect($this->generateUrl('inscription_show', array('id' => $entity->getId())));
            }
        }

        return $this->render('SchoolStudentBundle:Inscription:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Inscription entity.
     *
     * @param Inscription $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Inscription $entity, $idStudent) {
        $form = $this->createForm(new InscriptionType(), $entity, array(
            'action' => $this->generateUrl('inscription_create', array(
                'idStudent' =>$idStudent,
            )),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Inscrire', 'attr' => array('class' => 'btn btn-primary col-md-offset-3 col-sm-offset-3 col-xs-offset-3 col-md-1 col-sm-1 col-xs-3')));

        return $form;
    }

    /**
     * Displays a form to create a new Inscription entity.
     *
     */
    public function newAction($idStudent) {
        $entity = new Inscription();
        $ecole = $this->getDoctrine()->getRepository('SchoolConfigBundle:Ecole')->findAll();
        $entity->setAnnee($ecole[0]->getAnneeEnCour());

        $student = $this->getDoctrine()->getRepository('SchoolStudentBundle:Student')->find($idStudent);
        $entity->setStudent($student);

        $form = $this->createCreateForm($entity, $idStudent);

        return $this->render('SchoolStudentBundle:Inscription:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Inscription entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolStudentBundle:Inscription')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Inscription entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SchoolStudentBundle:Inscription:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Inscription entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolStudentBundle:Inscription')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Inscription entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SchoolStudentBundle:Inscription:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Inscription entity.
     *
     * @param Inscription $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Inscription $entity) {
        $form = $this->createForm(new InscriptionEditType(), $entity, array(
            'action' => $this->generateUrl('inscription_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Terminer', 'attr' => array('class' => 'btn btn-primary col-md-offset-3 col-sm-offset-3 col-xs-offset-3 col-md-1 col-sm-1 col-xs-3')));

        return $form;
    }

    /**
     * Edits an existing Inscription entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolStudentBundle:Inscription')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Inscription entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entity->setDateDerniereAvance(new \DateTime(date('Y-m-d')));
            $em->flush();
            return $this->redirect($this->generateUrl('inscription'));
        }

        return $this->render('SchoolStudentBundle:Inscription:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Inscription entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SchoolStudentBundle:Inscription')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Inscription entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('inscription'));
    }

    /**
     * Creates a form to delete a Inscription entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('inscription_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
