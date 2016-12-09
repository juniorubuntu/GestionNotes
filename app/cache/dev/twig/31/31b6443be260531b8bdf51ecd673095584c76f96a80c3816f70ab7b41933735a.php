<?php

/* SchoolNoteBundle:Evaluation:index.html.twig */
class __TwigTemplate_13911293e24bc55774b6dded5c4a235da70b4ed6feee9431287405c563afc475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SchoolGestionBundle:Default:index.html.twig", "SchoolNoteBundle:Evaluation:index.html.twig", 1);
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
        echo "<h1>Evaluation list</h1>

    <table class=\"records_list table table-striped panel-primary\" id=\"evaluation\">
        <thead class=\"panel-heading\">
            <tr>
                <th>Id</th>
                <th>Nom de l'eleve</th>
                <th>Classe</th>
                <th>Note</th>
                <th>Séquence</th>
                <th>Matière</th>
                <th>Annee</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "student", array()), "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "classe", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "note", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "sequence", array()), "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "matiere", array()), "nom", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "annee", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </td>
                    <td>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evaluation_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("evaluation_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    <script>
        \$('#evaluation').DataTable({
            \"pagingType\": \"full_numbers\",
            \"lengthMenu\": [[10, 20], [10, 20]],
            \"language\": {
                \"url\": \"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
            }

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SchoolNoteBundle:Evaluation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 53,  111 => 43,  104 => 38,  94 => 34,  88 => 31,  83 => 29,  79 => 28,  75 => 27,  71 => 26,  67 => 25,  63 => 24,  57 => 23,  54 => 22,  50 => 21,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1>Evaluation list</h1>*/
/* */
/*     <table class="records_list table table-striped panel-primary" id="evaluation">*/
/*         <thead class="panel-heading">*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom de l'eleve</th>*/
/*                 <th>Classe</th>*/
/*                 <th>Note</th>*/
/*                 <th>Séquence</th>*/
/*                 <th>Matière</th>*/
/*                 <th>Annee</th>*/
/*                 <th>Détails</th>*/
/*                 <th>Modifier</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('evaluation_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                     <td>{{ entity.student.nom }}</td>*/
/*                     <td>{{ entity.classe }}</td>*/
/*                     <td>{{ entity.note }}</td>*/
/*                     <td>{{ entity.sequence.nom }}</td>*/
/*                     <td>{{ entity.matiere.nom }}</td>*/
/*                     <td>{{ entity.annee }}</td>*/
/*                     <td>*/
/*                         <a href="{{ path('evaluation_show', { 'id': entity.id }) }}">show</a>*/
/*                     </td>*/
/*                     <td>*/
/*                         <a href="{{ path('evaluation_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('evaluation_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     <script>*/
/*         $('#evaluation').DataTable({*/
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
