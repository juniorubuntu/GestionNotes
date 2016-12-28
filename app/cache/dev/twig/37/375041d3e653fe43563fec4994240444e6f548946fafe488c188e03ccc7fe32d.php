<?php

/* SchoolNoteBundle:Evaluation:statistiques.html.twig */
class __TwigTemplate_55141665ca5165323e2a145e03e32b8d9c74257db493271ceb34d71fa7c71478 extends Twig_Template
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
        echo "<style>
    #entete{
    width: 100%;
    /*color: #717375;*/
    font-family: helvetica;
    line-height: 5mm;
    border-collapse: collapse;
    }

    .10p { width: 10%; } .15p { width: 15%; }
    .25p { width: 25%; } .50p { width: 50%; }
    .60p { width: 60%; } .75p { width: 75%; }
    .30p {width: 30%;} .20p{width: 20%;}
    .40p{width: 40%}

    .notes  td,.notes  th {
    border: 1px solid darkgray;
    height: 25px;
    }

    .notes{
    border: none;
    }

     #tableau{
         border-collapse: collapse;
     }

     #tableau td, #tableau th{
        border: 1px solid black;
    }
</style>

<page backtop=\"10mm\" backleft=\"10mm\" backright=\"10mm\" backbottom=\"10mm\" footer=\"page;\">
    <page_footer>
        <hr />
        <p>GreenSoft-Team</p>
    </page_footer>
        <h1 style=\"text-align: center;\"><u>FICHE DE SUIVI PEDAGOGIQUE DU PROFESSEUR DANS SES DIFFERENTES CLASSES</u></h1>
            <table id=\"entete\" class=\"notes\">
                <tr>
                    <td style=\"border: none\" colspan=\"3\"><strong>Noms et pr&eacute;noms: </strong>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["enseignements"]) ? $context["enseignements"] : $this->getContext($context, "enseignements")), 0, array(), "array"), "enseignant", array()), "nom", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td style=\"border: none\" class=\"30p\"><strong>Grade: </strong>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["enseignements"]) ? $context["enseignements"] : $this->getContext($context, "enseignements")), 0, array(), "array"), "enseignant", array()), "grade", array()), "html", null, true);
        echo "</td>
                    <td style=\"border: none\" class=\"30p\"><strong>Dicipline: </strong>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["enseignements"]) ? $context["enseignements"] : $this->getContext($context, "enseignements")), 0, array(), "array"), "matiere", array()), "nom", array()), "html", null, true);
        echo "</td>
                    <td style=\"border: none\" class=\"30p\"><strong>S&eacute;quence : </strong>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sequence"]) ? $context["sequence"] : $this->getContext($context, "sequence")), "nom", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td style=\"border: none\">
                        <strong>P&eacute;riode allant du:</strong>_________ <strong> au</strong>________
                    </td>
                    <td style=\"border: none\">
                        <strong>Nombre de moyenne > ou = 10/20:__________</strong>
                    </td>
                    <td style=\"border: none\">
                        <strong>Poucentage de r&eacute;ussite________</strong>
                    </td>
                </tr>
            </table>


        <table id=\"tableau\">
            <tr>
                <th colspan=\"6\" rowspan=\"2\"></th>
                <th style=\"text-align: center\" colspan=\"6\" rowspan=\"2\">A. Taux de couverture <br>des heures d'enseignement<br>et des programmes</th>
                <th rowspan=\"3\">Moyenne<br>g&eacute;n&eacute;rale<br>de la<br>classe</th>
                <th colspan=\"3\" rowspan=\"3\">Taux de<br>r&eacute;ussite<br>en %</th>
                <th style=\"text-align: center;\" colspan=\"5\">B. Statistiques des <br> r&eacute;sultats</th>
            </tr>

            <tr style=\"font-weight: bold\">
                <td style=\"text-align: center;\" colspan=\"5\">Nombre de notes <br> compris entre</td>
            </tr>
            <tr style=\"font-weight: bold\">
                <td>N&deg;</td>
                <td>Classes</td>
                <td>Discipline</td>
                <td colspan=\"3\">Effectif</td>
                <td style=\"text-align: center;\" colspan=\"3\">1. Couverture <br> des heures <br>d'enseignements</td>
                <td style=\"text-align: center;\" colspan=\"3\">2. Couvertures des <br> programmes</td>
                <td>16-20</td>
                <td>14-15.99</td>
                <td>12-13.99</td>
                <td>10-11.99</td>
                <td>0-9.99</td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>G</td>
                <td>F</td>
                <td>T</td>
                <td>Heures <br> dues par An</td>
                <td>Heures <br> faites</td>
                <td>Taux en %</td>
                <td>Nombres de <br> le&ccedil;ons <br> pr&eacute;vues <br> par an</td>
                <td>Nombres de <br> le&ccedil;ons <br> faites</td>
                <td>Taux en %</td>
                <td></td>
                <td>G</td>
                <td>F</td>
                <td>T</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            ";
        // line 112
        $context["i"] = 1;
        // line 113
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enseignements"]) ? $context["enseignements"] : $this->getContext($context, "enseignements")));
        foreach ($context['_seq'] as $context["_key"] => $context["enseignement"]) {
            // line 114
            echo "                <tr>
                    <td>";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                    <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseignement"], "classe", array()), "abreviation", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseignement"], "matiere", array()), "abreviation", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignement"], "nbreGarcons", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignement"], "nbreFilles", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 120
            echo twig_escape_filter($this->env, ($this->getAttribute($context["enseignement"], "nbreGarcons", array()) + $this->getAttribute($context["enseignement"], "nbreFilles", array())), "html", null, true);
            echo "</td>
                    <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignement"], "nombreHeuresAnnuel", array()), "html", null, true);
            echo "</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                ";
            // line 137
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 138
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "        </table>
</page>";
    }

    public function getTemplateName()
    {
        return "SchoolNoteBundle:Evaluation:statistiques.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 139,  199 => 138,  197 => 137,  178 => 121,  174 => 120,  170 => 119,  166 => 118,  162 => 117,  158 => 116,  154 => 115,  151 => 114,  146 => 113,  144 => 112,  76 => 47,  72 => 46,  68 => 45,  62 => 42,  19 => 1,);
    }
}
/* <style>*/
/*     #entete{*/
/*     width: 100%;*/
/*     /*color: #717375;*//* */
/*     font-family: helvetica;*/
/*     line-height: 5mm;*/
/*     border-collapse: collapse;*/
/*     }*/
/* */
/*     .10p { width: 10%; } .15p { width: 15%; }*/
/*     .25p { width: 25%; } .50p { width: 50%; }*/
/*     .60p { width: 60%; } .75p { width: 75%; }*/
/*     .30p {width: 30%;} .20p{width: 20%;}*/
/*     .40p{width: 40%}*/
/* */
/*     .notes  td,.notes  th {*/
/*     border: 1px solid darkgray;*/
/*     height: 25px;*/
/*     }*/
/* */
/*     .notes{*/
/*     border: none;*/
/*     }*/
/* */
/*      #tableau{*/
/*          border-collapse: collapse;*/
/*      }*/
/* */
/*      #tableau td, #tableau th{*/
/*         border: 1px solid black;*/
/*     }*/
/* </style>*/
/* */
/* <page backtop="10mm" backleft="10mm" backright="10mm" backbottom="10mm" footer="page;">*/
/*     <page_footer>*/
/*         <hr />*/
/*         <p>GreenSoft-Team</p>*/
/*     </page_footer>*/
/*         <h1 style="text-align: center;"><u>FICHE DE SUIVI PEDAGOGIQUE DU PROFESSEUR DANS SES DIFFERENTES CLASSES</u></h1>*/
/*             <table id="entete" class="notes">*/
/*                 <tr>*/
/*                     <td style="border: none" colspan="3"><strong>Noms et pr&eacute;noms: </strong>{{ enseignements[0].enseignant.nom }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td style="border: none" class="30p"><strong>Grade: </strong>{{ enseignements[0].enseignant.grade }}</td>*/
/*                     <td style="border: none" class="30p"><strong>Dicipline: </strong>{{ enseignements[0].matiere.nom }}</td>*/
/*                     <td style="border: none" class="30p"><strong>S&eacute;quence : </strong>{{ sequence.nom }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td style="border: none">*/
/*                         <strong>P&eacute;riode allant du:</strong>_________ <strong> au</strong>________*/
/*                     </td>*/
/*                     <td style="border: none">*/
/*                         <strong>Nombre de moyenne > ou = 10/20:__________</strong>*/
/*                     </td>*/
/*                     <td style="border: none">*/
/*                         <strong>Poucentage de r&eacute;ussite________</strong>*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/* */
/* */
/*         <table id="tableau">*/
/*             <tr>*/
/*                 <th colspan="6" rowspan="2"></th>*/
/*                 <th style="text-align: center" colspan="6" rowspan="2">A. Taux de couverture <br>des heures d'enseignement<br>et des programmes</th>*/
/*                 <th rowspan="3">Moyenne<br>g&eacute;n&eacute;rale<br>de la<br>classe</th>*/
/*                 <th colspan="3" rowspan="3">Taux de<br>r&eacute;ussite<br>en %</th>*/
/*                 <th style="text-align: center;" colspan="5">B. Statistiques des <br> r&eacute;sultats</th>*/
/*             </tr>*/
/* */
/*             <tr style="font-weight: bold">*/
/*                 <td style="text-align: center;" colspan="5">Nombre de notes <br> compris entre</td>*/
/*             </tr>*/
/*             <tr style="font-weight: bold">*/
/*                 <td>N&deg;</td>*/
/*                 <td>Classes</td>*/
/*                 <td>Discipline</td>*/
/*                 <td colspan="3">Effectif</td>*/
/*                 <td style="text-align: center;" colspan="3">1. Couverture <br> des heures <br>d'enseignements</td>*/
/*                 <td style="text-align: center;" colspan="3">2. Couvertures des <br> programmes</td>*/
/*                 <td>16-20</td>*/
/*                 <td>14-15.99</td>*/
/*                 <td>12-13.99</td>*/
/*                 <td>10-11.99</td>*/
/*                 <td>0-9.99</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td>G</td>*/
/*                 <td>F</td>*/
/*                 <td>T</td>*/
/*                 <td>Heures <br> dues par An</td>*/
/*                 <td>Heures <br> faites</td>*/
/*                 <td>Taux en %</td>*/
/*                 <td>Nombres de <br> le&ccedil;ons <br> pr&eacute;vues <br> par an</td>*/
/*                 <td>Nombres de <br> le&ccedil;ons <br> faites</td>*/
/*                 <td>Taux en %</td>*/
/*                 <td></td>*/
/*                 <td>G</td>*/
/*                 <td>F</td>*/
/*                 <td>T</td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*             </tr>*/
/*             {% set i = 1 %}*/
/*             {% for enseignement  in enseignements  %}*/
/*                 <tr>*/
/*                     <td>{{ i }}</td>*/
/*                     <td>{{ enseignement.classe.abreviation}}</td>*/
/*                     <td>{{ enseignement.matiere.abreviation}}</td>*/
/*                     <td>{{ enseignement.nbreGarcons }}</td>*/
/*                     <td> {{ enseignement.nbreFilles }}</td>*/
/*                     <td>{{ enseignement.nbreGarcons + enseignement.nbreFilles  }}</td>*/
/*                     <td>{{ enseignement.nombreHeuresAnnuel}}</td>*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                 </tr>*/
/*                 {% set i =i+1 %}*/
/*             {% endfor %}*/
/*         </table>*/
/* </page>*/
