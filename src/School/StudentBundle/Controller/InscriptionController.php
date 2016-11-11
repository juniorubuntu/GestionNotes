<?php

namespace School\StudentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use School\StudentBundle\Form\InscriptionType;
use School\StudentBundle\Form\InscriptionEditType;

/**
 * Inscription controller.
 *
 * @Route("/inscription")
 */
class InscriptionController extends Controller {

    /**
     * Lists all Inscription entities.
     *
     * @Route("/", name="inscription")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SchoolStudentBundle:Inscription')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Inscription entity.
     *
     * @Route("/", name="inscription_create")
     * @Method("POST")
     * @Template("SchoolStudentBundle:Inscription:new.html.twig")
     */
    public function createAction(Request $request) {
        $entity = new Inscription();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $evaluation = $em->getRepository('SchoolStudentBundle:Inscription')->findOneBy(array('student'=>$entity->getStudent()->getId()));
            if($evaluation){
                $request->getSession()->getFlashBag()->add('notice', 'Elève deja inscrit.');
            }else {
                $entity->setAnnee(date('Y') . '/' . date('Y', time() + (24 * 3600 * 366)));
                $entity->setDateDerniereAvance(new \DateTime(date('Y-m-d')));

                $em->persist($entity);
                $em->flush();
                return $this->redirect($this->generateUrl('inscription_show', array('id' => $entity->getId())));
            }
        }
        return  array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
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
     * @Route("/new", name="inscription_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction() {
        $entity = new Inscription();
        $form = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Inscription entity.
     *
     * @Route("/{id}", name="inscription_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolStudentBundle:Inscription')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Inscription entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Inscription entity.
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolStudentBundle:Inscription')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Inscription entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
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

        $form->add('submit', 'submit', array('label' => 'Update',
                'attr' => array('class' => 'btn btn-primary col-md-offset-4 col-sm-offset-4 col-xs-offset-4 col-md-2 col-sm-5 col-xs-5')));

        return $form;
    }

    /**
     * Edits an existing Inscription entity.
     *
     * @Template("SchoolStudentBundle:Inscription:edit.html.twig")
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
            $request->getSession()->getFlashBag()->add('notice', 'le formulaire est incomplet.');
            $em->flush();
            return $this->redirect($this->generateUrl('inscription'));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Inscription entity.
     *
     * @Route("/{id}", name="inscription_delete")
     * @Method("DELETE")
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
