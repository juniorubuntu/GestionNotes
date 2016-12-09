<?php

/* SchoolStudentBundle:Classe:index.html.twig */
class __TwigTemplate_1a008ac15848e70c7b58923f000944cb2cb0bf66cdb67cb5de0a9bb7aab32226 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SchoolGestionBundle:Default:index.html.twig", "SchoolStudentBundle:Classe:index.html.twig", 1);
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
        echo "<h2>Liste des salles de classes</h2>
    <nav class=\"nav navbar-inverse alert-success col-md-12\" style=\"margin-bottom: 3px;\">
        <a style=\"color: green; font-size: 18px;
           text-shadow: -1px 0px;\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("classe_new");
        echo "\" class=\"pull-left btn-link\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Ajouter une classe</a>
    </nav>
    <table class=\"records_list table cell-border row-border table-hover panel-primary\" id=\"classe\">
        <thead class=\"panel-heading\">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Classe Père</th>
                <th>Abreviation</th>
                <th>Détails</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "                <tr>
                    <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classe_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "classePere", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "abreviation", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classe_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Voir</a>
                    </td>
                    <td>
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classe_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
    <script>
        \$('#classe').DataTable({
            \"pagingType\": \"full_numbers\",
            \"lengthMenu\": [[10, 20], [10, 20]],
            \"language\": {
                \"url\": \"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
            }

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SchoolStudentBundle:Classe:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  95 => 35,  85 => 31,  79 => 28,  74 => 26,  70 => 25,  66 => 24,  60 => 23,  57 => 22,  53 => 21,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h2>Liste des salles de classes</h2>*/
/*     <nav class="nav navbar-inverse alert-success col-md-12" style="margin-bottom: 3px;">*/
/*         <a style="color: green; font-size: 18px;*/
/*            text-shadow: -1px 0px;" href="{{path('classe_new')}}" class="pull-left btn-link"><span class="glyphicon glyphicon-plus-sign"></span> Ajouter une classe</a>*/
/*     </nav>*/
/*     <table class="records_list table cell-border row-border table-hover panel-primary" id="classe">*/
/*         <thead class="panel-heading">*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Classe Père</th>*/
/*                 <th>Abreviation</th>*/
/*                 <th>Détails</th>*/
/*                 <th>Modifier</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('classe_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                     <td>{{ entity.nom }}</td>*/
/*                     <td>{{ entity.classePere }}</td>*/
/*                     <td>{{ entity.abreviation }}</td>*/
/*                     <td>*/
/*                         <a href="{{ path('classe_show', { 'id': entity.id }) }}">Voir</a>*/
/*                     </td>*/
/*                     <td>*/
/*                         <a href="{{ path('classe_edit', { 'id': entity.id }) }}">Modifier</a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     <script>*/
/*         $('#classe').DataTable({*/
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
