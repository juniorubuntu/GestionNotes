<?php

namespace School\NoteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use School\NoteBundle\Entity\Evaluation;
use School\NoteBundle\Entity\Sequence;
use School\ConfigBundle\Entity\Ecole;
use School\ConfigBundle\Entity\Constante;
use School\StudentBundle\Entity\Inscription;
use School\MatiereBundle\Entity\EstDispense;
use School\MatiereBundle\Entity\Matiere;

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

            return $this->render('SchoolNoteBundle:Bulletin:bulletinSeq.html.twig', array(
                        'ecole' => $ecole,
                        'pays' => $pays,
                        'listCategories' => $listCategorie,
                        'student' => $eleve,
                        'annee' => $anneeScolaire,
                        'Allstudent' => $Allstudent,
                        'titulaire' => $titulaire
            ));
        } else {
            return $this->render('SchoolNoteBundle:Error:error.html.twig');
        }
    }

}
