<?php

/* SchoolNoteBundle:Evaluation:bulletins.html.twig */
class __TwigTemplate_181cb74da9c0636523b400e7258bab71b6a09e77941286087a67be7b7923b087 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolNoteBundle:Evaluation:bulletins.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container\" style=\"margin-top: 15px;\">
        <div class=\"col-md-12\">
            <div class=\"pull-left\">
                <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["constante"]) ? $context["constante"] : $this->getContext($context, "constante")), "ministereFrancais", array()), "html", null, true);
        echo "</p>
                <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ecole"]) ? $context["ecole"] : $this->getContext($context, "ecole")), "nomFrancais", array()), "html", null, true);
        echo "</p>
                <p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ecole"]) ? $context["ecole"] : $this->getContext($context, "ecole")), "boitePostal", array()), "html", null, true);
        echo "</p>
            </div>
            <div class=\"pull-right\">
                <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["constante"]) ? $context["constante"] : $this->getContext($context, "constante")), "paysFrancais", array()), "html", null, true);
        echo "</p>
                <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["constante"]) ? $context["constante"] : $this->getContext($context, "constante")), "deviseFrancais", array()), "html", null, true);
        echo "</p>
            </div>
        </div>

        <div class=\"col-md-12\">
            <table border=\"0\" style=\"width: 100%; margin-bottom: 15px;\">
                <tr>
                    <th colspan=\"4\"></th>
                    <th>Ann&eacute;e Acad&eacute;mique: </th>
                </tr>
                <tr>
                    <td colspan=\"2\" rowspan=\"2\"></td>
                    <td  colspan=\"2\" rowspan=\"2\" class=\"text-center\" style=\"font-size: 2em;\">BULLETIN DE NOTES</td>
                    <td></td>
                </tr>
                <tr>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["sequence"]) ? $context["sequence"] : $this->getContext($context, "sequence")), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td class=\"text-center\" colspan=\"2\" rowspan=\"3\"><img style=\"height: 100px; width: 100px;\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/images/photo4x4_elsha.jpg"), "html", null, true);
        echo "\" alt=\"Photo\"></td>
                    <td colspan=\"2\">Nom: ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "nom", array()), "html", null, true);
        echo "</td>
                    <td>Classe:  ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "nom", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <td colspan=\"2\">N&eacute;(e) le ";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "dateNaissance", array()), "d-m-Y"), "html", null, true);
        echo " &agrave; ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "lieuNaissance", array()), "html", null, true);
        echo "</td>
                    <td>Effectif: </td>
                </tr>
                <tr>
                    <td colspan=\"2\">Addresse:______________________</td>
                    <td>Situation: </td>
                </tr>
                <tr>
                    <td class=\"text-center\" colspan=\"5\">Enseignant Titulaire: </td>
                </tr>
            </table>
        </div>
        <br>
    <table class=\"table table-bordered\">
        <tr>
            <th class=\"text-center\">Disciplines</th>
            <th class=\"text-center\">Enseignants</th>
            <th class=\"text-center\">Moyenne/20</th>
            <th class=\"text-center\">Coef</th>
            <th class=\"text-center\">Total</th>
            <th class=\"text-center\">Rang</th>
            <th class=\"text-center\" colspan=\"2\">Mention</th>
        </tr>
        ";
        // line 61
        $context["i"] = 0;
        // line 62
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")));
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
            // line 63
            echo "        <tr>
            <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["evaluation"], "matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["evaluation"], "matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "note", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "note", array()), "html", null, true);
            echo "</td>
            <td></td>
            <td></td>
            <td colspan=\"2\"></td>
        </tr>
            ";
            // line 72
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 73
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        <tr>
            <td class=\"text-center\" colspan=\"3\"><strong>Total 1: Enseignements Litt&eacute;raires</strong></td>
            <td></td>
            <td></td>
            <td colspan=\"2\" class=\"text-center\"><strong>Moyenne</strong></td>
            <td ></td>
        </tr>
    </table>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "SchoolNoteBundle:Evaluation:bulletins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 74,  153 => 73,  151 => 72,  143 => 67,  139 => 66,  135 => 65,  131 => 64,  128 => 63,  123 => 62,  121 => 61,  93 => 38,  87 => 35,  83 => 34,  79 => 33,  73 => 30,  54 => 14,  50 => 13,  44 => 10,  40 => 9,  36 => 8,  31 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body -%}*/
/*     {#{% for eleve in eleves  %}#}*/
/*     <div class="container" style="margin-top: 15px;">*/
/*         <div class="col-md-12">*/
/*             <div class="pull-left">*/
/*                 <p>{{ constante.ministereFrancais }}</p>*/
/*                 <p>{{ ecole.nomFrancais }}</p>*/
/*                 <p>{{ ecole.boitePostal }}</p>*/
/*             </div>*/
/*             <div class="pull-right">*/
/*                 <p>{{ constante.paysFrancais }}</p>*/
/*                 <p>{{ constante.deviseFrancais }}</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-md-12">*/
/*             <table border="0" style="width: 100%; margin-bottom: 15px;">*/
/*                 <tr>*/
/*                     <th colspan="4"></th>*/
/*                     <th>Ann&eacute;e Acad&eacute;mique: </th>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td colspan="2" rowspan="2"></td>*/
/*                     <td  colspan="2" rowspan="2" class="text-center" style="font-size: 2em;">BULLETIN DE NOTES</td>*/
/*                     <td></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>{{ sequence }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td class="text-center" colspan="2" rowspan="3"><img style="height: 100px; width: 100px;" src="{{ asset('uploads/images/photo4x4_elsha.jpg') }}" alt="Photo"></td>*/
/*                     <td colspan="2">Nom: {{ eleve.nom }}</td>*/
/*                     <td>Classe:  {{ classe.nom }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td colspan="2">N&eacute;(e) le {{ eleve.dateNaissance|date('d-m-Y') }} &agrave; {{ eleve.lieuNaissance }}</td>*/
/*                     <td>Effectif: </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td colspan="2">Addresse:______________________</td>*/
/*                     <td>Situation: </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td class="text-center" colspan="5">Enseignant Titulaire: </td>*/
/*                 </tr>*/
/*             </table>*/
/*         </div>*/
/*         <br>*/
/*     <table class="table table-bordered">*/
/*         <tr>*/
/*             <th class="text-center">Disciplines</th>*/
/*             <th class="text-center">Enseignants</th>*/
/*             <th class="text-center">Moyenne/20</th>*/
/*             <th class="text-center">Coef</th>*/
/*             <th class="text-center">Total</th>*/
/*             <th class="text-center">Rang</th>*/
/*             <th class="text-center" colspan="2">Mention</th>*/
/*         </tr>*/
/*         {% set i = 0 %}*/
/*         {% for evaluation in evaluations %}*/
/*         <tr>*/
/*             <td>{{ evaluation.matiere.nom }}</td>*/
/*             <td>{{ evaluation.matiere.nom }}</td>*/
/*             <td>{{ evaluation.note }}</td>*/
/*             <td>{{ evaluation.note }}</td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td colspan="2"></td>*/
/*         </tr>*/
/*             {% set i = i+1 %}*/
/*         {% endfor %}*/
/*         <tr>*/
/*             <td class="text-center" colspan="3"><strong>Total 1: Enseignements Litt&eacute;raires</strong></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*             <td colspan="2" class="text-center"><strong>Moyenne</strong></td>*/
/*             <td ></td>*/
/*         </tr>*/
/*     </table>*/
/*     </div>*/
/*     {#{% endfor %}#}*/
/* {% endblock %}*/
