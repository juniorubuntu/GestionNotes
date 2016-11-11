<?php

/* SchoolMatiereBundle:Categorie:index.html.twig */
class __TwigTemplate_3939723fb55e18b521018b73c29d19629f7a99a5c63d178862164667af1caa20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolMatiereBundle:Categorie:index.html.twig", 1);
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
        echo "<h1>Liste des catégories</h1>

    <table class=\"records_list table table-striped panel-primary\" id=\"categorie\">
        <thead class=\"panel-heading\">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Détails</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "                <tr>
                    <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Voir</a>
                    </td>
                    <td>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("categorie_new");
        echo "\">
                Insérer une catégorie
            </a>
        </li>
    </ul>

    <script>
        \$('#categorie').DataTable({
            \"pagingType\": \"full_numbers\",
            \"lengthMenu\": [[10, 20], [10, 20]],
            \"language\": {
                \"url\": \"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
            }

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SchoolMatiereBundle:Categorie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 44,  86 => 33,  79 => 28,  69 => 24,  63 => 21,  58 => 19,  52 => 18,  49 => 17,  45 => 16,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Liste des catégories</h1>*/
/* */
/*     <table class="records_list table table-striped panel-primary" id="categorie">*/
/*         <thead class="panel-heading">*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Détails</th>*/
/*                 <th>Modifier</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('categorie_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                     <td>{{ entity.nom }}</td>*/
/*                     <td>*/
/*                         <a href="{{ path('categorie_show', { 'id': entity.id }) }}">Voir</a>*/
/*                     </td>*/
/*                     <td>*/
/*                         <a href="{{ path('categorie_edit', { 'id': entity.id }) }}">Modifier</a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('categorie_new') }}">*/
/*                 Insérer une catégorie*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* */
/*     <script>*/
/*         $('#categorie').DataTable({*/
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
