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
        echo "<h1>Inscription list</h1>

    <table class=\"records_list table panel-primary\">
        <thead class=\"panel-heading\">
            <tr>
                <th>Id</th>
                <th>Nom et prénom</th>
                <th>Classe</th>
                <th>Avance</th>
                <th>Datederniereavance</th>
                <th>Status</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inscription_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "student", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "classe", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "avance", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            if ($this->getAttribute($context["entity"], "dateDerniereAvance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDerniereAvance", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>
                        Paiement 
                        ";
            // line 29
            if (($this->getAttribute($context["entity"], "status", array()) == 1)) {
                // line 30
                echo "                            <b style=\"color: green\">Complet</b>
                        ";
            } else {
                // line 32
                echo "                            <b style=\"color: red\">Incomplet</b>
                        ";
            }
            // line 34
            echo "
                    </td>
                    <td>
                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inscription_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">voir</a>
                    </td>
                    <td>
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inscription_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("inscription_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
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
        return array (  120 => 49,  113 => 44,  103 => 40,  97 => 37,  92 => 34,  88 => 32,  84 => 30,  82 => 29,  74 => 26,  70 => 25,  66 => 24,  62 => 23,  56 => 22,  53 => 21,  49 => 20,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1>Inscription list</h1>*/
/* */
/*     <table class="records_list table panel-primary">*/
/*         <thead class="panel-heading">*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom et prénom</th>*/
/*                 <th>Classe</th>*/
/*                 <th>Avance</th>*/
/*                 <th>Datederniereavance</th>*/
/*                 <th>Status</th>*/
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
/*                     <td>{% if entity.dateDerniereAvance %}{{ entity.dateDerniereAvance|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     <td>*/
/*                         Paiement */
/*                         {% if entity.status == 1 %}*/
/*                             <b style="color: green">Complet</b>*/
/*                         {% else %}*/
/*                             <b style="color: red">Incomplet</b>*/
/*                         {% endif %}*/
/* */
/*                     </td>*/
/*                     <td>*/
/*                         <a href="{{ path('inscription_show', { 'id': entity.id }) }}">voir</a>*/
/*                     </td>*/
/*                     <td>*/
/*                         <a href="{{ path('inscription_edit', { 'id': entity.id }) }}">Modifier</a>*/
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
/* {% endblock %}*/
/* */
