<?php

namespace School\MatiereBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use School\MatiereBundle\Entity\EstDispense;
use School\MatiereBundle\Form\EstDispenseType;

/**
 * EstDispense controller.
 *
 */
class EstDispenseController extends Controller
{

    /**
     * Lists all EstDispense entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SchoolMatiereBundle:EstDispense')->findAll();

        return $this->render('SchoolMatiereBundle:EstDispense:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new EstDispense entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new EstDispense();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $school = $em->getRepository('SchoolConfigBundle:Ecole')->findAll();
            $anneEncour = $school[0]->getAnneeEnCour();
            $testEnseignementExist = $this->getDoctrine()->getRepository('SchoolMatiereBundle:EstDispense')->findBy(
                array(
                    'enseignant' => $entity->getEnseignant(),
                    'matiere' => $entity->getMatiere(),
                    'classe' => $entity->getClasse(),
                    'annee' => $anneEncour,
                ));
            if($testEnseignementExist){
                $request->getSession()->getFlashBag()->add('notice', 'cet Enseignement est déjà enregistrée.');
            }else {
                $entity->setAnnee($anneEncour);
                $em->persist($entity);
                $em->flush();
                return $this->redirect($this->generateUrl('estdispense_show', array('id' => $entity->getId())));
            }
        }

        return $this->render('SchoolMatiereBundle:EstDispense:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a EstDispense entity.
     *
     * @param EstDispense $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(EstDispense $entity)
    {
        $form = $this->createForm(new EstDispenseType(), $entity, array(
            'action' => $this->generateUrl('estdispense_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new EstDispense entity.
     *
     */
    public function newAction()
    {
        $entity = new EstDispense();
        $form   = $this->createCreateForm($entity);

        return $this->render('SchoolMatiereBundle:EstDispense:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EstDispense entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolMatiereBundle:EstDispense')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EstDispense entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SchoolMatiereBundle:EstDispense:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing EstDispense entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolMatiereBundle:EstDispense')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EstDispense entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SchoolMatiereBundle:EstDispense:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a EstDispense entity.
    *
    * @param EstDispense $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(EstDispense $entity)
    {
        $form = $this->createForm(new EstDispenseType(), $entity, array(
            'action' => $this->generateUrl('estdispense_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing EstDispense entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolMatiereBundle:EstDispense')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EstDispense entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('estdispense_edit', array('id' => $id)));
        }

        return $this->render('SchoolMatiereBundle:EstDispense:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a EstDispense entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SchoolMatiereBundle:EstDispense')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EstDispense entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('estdispense'));
    }

    /**
     * Creates a form to delete a EstDispense entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estdispense_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
