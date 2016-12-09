<?php

/* SchoolNoteBundle:Bulletin:bulletinSeq.html.twig */
class __TwigTemplate_810e92a81640e9a8d77e3ef74e44177205b49ba275261dc162b6f5162970d286 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SchoolGestionBundle:Default:index.html.twig", "SchoolNoteBundle:Bulletin:bulletinSeq.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'aside' => array($this, 'block_aside'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SchoolGestionBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Bulletin Séquentiel  ";
    }

    // line 4
    public function block_aside($context, array $blocks = array())
    {
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"col-md-offset-2 col-md-8\" style=\"margin-top: 0%; font-size: 12px; font-family: monospace\">
        <table class=\"table table-bordered\" id=\"\">
            <thead class=\"\">
            <tr style=\"font-size: 10px\">
                <td colspan=\"3\" style=\"text-align: center\">
                    <b>
                        ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")), "ministereFrancais", array()), "html", null, true);
        echo "<br>
                        ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ecole"]) ? $context["ecole"] : $this->getContext($context, "ecole")), "nomFrancais", array()), "html", null, true);
        echo "<br>
                        B.P. ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ecole"]) ? $context["ecole"] : $this->getContext($context, "ecole")), "boitePostal", array()), "html", null, true);
        echo "
                    </b>
                </td>
                <td colspan=\"2\" style=\"text-align: center\">
                    <img style=\"height: 50px; width: 60px;\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/logos/" . $this->getAttribute($this->getAttribute((isset($context["ecole"]) ? $context["ecole"] : $this->getContext($context, "ecole")), "logo", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["ecole"]) ? $context["ecole"] : $this->getContext($context, "ecole")), "logo", array()), "url", array()))), "html", null, true);
        echo "\" alt=\"Logo\" title=\"\" >
                </td>
                <td colspan=\"3\" style=\"text-align: center\">
                    <b>
                        Republique du ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")), "paysFrancais", array()), "html", null, true);
        echo "<br>
                        ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")), "deviseFrancais", array()), "html", null, true);
        echo "<br>
                        ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ecole"]) ? $context["ecole"] : $this->getContext($context, "ecole")), "deviseFrancais", array()), "html", null, true);
        echo "
                    </b>
                </td>
            </tr>
            <tr>
                <td style=\"text-align: left\" colspan=\"2\"><b>";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "html", null, true);
        echo "</b></td>
                <td colspan=\"4\" style=\"font-size: 1em; text-align: center\"><b>BULLETIN DE NOTES</b></td>
                <td colspan=\"2\" style=\"text-align: right\">
                    <b>
                        ";
        // line 34
        if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["listCategories"]) ? $context["listCategories"] : $this->getContext($context, "listCategories")), 0, array(), "array"), "listeMatieres", array()), 0, array(), "array"), "evaluationSeq", array()))) {
            // line 35
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["listCategories"]) ? $context["listCategories"] : $this->getContext($context, "listCategories")), 0, array(), "array"), "listeMatieres", array()), 0, array(), "array"), "evaluationSeq", array()), 0, array(), "array"), "sequence", array()), "html", null, true);
            echo "
                        ";
        }
        // line 37
        echo "                    </b>
                </td>

            </tr>
            <tr>
                <td rowspan=\"2\" style=\"text-align: left\">
                    <img style=\"height: 70px; width: 85px;\" src=\"
                             ";
        // line 44
        if ( !(null === $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "photo", array()))) {
            // line 45
            echo "                                 ";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "photo", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "photo", array()), "url", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "html", null, true);
            echo "
                             ";
        }
        // line 47
        echo "                             \">
                </td>
                <td colspan=\"3\" style=\"text-align: left\">Elève: <b>";
        // line 49
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "nom", array())), "html", null, true);
        echo "</b></td>
                <td colspan=\"2\" style=\"text-align: left\"><b>";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "dateNaissance", array()), "d-m-Y"), "html", null, true);
        echo "</b> A <b>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "lieuNaissance", array())), "html", null, true);
        echo "</b></td>
                <td>Matricule:  <b>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "matricule", array()), "html", null, true);
        echo "</b></td>
                <td colspan=\"1\" style=\"text-align: left\">Sexe: <b>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "sexe", array()), "html", null, true);
        echo "</b></td>
            </tr>
            <tr>
                <td style=\"text-align: left\" colspan=\"4\">Titulaire: <b>";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["titulaire"]) ? $context["titulaire"] : $this->getContext($context, "titulaire")), "html", null, true);
        echo "</b></td>
                <td colspan=\"2\" style=\"text-align: left\">Classe:  <b>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "classe", array()), "abreviation", array()), "html", null, true);
        echo "</b></td>
                <td colspan=\"2\" style=\"text-align: left\">Eff: <b>";
        // line 57
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["Allstudent"]) ? $context["Allstudent"] : $this->getContext($context, "Allstudent"))), "html", null, true);
        echo "</b></td>
            </tr>
            <tr>
                <th style=\"background: gray;\" colspan=\"2\">Disciplines</th>
                <th style=\"background: gray;\">Enseignants</th>
                <th style=\"background: gray;\">M./20</th>
                <th style=\"background: gray;\">Coef.</th>
                <th style=\"background: gray;\">Total</th>
                <th style=\"background: gray;\">Rang</th>
                <th style=\"background: gray;\">Mention</th>
            </tr>
            </thead>
            ";
        // line 69
        $context["somNote"] = 0;
        // line 70
        echo "            ";
        $context["somCoef"] = 0;
        // line 71
        echo "            <tbody>
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCategories"]) ? $context["listCategories"] : $this->getContext($context, "listCategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 73
            echo "                ";
            $context["somCoefCat"] = 0;
            // line 74
            echo "                ";
            $context["somTotalCat"] = 0;
            // line 75
            echo "                <tr>
                ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie"], "listeMatieres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
                // line 77
                echo "                    <td colspan=\"2\">
                        ";
                // line 78
                $context["mat"] = $this->getAttribute($context["matiere"], "taille", array());
                // line 79
                echo "                        ";
                if (((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")) > 13)) {
                    // line 80
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "abreviation", array()), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 82
                    echo "                            ";
                    echo twig_escape_filter($this->env, $context["matiere"], "html", null, true);
                    echo "
                        ";
                }
                // line 84
                echo "                        ";
                // line 85
                echo "                    </td>
                    <td>
                        ";
                // line 87
                if ( !(null === $this->getAttribute($context["matiere"], "evaluationSeq", array()))) {
                    // line 88
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "index", array()), "enseignant", array()), "html", null, true);
                    echo "
                        ";
                }
                // line 90
                echo "                    </td>
                    <td>
                        ";
                // line 92
                if ( !(null === $this->getAttribute($context["matiere"], "evaluationSeq", array()))) {
                    // line 93
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "note", array()), "html", null, true);
                    echo "
                        ";
                }
                // line 95
                echo "                    </td>
                    <td>
                        ";
                // line 97
                if ( !(null === $this->getAttribute($context["matiere"], "evaluationSeq", array()))) {
                    // line 98
                    echo "                            ";
                    $context["somCoefCat"] = ((isset($context["somCoefCat"]) ? $context["somCoefCat"] : $this->getContext($context, "somCoefCat")) + $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "index", array()), "coefficient", array()));
                    // line 99
                    echo "                            ";
                    $context["somCoef"] = ((isset($context["somCoef"]) ? $context["somCoef"] : $this->getContext($context, "somCoef")) + $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "index", array()), "coefficient", array()));
                    // line 100
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "index", array()), "coefficient", array()), "html", null, true);
                    echo "
                        ";
                }
                // line 102
                echo "                    </td>
                    <td>
                        ";
                // line 104
                if ( !(null === $this->getAttribute($context["matiere"], "evaluationSeq", array()))) {
                    // line 105
                    echo "                            ";
                    $context["total"] = ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "index", array()), "coefficient", array()) * $this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "note", array()));
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
                    echo "
                            ";
                    // line 106
                    $context["somTotalCat"] = ((isset($context["somTotalCat"]) ? $context["somTotalCat"] : $this->getContext($context, "somTotalCat")) + (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")));
                    // line 107
                    echo "                            ";
                    $context["somNote"] = ((isset($context["somNote"]) ? $context["somNote"] : $this->getContext($context, "somNote")) + (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")));
                    // line 108
                    echo "                        ";
                }
                // line 109
                echo "                    </td>
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
            // line 118
            echo "                <tr style=\"border: 2px solid black;\">
                    <td colspan=\"4\" style=\"font-size: 10px\">
                        <b><i>";
            // line 120
            echo twig_escape_filter($this->env, $context["categorie"], "html", null, true);
            echo "</i></b>
                    </td>
                    <td>
                        <b>";
            // line 123
            echo twig_escape_filter($this->env, (isset($context["somCoefCat"]) ? $context["somCoefCat"] : $this->getContext($context, "somCoefCat")), "html", null, true);
            echo "</b>
                    </td>
                    <td colspan=\"2\">
                        M:
                        <b>
                            ";
            // line 128
            if (((isset($context["somCoefCat"]) ? $context["somCoefCat"] : $this->getContext($context, "somCoefCat")) > 0)) {
                // line 129
                echo "                                ";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, ((isset($context["somTotalCat"]) ? $context["somTotalCat"] : $this->getContext($context, "somTotalCat")) / (isset($context["somCoefCat"]) ? $context["somCoefCat"] : $this->getContext($context, "somCoefCat"))), 5, "true", ""), "html", null, true);
                echo "
                            ";
            } else {
                // line 131
                echo "                                /
                            ";
            }
            // line 133
            echo "                        </b>
                    </td>
                    <td>
                        <b>Rang</b>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "            <tr>
                <td colspan=\"8\">&nbsp;</td>
            </tr>
            <tr style=\"border: 2px solid black; font-size: 11px; font-family: initial\">
                <td colspan=\"2\">
                    <b><u>Total des absences</u>:</b>
                    12
                </td>
                <td colspan=\"2\">
                    <b><u>Absences non justifiés</u>:</b>
                    5
                </td>
                <td colspan=\"2\">
                    <b><u>Décision du conseil</u>:</b>
                    Dois faire attention aux abscences
                </td>
                <td colspan=\"2\" >
                    <b><u>Conduite:</u></b><br/>
                    Conduite aceptable
                </td>
            </tr>
            <tr style=\"border: 2px solid black; font-family: initial\">
                <td colspan=\"2\">
                    <b><u>Moy. de la classe</u>:</b>
                    09.45
                </td>
                <td colspan=\"2\">
                    <u>Moy. de l'élève</u>:
                    <b style=\"font-family: monospace\">
                        ";
        // line 169
        if (((isset($context["somCoef"]) ? $context["somCoef"] : $this->getContext($context, "somCoef")) > 0)) {
            // line 170
            echo "                            ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, ((isset($context["somNote"]) ? $context["somNote"] : $this->getContext($context, "somNote")) / (isset($context["somCoef"]) ? $context["somCoef"] : $this->getContext($context, "somCoef"))), 5, "true", ""), "html", null, true);
            echo "
                        ";
        } else {
            // line 172
            echo "                            /
                        ";
        }
        // line 174
        echo "                    </b>
                    <br>
                    <b><u>Appréciation</u>:</b>
                    Passable
                </td>
                <td>
                    <b><u>RANG</u>:</b>
                    12ème
                </td>
                <td colspan=\"3\" >
                    <b><u>OBSERVATIONS</u></b><br/>
                    Un éffort considérable s'impose en matières littéraires
                </td>
            </tr>
            <tr>
                <td colspan=\"4\" style=\"text-align: left\">
                    <u>Le parent</u><br>
                    <center>Signature</center>
                </td>
                <td colspan=\"4\" style=\"text-align: right\">
                    Fait à ";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ecole"]) ? $context["ecole"] : $this->getContext($context, "ecole")), "ville", array()), "html", null, true);
        echo " Le 12/11/2016
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <script>
        \$('#bulletin').DataTable({
            \"pagingType\": \"full_numbers\",
            \"lengthMenu\": [[10, 10], [10, 10]],
            lengthChange: true,
            buttons: ['excel', 'pdf', 'print'],
            dom: 'Bfrtip',
            \"language\": {
                \"url\": \"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
            }
        });
        \$('td').css({
            'padding': '2px'
        });
        \$('th').css({
            'padding': '2px'
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SchoolNoteBundle:Bulletin:bulletinSeq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 208,  404 => 194,  382 => 174,  378 => 172,  372 => 170,  370 => 169,  339 => 140,  327 => 133,  323 => 131,  317 => 129,  315 => 128,  307 => 123,  301 => 120,  297 => 118,  283 => 109,  280 => 108,  277 => 107,  275 => 106,  268 => 105,  266 => 104,  262 => 102,  256 => 100,  253 => 99,  250 => 98,  248 => 97,  244 => 95,  238 => 93,  236 => 92,  232 => 90,  226 => 88,  224 => 87,  220 => 85,  218 => 84,  212 => 82,  206 => 80,  203 => 79,  201 => 78,  198 => 77,  194 => 76,  191 => 75,  188 => 74,  185 => 73,  181 => 72,  178 => 71,  175 => 70,  173 => 69,  158 => 57,  154 => 56,  150 => 55,  144 => 52,  140 => 51,  134 => 50,  130 => 49,  126 => 47,  116 => 45,  114 => 44,  105 => 37,  99 => 35,  97 => 34,  90 => 30,  82 => 25,  78 => 24,  74 => 23,  67 => 19,  60 => 15,  56 => 14,  52 => 13,  44 => 7,  41 => 6,  36 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends "SchoolGestionBundle:Default:index.html.twig" %}*/
/* {% block title %} Bulletin Séquentiel  {% endblock %}*/
/* */
/* {% block aside %}*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div class="col-md-offset-2 col-md-8" style="margin-top: 0%; font-size: 12px; font-family: monospace">*/
/*         <table class="table table-bordered" id="">*/
/*             <thead class="">*/
/*             <tr style="font-size: 10px">*/
/*                 <td colspan="3" style="text-align: center">*/
/*                     <b>*/
/*                         {{ pays.ministereFrancais }}<br>*/
/*                         {{ ecole.nomFrancais }}<br>*/
/*                         B.P. {{ ecole.boitePostal }}*/
/*                     </b>*/
/*                 </td>*/
/*                 <td colspan="2" style="text-align: center">*/
/*                     <img style="height: 50px; width: 60px;" src="{{ asset('uploads/logos/' ~ ecole.logo.id ~'.'~ ecole.logo.url)}}" alt="Logo" title="" >*/
/*                 </td>*/
/*                 <td colspan="3" style="text-align: center">*/
/*                     <b>*/
/*                         Republique du {{ pays.paysFrancais }}<br>*/
/*                         {{ pays.deviseFrancais }}<br>*/
/*                         {{ecole.deviseFrancais}}*/
/*                     </b>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td style="text-align: left" colspan="2"><b>{{annee}}</b></td>*/
/*                 <td colspan="4" style="font-size: 1em; text-align: center"><b>BULLETIN DE NOTES</b></td>*/
/*                 <td colspan="2" style="text-align: right">*/
/*                     <b>*/
/*                         {% if listCategories[0].listeMatieres[0].evaluationSeq is not null %}*/
/*                             {{ listCategories[0].listeMatieres[0].evaluationSeq[0].sequence }}*/
/*                         {% endif %}*/
/*                     </b>*/
/*                 </td>*/
/* */
/*             </tr>*/
/*             <tr>*/
/*                 <td rowspan="2" style="text-align: left">*/
/*                     <img style="height: 70px; width: 85px;" src="*/
/*                              {% if student.photo is not null %}*/
/*                                  {{ asset('uploads/images/' ~ student.photo.id ~'.'~ student.photo.url)}}" alt="{{student}}" title="{{student}}*/
/*                              {% endif %}*/
/*                              ">*/
/*                 </td>*/
/*                 <td colspan="3" style="text-align: left">Elève: <b>{{ student.nom | upper}}</b></td>*/
/*                 <td colspan="2" style="text-align: left"><b>{{ student.dateNaissance|date('d-m-Y') }}</b> A <b>{{ student.lieuNaissance | upper}}</b></td>*/
/*                 <td>Matricule:  <b>{{ student.matricule }}</b></td>*/
/*                 <td colspan="1" style="text-align: left">Sexe: <b>{{student.sexe}}</b></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td style="text-align: left" colspan="4">Titulaire: <b>{{titulaire}}</b></td>*/
/*                 <td colspan="2" style="text-align: left">Classe:  <b>{{ student.classe.abreviation }}</b></td>*/
/*                 <td colspan="2" style="text-align: left">Eff: <b>{{Allstudent | length}}</b></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th style="background: gray;" colspan="2">Disciplines</th>*/
/*                 <th style="background: gray;">Enseignants</th>*/
/*                 <th style="background: gray;">M./20</th>*/
/*                 <th style="background: gray;">Coef.</th>*/
/*                 <th style="background: gray;">Total</th>*/
/*                 <th style="background: gray;">Rang</th>*/
/*                 <th style="background: gray;">Mention</th>*/
/*             </tr>*/
/*             </thead>*/
/*             {% set somNote = 0 %}*/
/*             {% set somCoef = 0 %}*/
/*             <tbody>*/
/*             {% for categorie in listCategories %}*/
/*                 {% set somCoefCat = 0 %}*/
/*                 {% set somTotalCat = 0 %}*/
/*                 <tr>*/
/*                 {% for matiere in categorie.listeMatieres %}*/
/*                     <td colspan="2">*/
/*                         {% set mat = matiere.taille %}*/
/*                         {% if mat > 13 %}*/
/*                             {{ matiere.abreviation }}*/
/*                         {% else %}*/
/*                             {{matiere}}*/
/*                         {% endif %}*/
/*                         {# {{matiere | truncate(13, true, '... (' ~ matiere.abreviation ~ ')')}} #}*/
/*                     </td>*/
/*                     <td>*/
/*                         {% if matiere.evaluationSeq is not null %}*/
/*                             {{matiere.evaluationSeq[0].index.enseignant}}*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td>*/
/*                         {% if matiere.evaluationSeq is not null %}*/
/*                             {{matiere.evaluationSeq[0].note}}*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td>*/
/*                         {% if matiere.evaluationSeq is not null %}*/
/*                             {% set somCoefCat = somCoefCat + matiere.evaluationSeq[0].index.coefficient %}*/
/*                             {% set somCoef = somCoef + matiere.evaluationSeq[0].index.coefficient %}*/
/*                             {{matiere.evaluationSeq[0].index.coefficient}}*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td>*/
/*                         {% if matiere.evaluationSeq is not null %}*/
/*                             {% set total = matiere.evaluationSeq[0].index.coefficient * matiere.evaluationSeq[0].note %} {{total}}*/
/*                             {% set somTotalCat = somTotalCat + total %}*/
/*                             {% set somNote = somNote + total %}*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td>*/
/*                         Rang*/
/*                     </td>*/
/*                     <td>*/
/*                         Mention*/
/*                     </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 <tr style="border: 2px solid black;">*/
/*                     <td colspan="4" style="font-size: 10px">*/
/*                         <b><i>{{categorie}}</i></b>*/
/*                     </td>*/
/*                     <td>*/
/*                         <b>{{ somCoefCat }}</b>*/
/*                     </td>*/
/*                     <td colspan="2">*/
/*                         M:*/
/*                         <b>*/
/*                             {% if somCoefCat > 0 %}*/
/*                                 {{(somTotalCat / somCoefCat) | truncate(5, 'true', '')}}*/
/*                             {% else %}*/
/*                                 /*/
/*                             {% endif %}*/
/*                         </b>*/
/*                     </td>*/
/*                     <td>*/
/*                         <b>Rang</b>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             <tr>*/
/*                 <td colspan="8">&nbsp;</td>*/
/*             </tr>*/
/*             <tr style="border: 2px solid black; font-size: 11px; font-family: initial">*/
/*                 <td colspan="2">*/
/*                     <b><u>Total des absences</u>:</b>*/
/*                     12*/
/*                 </td>*/
/*                 <td colspan="2">*/
/*                     <b><u>Absences non justifiés</u>:</b>*/
/*                     5*/
/*                 </td>*/
/*                 <td colspan="2">*/
/*                     <b><u>Décision du conseil</u>:</b>*/
/*                     Dois faire attention aux abscences*/
/*                 </td>*/
/*                 <td colspan="2" >*/
/*                     <b><u>Conduite:</u></b><br/>*/
/*                     Conduite aceptable*/
/*                 </td>*/
/*             </tr>*/
/*             <tr style="border: 2px solid black; font-family: initial">*/
/*                 <td colspan="2">*/
/*                     <b><u>Moy. de la classe</u>:</b>*/
/*                     09.45*/
/*                 </td>*/
/*                 <td colspan="2">*/
/*                     <u>Moy. de l'élève</u>:*/
/*                     <b style="font-family: monospace">*/
/*                         {% if somCoef  > 0 %}*/
/*                             {{(somNote / somCoef) | truncate(5, 'true', '')}}*/
/*                         {% else %}*/
/*                             /*/
/*                         {% endif %}*/
/*                     </b>*/
/*                     <br>*/
/*                     <b><u>Appréciation</u>:</b>*/
/*                     Passable*/
/*                 </td>*/
/*                 <td>*/
/*                     <b><u>RANG</u>:</b>*/
/*                     12ème*/
/*                 </td>*/
/*                 <td colspan="3" >*/
/*                     <b><u>OBSERVATIONS</u></b><br/>*/
/*                     Un éffort considérable s'impose en matières littéraires*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td colspan="4" style="text-align: left">*/
/*                     <u>Le parent</u><br>*/
/*                     <center>Signature</center>*/
/*                 </td>*/
/*                 <td colspan="4" style="text-align: right">*/
/*                     Fait à {{ecole.ville}} Le 12/11/2016*/
/*                 </td>*/
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/*     <script>*/
/*         $('#bulletin').DataTable({*/
/*             "pagingType": "full_numbers",*/
/*             "lengthMenu": [[10, 10], [10, 10]],*/
/*             lengthChange: true,*/
/*             buttons: ['excel', 'pdf', 'print'],*/
/*             dom: 'Bfrtip',*/
/*             "language": {*/
/*                 "url": "{{ asset('DataTables/French.json') }}"*/
/*             }*/
/*         });*/
/*         $('td').css({*/
/*             'padding': '2px'*/
/*         });*/
/*         $('th').css({*/
/*             'padding': '2px'*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
