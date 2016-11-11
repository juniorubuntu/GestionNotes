<?php

/* SchoolStudentBundle:Inscription:index.html.twig */
class __TwigTemplate_c1607a916f251d42b9be459d3fdd44c0d3502c0f0ea2ff21dd0f411667b0543a extends Twig_Template
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
        echo "<h1 class=\"text-center\">Liste des inscriptions</h1>

    <table class=\"records_list table table-striped panel-primary\" id=\"inscription\">
        <thead class=\"panel-heading\">
            <tr>
                <th>Id</th>
                <th>Elève</th>
                <th>Avance</th>
                <th>Dernière avance</th>
                <th>Status</th>
                <th>Année</th>
                <th>Actions</th>
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
                    <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inscription_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "student", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "avance", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDerniereAvance", array()), "D d, M, Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            if (($this->getAttribute($context["entity"], "status", array()) == 1)) {
                echo "<b style=\"color: green\">Complet</b>";
            } else {
                echo "<b style=\"color: red\">Incomplet</b>";
            }
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "annee", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inscription_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            ";
            // line 32
            if (($this->getAttribute($context["entity"], "status", array()) == 0)) {
                // line 33
                echo "                            <li>
                                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inscription_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                            </li>
                            ";
            }
            // line 37
            echo "
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("inscription_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>

    <script>
        \$('#inscription').DataTable({
            \"pagingType\": \"full_numbers\",
            \"lengthMenu\": [[10, 20], [10, 20]],
            \"language\": {
                \"url\": \"";
        // line 58
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
        return array (  135 => 58,  121 => 47,  114 => 42,  104 => 37,  98 => 34,  95 => 33,  93 => 32,  88 => 30,  81 => 26,  73 => 25,  69 => 24,  65 => 23,  61 => 22,  55 => 21,  52 => 20,  48 => 19,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1 class="text-center">Liste des inscriptions</h1>*/
/* */
/*     <table class="records_list table table-striped panel-primary" id="inscription">*/
/*         <thead class="panel-heading">*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Elève</th>*/
/*                 <th>Avance</th>*/
/*                 <th>Dernière avance</th>*/
/*                 <th>Status</th>*/
/*                 <th>Année</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('inscription_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                     <td>{{ entity.student }}</td>*/
/*                     <td>{{ entity.avance }}</td>*/
/*                     <td>{{ entity.dateDerniereAvance | date('D d, M, Y') }}</td>*/
/*                     <td>{% if entity.status == 1 %}<b style="color: green">Complet</b>{% else %}<b style="color: red">Incomplet</b>{% endif %}</td>*/
/*                     <td>{{ entity.annee }}</td>*/
/*                     <td>*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{ path('inscription_show', { 'id': entity.id }) }}">show</a>*/
/*                             </li>*/
/*                             {% if entity.status == 0 %}*/
/*                             <li>*/
/*                                 <a href="{{ path('inscription_edit', { 'id': entity.id }) }}">edit</a>*/
/*                             </li>*/
/*                             {% endif %}*/
/* */
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('inscription_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
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