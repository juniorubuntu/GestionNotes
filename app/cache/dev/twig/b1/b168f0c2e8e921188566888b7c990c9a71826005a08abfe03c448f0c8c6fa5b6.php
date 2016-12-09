<?php

/* SchoolNoteBundle:Bulletin:bulletins.html.twig */
class __TwigTemplate_bdc3238badda9521517d2428a550448e3e473c74dd03c13b512c2e7d373f92b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "        <style type=\"text/css\">
            table {
                width: 100%;
                color: #717375;
                font-family: helvetica;
                line-height: 5mm;
                border-collapse: collapse;
            }

            .10p { width: 10%; } .15p { width: 15%; }
            .25p { width: 25%; } .50p { width: 50%; }
            .60p { width: 60%; } .75p { width: 75%; }
            .30p {width: 30%;} .20p{width: 20%;}
                                  .40p{width: 40%}

            .info td, .info1 td{
                height: 25px;
                border-top: 1px solid black; border-bottom: 1px solid black;
            }
            .notes  td,.notes  th {
                border: 1px solid darkgray;
                height: 25px;
            }
            .conduite tr td{
                border: 1px solid darkgray;
                height: 35px;
            }
            .moyenne tr td{
                border: 1px solid darkgray;
                height: 55px;
            }
            .signature tr td{
                border: 1px solid darkgray;
                height: 55px;
            }

        </style>
        <page backtop=\"10mm\" backleft=\"10mm\" backright=\"10mm\" backbottom=\"10mm\" footer=\"page;\">
            <page_footer>
                <hr />
                <p>GreenSoft-Team</p>
            </page_footer>
            <table>
                <tr>
                    <td class=\"40p\">
                        ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")), "ministereFrancais", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ecole"]) ? $context["ecole"] : $this->getContext($context, "ecole")), "nomFrancais", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ecole"]) ? $context["ecole"] : $this->getContext($context, "ecole")), "boitePostal", array()), "html", null, true);
        echo "
                    </td>
                    <td class=\"20p\" style=\"text-align: center\">
                        <img style=\"height: 80px; width: 60px;\" src=\"uploads/logos/";
        // line 51
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["ecole"]) ? $context["ecole"] : $this->getContext($context, "ecole")), "logo", array()), "id", array()) . ".") . $this->getAttribute($this->getAttribute((isset($context["ecole"]) ? $context["ecole"] : $this->getContext($context, "ecole")), "logo", array()), "url", array())), "html", null, true);
        echo "\" alt=\"Logo\" title=\"\" >
                    </td>
                    <td style=\"text-align: right\" class=\"40p\">
                        ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")), "paysFrancais", array()), "html", null, true);
        echo "<br/>
                        ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")), "deviseFrancais", array()), "html", null, true);
        echo "<br/>
                    </td>
                </tr>
            </table>
            <table class=\"info1\" style=\"margin-top: 10px;\">
                <tr>
                    <td class=\"25p\" style=\"text-align: left;\"><strong>";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "html", null, true);
        echo "</strong></td>
                    <td class=\"50p\" style=\"text-align: center; font-size: 1.2em\"><strong>BULLETIN DE NOTES</strong></td>
                    <td class=\"25p\" style=\"text-align: right;\"><strong>
                            ";
        // line 64
        if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["listCategories"]) ? $context["listCategories"] : $this->getContext($context, "listCategories")), 0, array(), "array"), "listeMatieres", array()), 0, array(), "array"), "evaluationSeq", array()))) {
            // line 65
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["listCategories"]) ? $context["listCategories"] : $this->getContext($context, "listCategories")), 0, array(), "array"), "listeMatieres", array()), 0, array(), "array"), "evaluationSeq", array()), 0, array(), "array"), "sequence", array()), "html", null, true);
            echo "
                            ";
        }
        // line 67
        echo "                        </strong></td>
                </tr>
            </table>
            <table class=\"info\">
                <tr>
                    <td rowspan=\"2\"  style=\"text-align: left; border-top: none\" class=\"10p\">
                        ";
        // line 73
        if ( !(null === $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "photo", array()))) {
            // line 74
            echo "                            <img style=\"height: 90px; width: 80px;\" src=\"
                               uploads/images/";
            // line 75
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "photo", array()), "id", array()) . ".") . $this->getAttribute($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "photo", array()), "url", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "html", null, true);
            echo "
                             \">
                        ";
        }
        // line 78
        echo "                        ";
        // line 79
        echo "                    </td>
                    <td class=\"25p\" style=\"text-align: left; border-top: none\">El&egrave;ve: <b>";
        // line 80
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "nom", array())), "html", null, true);
        echo "</b></td>
                    <td class=\"25p\" style=\"text-align: left; border-top: none\">
                        N&eacute;(e) le:<b>";
        // line 82
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "dateNaissance", array()), "d-m-Y"), "html", null, true);
        echo "</b><br> A <b>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "lieuNaissance", array())), "html", null, true);
        echo "</b>
                    </td>
                    <td class=\"15p\" style=\"text-align: left; border-top:none; \">Matricule:  <b>";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "matricule", array()), "html", null, true);
        echo "</b></td>
                    <td class=\"15p\"  style=\"text-align: left; border-top: none\">Sexe: <b>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "sexe", array()), "html", null, true);
        echo "</b></td>
                </tr>
                <tr>
                    <td class=\"25p\" style=\"text-align: left;\" >Titulaire: <b>";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["titulaire"]) ? $context["titulaire"] : $this->getContext($context, "titulaire")), "html", null, true);
        echo "</b></td>
                    <td class=\"25p\" style=\"text-align: left\">Classe:  <b>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "abreviation", array()), "html", null, true);
        echo "</b></td>
                    <td class=\"25p\" style=\"text-align: left\">Eff: <b>";
        // line 90
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Allstudent"]) ? $context["Allstudent"] : $this->getContext($context, "Allstudent"))), "html", null, true);
        echo "</b></td>
                    <td></td>
                </tr>
            </table>
            <table class=\"notes\" style=\"margin-top: 15px;\">
                <tr>
                    <th class=\"20p\" style=\"background: white;\" >Disciplines</th>
                    <th class=\"20p\" style=\"background: white;\">Enseignants</th>
                    <th class=\"10p\" style=\"background: white;\">M./20</th>
                    <th class=\"10p\" style=\"background: white;\">Coef.</th>
                    <th class=\"10p\" style=\"background: white;\">Total</th>
                    <th class=\"15p\" style=\"background: white;\">Rang</th>
                    <th class=\"15p\" style=\"background: white;\">Mention</th>
                </tr>
                ";
        // line 104
        $context["somNote"] = 0;
        // line 105
        echo "                ";
        $context["somCoef"] = 0;
        // line 106
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCategories"]) ? $context["listCategories"] : $this->getContext($context, "listCategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 107
            echo "                    ";
            $context["somCoefCat"] = 0;
            // line 108
            echo "                    ";
            $context["somTotalCat"] = 0;
            // line 109
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie"], "listeMatieres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
                // line 110
                echo "                    <tr>
                            <td>
                                ";
                // line 112
                $context["mat"] = $this->getAttribute($context["matiere"], "taille", array());
                // line 113
                echo "                                ";
                if (((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")) > 13)) {
                    // line 114
                    echo "                                     ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "abreviation", array()), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 116
                    echo "                                     ";
                    echo twig_escape_filter($this->env, $context["matiere"], "html", null, true);
                    echo "
                                ";
                }
                // line 118
                echo "                            </td>
                            <td>
                                ";
                // line 120
                if ( !(null === $this->getAttribute($context["matiere"], "evaluationSeq", array()))) {
                    // line 121
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "index", array()), "enseignant", array()), "html", null, true);
                    echo "
                                ";
                }
                // line 123
                echo "                            </td>
                            <td>
                                ";
                // line 125
                if ( !(null === $this->getAttribute($context["matiere"], "evaluationSeq", array()))) {
                    // line 126
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "note", array()), "html", null, true);
                    echo "
                                ";
                }
                // line 128
                echo "                            </td>
                            <td>
                                ";
                // line 130
                if ( !(null === $this->getAttribute($context["matiere"], "evaluationSeq", array()))) {
                    // line 131
                    echo "                                    ";
                    $context["somCoefCat"] = ((isset($context["somCoefCat"]) ? $context["somCoefCat"] : $this->getContext($context, "somCoefCat")) + $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "index", array()), "coefficient", array()));
                    // line 132
                    echo "                                    ";
                    $context["somCoef"] = ((isset($context["somCoef"]) ? $context["somCoef"] : $this->getContext($context, "somCoef")) + $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "index", array()), "coefficient", array()));
                    // line 133
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "index", array()), "coefficient", array()), "html", null, true);
                    echo "
                                ";
                }
                // line 135
                echo "                            </td>
                            <td>
                                ";
                // line 137
                if ( !(null === $this->getAttribute($context["matiere"], "evaluationSeq", array()))) {
                    // line 138
                    echo "                                    ";
                    $context["total"] = ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "index", array()), "coefficient", array()) * $this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "note", array()));
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
                    echo "
                                    ";
                    // line 139
                    $context["somTotalCat"] = ((isset($context["somTotalCat"]) ? $context["somTotalCat"] : $this->getContext($context, "somTotalCat")) + (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")));
                    // line 140
                    echo "                                    ";
                    $context["somNote"] = ((isset($context["somNote"]) ? $context["somNote"] : $this->getContext($context, "somNote")) + (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")));
                    // line 141
                    echo "                                ";
                }
                // line 142
                echo "                            </td>
                            <td>
                                Rang
                            </td>
                            <td>
                                Mention
                            </td>
                    </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "                    <tr style=\"border: 2px solid black;\">
                        <td  style=\"font-size: 10px; border-right: none\">
                            <strong><i>";
            // line 153
            echo twig_escape_filter($this->env, $context["categorie"], "html", null, true);
            echo "</i></strong>
                        </td>
                        <td style=\"border-right: none\"></td>
                        <td style=\"border-left: none\"></td>
                        <td>
                            <b>";
            // line 158
            echo twig_escape_filter($this->env, (isset($context["somCoefCat"]) ? $context["somCoefCat"] : $this->getContext($context, "somCoefCat")), "html", null, true);
            echo "</b>
                        </td>
                        <td>
                            M:
                            <b>
                                ";
            // line 163
            if (((isset($context["somCoefCat"]) ? $context["somCoefCat"] : $this->getContext($context, "somCoefCat")) > 0)) {
                // line 164
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, ((isset($context["somTotalCat"]) ? $context["somTotalCat"] : $this->getContext($context, "somTotalCat")) / (isset($context["somCoefCat"]) ? $context["somCoefCat"] : $this->getContext($context, "somCoefCat"))), 5, "true", ""), "html", null, true);
                echo "
                                ";
            } else {
                // line 166
                echo "                                    /
                                ";
            }
            // line 168
            echo "                            </b>
                        </td>
                        <td>
                            <b>Rang</b>
                        </td>
                        <td><strong>Mention</strong></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "            </table>
            <table class=\"conduite\" style=\"margin-top: 15px\">
                <tr style=\"border: 2px solid black; font-size: 11px;\">
                    <td class=\"25p\">
                        <b><u>Total des absences</u>:</b>
                        12
                    </td>
                    <td class=\"25p\">
                        <b><u>Absences non justifi&eacute;s</u>:</b>
                        5
                    </td>
                    <td class=\"25p\">
                        <b><u>D&eacute;cision du conseil</u>:</b>
                        Dois faire attention aux abscences
                    </td>
                    <td class=\"25p\">
                        <b><u>Conduite:</u></b><br/>
                        Conduite aceptable
                    </td>
                </tr>
            </table>
            <table class=\"moyenne\">
                <tr style=\"border: 2px solid black;\">
                    <td class=\"20p\">
                        <b><u>Moy. de la classe</u>:</b>
                        09.45
                    </td>
                    <td class=\"30p\">
                        <u>Moy. de l'&eacute;l&egrave;ve</u>:
                        <b>
                            ";
        // line 206
        if (((isset($context["somCoef"]) ? $context["somCoef"] : $this->getContext($context, "somCoef")) > 0)) {
            // line 207
            echo "                                ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, ((isset($context["somNote"]) ? $context["somNote"] : $this->getContext($context, "somNote")) / (isset($context["somCoef"]) ? $context["somCoef"] : $this->getContext($context, "somCoef"))), 5, "true", ""), "html", null, true);
            echo "
                            ";
        } else {
            // line 209
            echo "                                /
                            ";
        }
        // line 211
        echo "                        </b>
                        <br>
                        <b><u>Appr&eacute;ciation</u>:</b>
                        Passable
                    </td>
                    <td class=\"10p\">
                        <b><u>RANG</u>:</b>
                        12ème
                    </td>
                    <td class=\"40p\" >
                        <b><u>OBSERVATIONS</u></b><br/>
                        Un &eacute;ffort consid&eacute;rable s'impose <br> en mati&egrave;res litt&eacute;raires
                    </td>
                </tr>
            </table>
            <table class=\"signature\">
                <tr>
                    <td class=\"50p\" style=\"text-align: left\">
                        <u>Le parent</u><br>
                        <span style=\"text-align: center;\">Signature</span>
                    </td>
                    <td class=\"50p\" style=\"text-align: right\">
                        Fait &agrave; ";
        // line 233
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ecole"]) ? $context["ecole"] : $this->getContext($context, "ecole")), "ville", array()), "html", null, true);
        echo " Le 12/11/2016
                    </td>
                </tr>
            </table>
        </page>";
    }

    public function getTemplateName()
    {
        return "SchoolNoteBundle:Bulletin:bulletins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 233,  396 => 211,  392 => 209,  386 => 207,  384 => 206,  352 => 176,  339 => 168,  335 => 166,  329 => 164,  327 => 163,  319 => 158,  311 => 153,  307 => 151,  293 => 142,  290 => 141,  287 => 140,  285 => 139,  278 => 138,  276 => 137,  272 => 135,  266 => 133,  263 => 132,  260 => 131,  258 => 130,  254 => 128,  248 => 126,  246 => 125,  242 => 123,  236 => 121,  234 => 120,  230 => 118,  224 => 116,  218 => 114,  215 => 113,  213 => 112,  209 => 110,  204 => 109,  201 => 108,  198 => 107,  193 => 106,  190 => 105,  188 => 104,  171 => 90,  167 => 89,  163 => 88,  157 => 85,  153 => 84,  146 => 82,  141 => 80,  138 => 79,  136 => 78,  126 => 75,  123 => 74,  121 => 73,  113 => 67,  107 => 65,  105 => 64,  99 => 61,  90 => 55,  86 => 54,  80 => 51,  74 => 48,  70 => 47,  66 => 46,  19 => 1,);
    }
}
/*         <style type="text/css">*/
/*             table {*/
/*                 width: 100%;*/
/*                 color: #717375;*/
/*                 font-family: helvetica;*/
/*                 line-height: 5mm;*/
/*                 border-collapse: collapse;*/
/*             }*/
/* */
/*             .10p { width: 10%; } .15p { width: 15%; }*/
/*             .25p { width: 25%; } .50p { width: 50%; }*/
/*             .60p { width: 60%; } .75p { width: 75%; }*/
/*             .30p {width: 30%;} .20p{width: 20%;}*/
/*                                   .40p{width: 40%}*/
/* */
/*             .info td, .info1 td{*/
/*                 height: 25px;*/
/*                 border-top: 1px solid black; border-bottom: 1px solid black;*/
/*             }*/
/*             .notes  td,.notes  th {*/
/*                 border: 1px solid darkgray;*/
/*                 height: 25px;*/
/*             }*/
/*             .conduite tr td{*/
/*                 border: 1px solid darkgray;*/
/*                 height: 35px;*/
/*             }*/
/*             .moyenne tr td{*/
/*                 border: 1px solid darkgray;*/
/*                 height: 55px;*/
/*             }*/
/*             .signature tr td{*/
/*                 border: 1px solid darkgray;*/
/*                 height: 55px;*/
/*             }*/
/* */
/*         </style>*/
/*         <page backtop="10mm" backleft="10mm" backright="10mm" backbottom="10mm" footer="page;">*/
/*             <page_footer>*/
/*                 <hr />*/
/*                 <p>GreenSoft-Team</p>*/
/*             </page_footer>*/
/*             <table>*/
/*                 <tr>*/
/*                     <td class="40p">*/
/*                         {{ pays.ministereFrancais }}<br/>*/
/*                         {{ ecole.nomFrancais }}<br/>*/
/*                         {{ ecole.boitePostal }}*/
/*                     </td>*/
/*                     <td class="20p" style="text-align: center">*/
/*                         <img style="height: 80px; width: 60px;" src="uploads/logos/{{ ecole.logo.id ~'.'~ ecole.logo.url}}" alt="Logo" title="" >*/
/*                     </td>*/
/*                     <td style="text-align: right" class="40p">*/
/*                         {{ pays.paysFrancais }}<br/>*/
/*                         {{ pays.deviseFrancais }}<br/>*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/*             <table class="info1" style="margin-top: 10px;">*/
/*                 <tr>*/
/*                     <td class="25p" style="text-align: left;"><strong>{{annee}}</strong></td>*/
/*                     <td class="50p" style="text-align: center; font-size: 1.2em"><strong>BULLETIN DE NOTES</strong></td>*/
/*                     <td class="25p" style="text-align: right;"><strong>*/
/*                             {% if listCategories[0].listeMatieres[0].evaluationSeq is not null %}*/
/*                                 {{ listCategories[0].listeMatieres[0].evaluationSeq[0].sequence }}*/
/*                             {% endif %}*/
/*                         </strong></td>*/
/*                 </tr>*/
/*             </table>*/
/*             <table class="info">*/
/*                 <tr>*/
/*                     <td rowspan="2"  style="text-align: left; border-top: none" class="10p">*/
/*                         {% if student.photo is not null %}*/
/*                             <img style="height: 90px; width: 80px;" src="*/
/*                                uploads/images/{{ student.photo.id ~'.'~ student.photo.url}}" alt="{{student}}" title="{{student}}*/
/*                              ">*/
/*                         {% endif %}*/
/*                         {#<img style="height: 90px; width: 80px;" src="uploads/images/1.jpg" alt="Image">#}*/
/*                     </td>*/
/*                     <td class="25p" style="text-align: left; border-top: none">El&egrave;ve: <b>{{ student.nom | upper}}</b></td>*/
/*                     <td class="25p" style="text-align: left; border-top: none">*/
/*                         N&eacute;(e) le:<b>{{ student.dateNaissance|date('d-m-Y') }}</b><br> A <b>{{ student.lieuNaissance | upper}}</b>*/
/*                     </td>*/
/*                     <td class="15p" style="text-align: left; border-top:none; ">Matricule:  <b>{{ student.matricule }}</b></td>*/
/*                     <td class="15p"  style="text-align: left; border-top: none">Sexe: <b>{{student.sexe}}</b></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td class="25p" style="text-align: left;" >Titulaire: <b>{{titulaire}}</b></td>*/
/*                     <td class="25p" style="text-align: left">Classe:  <b>{{ classe.abreviation }}</b></td>*/
/*                     <td class="25p" style="text-align: left">Eff: <b>{{Allstudent | length}}</b></td>*/
/*                     <td></td>*/
/*                 </tr>*/
/*             </table>*/
/*             <table class="notes" style="margin-top: 15px;">*/
/*                 <tr>*/
/*                     <th class="20p" style="background: white;" >Disciplines</th>*/
/*                     <th class="20p" style="background: white;">Enseignants</th>*/
/*                     <th class="10p" style="background: white;">M./20</th>*/
/*                     <th class="10p" style="background: white;">Coef.</th>*/
/*                     <th class="10p" style="background: white;">Total</th>*/
/*                     <th class="15p" style="background: white;">Rang</th>*/
/*                     <th class="15p" style="background: white;">Mention</th>*/
/*                 </tr>*/
/*                 {% set somNote = 0 %}*/
/*                 {% set somCoef = 0 %}*/
/*                 {% for categorie in listCategories %}*/
/*                     {% set somCoefCat = 0 %}*/
/*                     {% set somTotalCat = 0 %}*/
/*                     {% for matiere in categorie.listeMatieres %}*/
/*                     <tr>*/
/*                             <td>*/
/*                                 {% set mat = matiere.taille %}*/
/*                                 {% if mat > 13 %}*/
/*                                      {{ matiere.abreviation }}*/
/*                                 {% else %}*/
/*                                      {{matiere}}*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {% if matiere.evaluationSeq is not null %}*/
/*                                     {{matiere.evaluationSeq[0].index.enseignant}}*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {% if matiere.evaluationSeq is not null %}*/
/*                                     {{matiere.evaluationSeq[0].note}}*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {% if matiere.evaluationSeq is not null %}*/
/*                                     {% set somCoefCat = somCoefCat + matiere.evaluationSeq[0].index.coefficient %}*/
/*                                     {% set somCoef = somCoef + matiere.evaluationSeq[0].index.coefficient %}*/
/*                                     {{matiere.evaluationSeq[0].index.coefficient}}*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {% if matiere.evaluationSeq is not null %}*/
/*                                     {% set total = matiere.evaluationSeq[0].index.coefficient * matiere.evaluationSeq[0].note %} {{total}}*/
/*                                     {% set somTotalCat = somTotalCat + total %}*/
/*                                     {% set somNote = somNote + total %}*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                             <td>*/
/*                                 Rang*/
/*                             </td>*/
/*                             <td>*/
/*                                 Mention*/
/*                             </td>*/
/*                     </tr>*/
/*                         {% endfor %}*/
/*                     <tr style="border: 2px solid black;">*/
/*                         <td  style="font-size: 10px; border-right: none">*/
/*                             <strong><i>{{categorie}}</i></strong>*/
/*                         </td>*/
/*                         <td style="border-right: none"></td>*/
/*                         <td style="border-left: none"></td>*/
/*                         <td>*/
/*                             <b>{{ somCoefCat }}</b>*/
/*                         </td>*/
/*                         <td>*/
/*                             M:*/
/*                             <b>*/
/*                                 {% if somCoefCat > 0 %}*/
/*                                     {{(somTotalCat / somCoefCat) | truncate(5, 'true', '')}}*/
/*                                 {% else %}*/
/*                                     /*/
/*                                 {% endif %}*/
/*                             </b>*/
/*                         </td>*/
/*                         <td>*/
/*                             <b>Rang</b>*/
/*                         </td>*/
/*                         <td><strong>Mention</strong></td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </table>*/
/*             <table class="conduite" style="margin-top: 15px">*/
/*                 <tr style="border: 2px solid black; font-size: 11px;">*/
/*                     <td class="25p">*/
/*                         <b><u>Total des absences</u>:</b>*/
/*                         12*/
/*                     </td>*/
/*                     <td class="25p">*/
/*                         <b><u>Absences non justifi&eacute;s</u>:</b>*/
/*                         5*/
/*                     </td>*/
/*                     <td class="25p">*/
/*                         <b><u>D&eacute;cision du conseil</u>:</b>*/
/*                         Dois faire attention aux abscences*/
/*                     </td>*/
/*                     <td class="25p">*/
/*                         <b><u>Conduite:</u></b><br/>*/
/*                         Conduite aceptable*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/*             <table class="moyenne">*/
/*                 <tr style="border: 2px solid black;">*/
/*                     <td class="20p">*/
/*                         <b><u>Moy. de la classe</u>:</b>*/
/*                         09.45*/
/*                     </td>*/
/*                     <td class="30p">*/
/*                         <u>Moy. de l'&eacute;l&egrave;ve</u>:*/
/*                         <b>*/
/*                             {% if somCoef  > 0 %}*/
/*                                 {{(somNote / somCoef) | truncate(5, 'true', '')}}*/
/*                             {% else %}*/
/*                                 /*/
/*                             {% endif %}*/
/*                         </b>*/
/*                         <br>*/
/*                         <b><u>Appr&eacute;ciation</u>:</b>*/
/*                         Passable*/
/*                     </td>*/
/*                     <td class="10p">*/
/*                         <b><u>RANG</u>:</b>*/
/*                         12ème*/
/*                     </td>*/
/*                     <td class="40p" >*/
/*                         <b><u>OBSERVATIONS</u></b><br/>*/
/*                         Un &eacute;ffort consid&eacute;rable s'impose <br> en mati&egrave;res litt&eacute;raires*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/*             <table class="signature">*/
/*                 <tr>*/
/*                     <td class="50p" style="text-align: left">*/
/*                         <u>Le parent</u><br>*/
/*                         <span style="text-align: center;">Signature</span>*/
/*                     </td>*/
/*                     <td class="50p" style="text-align: right">*/
/*                         Fait &agrave; {{ecole.ville}} Le 12/11/2016*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/*         </page>*/
