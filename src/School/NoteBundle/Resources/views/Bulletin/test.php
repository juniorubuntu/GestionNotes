<?php

$bullEleve = '<page backtop="10mm" backleft="10mm" backright="10mm" backbottom="10mm" footer="page;">
    <page_footer>
        <hr />
        <p>GreenSoft-Team</p>
    </page_footer>
    <table>
        <tr>
            <td class="40p">
                ' . $ecole->getMinistereFrancais() . '<br/>
                ' . $ecole->getNomFrancais() . '<br/>
                ' . $ecole->getBoitePostal() . '
            </td>
            <td class="20p" style="text-align: center">
                <img style="height: 80px; width: 60px;" src="uploads/logos/' . $ecole->getLogo()->getId() . $ecole->getLogo()->getUrl() . '" alt="Logo" title="" >
            </td>
            <td style="text-align: right" class="40p">
                ' . $pays->getPaysFrancais() . '<br/>
                ' . $pays->getDeviseFrancais() . '<br/>
            </td>
        </tr>
    </table>
    <table class="info1" style="margin-top: 10px;">
        <tr>
            <td class="25p" style="text-align: left;"><strong>' . $anneeScolaire->getAanneeScolaire() . '</strong></td>
            <td class="50p" style="text-align: center;font-size: 1.2em"><strong>BULLETIN DE NOTES</strong></td>
            <td class="25p" style="text-align: right;"><strong>' . $sequence->getNom() . '</strong></td>
        </tr>
    </table>
    <table class="info">
        <tr>
            <td rowspan="2"  style="text-align: left;border-top: none" class="10p">';
if ($eleve->getPhoto() != NULL) {
    $bullEleve.= '<img style="height: 90px;width: 80px;" src="uploads/images/' . $eleve->getPhoto()->getId() . $eleve->getPhoto()->getUrl() . '" alt="' . $eleve->getNom() . '" title="' . $eleve->getNom() . '">';
}
$bullEleve.= '
            </td>
            <td class = "25p" style = "text-align: left;border-top: none" > El & egrave;ve: <b>' . $eleve->getNom() . '</b></td>
            <td class = "25p" style = "text-align: left;border-top: none" >N & eacute;(e) le:<b> ' . $eleve->getDateNaissance() . '</b><br> A <b> ' . $eleve->getLieuNaissance() . '</b></td>
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
    <table class = "notes" style = "margin-top: 15px;">
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
            ' . $matiere->getAbreviation() . '
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
            <td><b>' . $bullEleve.=$somCoefCat . '</b> </td>
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
if (somCoef > 0) {
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
