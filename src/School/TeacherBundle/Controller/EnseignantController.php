<?php

namespace School\TeacherBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use School\TeacherBundle\Entity\Enseignant;
use School\TeacherBundle\Form\EnseignantType;

/**
 * Enseignant controller.
 *
 */
class EnseignantController extends Controller
{

    /**
     * Lists all Enseignant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SchoolTeacherBundle:Enseignant')->findAll();

        return $this->render('SchoolTeacherBundle:Enseignant:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Enseignant entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Enseignant();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('enseignant_show', array('id' => $entity->getId())));
        }

        return $this->render('SchoolTeacherBundle:Enseignant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Enseignant entity.
     *
     * @param Enseignant $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Enseignant $entity)
    {
        $form = $this->createForm(new EnseignantType(), $entity, array(
            'action' => $this->generateUrl('enseignant_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Enseignant entity.
     *
     */
    public function newAction()
    {
        $entity = new Enseignant();
        $form   = $this->createCreateForm($entity);

        return $this->render('SchoolTeacherBundle:Enseignant:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Enseignant entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolTeacherBundle:Enseignant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Enseignant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SchoolTeacherBundle:Enseignant:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Enseignant entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolTeacherBundle:Enseignant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Enseignant entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SchoolTeacherBundle:Enseignant:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Enseignant entity.
    *
    * @param Enseignant $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Enseignant $entity)
    {
        $form = $this->createForm(new EnseignantType(), $entity, array(
            'action' => $this->generateUrl('enseignant_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Enseignant entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolTeacherBundle:Enseignant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Enseignant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('enseignant_edit', array('id' => $id)));
        }

        return $this->render('SchoolTeacherBundle:Enseignant:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Enseignant entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SchoolTeacherBundle:Enseignant')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Enseignant entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('enseignant'));
    }

    /**
     * Creates a form to delete a Enseignant entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('enseignant_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
