<?php

/* SchoolMatiereBundle:Matiere:index.html.twig */
class __TwigTemplate_97e74fc386afbc987b455347bdc4c0cba68af876b4e1a57e512c932b01a04e85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SchoolGestionBundle:Default:index.html.twig", "SchoolMatiereBundle:Matiere:index.html.twig", 1);
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
        echo "<h1 class=\"text-center\">Liste des matières</h1>
    <nav class=\"nav navbar-inverse alert-success col-md-12\" style=\"margin-bottom: 3px;\">
        <a style=\"color: green; font-size: 18px;
           text-shadow: -1px 0px;\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("matiere_new");
        echo "\" class=\"pull-left btn-link\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Ajouter une matière</a>
    </nav>
    <table class=\"records_list table table-striped display row-border cell-border compact panel-primary \" id=\"matiere\">
        <thead class=\"panel-heading\" >
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Abreviation</th>
                <th>Détails</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "                <tr>
                    <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "abreviation", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Voir</a>
                    </td>
                    <td>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>
    <script>
        \$('#matiere').DataTable({
            \"pagingType\": \"full_numbers\",
            \"lengthMenu\": [[10, 20], [10, 20]],
            \"language\": {
                \"url\": \"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
            }

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SchoolMatiereBundle:Matiere:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 40,  90 => 33,  80 => 29,  74 => 26,  69 => 24,  65 => 23,  59 => 22,  56 => 21,  52 => 20,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1 class="text-center">Liste des matières</h1>*/
/*     <nav class="nav navbar-inverse alert-success col-md-12" style="margin-bottom: 3px;">*/
/*         <a style="color: green; font-size: 18px;*/
/*            text-shadow: -1px 0px;" href="{{path('matiere_new')}}" class="pull-left btn-link"><span class="glyphicon glyphicon-plus-sign"></span> Ajouter une matière</a>*/
/*     </nav>*/
/*     <table class="records_list table table-striped display row-border cell-border compact panel-primary " id="matiere">*/
/*         <thead class="panel-heading" >*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Abreviation</th>*/
/*                 <th>Détails</th>*/
/*                 <th>Modifier</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('matiere_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                     <td>{{ entity.nom }}</td>*/
/*                     <td>{{ entity.abreviation }}</td>*/
/*                     <td>*/
/*                         <a href="{{ path('matiere_show', { 'id': entity.id }) }}">Voir</a>*/
/*                     </td>*/
/*                     <td>*/
/*                         <a href="{{ path('matiere_edit', { 'id': entity.id }) }}">Supprimer</a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     <script>*/
/*         $('#matiere').DataTable({*/
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
