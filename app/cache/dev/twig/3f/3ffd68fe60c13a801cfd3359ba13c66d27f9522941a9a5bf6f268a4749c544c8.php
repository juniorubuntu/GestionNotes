<?php

/* SchoolStudentBundle:Inscription:index.html.twig */
class __TwigTemplate_e139b7d6203b5a901e031f9553104270c766c00c5dd86d087e1d9830738c6438 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SchoolGestionBundle:Default:index.html.twig", "SchoolStudentBundle:Inscription:index.html.twig", 1);
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
    <nav class=\"nav navbar-inverse alert-success col-md-12\" style=\"margin-bottom: 3px;\">
        <a style=\"color: green; font-size: 18px;
           text-shadow: -1px 0px;\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("inscription_notyet");
        echo "\" class=\"pull-left btn-link\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Inscrire un nouvel el&egrave;ve</a>
    </nav>
    <table id=\"inscription\" class=\"records_list table panel-primary\">
        <thead class=\"panel-heading\">
            <tr>
                <th>Id</th>
                <th>Nom et prénom</th>
                <th>Classe</th>
                <th>Avance</th>
                <th>Datederniereavance</th>
                <th>Status</th>
                <th>Année Académique</th>
                <th>Détails</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "                <tr>
                    <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inscription_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "student", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "classe", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "avance", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            if ($this->getAttribute($context["entity"], "dateDerniereAvance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDerniereAvance", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                    <td>
                        Paiement 
                        ";
            // line 33
            if (($this->getAttribute($context["entity"], "status", array()) == 1)) {
                // line 34
                echo "                            <b style=\"color: green\">Complet</b>
                        ";
            } else {
                // line 36
                echo "                            <b style=\"color: red\">Incomplet</b>
                        ";
            }
            // line 38
            echo "
                    </td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "annee", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inscription_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">voir</a>
                    </td>
                    <td>
                        ";
            // line 45
            if (($this->getAttribute($context["entity"], "status", array()) == 0)) {
                // line 46
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inscription_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">Modifier</a>
                        ";
            } else {
                // line 48
                echo "                            <b style=\"color: green\">Termin&eacute;e</b>
                        ";
            }
            // line 50
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>

    <script>
        \$('#inscription').DataTable({
            \"pagingType\": \"full_numbers\",
            \"lengthMenu\": [[10, 20], [10, 20]],
            \"language\": {
                \"url\": \"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
            }

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SchoolStudentBundle:Inscription:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 61,  134 => 53,  126 => 50,  122 => 48,  116 => 46,  114 => 45,  108 => 42,  103 => 40,  99 => 38,  95 => 36,  91 => 34,  89 => 33,  81 => 30,  77 => 29,  73 => 28,  69 => 27,  63 => 26,  60 => 25,  56 => 24,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1 class="text-center">Liste des Inscription</h1>*/
/*     <nav class="nav navbar-inverse alert-success col-md-12" style="margin-bottom: 3px;">*/
/*         <a style="color: green; font-size: 18px;*/
/*            text-shadow: -1px 0px;" href="{{path('inscription_notyet')}}" class="pull-left btn-link"><span class="glyphicon glyphicon-plus-sign"></span> Inscrire un nouvel el&egrave;ve</a>*/
/*     </nav>*/
/*     <table id="inscription" class="records_list table panel-primary">*/
/*         <thead class="panel-heading">*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom et prénom</th>*/
/*                 <th>Classe</th>*/
/*                 <th>Avance</th>*/
/*                 <th>Datederniereavance</th>*/
/*                 <th>Status</th>*/
/*                 <th>Année Académique</th>*/
/*                 <th>Détails</th>*/
/*                 <th>Modifier</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('inscription_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                     <td>{{ entity.student }}</td>*/
/*                     <td>{{ entity.classe }}</td>*/
/*                     <td>{{ entity.avance }}</td>*/
/*                     <td>{% if entity.dateDerniereAvance %}{{ entity.dateDerniereAvance|date('d-m-Y') }}{% endif %}</td>*/
/*                     <td>*/
/*                         Paiement */
/*                         {% if entity.status == 1 %}*/
/*                             <b style="color: green">Complet</b>*/
/*                         {% else %}*/
/*                             <b style="color: red">Incomplet</b>*/
/*                         {% endif %}*/
/* */
/*                     </td>*/
/*                     <td>{{ entity.annee }}</td>*/
/*                     <td>*/
/*                         <a href="{{ path('inscription_show', { 'id': entity.id }) }}">voir</a>*/
/*                     </td>*/
/*                     <td>*/
/*                         {% if entity.status == 0 %}*/
/*                             <a href="{{ path('inscription_edit', { 'id': entity.id }) }}">Modifier</a>*/
/*                         {% else %}*/
/*                             <b style="color: green">Termin&eacute;e</b>*/
/*                         {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <script>*/
/*         $('#inscription').DataTable({*/
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
