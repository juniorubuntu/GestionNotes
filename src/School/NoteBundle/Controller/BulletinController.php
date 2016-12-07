<?php

namespace School\NoteBundle\Controller;

use School\MatiereBundle\Entity\Categorie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use School\NoteBundle\Entity\Evaluation;
use School\NoteBundle\Entity\Sequence;
use School\ConfigBundle\Entity\Ecole;
use School\ConfigBundle\Entity\Constante;
use School\StudentBundle\Entity\Inscription;
use School\MatiereBundle\Entity\EstDispense;
use School\MatiereBundle\Entity\Matiere;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of BulletinController
 *
 * @author atbr
 */
class BulletinController extends Controller {

    public function indexAction() {
        return $this->render('SchoolNoteBundle:Bulletin:bulletinSeq.html.twig');
    }

    public function bulletinStudentAction($idEleve, $idSeq, $idAnnee, $idClasse) {
        $school = $this->getDoctrine()->getRepository('SchoolConfigBundle:Ecole')->findAll();
        $constante = $this->getDoctrine()->getRepository('SchoolConfigBundle:Constante')->findAll();
        $ecole = $school[0];
        $pays = $constante[0];

        $eleve = $this->getDoctrine()->getRepository('SchoolStudentBundle:Student')->find($idEleve);
        $classe = $this->getDoctrine()->getRepository('SchoolStudentBundle:Classe')->find($idClasse);
        $sequence = $this->getDoctrine()->getRepository('SchoolNoteBundle:Sequence')->find($idSeq);
        $anneeScolaire = $this->getDoctrine()->getRepository('SchoolConfigBundle:Annee')->find($idAnnee);

        $Allstudent = $this->getDoctrine()->getRepository('SchoolStudentBundle:Inscription')->findBy(
            array(
                'classe' => $classe,
                'annee' => $anneeScolaire
            ));

        if (($eleve != NULL) && ($sequence != NULL) && ($anneeScolaire != NULL) && ($classe != NULL)) {

            $listCategorie = $this->getDoctrine()->getRepository('SchoolMatiereBundle:Categorie')->findAll();
            $dispense = $this->getDoctrine()->getRepository('SchoolMatiereBundle:EstDispense')
                ->findBy(
                    array(
                        'annee' => $anneeScolaire,
                        'classe' => $classe,
                    )
                );
            $listeMatieres = [];
            foreach ($listCategorie as $categorie) {
                foreach ($dispense as $enseign) {
                    if ($categorie == $enseign->getMatiere()->getCategorie()) {
                        $listeMatieres[] = $enseign->getMatiere();
                    }
                }
                foreach ($listeMatieres as $matiere) {
                    $matiere->setTaille(strlen($matiere->getNom()));
                    $evaluationSeq = $this->getDoctrine()->getRepository('SchoolNoteBundle:Evaluation')
                        ->findBy(
                            array(
                                'annee' => $anneeScolaire,
                                'student' => $eleve,
                                'sequence' => $sequence,
                                'matiere' => $matiere
                            )
                        );
                    foreach ($evaluationSeq as $note) {
                        $note->setIndex($this->getDoctrine()->getRepository('SchoolMatiereBundle:EstDispense')
                            ->findOneBy(array(
                                'annee' => $anneeScolaire,
                                'classe' => $classe,
                                'matiere' => $note->getMatiere()
                            )));
                        $matiere->setEvaluationSeq($evaluationSeq);
                    }
                    $categorie->setListeMatieres($listeMatieres);
                }
                $listeMatieres = [];
            }

            $titulaire = $this->getDoctrine()->getRepository('SchoolMatiereBundle:EstDispense')
                ->findOneBy(
                    array(
                        'annee' => $anneeScolaire,
                        'classe' => $classe,
                        'titulaire' => true
                    )
                )->getEnseignant();

            $html =  $this->renderView('SchoolNoteBundle:Bulletin:bulletins.html.twig', array(
                'ecole' => $ecole,
                'pays' => $pays,
                'listCategories' => $listCategorie,
                'student' => $eleve,
                'annee' => $anneeScolaire,
                'Allstudent' => $Allstudent,
                'titulaire' => $titulaire,
                'classe' => $classe,
            ));

            $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');
            $html2pdf->pdf->SetAuthor('GreenSoft');
            $html2pdf->pdf->SetTitle('Bulletin');
            $html2pdf->pdf->SetSubject('Bulletin Sequentiel');
            $html2pdf->pdf->SetKeywords('Classe, Elève, Bulletin, Notes, Séquence');
            $html2pdf->pdf->SetDisplayMode('real');
            $html2pdf->writeHTML($html);

            $content = $html2pdf->Output('', true);
            $response = new Response();
            $response->setContent($content);
            //$response->headers->set('Content-Type', 'application/force-download');
            $response->headers->set('Content-Type', 'application/pdf');
            $response->headers->set('Content-disposition', 'filename=BulletinsSequentiels.pdf');
            return $response;

        } else {
            return $this->render('SchoolNoteBundle:Error:error.html.twig');
        }
    }


