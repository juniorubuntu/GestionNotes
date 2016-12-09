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

            $html = $this->renderView('SchoolNoteBundle:Bulletin:bulletins.html.twig', array(
                'ecole' => $ecole,
                'pays' => $pays,
                'listCategories' => $listCategorie,
                'student' => $eleve,
                'annee' => $anneeScolaire,
                'Allstudent' => $Allstudent,
                'titulaire' => $titulaire,
                'classe' => $classe,
            ));

            $html2pdf = new \Html2Pdf_Html2Pdf('P', 'A4', 'fr');
            $html2pdf->pdf->SetAuthor('GreenSoft');
            $html2pdf->pdf->SetTitle('Bulletin');
            $html2pdf->pdf->SetSubject('Bulletin Sequentiel');
            $html2pdf->pdf->SetKeywords('Classe, El�ve, Bulletin, Notes, S�quence');
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
                $notes[] = $listCategorie[$i];
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
            $html2pdf->pdf->SetKeywords('Classe, El�ve, Bulletin, Notes, S�quence');
            $html2pdf->pdf->SetDisplayMode('real');
            $html2pdf->writeHTML($html);

            $content = $html2pdf->Output('', true);
            $response = new Response();
            $response->setContent($content);
            //$response->headers->set('Content-Type', 'application/force-download');
            $response->headers->set('Content-Type', 'application/pdf');
            $response->headers->set('Content-disposition', 'filename=Bulletins.pdf');
            return $response;
        } else {
            return $this->render('SchoolNoteBundle:Error:error.html.twig');
        }
    }

    public function performancesAction($idEleve) {
        $student = $this->getDoctrine()->getRepository('SchoolStudentBundle:Student')->find($idEleve);

        if (($student != NULL)) {
            $listeInscriptions = $this->getDoctrine()->getRepository('SchoolStudentBundle:Inscription')->findBy(array(
                'student' => $student,
            ));

            $listSequences = $this->getDoctrine()->getRepository('SchoolNoteBundle:Sequence')->findAll();
            $listCategorie = $this->getDoctrine()->getRepository('SchoolMatiereBundle:Categorie')->findAll();
            foreach ($listeInscriptions as $inscription) {
                $dispense = $this->getDoctrine()->getRepository('SchoolMatiereBundle:EstDispense')
                        ->findBy(
                        array(
                            'annee' => $inscription->getAnnee(),
                            'classe' => $inscription->getClasse(),
                        )
                );

                foreach ($listSequences as $sequence) {
                    echo $sequence->getNom() . "@@";
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
                            if ($evaluationSeq) {
                                echo $evaluationSeq[0]->getNote() . " | ";
                                foreach ($evaluationSeq as $note) {
                                    $note->setIndex($this->getDoctrine()->getRepository('SchoolMatiereBundle:EstDispense')
                                                    ->findOneBy(array(
                                                        'annee' => $inscription->getAnnee(),
                                                        'classe' => $inscription->getClasse(),
                                                        'matiere' => $note->getMatiere()
                                    )));
                                    if ($note->getSequence() == $sequence) {
                                        $matiere->setEvaluationSeq($evaluationSeq);
                                    } else {
                                        die("Erreur");
                                    }
                                }
                                $categorie->setListeMatieres($listeMatieres);
                            } else {
                                $listCategorie = [];
                                break;
                            }
                        }
                        $listeMatieres = [];
                    }
                    if ($listCategorie) {
                        $sequence->setListeCategories($listCategorie);
                    }
                }
                // $inscription->setListeSequences($listSequences);
            }
            if (!$listCategorie) {
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

    public function bulletinTestClasseAction($idSeq, $idAnnee, $idClasse) {
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
        $titulaire = $this->getDoctrine()->getRepository('SchoolMatiereBundle:EstDispense')->findOneBy(
                        array(
                            'annee' => $anneeScolaire,
                            'classe' => $classe,
                            'titulaire' => true
                        )
                )->getEnseignant();
        $nbreEleve = count($AllstudentsteEleve);

        if (($sequence != NULL) && ($anneeScolaire != NULL) && ($classe != NULL)) {

            $listCategorie = $this->getDoctrine()->getRepository('SchoolMatiereBundle:Categorie')->findAll();
            $dispense = $this->getDoctrine()->getRepository('SchoolMatiereBundle:EstDispense')->findBy(
                    array(
                        'annee' => $anneeScolaire,
                        'classe' => $classe,
            ));
            $listeMatieres = [];
            foreach ($listCategorie as $categorie) {
                foreach ($dispense as $enseign) {
                    if ($categorie == $enseign->getMatiere()->getCategorie()) {
                        $listeMatieres[] = $enseign->getMatiere();
                    }
                }
                $categorie->setListeMatieres($listeMatieres);
                $listeMatieres = [];
            }
            $bullEleve = '';
            foreach ($AllstudentsteEleve as $inscription) {
                $eleve = $inscription->getStudent();
                foreach ($listCategorie as $categorie) {
                    foreach ($categorie->getListeMatieres() as $matiere) {
                        $matiere->setTaille(strlen($matiere->getNom()));
                        $evaluationSeq = $this->getDoctrine()->getRepository('SchoolNoteBundle:Evaluation')
                                ->findOneBy(
                                array(
                                    'annee' => $anneeScolaire,
                                    'student' => $eleve,
                                    'sequence' => $sequence,
                                    'matiere' => $matiere
                                )
                        );
                        //foreach ($evaluationSeq as $note) {
                        if ($evaluationSeq != NULL) {
                            $evaluationSeq->setIndex($this->getDoctrine()->getRepository('SchoolMatiereBundle:EstDispense')
                                            ->findOneBy(array(
                                                'annee' => $anneeScolaire,
                                                'classe' => $classe,
                                                'matiere' => $evaluationSeq->getMatiere()
                            )));
                        }
                        $matiere->setEvaluationSeq($evaluationSeq);
                    }
                }


                $bullEleve .= '
<page backtop="10mm" backleft="10mm" backright="10mm" backbottom="10mm" footer="page;">
    <page_footer>
        <hr />
        <p>GreenSoft-Team</p>
    </page_footer>
    <table>
        <tr>
            <td class="40p">
                ' . $pays->getMinistereFrancais() . '<br/>
                ' . $ecole->getNomFrancais() . '<br/>
                ' . $ecole->getBoitePostal() . '
            </td>
            <td class="20p" style="text-align: center">
                <img style="height: 80px; width: 60px;" src="uploads/logos/' . $ecole->getLogo()->getId() . '.' . $ecole->getLogo()->getUrl() . '" alt="Logo" title="" >
            </td>
            <td style="text-align: right" class="40p">
                ' . $pays->getPaysFrancais() . '<br/>
                ' . $pays->getDeviseFrancais() . '<br/>
            </td>
        </tr>
    </table>
    <table class="info1" style="margin-top: 10px;">
        <tr>
            <td class="25p" style="text-align: left;"><strong>' . $anneeScolaire->getAnneeScolaire() . '</strong></td>
            <td class="50p" style="text-align: center;font-size: 1.2em"><strong>BULLETIN DE NOTES</strong></td>
            <td class="25p" style="text-align: right;"><strong>' . $sequence->getNom() . '</strong></td>
        </tr>
    </table>
    <table class="info">
        <tr>
            <td rowspan="2"  style="text-align: left;border-top: none" class="10p">';
                if ($eleve->getPhoto() != NULL) {
                    $bullEleve.= '<img style="height: 90px;width: 80px;" src="uploads/images/' . $eleve->getPhoto()->getId() . '.' . $eleve->getPhoto()->getUrl() . '" alt="' . $eleve->getNom() . '" title="' . $eleve->getNom() . '">';
                }
                $bullEleve.= '
            </td>
            <td class = "25p" style = "text-align: left;border-top: none" > Elève: <b>' . $eleve->getNom() . '</b></td>
            <td class = "25p" style = "text-align: left;border-top: none" >Né(e) le:<b> ' . $eleve->getDateNaissance()->format('Y-m-d') . '</b><br> A <b> ' . $eleve->getLieuNaissance() . '</b></td>
            <td class = "15p" style = "text-align: left;border-top:none;">Matricule: <b>' . $eleve->getMatricule() . '</b></td>
            <td class = "15p" style = "text-align: left;border-top: none">Sexe: <b>' . $eleve->getSexe() . '</b></td>
        </tr>
        <tr>
            <td class = "25p" style = "text-align: left;">Titulaire: <b>' . $titulaire->getNom() . '</b></td>
            <td class = "25p" style = "text-align: left">Classe: <b>' . $eleve->getClasse()->getAbreviation() . '</b></td>
            <td class = "25p" style = "text-align: left">Eff: <b>' . count($AllstudentsteEleve) . '</b></td>
            <td></td>
        </tr>
    </table>
    <table class ="notes" style ="margin-top: 15px;">
        <tr>
            <th class = "20p" style = "background: white;" >Disciplines</th>
            <th class = "20p" style = "background: white;">Enseignants</th>
            <th class = "10p" style = "background: white;">M./20</th>
            <th class = "10p" style = "background: white;">Coef.</th>
            <th class = "10p" style = "background: white;">Total</th>
            <th class = "15p" style = "background: white;">Rang</th>
            <th class = "15p" style = "background: white;">Mention</th>
        </tr>';
                $somNote = $somCoef = 0;
                foreach ($listCategorie as $categorie) {
                    $somCoefCat = $somTotalCat = 0;

                    foreach ($categorie->getListeMatieres() as $matiere) {
                        $bullEleve.='
        <tr>
            <td>
            ';
                        if ($matiere->getTaille() > 13) {
                            $bullEleve.=$matiere->getAbreviation();
                        } else {
                            $bullEleve.=$matiere->getNom();
                        }
                        $bullEleve.= '
            </td>
        <td>';

                        if ($matiere->getEvaluationSeq() != NULL) {
                            $bullEleve.= $matiere->getEvaluationSeq()->getIndex()->getEnseignant();
                        }
                        $bullEleve.='
        </td>
        <td>';
                        if ($matiere->getEvaluationSeq() != NULL) {
                            $bullEleve.=$matiere->getEvaluationSeq()->getNote();
                        }
                        $bullEleve.='
        </td>
        <td>';
                        if ($matiere->getEvaluationSeq() != NULL) {
                            $somCoefCat = $somCoefCat + $matiere->getEvaluationSeq()->getIndex()->getCoefficient();
                            $somCoef = $somCoef + $matiere->getEvaluationSeq()->getIndex()->getCoefficient();

                            $bullEleve.=$matiere->getEvaluationSeq()->getIndex()->getCoefficient();
                        }
                        $bullEleve.='
        </td>
        <td>';
                        if ($matiere->getEvaluationSeq() != NULL) {
                            $total = $matiere->getEvaluationSeq()->getIndex()->getCoefficient() * $matiere->getEvaluationSeq()->getNote();

                            $bullEleve.= $total;
                            $somTotalCat = $somTotalCat + $total;
                            $somNote = $somNote + $total;
                        }
                        $bullEleve.='
            </td>
            <td>Rang</td>
            <td>Mention</td>
        </tr>';
                    }
                    $bullEleve.='
        <tr style = "border: 2px solid black;">
            <td style = "font-size: 10px;border-right: none"><strong><i>' . $categorie->getNom() . '</i></strong></td>
            <td style = "border-right: none"></td>
            <td style = "border-left: none"></td>
            
            <td><b>' . $somCoefCat . '</b> </td>
            <td>M:<b>';
                    if ($somCoefCat > 0) {
                        $bullEleve.= number_format($somTotalCat / $somCoefCat, 2, ',', ' ');
                    } else {
                        $bullEleve.='/';
                    }
                    $bullEleve.='</b>
            </td>

            <td><b>Rang</b></td>
            <td><strong>Mention</strong></td>
        </tr>';
                }
                $bullEleve.='
    </table>
    <table class = "conduite" style = "margin-top: 15px">
        <tr style = "border: 2px solid black;font-size: 11px;">
            <td class = "25p"><b><u>Total des absences</u>:</b>12</td>
            <td class = "25p"><b><u>Absences non justifi & eacute;s</u>:</b>5</td>
            <td class = "25p"><b><u > D & eacute;cision du conseil</u>:</b>Dois faire attention aux abscences</td>
            <td class = "25p"><b><u>Conduite:</u></b><br/>Conduite aceptable</td>
        </tr>
    </table>
    <table class = "moyenne">
        <tr style = "border: 2px solid black;">
            <td class = "20p"><b><u>Moy. de la classe</u>:</b>09.45</td>
            <td class = "30p"><u>Moy. de l\' & eacute;l&egrave;ve</u>:<b>';
                if ($somCoef > 0) {
                    $bullEleve.= number_format($somNote / $somCoef, 2, ',', ' ');
                } else {
                    $bullEleve.='/';
                }
                $bullEleve.='
            </b><br><b><u > Appr & eacute;ciation</u>:</b>Passable</td>
            <td class = "10p"><b><u>RANG</u>:</b>12�me</td>
            <td class = "40p" ><b><u>OBSERVATIONS</u></b><br/>Un éffort considérable s\'impose <br> en matière littéraires</td>
        </tr>
    </table>
    <table class = "signature">
        <tr>
            <td class = "50p" style = "text-align: left"><u>Le parent</u><br><span style = "text-align: center;">Signature</span></td>
            <td class = "50p" style = "text-align: right" >Fait & agrave;' . $ecole->getVille() . date('d/m/Y') . '</td>
        </tr>
    </table>
</page>';
            }

            $html = $this->renderView('SchoolNoteBundle:Bulletin:bulletinSeqClasse.html.twig', array(
                'ecole' => $ecole,
                'pays' => $pays,
                'annee' => $anneeScolaire,
                'Allstudent' => $AllstudentsteEleve,
                'titulaire' => $titulaire,
                'sequence' => $sequence,
                'page' => $bullEleve
            ));


            $html2pdf = new \Html2Pdf_Html2Pdf('P', 'A4', 'fr');
            $html2pdf->pdf->SetAuthor('GreenSoft-Team');
            $html2pdf->pdf->SetTitle('Bulletins' . ' ' . $sequence->getNom());
            $html2pdf->pdf->SetSubject('Bulletin Sequentiel');
            $html2pdf->pdf->SetKeywords('Classe, El�ve, Bulletin, Notes, S�quence');
            $html2pdf->pdf->SetDisplayMode('real');
            $html2pdf->writeHTML($html);

            $content = $html2pdf->Output('', true);
            $response = new Response();
            $response->setContent($content);
            //$response->headers->set('Content-Type', 'application/force-download');
            $response->headers->set('Content-Type', 'application/pdf');
            $response->headers->set('Content-disposition', 'filename=Bulletins.pdf');
            return $response;
        } else {
            return $this->render('SchoolNoteBundle:Error:error.html.twig');
        }
    }

}
