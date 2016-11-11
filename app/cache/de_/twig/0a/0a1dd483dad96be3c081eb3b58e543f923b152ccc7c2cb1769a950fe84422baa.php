<?php

/* SchoolMatiereBundle:Matiere:show.html.twig */
class __TwigTemplate_2abf09c3af6111ee63ff3d5d467f74ffcfee0edf32d3d4df5817263f01ead07a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolMatiereBundle:Matiere:show.html.twig", 1);
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
        echo "<h1>Détail d'une matière</h1>

    <table class=\"record_properties table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Abreviation</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "abreviation", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("matiere");
        echo "\">
                Retourner à la liste
            </a>
        </li>
        <li>
            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                Modifier
            </a>
        </li>
        <li>";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "SchoolMatiereBundle:Matiere:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 34,  71 => 30,  63 => 25,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Détail d'une matière</h1>*/
/* */
/*     <table class="record_properties table">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ entity.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Abreviation</th>*/
/*                 <td>{{ entity.abreviation }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('matiere') }}">*/
/*                 Retourner à la liste*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('matiere_edit', { 'id': entity.id }) }}">*/
/*                 Modifier*/
/*             </a>*/
/*         </li>*/
/*         <li>{{ form(delete_form) }}</li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
