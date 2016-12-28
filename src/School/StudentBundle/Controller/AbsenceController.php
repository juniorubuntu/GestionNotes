<?php

namespace School\StudentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use School\StudentBundle\Entity\Absence;
use School\StudentBundle\Form\AbsenceType;

/**
 * Absence controller.
 *
 */
class AbsenceController extends Controller {

    /**
     * Lists all Absence entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SchoolStudentBundle:Absence')->findAll();

        return $this->render('SchoolStudentBundle:Absence:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Absence entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Absence();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('absence_show', array('id' => $entity->getId())));
        }

        return $this->render('SchoolStudentBundle:Absence:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Absence entity.
     *
     * @param Absence $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Absence $entity) {
        $form = $this->createForm(new AbsenceType(), $entity, array(
            'action' => $this->generateUrl('absence_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Absence entity.
     *
     */
    public function newAction() {
        $entity = new Absence();
        $form = $this->createCreateForm($entity);

        return $this->render('SchoolStudentBundle:Absence:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Absence entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolStudentBundle:Absence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Absence entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SchoolStudentBundle:Absence:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Absence entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolStudentBundle:Absence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Absence entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SchoolStudentBundle:Absence:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Absence entity.
     *
     * @param Absence $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Absence $entity) {
        $form = $this->createForm(new AbsenceType(), $entity, array(
            'action' => $this->generateUrl('absence_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Absence entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolStudentBundle:Absence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Absence entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('absence_edit', array('id' => $id)));
        }

        return $this->render('SchoolStudentBundle:Absence:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Absence entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SchoolStudentBundle:Absence')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Absence entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('absence'));
    }

    /**
     * Creates a form to delete a Absence entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('absence_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    public function absenceClasseAction($idClasse, $idSeq) {
        $em = $this->getDoctrine();
        $school = $em->getRepository('SchoolConfigBundle:Ecole')->findAll();
        $anneeEnCours = $school[0]->getAnneeEnCour();

        $classe = $em->getRepository('SchoolStudentBundle:Classe')
                ->find($idClasse);
        $sequence = $em->getRepository('SchoolNoteBundle:Sequence')
                ->find($idSeq);

        $listEleve = $em->getRepository('SchoolStudentBundle:Inscription')
                ->findBy(
                array(
                    'classe' => $classe,
                    'annee' => $anneeEnCours
                )
        );
        foreach ($listEleve as $eleve) {
            $abs = $em->getRepository('SchoolStudentBundle:Absence')
                    ->findOneBy(
                    array(
                        'student' => $eleve,
                        'anneeScolaire' => $anneeEnCours,
                        'sequence' => $sequence
                    )
            );
            if ($abs != NULL) {
                $eleve->setNbreAbsence($abs->getNbreAbsence());
            }
        }

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            foreach ($listEleve as $eleve) {
                $absence = $em->getRepository('SchoolStudentBundle:Absence')
                        ->findOneBy(
                        array(
                            'student' => $eleve,
                            'anneeScolaire' => $anneeEnCours,
                            'sequence' => $sequence
                        )
                );
                if ($absence != NULL) {
                    $absence->setUpNbreAbsence($_POST['el_' . $eleve->getId()]);
                    $em->getManager()->flush();
                } else {
                    $absence = new Absence();
                    $absence->setStudent($eleve);
                    $absence->setAnneeScolaire($anneeEnCours);
                    $absence->setSequence($sequence);
                    $absence->setUpNbreAbsence($_POST['el_' . $eleve->getId()]);
                    $em->getManager()->persist($absence);
                    $em->getManager()->flush();
                }
            }
            return $this->redirect($this->generateUrl('absence'));
        }

        return $this->render('SchoolStudentBundle:Absence:absenceClasse.html.twig', array(
                    'listEleves' => $listEleve,
                    'sequence' => $sequence,
                    'annee' => $anneeEnCours,
                    'classe' => $classe
        ));
    }

}
