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


    public function statistiquesAction($idSequence, $idMatiere, $idEnseignant){
        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->select('e')
            ->from('SchoolMatiereBundle:EstDispense', 'e')
            ->innerJoin('SchoolUserBundle:User', 'u', 'WITH', 'e.enseignant = u.id')
            ->innerJoin('SchoolMatiereBundle:Matiere', 'm', 'WITH', 'e.matiere = m.id')
            ->where('u.id = :idEnseignant')
            ->andWhere('m.id = :idMatiere')
            ->setParameters(array(
                'idEnseignant' => $idEnseignant,
                'idMatiere' => $idMatiere,
            ));
        $enseignements = $qb->getQuery()->getResult();
        $classes = array();
        $garcons = array();
        $filles = array();
        foreach($enseignements as $en){
            $class =$en->getClasse()->getId();
            $qb1 = $em->createQueryBuilder();
            $qb2 = $em->createQueryBuilder();
            $qb3 = $em->createQueryBuilder();

            $qb1->select('COUNT(i)')
                ->from('SchoolStudentBundle:Inscription', 'i')
                ->innerJoin('SchoolStudentBundle:Classe', 'c', 'WITH', 'i.classe = c.id')
                ->where('c.id = :idClasse')
                ->setParameter(
                    'idClasse', $class);
            $inc = $qb1->getQuery()->getSingleScalarResult();
            array_push($classes, $inc);

            /*Requete pour avoir le nombre de garçons dans une classe*/

            $qb2->select('COUNT(s)')
                ->from('SchoolStudentBundle:Student', 's')
                ->innerJoin('SchoolStudentBundle:Inscription', 'i', 'WITH', 'i.student = s.id')
                ->innerJoin('SchoolStudentBundle:Classe', 'c', 'WITH', 'i.classe = c.id')
                ->where('c.id = :idClasse')
                ->andwhere('s.sexe = :idSexe')
                ->setParameters(array(
                        'idClasse'=> $class,
                        'idSexe'=> 1,
                    )
                );
            $nombreGarcons = $qb2->getQuery()->getSingleScalarResult();
            array_push($garcons, $nombreGarcons);

            $qb3->select('COUNT(s)')
                ->from('SchoolStudentBundle:Student', 's')
                ->innerJoin('SchoolStudentBundle:Inscription', 'i', 'WITH', 'i.student = s.id')
                ->innerJoin('SchoolStudentBundle:Classe', 'c', 'WITH', 'i.classe = c.id')
                ->where('c.id = :idClasse')
                ->andwhere('s.sexe = :idSexe')
                ->setParameters(array(
                        'idClasse'=> $class,
                        'idSexe'=> 2,
                    )
                );
            $nombreFilles = $qb3->getQuery()->getSingleScalarResult();
            array_push($filles, $nombreFilles);
        }



        $sequence = $em->getRepository('SchoolNoteBundle:Sequence')->find($idSequence);

        return $this->render('SchoolNoteBundle:Evaluation:statistiques.html.twig', array(
            'enseignements' => $enseignements,
            'sequence' => $sequence,
            'classes' => $classes,
            'nombreGarcons' => $garcons,
            'filles' => $filles,
        ));
    }

    public function bulletinsAction($idSequence, $idClasse, $idStudent){
        $em = $this->getDoctrine()->getManager();


        $constante = $em->getRepository('SchoolConfigBundle:Constante')->find(1);
        $ecole = $em->getRepository('SchoolConfigBundle:Ecole')->find(1);
        $classe = $em->getRepository('SchoolStudentBundle:Classe')->find($idClasse);
        $sequence = $em->getRepository('SchoolNoteBundle:Sequence')->find($idSequence);
        $eleve = $em->getRepository('SchoolStudentBundle:Student')->find($idStudent);

        /*##### Effectif de la classe ######### */

        $qb1 = $em->createQueryBuilder();
        $qb1->select('COUNT(s)')
            ->from('SchoolStudentBundle:Student', 's')
            ->innerJoin('SchoolStudentBundle:Inscription', 'i', 'WITH', 'i.student = s.id')
            ->innerJoin('SchoolStudentBundle:Classe', 'c', 'WITH', 'i.classe = c.id')
            ->where('c.id = :idClasse')
            ->setParameters(array(
                    'idClasse'=> $idClasse,));
        $effectif = $qb1->getQuery()->getSingleScalarResult();

        /*#### liste des élèves de la classe  ##########*/
        /*$qb2 = $em->createQueryBuilder();
        $qb2->select('s')
            ->from('SchoolStudentBundle:Student', 's')
            ->innerJoin('SchoolStudentBundle:Inscription', 'i', 'WITH', 'i.student = s.id')
            ->innerJoin('SchoolStudentBundle:Classe', 'c', 'WITH', 'i.classe = c.id')
            ->where('c.id = :idClasse')
            ->setParameters(array(
                'idClasse'=> $idClasse,));
        $listeEleves = $qb2->getQuery()->getResult();*/

        /*#### liste des enseignements de la classe  ##########*/
        /*  $qb3 = $em->createQueryBuilder();
          $qb3->select('ed')
              ->from('SchoolMatiereBundle:EstDispense', 'ed')
              ->innerJoin('SchoolMatiereBundle:Matiere', 'm', 'WITH', 'ed.matiere = m.id')
              ->innerJoin('SchoolStudentBundle:Classe', 'c', 'WITH', 'ed.classe = c.id')
              ->where('c.id = :idClasse')
              ->setParameters(array(
                  'idClasse'=> $idClasse,));
          $listeEnseignements = $qb3->getQuery()->getResult();*/

        /*#### liste des notes de la classe  ##########*/
        $qb4 = $em->createQueryBuilder();
        $qb4->select('ev')
            ->from('SchoolNoteBundle:Evaluation', 'ev')
            ->innerJoin('SchoolStudentBundle:Student', 'st', 'WITH', 'ev.student = st.id')
            ->innerJoin('SchoolNoteBundle:Sequence', 'se', 'WITH', 'ev.sequence = se.id')
            ->innerJoin('SchoolMatiereBundle:Matiere', 'ma', 'WITH', 'ev.matiere = ma.id')
            ->innerJoin('SchoolStudentBundle:Inscription', 'ins', 'WITH', 'ins.student = st.id')
            ->innerJoin('SchoolStudentBundle:Classe', 'cl', 'WITH', 'ins.classe = cl.id')
            ->innerJoin('SchoolMatiereBundle:EstDispense', 'ed', 'WITH', 'ed.matiere = ma.id')
            ->innerJoin('SchoolUserBundle:User', 'us', 'WITH', 'us.id= ed.enseignant')
            ->where('se.id = :idSequence')
            ->andWhere('cl.id = :idClasse')
            ->andWhere('st.id = :idStudent')
            ->setParameters(array(
                'idClasse'=> $idClasse,
                'idStudent'=> $idStudent,
                'idSequence'=> $idSequence,
            ));
        $notes = $qb4->getQuery()->getResult();
      //  die($notes[0]);


         return $this->render('SchoolNoteBundle:Evaluation:bulletins.html.twig', array(
             'constante' => $constante,
             'ecole' => $ecole,
             'sequence' => $sequence,
             'classe' => $classe,
             'effectif' => $effectif,
           //  'eleves' => $listeEleves,
             'eleve' => $eleve,
            // 'enseignements' => $listeEnseignements,
             'evaluations' => $notes,
         ));
    }

    /**
     * Creates a new Note entity.
     */
    public function noteAction(Request $request, $id, $idSeq, $idMat){

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
        if($request->getMethod() =='POST'){
            foreach($eleves as $elev){
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
                if($evaluationExist){
                }else {
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
    public function editnoteAction(Request $request, $id, $idSeq, $idMat){

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
            ->setParameters(array('identifie'=>$id,'idMat'=>$idMat,'idSeq'=>$idSeq));
        $evaluations = $qb1->getQuery()->getResult();

        /*  if($request->getMethod() =='POST') {
              foreach ($evaluations as $eval) {
                  $note = $this->get('request')->get($eval->getStudent()->getId());
                  if($note){
                      $eval->setNote($note);
                      $eval->setSequence($sequence);
                      $eval->setStudent($eval->getStudent());
                      $eval->setMatiere($matiere);
                      $eval->setAnnee('2016/2017');
                      //  $em->persist($eval);
                      $em->flush();
                  }
              }
              return $this->redirect($this->generateUrl('school_gestion_homepage'));
          }*/

        return $this->render('SchoolNoteBundle:Evaluation:editnotes.html.twig', array(
            'classe' => $classe,
            'sequence' => $sequence,
            'matiere' => $matiere,
            'evaluations' => $evaluations,
        ));
    }

    public function insererNoteAction(Request $request, $idClasse, $idNote)
    {
        $em = $this->getDoctrine()->getManager();

        $evaluation = $em->getRepository('SchoolNoteBundle:Evaluation')->find($idNote);

        if ($request->getMethod() == 'POST') {
            //!ctype_digit($note)
            $note = $this->get('request')->get('note');
            if ((!is_float($note + 0.0) && !ctype_digit($note)) || ($note < 0 || $note > 20)) {
                $request->getSession()->getFlashBag()->add('notice', 'Valeur incorecte');
            } else if (!ctype_digit($note)) {
                $request->getSession()->getFlashBag()->add('notice', 'Valeur incorecte');
            } else {
                $evaluation->setNote($note);
                $em->flush();
            }
            return $this->redirect($this->generateUrl('note_editnote', array(
                'id' => $idClasse,
                'idSeq' => $evaluation->getSequence()->getId(),
                'idMat' => $evaluation->getMatiere()->getId(),
            )));
        }
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

























