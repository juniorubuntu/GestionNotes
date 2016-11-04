<?php

namespace School\ConfigBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use School\ConfigBundle\Entity\Constante;
use School\ConfigBundle\Form\ConstanteType;

/**
 * Constante controller.
 *
 */
class ConstanteController extends Controller
{

    /**
     * Lists all Constante entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SchoolConfigBundle:Constante')->findAll();

        return $this->render('SchoolConfigBundle:Constante:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Constante entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Constante();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('constante_show', array('id' => $entity->getId())));
        }

        return $this->render('SchoolConfigBundle:Constante:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Constante entity.
     *
     * @param Constante $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Constante $entity)
    {
        $form = $this->createForm(new ConstanteType(), $entity, array(
            'action' => $this->generateUrl('constante_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Constante entity.
     *
     */
    public function newAction()
    {
        $entity = new Constante();
        $form   = $this->createCreateForm($entity);

        return $this->render('SchoolConfigBundle:Constante:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Constante entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolConfigBundle:Constante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Constante entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SchoolConfigBundle:Constante:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Constante entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolConfigBundle:Constante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Constante entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SchoolConfigBundle:Constante:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Constante entity.
    *
    * @param Constante $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Constante $entity)
    {
        $form = $this->createForm(new ConstanteType(), $entity, array(
            'action' => $this->generateUrl('constante_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Constante entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolConfigBundle:Constante')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Constante entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('constante_edit', array('id' => $id)));
        }

        return $this->render('SchoolConfigBundle:Constante:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Constante entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SchoolConfigBundle:Constante')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Constante entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('constante'));
    }

    /**
     * Creates a form to delete a Constante entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('constante_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
