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
                    <td colspan=\"2\" style=\"text-align: right\"><b>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["listCategories"]) ? $context["listCategories"] : $this->getContext($context, "listCategories")), 0, array(), "array"), "listeMatieres", array()), 0, array(), "array"), "evaluationSeq", array()), 0, array(), "array"), "sequence", array()), "html", null, true);
        echo "</b></td>
                </tr>
                <tr>
                    <td rowspan=\"2\" style=\"text-align: left\"><img style=\"height: 70px; width: 85px;\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/images/" . $this->getAttribute($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "photo", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "photo", array()), "url", array()))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "html", null, true);
        echo "\"></td>
                    <td colspan=\"3\" style=\"text-align: left\">Elève: <b>";
        // line 36
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "nom", array())), "html", null, true);
        echo "</b></td>
                    <td colspan=\"2\" style=\"text-align: left\"><b>";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "dateNaissance", array()), "d-m-Y"), "html", null, true);
        echo "</b> A <b>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "lieuNaissance", array())), "html", null, true);
        echo "</b></td>
                    <td>Matricule:  <b>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "matricule", array()), "html", null, true);
        echo "</b></td>
                    <td colspan=\"1\" style=\"text-align: left\">Sexe: <b>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "sexe", array()), "html", null, true);
        echo "</b></td>
                </tr>
                <tr>
                    <td style=\"text-align: left\" colspan=\"4\">Titulaire: <b>";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["titulaire"]) ? $context["titulaire"] : $this->getContext($context, "titulaire")), "html", null, true);
        echo "</b></td>
                    <td colspan=\"2\" style=\"text-align: left\">Classe:  <b>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "classe", array()), "abreviation", array()), "html", null, true);
        echo "</b></td>
                    <td colspan=\"2\" style=\"text-align: left\">Eff.: <b>";
        // line 44
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
            <tbody>
                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCategories"]) ? $context["listCategories"] : $this->getContext($context, "listCategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 58
            echo "                    <tr>
                        ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["categorie"], "listeMatieres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
                // line 60
                echo "                            <td colspan=\"2\">
                                ";
                // line 61
                $context["mat"] = $this->getAttribute($context["matiere"], "taille", array());
                // line 62
                echo "                                ";
                if (((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")) > 13)) {
                    // line 63
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "abreviation", array()), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 65
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["matiere"], "html", null, true);
                    echo "
                                ";
                }
                // line 67
                echo "                                ";
                // line 68
                echo "                            </td>
                            <td>
                                ";
                // line 70
                if ( !(null === $this->getAttribute($context["matiere"], "evaluationSeq", array()))) {
                    // line 71
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "index", array()), "enseignant", array()), "html", null, true);
                    echo "
                                ";
                }
                // line 73
                echo "                            </td>
                            <td>
                                ";
                // line 75
                if ( !(null === $this->getAttribute($context["matiere"], "evaluationSeq", array()))) {
                    // line 76
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "note", array()), "html", null, true);
                    echo "
                                ";
                }
                // line 78
                echo "                            </td>
                            <td>
                                ";
                // line 80
                if ( !(null === $this->getAttribute($context["matiere"], "evaluationSeq", array()))) {
                    // line 81
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "index", array()), "coefficient", array()), "html", null, true);
                    echo "
                                ";
                }
                // line 83
                echo "                            </td>
                            <td>
                                ";
                // line 85
                if ( !(null === $this->getAttribute($context["matiere"], "evaluationSeq", array()))) {
                    // line 86
                    echo "                                    ";
                    $context["total"] = ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "index", array()), "coefficient", array()) * $this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "note", array()));
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
                    echo "
                                ";
                }
                // line 88
                echo "                            </td>
                            <td>
                                Rang
                            </td>
                            <td>
                                Mention
                            </td>
                        <tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                    <tr style=\"border: 2px solid black;\">
                        <td colspan=\"4\">
                            <b><i>";
            // line 99
            echo twig_escape_filter($this->env, $context["categorie"], "html", null, true);
            echo "</i></b>
                        </td>
                        <td>
                            Coef: 
                        </td>
                        <td>
                            Moy: 
                        </td>

                        <td>
                            <b>Rang</b>
                        </td>
                        <td>
                            <b>Mention</b>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                <tr>
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
                        <b><u>Moy. de l'élève</u>:</b>
                        13.67
                        <br>
                        <b><u>Appréciation</u>:</b>
                        Assez Bien
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
        // line 164
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
        // line 178
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
        return array (  344 => 178,  327 => 164,  277 => 116,  254 => 99,  250 => 97,  236 => 88,  228 => 86,  226 => 85,  222 => 83,  216 => 81,  214 => 80,  210 => 78,  204 => 76,  202 => 75,  198 => 73,  192 => 71,  190 => 70,  186 => 68,  184 => 67,  178 => 65,  172 => 63,  169 => 62,  167 => 61,  164 => 60,  160 => 59,  157 => 58,  153 => 57,  137 => 44,  133 => 43,  129 => 42,  123 => 39,  119 => 38,  113 => 37,  109 => 36,  101 => 35,  95 => 32,  90 => 30,  82 => 25,  78 => 24,  74 => 23,  67 => 19,  60 => 15,  56 => 14,  52 => 13,  44 => 7,  41 => 6,  36 => 4,  30 => 2,  11 => 1,);
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
/*                 <tr style="font-size: 10px">*/
/*                     <td colspan="3" style="text-align: center">*/
/*                         <b>*/
/*                             {{ pays.ministereFrancais }}<br>*/
/*                             {{ ecole.nomFrancais }}<br>*/
/*                             B.P. {{ ecole.boitePostal }}*/
/*                         </b>*/
/*                     </td>*/
/*                     <td colspan="2" style="text-align: center">*/
/*                         <img style="height: 50px; width: 60px;" src="{{ asset('uploads/logos/' ~ ecole.logo.id ~'.'~ ecole.logo.url)}}" alt="Logo" title="" >*/
/*                     </td>*/
/*                     <td colspan="3" style="text-align: center">*/
/*                         <b>*/
/*                             Republique du {{ pays.paysFrancais }}<br>*/
/*                             {{ pays.deviseFrancais }}<br>*/
/*                             {{ecole.deviseFrancais}}*/
/*                         </b>*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td style="text-align: left" colspan="2"><b>{{annee}}</b></td>*/
/*                     <td colspan="4" style="font-size: 1em; text-align: center"><b>BULLETIN DE NOTES</b></td>*/
/*                     <td colspan="2" style="text-align: right"><b>{{ listCategories[0].listeMatieres[0].evaluationSeq[0].sequence }}</b></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td rowspan="2" style="text-align: left"><img style="height: 70px; width: 85px;" src="{{ asset('uploads/images/' ~ student.photo.id ~'.'~ student.photo.url)}}" alt="{{student}}" title="{{student}}"></td>*/
/*                     <td colspan="3" style="text-align: left">Elève: <b>{{ student.nom | upper}}</b></td>*/
/*                     <td colspan="2" style="text-align: left"><b>{{ student.dateNaissance|date('d-m-Y') }}</b> A <b>{{ student.lieuNaissance | upper}}</b></td>*/
/*                     <td>Matricule:  <b>{{ student.matricule }}</b></td>*/
/*                     <td colspan="1" style="text-align: left">Sexe: <b>{{student.sexe}}</b></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td style="text-align: left" colspan="4">Titulaire: <b>{{titulaire}}</b></td>*/
/*                     <td colspan="2" style="text-align: left">Classe:  <b>{{ student.classe.abreviation }}</b></td>*/
/*                     <td colspan="2" style="text-align: left">Eff.: <b>{{Allstudent | length}}</b></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th style="background: gray;" colspan="2">Disciplines</th>*/
/*                     <th style="background: gray;">Enseignants</th>*/
/*                     <th style="background: gray;">M./20</th>*/
/*                     <th style="background: gray;">Coef.</th>*/
/*                     <th style="background: gray;">Total</th>*/
/*                     <th style="background: gray;">Rang</th>*/
/*                     <th style="background: gray;">Mention</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% for categorie in listCategories %}*/
/*                     <tr>*/
/*                         {% for matiere in categorie.listeMatieres %}*/
/*                             <td colspan="2">*/
/*                                 {% set mat = matiere.taille %}*/
/*                                 {% if mat > 13 %}*/
/*                                     {{ matiere.abreviation }}*/
/*                                 {% else %}*/
/*                                     {{matiere}}*/
/*                                 {% endif %}*/
/*                                 {# {{matiere | truncate(13, true, '... (' ~ matiere.abreviation ~ ')')}} #}*/
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
/*                                     {{matiere.evaluationSeq[0].index.coefficient}}*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                             <td>*/
/*                                 {% if matiere.evaluationSeq is not null %}*/
/*                                     {% set total = matiere.evaluationSeq[0].index.coefficient * matiere.evaluationSeq[0].note %} {{total}}*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                             <td>*/
/*                                 Rang*/
/*                             </td>*/
/*                             <td>*/
/*                                 Mention*/
/*                             </td>*/
/*                         <tr>*/
/*                         {% endfor %}*/
/*                     <tr style="border: 2px solid black;">*/
/*                         <td colspan="4">*/
/*                             <b><i>{{categorie}}</i></b>*/
/*                         </td>*/
/*                         <td>*/
/*                             Coef: */
/*                         </td>*/
/*                         <td>*/
/*                             Moy: */
/*                         </td>*/
/* */
/*                         <td>*/
/*                             <b>Rang</b>*/
/*                         </td>*/
/*                         <td>*/
/*                             <b>Mention</b>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 <tr>*/
/*                     <td colspan="8">&nbsp;</td>*/
/*                 </tr>*/
/*                 <tr style="border: 2px solid black; font-size: 11px; font-family: initial">*/
/*                     <td colspan="2">*/
/*                         <b><u>Total des absences</u>:</b>*/
/*                         12*/
/*                     </td>*/
/*                     <td colspan="2">*/
/*                         <b><u>Absences non justifiés</u>:</b>*/
/*                         5*/
/*                     </td>*/
/*                     <td colspan="2">*/
/*                         <b><u>Décision du conseil</u>:</b>*/
/*                         Dois faire attention aux abscences*/
/*                     </td>*/
/*                     <td colspan="2" >*/
/*                         <b><u>Conduite:</u></b><br/>*/
/*                         Conduite aceptable*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr style="border: 2px solid black; font-family: initial">*/
/*                     <td colspan="2">*/
/*                         <b><u>Moy. de la classe</u>:</b>*/
/*                         09.45*/
/*                     </td>*/
/*                     <td colspan="2">*/
/*                         <b><u>Moy. de l'élève</u>:</b>*/
/*                         13.67*/
/*                         <br>*/
/*                         <b><u>Appréciation</u>:</b>*/
/*                         Assez Bien*/
/*                     </td>*/
/*                     <td>*/
/*                         <b><u>RANG</u>:</b>*/
/*                         12ème*/
/*                     </td>*/
/*                     <td colspan="3" >*/
/*                         <b><u>OBSERVATIONS</u></b><br/>*/
/*                         Un éffort considérable s'impose en matières littéraires*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td colspan="4" style="text-align: left">*/
/*             <u>Le parent</u><br>*/
/*             <center>Signature</center>*/
/*             </td>*/
/*             <td colspan="4" style="text-align: right">*/
/*                 Fait à {{ecole.ville}} Le 12/11/2016*/
/*             </td>*/
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
/* */
/*         $('td').css({*/
/*             'padding': '2px'*/
/*         });*/
/*         $('th').css({*/
/*             'padding': '2px'*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
