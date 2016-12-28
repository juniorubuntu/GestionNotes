<?php

namespace School\ConfigBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use School\ConfigBundle\Entity\Annee;
use School\ConfigBundle\Form\AnneeType;

/**
 * Annee controller.
 *
 */
class AnneeController extends Controller
{

    /**
     * Lists all Annee entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SchoolConfigBundle:Annee')->findAll();

        return $this->render('SchoolConfigBundle:Annee:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Annee entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Annee();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('config_annee_show', array('id' => $entity->getId())));
        }

        return $this->render('SchoolConfigBundle:Annee:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Annee entity.
     *
     * @param Annee $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Annee $entity)
    {
        $form = $this->createForm(new AnneeType(), $entity, array(
            'action' => $this->generateUrl('config_annee_create'),
            'method' => 'POST',
        ));

//        $form->add('submit', 'submit', array('label' => 'Create'));
        $form->add('submit', 'submit', array('label' => 'Enregistrer', 'attr'=>array('class'=>' btn btn-primary col-sm-1 col-sm-offset-4')));
        return $form;
    }

    /**
     * Displays a form to create a new Annee entity.
     *
     */
    public function newAction()
    {
        $entity = new Annee();
        $form   = $this->createCreateForm($entity);

        return $this->render('SchoolConfigBundle:Annee:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Annee entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolConfigBundle:Annee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Annee entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SchoolConfigBundle:Annee:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Annee entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolConfigBundle:Annee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Annee entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SchoolConfigBundle:Annee:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Annee entity.
    *
    * @param Annee $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Annee $entity)
    {
        $form = $this->createForm(new AnneeType(), $entity, array(
            'action' => $this->generateUrl('config_annee_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Annee entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolConfigBundle:Annee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Annee entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('config_annee_edit', array('id' => $id)));
        }

        return $this->render('SchoolConfigBundle:Annee:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Annee entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SchoolConfigBundle:Annee')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Annee entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('config_annee'));
    }

    /**
     * Creates a form to delete a Annee entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('config_annee_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer', 'attr'=>array('class'=>' btn btn-danger boutonSupprimer')))
            ->getForm()
        ;
    }
}
