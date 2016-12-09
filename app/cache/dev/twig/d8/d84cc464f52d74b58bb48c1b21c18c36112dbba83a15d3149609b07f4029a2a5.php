<?php

/* SchoolNoteBundle:Evaluation:statistiques.html.twig */
class __TwigTemplate_64f8245fa258e11d9f7cbf67b31dad23edfb17c25c069fc80a9f7de6fb4ba77f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolNoteBundle:Evaluation:statistiques.html.twig", 4);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        if ((isset($context["enseignements"]) ? $context["enseignements"] : $this->getContext($context, "enseignements"))) {
            // line 8
            echo "        <div class=\"container\">
            <div class=\"text-center\" style=\"font-size: 1.2em;\">
        <h1 class=\"text-center \"><u>FICHE DE SUIVI PEDAGOGIQUE DU PROFESSEUR DANS SES DIFFERENTES CLASSES</u></h1>
            <span><strong>Noms et pr&eacute;nom: </strong>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["enseignements"]) ? $context["enseignements"] : $this->getContext($context, "enseignements")), 0, array(), "array"), "enseignant", array()), "nom", array()), "html", null, true);
            echo "</span>
            <span>&nbsp;&nbsp;<strong>Grade: </strong>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["enseignements"]) ? $context["enseignements"] : $this->getContext($context, "enseignements")), 0, array(), "array"), "enseignant", array()), "grade", array()), "html", null, true);
            echo "  </span>
            <span>&nbsp;&nbsp;<strong>Dicipline: </strong>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["enseignements"]) ? $context["enseignements"] : $this->getContext($context, "enseignements")), 0, array(), "array"), "matiere", array()), "nom", array()), "html", null, true);
            echo "</span><br>
            <span><strong>S&eacute;quence : </strong>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sequence"]) ? $context["sequence"] : $this->getContext($context, "sequence")), "nom", array()), "html", null, true);
            echo "</span>
            <span>&nbsp;&nbsp;<strong>P&eacute;riode allant du:</strong>_________ <strong> au</strong>________</span><br>
            <span><strong>Nombre de moyenne > ou = 10/20:__________</strong> </span>
            <span>&nbsp;&nbsp;<strong>Poucentage de r&eacute;ussite________</strong></span>
            </div>
        </div>
        ";
        } else {
            // line 21
            echo "            <div class=\"alert alert-warning\">Les informations sont incompl&egrave;tes</div>
    ";
        }
        // line 22
        echo "<br>
    <div class=\"container\">
    <table class=\"table table-bordered\">
        <tr>
            <th colspan=\"6\" rowspan=\"2\"></th>
            <th colspan=\"6\" rowspan=\"2\">A. Taux de couverture des heures d'enseignement<br>et des programmes</th>
            <th rowspan=\"3\">Moyenne<br>g&eacute;n&eacute;rale<br>de la<br>classe</th>
            <th colspan=\"3\" rowspan=\"3\">Taux de<br>r&eacute;ussite<br>en %</th>
            <th colspan=\"5\">B. Statistiques des r&eacute;sultats</th>
        </tr>
        <tr style=\"font-weight: bold\">
            <td colspan=\"5\">Nombre de notes compris entre</td>
        </tr>
        <tr style=\"font-weight: bold\">
            <td>N&deg;</td>
            <td>Classes</td>
            <td>Discipline</td>
            <td colspan=\"3\">Effectif</td>
            <td colspan=\"3\">1. Couverture des heures d'enseignements</td>
            <td colspan=\"3\">2. Couvertures des programmes</td>
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
            <td>Heures dues par An</td>
            <td>Heures faites</td>
            <td>Taux en %</td>
            <td>Nombres de le&ccedil;ons pr&eacute;vues par an</td>
            <td>Nombres de le&ccedil;ons faites</td>
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
        // line 71
        $context["i"] = 1;
        // line 72
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enseignements"]) ? $context["enseignements"] : $this->getContext($context, "enseignements")));
        foreach ($context['_seq'] as $context["_key"] => $context["enseignement"]) {
            // line 73
            echo "            <tr>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</td>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseignement"], "classe", array()), "abreviation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["enseignement"], "matiere", array()), "abreviation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nombreGarcons"]) ? $context["nombreGarcons"] : $this->getContext($context, "nombreGarcons")), ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - 1), array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filles"]) ? $context["filles"] : $this->getContext($context, "filles")), ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - 1), array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - 1), array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 80
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
            // line 96
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 97
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    </table>

    </div>