    public function bulletinClasseAction($idSeq, $idAnnee, $idClasse) {
        $school = $this->getDoctrine()->getRepository('SchoolConfigBundle:Ecole')->findAll();
        $constante = $this->getDoctrine()->getRepository('SchoolConfigBundle:Constante')->findAll();
        $ecole = $school[0];
        $pays = $constante[0];
        $classe = $this->getDoctrine()->getRepository('SchoolStudentBundle:Classe')->find($idClasse);
        $sequence = $this->getDoctrine()->getRepository('SchoolNoteBundle:Sequence')->find($idSeq);
        $anneeScolaire = $this->getDoctrine()->getRepository('SchoolConfigBundle:Annee')->find($idAnnee);
        $AllstudentsteEleve = $this->getDoctrine()->getRepository('SchoolStudentBundle:Inscription')->findBy(
                array
                (
                    'classe' => $classe,
                    'annee' => $anneeScolaire
                )
            );
        $nbreEleve = count($AllstudentsteEleve);
        $listCategorie = [$nbreEleve];
        if (($sequence != NULL) && ($anneeScolaire != NULL) && ($classe != NULL)) {
            //$i = 0;
            //foreach ($AllstudentsteEleve as &$eleve) {
            $notes = [];
            for ($i = 0; $i < count($AllstudentsteEleve); $i++) {
                $listCategorie[$i] = $this->getDoctrine()->getRepository('SchoolMatiereBundle:Categorie')->findAll();
                $dispense = $this->getDoctrine()->getRepository('SchoolMatiereBundle:EstDispense')->findBy(
                        array(
                            'annee' => $anneeScolaire,
                            'classe' => $classe,
                        ));
                $listeMatieres = [];
                foreach ($listCategorie[$i] as $categorie) {
                    foreach ($dispense as $enseign) {
                        if ($categorie == $enseign->getMatiere()->getCategorie()) {
                            $listeMatieres[] = $enseign->getMatiere();
                        }
                    }
                    foreach ($listeMatieres as $matiere) {
                        $matiere->setTaille(strlen($matiere->getNom()));
                        $evaluationSeq = $this->getDoctrine()->getRepository('SchoolNoteBundle:Evaluation')
                            ->findBy(
                                array(
                                    'annee' => $anneeScolaire,
                                    'student' => $AllstudentsteEleve[$i]->getStudent(),
                                    'sequence' => $sequence,
                                    'matiere' => $matiere
                                )
                            );
                        foreach ($evaluationSeq as &$note) {
                            $note->setIndex($this->getDoctrine()->getRepository('SchoolMatiereBundle:EstDispense')
                                ->findOneBy(array(
                                    'annee' => $anneeScolaire,
                                    'classe' => $classe,
                                    'matiere' => $note->getMatiere()
                                )));
                            $matiere->setEvaluationSeq($evaluationSeq);
                        }
                        $categorie->setListeMatieres($listeMatieres);
                    }
                    $listeMatieres = [];
                }
                $notes[] =   $listCategorie[$i];
            }

            $titulaire = $this->getDoctrine()->getRepository('SchoolMatiereBundle:EstDispense')->findOneBy(
                    array(
                        'annee' => $anneeScolaire,
                        'classe' => $classe,
                        'titulaire' => true
                    )
                )->getEnseignant();

            $html = $this->renderView('SchoolNoteBundle:Bulletin:bulletinSeqClasse.html.twig', array(
                'ecole' => $ecole,
                'pays' => $pays,
                'annee' => $anneeScolaire,
                'Allstudent' => $AllstudentsteEleve,
                'titulaire' => $titulaire,
                'notes' => $notes,
                'sequence' => $sequence
            ));


            $html2pdf = new \Html2Pdf_Html2Pdf('P', 'A4', 'fr');
            $html2pdf->pdf->SetAuthor('GreenSoft-Team');
            $html2pdf->pdf->SetTitle('Bulletins' . ' ' . $sequence->getNom());
            $html2pdf->pdf->SetSubject('Bulletin Sequentiel');
            $html2pdf->pdf->SetKeywords('Classe, Elève, Bulletin, Notes, Séquence');
            $html2pdf->pdf->SetDisplayMode('real');
            $html2pdf->writeHTML($html);

            $content = $html2pdf->Output('', true);
            $response = new Response();
            $response->setContent($content);
            //$response->headers->set('Content-Type', 'application/force-download');
            $response->headers->set('Content-Type', 'application/pdf');
            $response->headers->set('Content-disposition', 'filename=Bulletins.pdf');
            return $response;
        }else {
            return $this->render('SchoolNoteBundle:Error:error.html.twig');
        }
    }

