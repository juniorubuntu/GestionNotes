<?php

namespace School\StudentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use School\StudentBundle\Entity\Classe;
use School\StudentBundle\Form\ClasseType;

/**
 * Classe controller.
 *
 */
class ClasseController extends Controller
{

    /**
     * Lists all Classe entities.
     *
     */
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();

        //on recup�re uniquement les classe ui ont la classe m�re non null
        $entities = $qb->select('cla')
            ->from('SchoolStudentBundle:Classe', 'cla')
            ->where('cla.classePere is NOT NULL')
            ->getQuery()->getResult();


        $listSequence = $em->getRepository('SchoolNoteBundle:Sequence')->findAll();
        return $this->render('SchoolStudentBundle:Classe:index.html.twig', array(
            'entities' => $entities,
            'listSequence' => $listSequence
        ));
    }


    /**
     * Creates a new Classe entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Classe();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('classe_show', array('id' => $entity->getId())));
        }

        return $this->render('SchoolStudentBundle:Classe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Classe entity.
     *
     * @param Classe $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Classe $entity)
    {
        $form = $this->createForm(new ClasseType(), $entity, array(
            'action' => $this->generateUrl('classe_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));
        $form->add('submit', 'submit', array('label' => 'Enregistrer', 'attr'=>array('class'=>' btn btn-primary text-center col-md-offset-4 col-sm-2')));

        return $form;
    }

    /**
     * Displays a form to create a new Classe entity.
     *
     */
    public function newAction()
    {
        $entity = new Classe();
        $form   = $this->createCreateForm($entity);

        return $this->render('SchoolStudentBundle:Classe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Classe entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolStudentBundle:Classe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Classe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SchoolStudentBundle:Classe:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Classe entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolStudentBundle:Classe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Classe entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SchoolStudentBundle:Classe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Classe entity.
    *
    * @param Classe $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Classe $entity)
    {
        $form = $this->createForm(new ClasseType(), $entity, array(
            'action' => $this->generateUrl('classe_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));
        $form->add('submit', 'submit', array('label' => 'Enregistrer', 'attr'=>array('class'=>' btn btn-primary text-center')));

        return $form;
    }
    /**
     * Edits an existing Classe entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolStudentBundle:Classe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Classe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('classe_edit', array('id' => $id)));
        }

        return $this->render('SchoolStudentBundle:Classe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Classe entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SchoolStudentBundle:Classe')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Classe entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('classe'));
    }

    /**
     * Creates a form to delete a Classe entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('classe_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete', 'attr'=> array('class' => 'btn btn-danger')))
            ->getForm()
        ;
    }
}
