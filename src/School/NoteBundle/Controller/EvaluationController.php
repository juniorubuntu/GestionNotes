<?php

namespace School\NoteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use School\NoteBundle\Entity\Evaluation;
use School\ConfigBundle\Entity\Ecole;
use School\NoteBundle\Form\EvaluationType;

/**
 * Evaluation controller.
 *
 * 
 */
class EvaluationController extends Controller {

    /**
     * Lists all Evaluation entities.
     *
     * 
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SchoolNoteBundle:Evaluation')->findAll();

        return $this->render('SchoolNoteBundle:Evaluation:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * 
     */
    public function createAction(Request $request) {
        $entity = new Evaluation();
        $ecole = $this->getDoctrine()->getRepository('SchoolConfigBundle:Ecole')->findAll();
        $entity->setAnnee($ecole[0]->getAnneeEnCour());
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);


        if ($form->isValid()) {

            $entity->setAnnee($ecole[0]->getAnneeEnCour());

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('evaluation_show', array('id' => $entity->getId())));
        }

        return $this->render('SchoolNoteBundle:Evaluation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new Note entity.
     */
    public function noteAction(Request $request, $id, $idSeq, $idMat) {

        $em = $this->getDoctrine()->getManager();

        $classe = $em->getRepository('SchoolStudentBundle:Classe')->find($id);
        $sequence = $em->getRepository('SchoolNoteBundle:Sequence')->find($idSeq);
        $matiere = $em->getRepository('SchoolMatiereBundle:Matiere')->find($idMat);

        $qb = $this->getDoctrine()->getManager()->createQueryBuilder();
        $qb1 = $this->getDoctrine()->getManager()->createQueryBuilder();
        $qb->select('s')
                ->from('SchoolStudentBundle:Student', 's')
                ->innerJoin('SchoolStudentBundle:Inscription', 'i', 'WITH', 'i.student = s.id')
                ->innerJoin('SchoolStudentBundle:Classe', 'c', 'WITH', 'i.classe = c.id')
                ->where('c.id = :identifie')
                ->setParameter('identifie', $id);

        $qb1->select('e')
                ->from('SchoolNoteBundle:Evaluation', 'e')
                ->innerJoin('SchoolMatiereBundle:Matiere', 'm', 'WITH', 'm.id = e.matiere')
                ->innerJoin('SchoolStudentBundle:Student', 's', 'WITH', 's.id = e.student')
                ->innerJoin('SchoolStudentBundle:Inscription', 'i', 'WITH', 's.id = i.student')
                ->innerJoin('SchoolStudentBundle:Classe', 'c', 'WITH', 'i.classe = c.id')
                ->where('c.id = :identifie')
                ->setParameter('identifie', $id);
        $notes = $qb1->getQuery()->getResult();

        $eleves = $qb->getQuery()->getResult();
        if ($request->getMethod() == 'POST') {
            foreach ($eleves as $elev) {
                $qbEvaluation = $this->getDoctrine()->getManager()->createQueryBuilder();
                $qbEvaluation->select('e')
                        ->from('SchoolNoteBundle:Evaluation', 'e')
                        ->where('e.sequence = :idSequence')
                        ->andWhere('e.student = :idEleve')
                        ->andWhere('e.matiere = :idMatiere')
                        ->setParameters(array(
                            'idEleve' => $elev->getId(),
                            'idSequence' => $idSeq,
                            'idMatiere' => $idMat
                ));
                $evaluationExist = $qbEvaluation->getQuery()->getResult();
                if ($evaluationExist) {
                    
                } else {
                    $evaluation = new Evaluation();
                    $note = $this->get('request')->get($elev->getId());
                    $evaluation->setNote($note);
                    $evaluation->setSequence($sequence);
                    $evaluation->setStudent($elev);
                    $evaluation->setMatiere($matiere);
                    $evaluation->setAnnee('2016/2017');
                    $em->persist($evaluation);
                    $em->flush();
                }
            }
            return $this->redirect($this->generateUrl('school_gestion_homepage'));
        }

        return $this->render('SchoolNoteBundle:Evaluation:notes.html.twig', array(
                    'classe' => $classe,
                    'sequence' => $sequence,
                    'matiere' => $matiere,
                    'eleves' => $eleves,
                    'notes' => $notes,
        ));
    }

    /**
     * Creates a new Note entity.
     */
    public function editnoteAction(Request $request, $id, $idSeq, $idMat) {

        $em = $this->getDoctrine()->getManager();

        $classe = $em->getRepository('SchoolStudentBundle:Classe')->find($id);
        $sequence = $em->getRepository('SchoolNoteBundle:Sequence')->find($idSeq);
        $matiere = $em->getRepository('SchoolMatiereBundle:Matiere')->find($idMat);

        $qb1 = $this->getDoctrine()->getManager()->createQueryBuilder();

        $qb1->select('e')
                ->from('SchoolNoteBundle:Evaluation', 'e')
                ->innerJoin('SchoolMatiereBundle:Matiere', 'm', 'WITH', 'm.id = e.matiere')
                ->innerJoin('SchoolStudentBundle:Student', 's', 'WITH', 's.id = e.student')
                ->innerJoin('SchoolStudentBundle:Inscription', 'i', 'WITH', 's.id = i.student')
                ->innerJoin('SchoolStudentBundle:Classe', 'c', 'WITH', 'i.classe = c.id')
                ->where('c.id = :identifie')
                ->andWhere('e.matiere = :idMat')
                ->andWhere('e.sequence = :idSeq')
                ->setParameters(array('identifie' => $id, 'idMat' => $idMat, 'idSeq' => $idSeq));
        $evaluations = $qb1->getQuery()->getResult();

        if ($request->getMethod() == 'POST') {
            foreach ($evaluations as $eval) {
                $note = $this->get('request')->get($eval->getStudent()->getId());
                if ($note) {
                    $eval->setNote($note);
                    $eval->setSequence($sequence);
                    $eval->setStudent($eval->getStudent());
                    $eval->setMatiere($matiere);
                    $eval->setAnnee('2016/2017');
                    //  $em->persist($eval);
                    $em->flush();
                    /* }else{
                      $eval = $em->getRepository('SchoolNoteBundle:Evaluation')->find($eval->getId());
                      if($eval->getNote()){
                      } */
                }
            }
            return $this->redirect($this->generateUrl('school_gestion_homepage'));
        }

        return $this->render('SchoolNoteBundle:Evaluation:editnotes.html.twig', array(
                    'classe' => $classe,
                    'sequence' => $sequence,
                    'matiere' => $matiere,
                    'evaluations' => $evaluations,
        ));
    }

    /**
     * Creates a form to create a Evaluation entity.
     *
     * 
     */
    private function createCreateForm(Evaluation $entity) {
        $form = $this->createForm(new EvaluationType(), $entity, array(
            'action' => $this->generateUrl('evaluation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Evaluation entity.
     *
     * 
     */
    public function newAction() {
        $entity = new Evaluation();
        $ecole = $this->getDoctrine()->getRepository('SchoolConfigBundle:Ecole')->findAll();
        $entity->setAnnee($ecole[0]->getAnneeEnCour());
        $form = $this->createCreateForm($entity);

        return $this->render('SchoolNoteBundle:Evaluation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Evaluation entity.
     *
     * 
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolNoteBundle:Evaluation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evaluation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SchoolNoteBundle:Evaluation:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Evaluation entity.
     *
     * 
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolNoteBundle:Evaluation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evaluation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SchoolNoteBundle:Evaluation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Evaluation entity.
     *
     * 
     */
    private function createEditForm(Evaluation $entity) {
        $form = $this->createForm(new EvaluationType(), $entity, array(
            'action' => $this->generateUrl('evaluation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Evaluation entity.
     *
     * 
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SchoolNoteBundle:Evaluation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evaluation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('evaluation_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Evaluation entity.
     *
     * 
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SchoolNoteBundle:Evaluation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Evaluation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('evaluation'));
    }

    /**
     * Creates a form to delete a Evaluation entity by id.
     *
     * 
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('evaluation_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
