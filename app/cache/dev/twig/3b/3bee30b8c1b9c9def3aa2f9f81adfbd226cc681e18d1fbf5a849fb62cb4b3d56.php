<?php

/* SchoolStudentBundle:Inscription:listeElevesNonInscrits.html.twig */
class __TwigTemplate_f595aa2d6e91751abe1d477922d136288d2755ff4c69c9e3c49652282f050b2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SchoolGestionBundle:Default:index.html.twig", "SchoolStudentBundle:Inscription:listeElevesNonInscrits.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1 class=\"text-center\">Liste des Inscription</h1>

    <table class=\"records_list table panel-primary\" id=\"nonInscrit\">
        <thead class=\"panel-heading\">
            <tr>
                <th class=\"text-center\">Matricule</th>
                <th class=\"text-center\">Nom et pr&eacute;nom</th>
                <th class=\"text-center\">Classe</th>
                <th class=\"text-center\">Ann&eacute;e Acad&eacute;mique</th>
                <th class=\"text-center\">Avance</th>
                <th class=\"text-center\">Date Derni&egrave;re Avance</th>
                <th class=\"text-center\">Action</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "                <tr>
                    <td class=\"text-center\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "matricule", array()), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "classe", array()), "html", null, true);
            echo "</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inscription_new", array("idStudent" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Inscrire</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["incriptionsNonCompletes"]) ? $context["incriptionsNonCompletes"] : $this->getContext($context, "incriptionsNonCompletes")));
        foreach ($context['_seq'] as $context["_key"] => $context["incrip"]) {
            // line 33
            echo "                <tr>
                    <td class=\"text-center\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["incrip"], "student", array()), "matricule", array()), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["incrip"], "student", array()), "nom", array()), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["incrip"], "classe", array()), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["incrip"], "annee", array()), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["incrip"], "avance", array()), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">";
            // line 39
            if ($this->getAttribute($context["incrip"], "dateDerniereAvance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["incrip"], "dateDerniereAvance", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inscription_edit", array("id" => $this->getAttribute($context["incrip"], "id", array()))), "html", null, true);
            echo "\">Completer</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['incrip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("inscription");
        echo "\">
                Retour
            </a>
        </li>
    </ul>
    <script>
        \$('#nonInscrit').DataTable({
            \"pagingType\": \"full_numbers\",
            \"lengthMenu\": [[10, 20], [10, 20]],
            \"language\": {
                \"url\": \"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
            }

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SchoolStudentBundle:Inscription:listeElevesNonInscrits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 59,  132 => 49,  126 => 45,  116 => 41,  109 => 39,  105 => 38,  101 => 37,  97 => 36,  93 => 35,  89 => 34,  86 => 33,  81 => 32,  71 => 28,  63 => 23,  59 => 22,  55 => 21,  52 => 20,  48 => 19,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1 class="text-center">Liste des Inscription</h1>*/
/* */
/*     <table class="records_list table panel-primary" id="nonInscrit">*/
/*         <thead class="panel-heading">*/
/*             <tr>*/
/*                 <th class="text-center">Matricule</th>*/
/*                 <th class="text-center">Nom et pr&eacute;nom</th>*/
/*                 <th class="text-center">Classe</th>*/
/*                 <th class="text-center">Ann&eacute;e Acad&eacute;mique</th>*/
/*                 <th class="text-center">Avance</th>*/
/*                 <th class="text-center">Date Derni&egrave;re Avance</th>*/
/*                 <th class="text-center">Action</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td class="text-center">{{ entity.matricule }}</td>*/
/*                     <td class="text-center">{{ entity.nom }}</td>*/
/*                     <td class="text-center">{{ entity.classe }}</td>*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td></td>*/
/*                     <td class="text-center">*/
/*                         <a href="{{ path('inscription_new', { 'idStudent': entity.id }) }}">Inscrire</a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             {% for incrip in incriptionsNonCompletes  %}*/
/*                 <tr>*/
/*                     <td class="text-center">{{ incrip.student.matricule }}</td>*/
/*                     <td class="text-center">{{ incrip.student.nom }}</td>*/
/*                     <td class="text-center">{{ incrip.classe }}</td>*/
/*                     <td class="text-center">{{ incrip.annee }}</td>*/
/*                     <td class="text-center">{{ incrip.avance }}</td>*/
/*                     <td class="text-center">{% if incrip.dateDerniereAvance %}{{ incrip.dateDerniereAvance|date('d-m-Y') }}{% endif %}</td>*/
/*                     <td class="text-center">*/
/*                         <a href="{{ path('inscription_edit', { 'id': incrip.id }) }}">Completer</a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('inscription') }}">*/
/*                 Retour*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     <script>*/
/*         $('#nonInscrit').DataTable({*/
/*             "pagingType": "full_numbers",*/
/*             "lengthMenu": [[10, 20], [10, 20]],*/
/*             "language": {*/
/*                 "url": "{{ asset('DataTables/French.json') }}"*/
/*             }*/
/* */
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
