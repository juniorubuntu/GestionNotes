<?php

namespace School\StudentBundle\Controller;

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

    /**
     * Creates a new Inscription entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Inscription();
        $ecole = $this->getDoctrine()->getRepository('SchoolConfigBundle:Ecole')->findAll();
        $entity->setAnnee($ecole[0]->getAnneeEnCour());
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->setAnnee($ecole[0]->getAnneeEnCour());
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('inscription_show', array('id' => $entity->getId())));
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
    private function createCreateForm(Inscription $entity) {
        $form = $this->createForm(new InscriptionType(), $entity, array(
            'action' => $this->generateUrl('inscription_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Inscription entity.
     *
     */
    public function newAction() {
        $entity = new Inscription();
        $ecole = $this->getDoctrine()->getRepository('SchoolConfigBundle:Ecole')->findAll();
        $entity->setAnnee($ecole[0]->getAnneeEnCour());
        $form = $this->createCreateForm($entity);

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
        $form = $this->createForm(new InscriptionType(), $entity, array(
            'action' => $this->generateUrl('inscription_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

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
            $em->flush();

            return $this->redirect($this->generateUrl('inscription_edit', array('id' => $id)));
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
