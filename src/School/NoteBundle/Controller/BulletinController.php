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
            $html2pdf->pdf->SetKeywords('Classe, Elï¿½ve, Bulletin, Notes, Sï¿½quence');
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
            $html2pdf->pdf->SetKeywords('Classe, Elï¿½ve, Bulletin, Notes, Sï¿½quence');
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

    public function performancesAction($idEleve){
        $em = $this->getDoctrine()->getManager();
        $school = $em->getRepository('SchoolConfigBundle:Ecole')->findAll();
        $constante = $em->getRepository('SchoolConfigBundle:Constante')->findAll();
        $ecole = $school[0];
        $pays = $constante[0];
        $student = $em->getRepository('SchoolStudentBundle:Student')->find($idEleve);

        if (($student != NULL)) {/*Toutes les inscriptions de l'eleve au courant des années passée dans l'etablissement*/
            $listeInscriptions = $this->getDoctrine()->getRepository('SchoolStudentBundle:Inscription')->findBy(array(
                'student' => $student,
            ));

            $listSequences = $this->getDoctrine()->getRepository('SchoolNoteBundle:Sequence')->findAll();
            $listCategories = $this->getDoctrine()->getRepository('SchoolMatiereBundle:Categorie')->findAll();

            $perfEleve = '<page backtop="10mm" backleft="10mm" backright="10mm" backbottom="10mm" footer="page;">
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
                    <td class="25p" style="text-align: left;"></td>
                    <td class="50p" style="text-align: center; font-size: 1.2em"><strong>PERFORMANCES DE L\'ELEVE</strong></td>
                    <td class="25p" style="text-align: right;"></td>
                </tr>
            </table>';
            $perfEleve .= '
            <table class="info">
                <tr>
                    <td rowspan="2"  style="text-align: left; border-top: none" class="10p">';
            if ($student->getPhoto() != NULL) {
                $perfEleve .= '<img style="height: 90px;width: 80px;" src="uploads/images/' . $student->getPhoto()->getId() . '.' . $student->getPhoto()->getUrl() . '" alt="' . $student->getNom() . '" title="' . $student->getNom() . '">';
            }
            $perfEleve .= '
                    </td>
                    <td class="25p" style="text-align: left; border-top: none">El&egrave;ve: <b>' . $student->getNom() . '</b></td>
                    <td class="25p" style="text-align: left; border-top: none">
                        N&eacute;(e) le:<b>' . $student->getDateNaissance()->format('Y-m-d') . '</b><br> A <b> ' . $student->getLieuNaissance() . '</b>
                    </td>
                    <td class="15p" style="text-align: left; border-top:none; ">Matricule:  <b>' . $student->getMatricule() . '</b></td>
                    <td class="15p"  style="text-align: left; border-top: none">Sexe: <b>' . $student->getSexe() . '</b></td>
                    <td></td>
                </tr>
            </table>
            <table style="margin-top:10px;" class="notes">
        <tr>
            <th class="20p"></th>';
             foreach($listCategories as  $categorie ){
                $perfEleve .='<th style="text-align: center;" class="20p">' . $categorie->getNom() . '</th>';
            }
            $perfEleve .='
        </tr>';
                foreach ($listeInscriptions as $inscription) {
                 $perfEleve .= '
                <tr>
                    <td>
                        ' . $inscription->getAnnee() . ' (' . $inscription->getClasse() . ')
                    </td>';
                    $dispense = $this->getDoctrine()->getRepository('SchoolMatiereBundle:EstDispense')->findBy(
                        array(
                            'annee' => $inscription->getAnnee(),
                            'classe' => $inscription->getClasse(),
                        ));
                    $listeMatieres = [];
                    foreach ($listCategories as $categorie) {
                        foreach ($dispense as $enseign) {
                            if ($categorie == $enseign->getMatiere()->getCategorie()) {
                                $listeMatieres[] = $enseign->getMatiere();
                            }
                        }
                        $categorie->setListeMatieres($listeMatieres);
                        $listeMatieres = [];
                    }
                    foreach($listCategories as  $categorie ){
                        $perfEleve .='<td>';
                        $moySequentiel = 0;
                        $compteurSequences = 0;
                        foreach ($listSequences as $sequence) {
                            $totalCoefficient= 0;
                            $totalNoteParCategorie = 0;
                            foreach ($categorie->getListeMatieres() as $matiere) {
                                $matiere->setTaille(strlen($matiere->getNom()));
                                $evaluationSeq = $em->getRepository('SchoolNoteBundle:Evaluation')
                                    ->findOneBy(
                                        array(
                                            'annee' => $inscription->getAnnee(),
                                            'student' => $student,
                                            'sequence' => $sequence,
                                            'matiere' => $matiere
                                        )
                                    );
                                if ($evaluationSeq != NULL) {
                                    $enseignement = $em->getRepository('SchoolMatiereBundle:EstDispense')
                                        ->findOneBy(array(
                                            'annee' => $inscription->getAnnee(),
                                            'classe' => $inscription->getClasse(),
                                            'matiere' => $evaluationSeq->getMatiere()
                                        ));
                                    $totalCoefficient = $totalCoefficient + $enseignement->getCoefficient();
                                    $totalNoteParCategorie = $totalNoteParCategorie + ($enseignement->getCoefficient()
                                            * $evaluationSeq->getNote());
                                }
                            }
                            if($totalCoefficient != 0 ){
                                $moySequentiel = $moySequentiel + ($totalNoteParCategorie/$totalCoefficient);
                                $compteurSequences = $compteurSequences+1;
                            }
                        }
                        $perfEleve .=
                            number_format($moySequentiel / $compteurSequences, 2, ',', ' ');
                        $perfEleve .= '</td>';
                    }
                $perfEleve .='
                </tr>
                ';
            }
            $perfEleve .='
        </table>
            </page>';

            $html = $this->renderView('SchoolNoteBundle:Bulletin:performancesEleve.html.twig', array(
                'inscriptions' => $listeInscriptions,
                'listCategories' => $listCategories,
                'listeSequences' => $listSequences,
                'performance' => $perfEleve,
            ));


            $html2pdf = new \Html2Pdf_Html2Pdf('P', 'A4', 'fr');
            $html2pdf->pdf->SetAuthor('GrenSoft-Team');
            $html2pdf->pdf->SetTitle('Performances' . ' ' . $student->getNom());
            $html2pdf->pdf->SetSubject('Performance  Eleve');
            $html2pdf->pdf->SetKeywords('Classe, Eleve, Bulletin, Notes, Sequence, Annee');
            $html2pdf->pdf->SetDisplayMode('real');
            $html2pdf->writeHTML($html);

            $content = $html2pdf->Output('', true);
            $response = new Response();
            $response->setContent($content);
            $response->headers->set('Content-Type', 'application/pdf');
            $response->headers->set('Content-disposition', 'filename=PerformancesEleve.pdf');
            return $response;
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
            $tabMoy = [];
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
                $bullEleve .= '<page backtop="10mm" backleft="10mm" backright="10mm" backbottom="10mm" footer="page;">
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
                    <td class="50p" style="text-align: center; font-size: 1.2em"><strong>BULLETIN DE NOTES</strong></td>
                    <td class="25p" style="text-align: right;"><strong>' . $sequence->getNom() . '</strong></td>
                </tr>
            </table>';
                $bullEleve .='
            <table class="info">
                <tr>
                    <td rowspan="2"  style="text-align: left; border-top: none" class="10p">';
                if ($eleve->getPhoto() != NULL) {
                    $bullEleve.= '<img style="height: 90px;width: 80px;" src="uploads/images/' . $eleve->getPhoto()->getId() . '.' . $eleve->getPhoto()->getUrl() . '" alt="' . $eleve->getNom() . '" title="' . $eleve->getNom() . '">';
                }
                $bullEleve .='
                    </td>
                    <td class="20p" style="text-align: left; border-top: none">El&egrave;ve: <b>' . strtoupper($eleve->getNom()) . '</b></td>
                    <td class="20p" style="text-align: left; border-top: none">
                        N&eacute;(e) le:<b>' . $eleve->getDateNaissance()->format('Y-m-d') . '</b><br> A <b> ' . $eleve->getLieuNaissance() . '</b>
                    </td>
                    <td class="15p" style="text-align: left; border-top:none; ">Matricule:  <b>' . $eleve->getMatricule() . '</b></td>
                    <td class="15p"  style="text-align: left; border-top: none">Sexe: <b>' . $eleve->getSexe() . '</b></td>
                </tr>
                <tr>
                    <td class="25p" style="text-align: left;" >Titulaire: <b>' . $titulaire->getNom() . '</b></td>
                    <td class="25p" colspan="2" style="text-align: left">Classe:  <b>' . $eleve->getClasse()->getAbreviation() . '</b></td>
                    <td class="25p"  style="text-align: left">Eff: <b>' . count($AllstudentsteEleve) . '</b></td>
                </tr>
            </table>';
                $bullEleve .='
            <table class="notes" style="margin-top: 15px;" align="center">
                <tr>
                    <th class="20p" style="background: white;" >Disciplines</th>
                    <th class="20p" style="background: white;">Enseignants</th>
                    <th class="5p" style="background: white;">M./20</th>
                    <th class="5p" style="background: white;">Coef.</th>
                    <th class="10p" style="background: white;">Total</th>
                    <th class="5p" style="background: white;">Rang</th>
                    <th class="15p" style="background: white;">Mention</th>
                </tr>';
                $somNote = $somCoef = 0;
                foreach ($listCategorie as $categorie) {
                    $somCoefCat = $somTotalCat = 0;
                    foreach ($categorie->getListeMatieres() as $matiere) {
                        $bullEleve .= '
                        <tr>
                            <td>';
                        if ($matiere->getTaille() > 13) {
                            $bullEleve .= $matiere->getNom();
                        } else {
                            $bullEleve .= $matiere->getNom();
                        }
                        $bullEleve .= '
                            </td>
                            <td>';
                        if ($matiere->getEvaluationSeq() != NULL) {
                            $bullEleve .= $matiere->getEvaluationSeq()->getIndex()->getEnseignant();
                        }
                        $bullEleve .= '
                            </td>
                            <td>';
                        if ($matiere->getEvaluationSeq() != NULL) {
                            $note = $matiere->getEvaluationSeq()->getNote();
                            $bullEleve .= $matiere->getEvaluationSeq()->getNote();
                        }
                        $bullEleve .= '
                            </td>
                            <td>';
                        if ($matiere->getEvaluationSeq() != NULL) {
                            $somCoefCat = $somCoefCat + $matiere->getEvaluationSeq()->getIndex()->getCoefficient();
                            $somCoef = $somCoef + $matiere->getEvaluationSeq()->getIndex()->getCoefficient();
                            $bullEleve .= $matiere->getEvaluationSeq()->getIndex()->getCoefficient();
                        }
                        $bullEleve .= '
                            </td>
                            <td>';
                        if ($matiere->getEvaluationSeq() != NULL) {
                            $total = $matiere->getEvaluationSeq()->getIndex()->getCoefficient() * $matiere->getEvaluationSeq()->getNote();
                            $bullEleve .= $total;
                            $somTotalCat = $somTotalCat + $total;
                            $somNote = $somNote + $total;
                        }
                        $bullEleve .= '
                            </td>
                            <td>
                                Rang
                            </td>
                            <td>';
                        if ($matiere->getEvaluationSeq() != NULL) {
                            $bullEleve .= $this->getMention($note);
                        }
                        $bullEleve.='
                            </td>
                        </tr>';
                    }
                    $bullEleve .= '
                    <tr style="border: 2px solid black; background: wheat;">
                        <td  style="font-size: 14px; border-right: none">
                            <strong><i>' . $categorie->getNom() . '</i></strong>
                        </td>
                        <td style="border-right: none"></td>
                        <td style="border-left: none"></td>
                        <td>
                            <b>' . $somCoefCat . '</b>
                        </td>
                        <td>
                            M:
                            <b>';
                    if ($somCoefCat > 0) {
                        $moyPart = number_format($somTotalCat / $somCoefCat, 2, ',', ' ');
                        $bullEleve .= number_format($somTotalCat / $somCoefCat, 2, ',', ' ');
                    } else {
                        $bullEleve .= '/';
                    }
                    $bullEleve .= '
                            </b>
                        </td>
                        <td>
                            <b>Rang</b>
                        </td>
                        <td style="color: blue"><strong>';
                    if ($somCoefCat != 0) {
                        $bullEleve.= $this->getMention($moyPart);
                    }
                    $bullEleve.=
                        '</strong>
                        </td>
                    </tr>';
                }
                $abs = $this->getDoctrine()->getRepository('SchoolStudentBundle:Absence')
                    ->findOneBy(
                        array(
                            'student' => $inscription,
                            'anneeScolaire' => $anneeScolaire,
                            'sequence' => $sequence
                        )
                    );
                $absence = '';
                if ($abs == NULL) {
                    $absence = 0;
                } else {
                    $absence = $abs->getNbreAbsence();
                }
                $bullEleve.='
            </table>
            <table class="conduite" style="margin-top: 15px">
                <tr style="border: 2px solid black; font-size: 11px;">
                    <td class="25p">
                        <b><u>Total des absences</u>:<span style="font-size: 14px">' . $absence . '</span></b>
                    </td>
                    <td class="25p">
                        <b><u>Absences non justifi&eacute;s</u>:<span style="font-size: 14px">' . $absence . '</span></b>
                    </td>
                    <td class="25p">
                        <u>D&eacute;cision du conseil</u>:
                        ' . $this->decisionConseil($absence) . '
                    </td>
                    <td class="25p">
                        <u>Situation de l\'élève:</u><<br/>
                        ' . $this->situation(($inscription)) . '
                    </td>
                </tr>
            </table>
            <table class="moyenne">
                <tr style="border: 2px solid black;">
                    <td class="20p">
                        <b style="color: blue;"><u>Moy. de la classe</u>: MOYENNE_GENERALE</b>
                    </td>
                    <td class="30p" style="color: green;">
                        <u>Moy. de l\'&eacute;l&egrave;ve</u>:<b> ';
                $moy = '';
                if ($somCoef > 0) {
                    $bullEleve.= number_format($somNote / $somCoef, 2, ',', ' ');
                    $moy = number_format($somNote / $somCoef, 2, ',', ' ');
                    $tabMoy[] = $moy;
                } else {
                    $bullEleve.='/';
                }
                $bullEleve.='
                        </b>
                        <br>
                        <b><u>Appreciation: </u> ' . $this->getMention($moy) . '</b>
                    </td>
                    <td class="10p">
                        <b style="color: orange"><u>RANG</u>: RANG_' . $moy . '</b>
                </td>
                    <td class="40p" >
                        <b><u>OBSERVATIONS</u></b><br/>
                        <br/><br/><br/>
                    </td>
                </tr>
            </table>
            <table class="signature">
                <tr>
                    <td class="50p" style="text-align: left">
                        <u>Le parent</u><br>
                        <span style="text-align: center;">Signature</span>
                    </td>
                    <td class="50p" style="text-align: right">
                        Fait &agrave;  ' . $ecole->getVille() . ' le ' . date('d/m/Y') . '
                    </td>
                </tr>
            </table>
            </page>';
            }
            if (count($tabMoy) != 0) {
                $moyGeneral = number_format(array_sum($tabMoy) / count($tabMoy), 2, ',', ' ');
            } else {
                $moyGeneral = '//';
            }
            $bullEleve = str_replace('MOYENNE_GENERALE', $moyGeneral, $bullEleve);
            $taille = count($tabMoy);
            sort($tabMoy);
            for ($i = $taille - 1, $j = 1; $i >= 0; $i--) {
                if ($j == 1) {
                    $bullEleve = str_replace('RANG_' . $tabMoy[$i], ($j++) . 'er(e)', $bullEleve);
                } else {
                    $bullEleve = str_replace('RANG_' . $tabMoy[$i], ($j++) . 'ème', $bullEleve);
                }
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
            $html2pdf->pdf->SetTitle('Bulletins' . ' ' . $sequence->getNom() . ' ' . $classe->getNom());
            $html2pdf->pdf->SetSubject('Bulletin Sequentiel');
            $html2pdf->pdf->SetKeywords('Classe, Eleve, Bulletin, Notes, Sequence');
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
    public function getMention($note) {
        if ($note <= 3)
            return 'NULL';
        if ($note < 6)
            return 'Très Faible';
        if ($note < 8)
            return 'Faible';
        if ($note < 9)
            return 'Insuffisant';
        if ($note < 10)
            return 'Médiocre';
        if ($note < 12)
            return 'Passable';
        if ($note < 14)
            return 'Assez-Bien';
        if ($note < 16)
            return 'Bien';
        if ($note < 18)
            return 'Trés Bien';
        if ($note < 20)
            return 'Excellent';
        if ($note == 20)
            return 'Parfait';
    }
    public function getRang($note, $tabNote) {
       // $i;
        $size = count($tabNote);
        for ($i = 0; i < $size; $i++) {
            if ($tabNote[$i] == $note)
                return $i + 1;
        }
    }
    public function decisionConseil($absence) {
        $result = '<b>';
        if ($absence < 6) {
            $result.= 'Conduite acceptable';
        }
        if ($absence >= 6) {
            $result.= 'Attention à votre conduite';
        }
        $result.='</b>';
        return $result;
    }
    public function situation($eleve) {
        return ($eleve->getStatus() == 0) ? '<b style="color: red">Insolvable</b>' : '<b style="color: gray">Solvable</b>';
    }

}
