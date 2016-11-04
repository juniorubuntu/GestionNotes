<?php

/* SchoolMatiereBundle:Matiere:index.html.twig */
class __TwigTemplate_b14082d62c51bb66aaf3be70e009ad8792c5dca57a0972701e3af5248d2ea141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolMatiereBundle:Matiere:index.html.twig", 1);
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
        // line 4
        echo "<h1>Liste des matières</h1>

    <table class=\"records_list table table-striped display row-border cell-border compact \" id=\"matiere\">
        <thead>
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
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "                <tr>
                    <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "abreviation", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Voir</a>
                    </td>
                    <td>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("matiere_new");
        echo "\">
                Insérer une matière
            </a>
        </li>
    </ul>
    <script>
        \$('#matiere').DataTable({
            \"pagingType\": \"full_numbers\",
            \"lengthMenu\": [[10, 20], [10, 20]],
            \"language\": {
                \"url\": \"";
        // line 45
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
        return array (  104 => 45,  91 => 35,  84 => 30,  74 => 26,  68 => 23,  63 => 21,  59 => 20,  53 => 19,  50 => 18,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Liste des matières</h1>*/
/* */
/*     <table class="records_list table table-striped display row-border cell-border compact " id="matiere">*/
/*         <thead>*/
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
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('matiere_new') }}">*/
/*                 Insérer une matière*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
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
