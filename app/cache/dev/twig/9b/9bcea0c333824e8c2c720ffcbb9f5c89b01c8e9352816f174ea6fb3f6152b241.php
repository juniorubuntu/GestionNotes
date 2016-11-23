<?php

/* SchoolStudentBundle:Inscription:show.html.twig */
class __TwigTemplate_c02df41a91b78093da892ecec7f82eb1197f6da54ec5102420a7971b04110a4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolStudentBundle:Inscription:show.html.twig", 1);
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
        echo "<h1>Inscription</h1>

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
                <th>Student</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "student", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Classe</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "classe", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Avance</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "avance", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datederniereavance</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDerniereAvance", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>Paiement 
                    ";
        // line 31
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "status", array()) == 1)) {
            // line 32
            echo "                        <b style=\"color: green\">Complet</b>
                    ";
        } else {
            // line 34
            echo "                        <b style=\"color: red\">Incomplet</b>
                    ";
        }
        // line 36
        echo "                </td>
            </tr>
        </tbody>
    </table>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("inscription");
        echo "\">
                Back to the list
            </a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inscription_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                Edit
            </a>
        </li>
        <li>";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "SchoolStudentBundle:Inscription:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 52,  102 => 48,  94 => 43,  85 => 36,  81 => 34,  77 => 32,  75 => 31,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Inscription</h1>*/
/* */
/*     <table class="record_properties table">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Student</th>*/
/*                 <td>{{ entity.student }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Classe</th>*/
/*                 <td>{{ entity.classe }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Avance</th>*/
/*                 <td>{{ entity.avance }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datederniereavance</th>*/
/*                 <td>{{ entity.dateDerniereAvance|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Status</th>*/
/*                 <td>Paiement */
/*                     {% if entity.status == 1 %}*/
/*                         <b style="color: green">Complet</b>*/
/*                     {% else %}*/
/*                         <b style="color: red">Incomplet</b>*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('inscription') }}">*/
/*                 Back to the list*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('inscription_edit', { 'id': entity.id }) }}">*/
/*                 Edit*/
/*             </a>*/
/*         </li>*/
/*         <li>{{ form(delete_form) }}</li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