    public function performancesAction($idEleve){
        $student = $this->getDoctrine()->getRepository('SchoolStudentBundle:Student')->find($idEleve);

        if (($student != NULL)) {
            $listeInscriptions = $this->getDoctrine()->getRepository('SchoolStudentBundle:Inscription')->findBy( array(
                'student' => $student,
            ));

            $listSequences = $this->getDoctrine()->getRepository('SchoolNoteBundle:Sequence')->findAll();
            $listCategorie = $this->getDoctrine()->getRepository('SchoolMatiereBundle:Categorie')->findAll();
            foreach($listeInscriptions as $inscription) {
                $dispense = $this->getDoctrine()->getRepository('SchoolMatiereBundle:EstDispense')
                    ->findBy(
                        array(
                            'annee' => $inscription->getAnnee(),
                            'classe' => $inscription->getClasse(),
                        )
                    );

                foreach($listSequences as $sequence){
                    echo $sequence->getNom()."@@";
                    $listeMatieres = [];
                foreach ($listCategorie as $categorie) {
                    foreach ($dispense as $enseign) {
                        if ($categorie == $enseign->getMatiere()->getCategorie()) {
                            $listeMatieres[] = $enseign->getMatiere();
                        }
                    }
                    foreach ($listeMatieres as $matiere) {
                            $evaluationSeq = $this->getDoctrine()->getRepository('SchoolNoteBundle:Evaluation')
                                ->findBy(
                                    array(
                                        'annee' => $inscription->getAnnee(),
                                        'student' => $student,
                                        'sequence' => $sequence,
                                        'matiere' => $matiere
                                    )
                                );
                            if($evaluationSeq){
                                echo $evaluationSeq[0]->getNote()." | ";
                                foreach ($evaluationSeq as $note) {
                                    $note->setIndex($this->getDoctrine()->getRepository('SchoolMatiereBundle:EstDispense')
                                        ->findOneBy(array(
                                            'annee' => $inscription->getAnnee(),
                                            'classe' => $inscription->getClasse(),
                                            'matiere' => $note->getMatiere()
                                        )));
                                    if($note->getSequence() == $sequence){
                                        $matiere->setEvaluationSeq($evaluationSeq);
                                    }
                                    else{
                                        die("Erreur");
                                    }
                                }
                                $categorie->setListeMatieres($listeMatieres);
                            }else{
                                $listCategorie = [];
                                break;
                            }
                        }
                    $listeMatieres = [];
                    }
                    if($listCategorie){
                            $sequence->setListeCategories($listCategorie);
                    }
                }
                // $inscription->setListeSequences($listSequences);
            }
            if(!$listCategorie){
                $listCategorie = $this->getDoctrine()->getRepository('SchoolMatiereBundle:Categorie')->findAll();
            }
            return $this->render('SchoolNoteBundle:Bulletin:performancesEleve.html.twig', array(
                'inscriptions' => $listeInscriptions,
                'listCategories' => $listCategorie,
                'listeSequences' => $listSequences,
            ));
        } else {
            return $this->render('SchoolNoteBundle:Error:error.html.twig');
        }
    }

}