<?php

namespace School\NoteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use School\NoteBundle\Entity\Evaluation;
use School\ConfigBundle\Entity\Ecole;
use School\NoteBundle\Form\EvaluationType;
use Symfony\Component\HttpFoundation\Response;

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
            $entity->setClasse($entity->getStudent()->getClasse());
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


    public function infoStatistiquesAction($idSequence, $idMatiere, $idEnseignant){
        $em = $this->getDoctrine()->getManager();

        $school = $em->getRepository('SchoolConfigBundle:Ecole')->findAll();

        $sequence = $em->getRepository('SchoolNoteBundle:Sequence')->find($idSequence);
        $matiere = $em->getRepository('SchoolMatiereBundle:Matiere')->find($idMatiere);
        $enseignant = $em->getRepository('SchoolUserBundle:User')->find($idEnseignant);


        $listeEnseignements = $em->getRepository('SchoolMatiereBundle:EstDispense')->findBy(array(
            'annee' => $school[0]->getAnneeEnCour(),
            'enseignant' => $enseignant,
            'matiere' => $matiere,

        ));

        return $this->render('SchoolNoteBundle:Evaluation:formulaireStatistique.html.twig', array(
            'sequence' => $sequence,
            'matiere' => $matiere,
            'enseignant' => $enseignant,
            'enseignements' => $listeEnseignements,
        ));
    }

    /**
     * Creates a new Note entity.
     */
    public function noteAction(Request $request, $id, $idSeq, $idMat, $idAnnee) {

        $em = $this->getDoctrine()->getManager();

        $classe = $em->getRepository('SchoolStudentBundle:Classe')->find($id);
        $sequence = $em->getRepository('SchoolNoteBundle:Sequence')->find($idSeq);
        $matiere = $em->getRepository('SchoolMatiereBundle:Matiere')->find($idMat);
        $anneeEnCour = $em->getRepository('SchoolConfigBundle:Annee')->find($idAnnee);



        $subQueryBuilder = $em->createQueryBuilder();
        $subQuery = $subQueryBuilder
                ->select('IDENTITY(e.student)')
                ->from('SchoolNoteBundle:Evaluation', 'e')
                ->where('e.annee= :annee')
                ->andWhere('e.sequence= :sequence')
                ->andWhere('e.matiere= :matiere')
                ->setParameters(array(
                    'annee' => $anneeEnCour,
                    'sequence' => $sequence,
                    'matiere' => $matiere,
                ))
                ->getQuery()
                ->getArrayResult();
        if (!$subQuery) {
            $qb = $this->getDoctrine()->getManager()->createQueryBuilder();

            $qb->select('s')
                    ->from('SchoolStudentBundle:Student', 's')
                    ->innerJoin('SchoolStudentBundle:Inscription', 'i', 'WITH', 'i.student = s.id')
                    ->innerJoin('SchoolStudentBundle:Classe', 'c', 'WITH', 'i.classe = c.id')
                    ->where('c.id = :identifie')
                    ->setParameter('identifie', $id);
            $eleves = $qb->getQuery()->getResult();
        } else {

            $queryBuilder = $em->createQueryBuilder();
            $query = $queryBuilder
                    ->select('s')
                    ->from('SchoolStudentBundle:Student', 's')
                    ->innerJoin('SchoolStudentBundle:Inscription', 'i', 'WITH', 'i.student = s.id')
                    ->innerJoin('SchoolStudentBundle:Classe', 'c', 'WITH', 'i.classe = c.id')
                    ->where('c.id = :idClasse')
                    ->andWhere($queryBuilder->expr()->notIn('s.id', ':subQuery'))
                    ->setParameters(array(
                        'subQuery' => $subQuery,
                        'idClasse' => $id,
                    ))
                    ->getQuery();

            $eleves = $query->getResult();
        }

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
                    $evaluation->setAnnee($anneeEnCour);
                    $evaluation->setClasse($classe);
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
                    'annee' => $anneeEnCour,
                    'eleves' => $eleves,
        ));
    }

    /**
     * Creates a new Note entity.
     */
    public function editnoteAction(Request $request, $id, $idSeq, $idMat, $idAnnee) {

        $em = $this->getDoctrine()->getManager();

        $classe = $em->getRepository('SchoolStudentBundle:Classe')->find($id);
        $sequence = $em->getRepository('SchoolNoteBundle:Sequence')->find($idSeq);
        $matiere = $em->getRepository('SchoolMatiereBundle:Matiere')->find($idMat);
        $anneeEnCour = $em->getRepository('SchoolConfigBundle:Annee')->find($idAnnee);

        $school = $this->getDoctrine()->getRepository('SchoolConfigBundle:Ecole')->findAll();
        $ecole = $school[0];

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
                    $eval->setAnnee($ecole->getAnneeEnCour());
                    $eval->setClasse($classe);
                    $em->flush();
                }
            }
            return $this->redirect($this->generateUrl('school_gestion_homepage'));
        }

        return $this->render('SchoolNoteBundle:Evaluation:editnotes.html.twig', array(
                    'classe' => $classe,
                    'sequence' => $sequence,
                    'matiere' => $matiere,
                    'annee' => $anneeEnCour,
                    'evaluations' => $evaluations,
        ));
    }

    public function insererNoteAction(Request $request, $idNote, $idClasse, $idAnnee) {
        $em = $this->getDoctrine()->getManager();

        if ($request->getMethod() == 'POST') {
            $evaluation = $em->getRepository('SchoolNoteBundle:Evaluation')->find($idNote);
            $note = $request->get('note');
            if ($note < 0 || $note > 20) {
                $request->getSession()->getFlashBag()->add('error', 'Valeur incorecte');
            } else if (is_float($note + 0.0) && is_numeric($note)) {
                $evaluation->setNote($note);
                $em->flush();
            } else if (!(ctype_digit($note))) {
                $request->getSession()->getFlashBag()->add('error', 'Valeur incorecte');
            } else {
                //Dans le cas o� tous les tests ne sont pas satisfaisants
                $evaluation->setNote($note);
                $em->flush();
            }

            return $this->redirect($this->generateUrl('note_editnote', array(
                                'id' => $idClasse,
                                'idSeq' => $evaluation->getSequence()->getId(),
                                'idMat' => $evaluation->getMatiere()->getId(),
                                'idAnnee' => $idAnnee,
            )));
        }
    }



    public  function  statistiquesSequenceAction(Request $request, $idSequence, $idMatiere, $idEnseignant){

        $em = $this->getDoctrine()->getManager();

        //$school = $this->getDoctrine()->getRepository('SchoolConfigBundle:Ecole')->findAll();
        $constante = $em->getRepository('SchoolConfigBundle:Constante')->findAll();
        //$ecole = $school[0];

        $school = $em->getRepository('SchoolConfigBundle:Ecole')->findAll();

        $sequence = $em->getRepository('SchoolNoteBundle:Sequence')->find($idSequence);
        $matiere = $em->getRepository('SchoolMatiereBundle:Matiere')->find($idMatiere);
        $enseignant = $em->getRepository('SchoolUserBundle:User')->find($idEnseignant);


        $listeEnseignements = $em->getRepository('SchoolMatiereBundle:EstDispense')->findBy(array(
            'annee' => $school[0]->getAnneeEnCour(),
            'enseignant' => $enseignant,
            'matiere' => $matiere,

        ));
        if($request->getMethod() == "POST"){
            $date = [];
            $date[] = $request->get('dateDebut');
            $date[] = $request->get('dateFin');
            $compteurTotalMoyenne = 0;
            $compteurTotalEvaluations = 0;
            foreach ($listeEnseignements as $enseignement) {
                $qb2 = $em->createQueryBuilder();
                $qb2->select('s')
                    ->from('SchoolStudentBundle:Student', 's')
                    ->innerJoin('SchoolStudentBundle:Inscription', 'i', 'WITH', 'i.student = s.id')
                    ->innerJoin('SchoolStudentBundle:Classe', 'c', 'WITH', 'i.classe = c.id')
                    ->innerJoin('SchoolMatiereBundle:EstDispense', 'e', 'WITH', 'e.classe = c.id')
                    ->innerJoin('SchoolStudentBundle:Sexe', 'se', 'WITH', 'se.id = s.sexe')
                    ->where('i.annee= :anneeEnCour')
                    ->andWhere('c.id = :idClasse')
                    ->andWhere('se.nom = :sexe')
                    ->setParameters(array(
                        'anneeEnCour' => $enseignement->getAnnee(),
                        'idClasse' => $enseignement->getClasse()->getId(),
                        'sexe' => 'FEMININ',
                    ));
                $filles = $qb2->getQuery()->getResult();

                $qb1 = $em->createQueryBuilder();
                $qb1->select('s')
                    ->from('SchoolStudentBundle:Student', 's')
                    ->innerJoin('SchoolStudentBundle:Inscription', 'i', 'WITH', 'i.student = s.id')
                    ->innerJoin('SchoolStudentBundle:Classe', 'c', 'WITH', 'i.classe = c.id')
                    ->innerJoin('SchoolMatiereBundle:EstDispense', 'e', 'WITH', 'e.classe = c.id')
                    ->innerJoin('SchoolStudentBundle:Sexe', 'se', 'WITH', 'se.id = s.sexe')
                    ->where('i.annee= :anneeEnCour')
                    ->andWhere('c.id = :idClasse')
                    ->andWhere('se.nom = :sexe')
                    ->setParameters(array(
                        'anneeEnCour' => $enseignement->getAnnee(),
                        'idClasse' => $enseignement->getClasse()->getId(),
                        'sexe' => 'MASCULIN',
                    ));
                $garcons = $qb1->getQuery()->getResult();

                $enseignement->setNbreFilles(count($filles));
                $enseignement->setNbreGarcons(count($garcons));

                $enseignement->setNbreHeures($request->get($enseignement->getId() . "-heures"));
                $enseignement->setNbreLecons($request->get($enseignement->getId() . "-lecons"));
                $evaluations = [];
                $evaluations = $em->getRepository('SchoolNoteBundle:Evaluation')->findBy(array(
                    'sequence' => $sequence,
                    'matiere' => $matiere,
                    'annee' => $school[0]->getAnneeEnCour(),
                    'classe' => $enseignement->getClasse(),
                ));
                $compt = 0;
                $comptGarcons = 0;
                $comptFilles = 0;
                $moyenneGenerale = 0;

                $compteur0_999 = 0;
                $compteur10_1199 = 0;
                $compteur12_1399 = 0;
                $compteur14_1599 = 0;
                $compteur16_20 = 0;
                $listeNotes = [];
                foreach ($evaluations as $moy) {
                    if ($moy->getNote() >= 10) {
                        $compt += 1;
                        if ($moy->getStudent()->getSexe() == "MASCULIN") {
                            $comptGarcons += 1;
                        } else {
                            $comptFilles += 1;
                        }
                    }
                    $moyenneGenerale = $moyenneGenerale + $moy->getNote();
                    //Gestion des intervalles de notes
                    if ($moy->getNote() >= 16) {
                        $compteur16_20 += 1;
                    } else if ($moy->getNote() < 16 && $moy->getNote() >= 14) {
                        $compteur14_1599 += 1;
                    } else if ($moy->getNote() < 14 && $moy->getNote() >= 12) {
                        $compteur12_1399 += 1;
                    } else if ($moy->getNote() < 12 && $moy->getNote() >= 10) {
                        $compteur10_1199 += 1;
                    } else if ($moy->getNote() < 10 && $moy->getNote() >= 0) {
                        $compteur0_999 += 1;
                    }
                }
                $compteurTotalMoyenne += $compt;
                $compteurTotalEvaluations += count($evaluations);

                $enseignement->setCompteurFilles($comptFilles);
                $enseignement->setCompteurGarcons($comptGarcons);
                $enseignement->setNbreEvaluations(count($evaluations));
                if (count($evaluations) != 0) {
                    $enseignement->setMoyenneGenerale($moyenneGenerale / count($evaluations));
                }
                $listeNotes[] = $compteur16_20;
                $listeNotes[] = $compteur14_1599;
                $listeNotes[] = $compteur12_1399;
                $listeNotes[] = $compteur10_1199;
                $listeNotes[] = $compteur0_999;

                $enseignement->setListeNotes($listeNotes);
                $listeNotes = [];
            }
        }

        $html = $this->renderView('SchoolNoteBundle:Evaluation:statistiques.html.twig', array(
            'sequence' => $sequence,
            'date' => $date,
            'matiere' => $matiere,
            'ecole' => $school[0],
            'pays' => $constante[0],
            'enseignant' => $enseignant,
            'enseignements' => $listeEnseignements,
            'nbreMoyennes' => $compteurTotalMoyenne,
            'nbreEvaluations' => $compteurTotalEvaluations,

        ));

        $html2pdf = new \Html2Pdf_Html2Pdf('L', 'A4', 'fr');
        $html2pdf->pdf->SetAuthor('GreenSoft-Team');
        $html2pdf->pdf->SetTitle('Statistiques '.$enseignant->getNom().' '.$sequence->getNom());
        $html2pdf->pdf->SetSubject('Statitiques Sequentiel');
        $html2pdf->pdf->SetKeywords('Classe, Enseignant, Matiere, Sequence');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);

        $content = $html2pdf->Output('', true);
        $response = new Response();
        $response->setContent($content);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-disposition', 'filename=StatistiquesSequentiels.pdf');
        return $response;
    }



    public function exportationNotesAction($idEnseignement, $idSequence){
        $em = $this->getDoctrine()->getManager();

        $school = $this->getDoctrine()->getRepository('SchoolConfigBundle:Ecole')->findAll();
        $constante = $this->getDoctrine()->getRepository('SchoolConfigBundle:Constante')->findAll();

        $sequence = $em->getRepository('SchoolNoteBundle:Sequence')->find($idSequence);

        $enseignement = $em->getRepository('SchoolMatiereBundle:EstDispense')->find($idEnseignement);

        $evaluations= $em->getRepository('SchoolNoteBundle:Evaluation')->findBy(array(
            'sequence' => $sequence,
            'classe' => $enseignement->getClasse(),
            'matiere' => $enseignement->getMatiere(),
            'annee' => $enseignement->getAnnee(),
        ),
            array(
                'student' => 'DESC',
            )
        );

        $html = $this->renderView('SchoolNoteBundle:Bulletin:notesPdf.html.twig', array(
            'sequence' => $sequence,
            'enseignement' => $enseignement,
            'evaluations' => $evaluations,
            'ecole' => $school[0],
            'pays' => $constante[0],
        ));

        $html2pdf = new \Html2Pdf_Html2Pdf('P', 'A4', 'fr');
        $html2pdf->pdf->SetAuthor('GreenSoft-Team');
        $html2pdf->pdf->SetTitle('Notes '.$enseignement->getMatiere()->getNom().' '.$sequence->getNom());
        $html2pdf->pdf->SetSubject('Notes Sequentielles');
        $html2pdf->pdf->SetKeywords('Classe, Enseignementt, Matiere, Sequence, Annee');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);

        $content = $html2pdf->Output('', true);
        $response = new Response();
        $response->setContent($content);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-disposition', 'filename=NotesSequentiels.pdf');
        return $response;
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