";
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
        return array (  176 => 98,  170 => 97,  168 => 96,  149 => 80,  145 => 79,  141 => 78,  137 => 77,  133 => 76,  129 => 75,  125 => 74,  122 => 73,  117 => 72,  115 => 71,  64 => 22,  60 => 21,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  33 => 8,  31 => 7,  28 => 6,  11 => 4,);
    }
}
/* {#{% extends 'SchoolGestionBundle:Default:index.html.twig' %}#}*/
/* {#{% block content -%}#}*/
/* */
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     {% if enseignements %}*/
/*         <div class="container">*/
/*             <div class="text-center" style="font-size: 1.2em;">*/
/*         <h1 class="text-center "><u>FICHE DE SUIVI PEDAGOGIQUE DU PROFESSEUR DANS SES DIFFERENTES CLASSES</u></h1>*/
/*             <span><strong>Noms et pr&eacute;nom: </strong>{{ enseignements[0].enseignant.nom }}</span>*/
/*             <span>&nbsp;&nbsp;<strong>Grade: </strong>{{ enseignements[0].enseignant.grade }}  </span>*/
/*             <span>&nbsp;&nbsp;<strong>Dicipline: </strong>{{ enseignements[0].matiere.nom }}</span><br>*/
/*             <span><strong>S&eacute;quence : </strong>{{ sequence.nom }}</span>*/
/*             <span>&nbsp;&nbsp;<strong>P&eacute;riode allant du:</strong>_________ <strong> au</strong>________</span><br>*/
/*             <span><strong>Nombre de moyenne > ou = 10/20:__________</strong> </span>*/
/*             <span>&nbsp;&nbsp;<strong>Poucentage de r&eacute;ussite________</strong></span>*/
/*             </div>*/
/*         </div>*/
/*         {% else %}*/
/*             <div class="alert alert-warning">Les informations sont incompl&egrave;tes</div>*/
/*     {% endif %}<br>*/
/*     <div class="container">*/
/*     <table class="table table-bordered">*/
/*         <tr>*/
/*             <th colspan="6" rowspan="2"></th>*/
/*             <th colspan="6" rowspan="2">A. Taux de couverture des heures d'enseignement<br>et des programmes</th>*/
/*             <th rowspan="3">Moyenne<br>g&eacute;n&eacute;rale<br>de la<br>classe</th>*/
/*             <th colspan="3" rowspan="3">Taux de<br>r&eacute;ussite<br>en %</th>*/
/*             <th colspan="5">B. Statistiques des r&eacute;sultats</th>*/
/*         </tr>*/
/*         <tr style="font-weight: bold">*/
/*             <td colspan="5">Nombre de notes compris entre</td>*/
/*         </tr>*/
/*         <tr style="font-weight: bold">*/
/*             <td>N&deg;</td>*/
/*             <td>Classes</td>*/
/*             <td>Discipline</td>*/
/*             <td colspan="3">Effectif</td>*/
/*             <td colspan="3">1. Couverture des heures d'enseignements</td>*/
/*             <td colspan="3">2. Couvertures des programmes</td>*/
/*             <td>16-20</td>*/
/*             <td>14-15.99</td>*/
/*             <td>12-13.99</td>*/
/*             <td>10-11.99</td>*/
/*             <td>0-9.99</td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td>G</td>*/
/*             <td>F</td>*/
/*             <td>T</td>*/
/*             <td>Heures dues par An</td>*/
/*             <td>Heures faites</td>*/
/*             <td>Taux en %</td>*/
/*             <td>Nombres de le&ccedil;ons pr&eacute;vues par an</td>*/
/*             <td>Nombres de le&ccedil;ons faites</td>*/
/*             <td>Taux en %</td>*/
/*             <td></td>*/
/*             <td>G</td>*/
/*             <td>F</td>*/
/*             <td>T</td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*         </tr>*/
/*         {% set i = 1 %}*/
/*         {% for enseignement  in enseignements  %}*/
/*             <tr>*/
/*                 <td>{{ i }}</td>*/
/*                 <td>{{ enseignement.classe.abreviation}}</td>*/
/*                 <td>{{ enseignement.matiere.abreviation}}</td>*/
/*                 <td>{{ nombreGarcons[i-1] }}</td>*/
/*                 <td>{{ filles[i-1] }}</td>*/
/*                 <td>{{ classes[i-1] }}</td>*/
/*                 <td>{{ enseignement.nombreHeuresAnnuel}}</td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*                 <td></td>*/
/*             </tr>*/
/*             {% set i =i+1 %}*/
/*         {% endfor %}*/
/*     </table>*/
/* */
/*     </div>*/
/* {% endblock %}*/
