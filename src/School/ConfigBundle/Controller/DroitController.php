<?php

namespace School\ConfigBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use School\ConfigBundle\Entity\Droit;
use School\ConfigBundle\Form\DroitType;

/**
 * Droit controller.
 *
 */
class DroitController extends Controller {

    /**
     * Lists all Droit entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SchoolConfigBundle:Droit')->findAll();

        return $this->render('SchoolConfigBundle:Droit:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Droit entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Droit();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('proviseur_droit_show', array('id' => $entity->getId())));
        }

        return $this->render('SchoolConfigBundle:Droit:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Droit entity.
     *
     * @param Droit $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Droit $entity) {
        $form = $this->createForm(new DroitType(), $entity, array(
            'action' => $this->generateUrl('proviseur_droit_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));
        $form->add('submit', 'submit', array('label' => 'Save', 'attr'=>array('class'=>' btn btn-primary text-center col-sm-1')));

        return $form;
    }

    /**
     * Displays a form to create a new Droit entity.
     *
     */
    public function newAction() {
        $entity = new Droit();
        $form = $this->createCreateForm($entity);

        return $this->render('SchoolConfigBundle:Droit:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Droit entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolConfigBundle:Droit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Droit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SchoolConfigBundle:Droit:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Droit entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolConfigBundle:Droit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Droit entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SchoolConfigBundle:Droit:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Droit entity.
     *
     * @param Droit $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Droit $entity) {
        $form = $this->createForm(new DroitType(), $entity, array(
            'action' => $this->generateUrl('proviseur_droit_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Droit entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolConfigBundle:Droit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Droit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('proviseur_droit_edit', array('id' => $id)));
        }

        return $this->render('SchoolConfigBundle:Droit:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Droit entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SchoolConfigBundle:Droit')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Droit entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('proviseur_droit'));
    }

    /**
     * Creates a form to delete a Droit entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('proviseur_droit_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    public function attribuerDroitAction() {
        $em = $this->getDoctrine()->getManager();

        $droits = $em->getRepository('SchoolConfigBundle:Droit')->findAll();
        $users = $em->getRepository('SchoolUserBundle:User')->findAll();

        return $this->render('SchoolConfigBundle:Droit:gestionDroit.html.twig', array(
                    'users' => $users,
                    'droits' => $droits
        ));
    }

    public function changeDroitAction($idUser, $idRight) {
        $em = $this->getDoctrine()->getManager();
        $droit = $em->getRepository('SchoolConfigBundle:Droit')->find($idRight);
        $user = $em->getRepository('SchoolUserBundle:User')->find($idUser);
        $user->setRoles(array($droit->getRightToken()));
        $user->setLevel($droit->getNom());
        $em->persist($user);
        $em->flush();
        return $this->redirect($this->generateUrl('attribution_droit'));
    }

    public function detailDroitAction($id) {
        $em = $this->getDoctrine()->getManager();

        $droit = $em->getRepository('SchoolConfigBundle:Droit')->find($id);
        return $this->render('SchoolConfigBundle:Droit:detailDroit.html.twig', array(
                    'droit' => $droit
                        )
        );
    }

}
