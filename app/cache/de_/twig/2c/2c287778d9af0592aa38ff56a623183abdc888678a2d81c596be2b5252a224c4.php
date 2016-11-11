<?php

/* SchoolUserBundle:User:show.html.twig */
class __TwigTemplate_9d57a4490efcc26187d6934367bc60e2f77923c07bc944cbefb2044b1b6de0bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolUserBundle:User:show.html.twig", 1);
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
        echo "<h1>User</h1>

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
                <th>Anciennete</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "anciennete", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Matricule</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "matricule", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Grade</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "grade", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Diplomes</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "diplomes", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("school_gestion_homepage");
        echo "\">
                Retourner à la page d'accueil
            </a>
        </li>
        <li>
            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                Modifier
            </a>
        </li>
        <li>";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "SchoolUserBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 50,  99 => 46,  91 => 41,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>User</h1>*/
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
/*                 <th>Anciennete</th>*/
/*                 <td>{{ entity.anciennete }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Matricule</th>*/
/*                 <td>{{ entity.matricule }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Grade</th>*/
/*                 <td>{{ entity.grade }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Diplomes</th>*/
/*                 <td>{{ entity.diplomes }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Telephone</th>*/
/*                 <td>{{ entity.telephone }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('school_gestion_homepage') }}">*/
/*                 Retourner à la page d'accueil*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('user_edit', { 'id': entity.id }) }}">*/
/*                 Modifier*/
/*             </a>*/
/*         </li>*/
/*         <li>{{ form(delete_form) }}</li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
