<?php

/* SchoolMatiereBundle:Matiere:edit.html.twig */
class __TwigTemplate_e2bf0cf43512b9eb3e83a7a6b803d65686b4bbc8980c74d2c11aeec3aefdaeb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolMatiereBundle:Matiere:edit.html.twig", 1);
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
        echo "<h1>Modification d'une matière</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("matiere");
        echo "\">
                Retourner à la liste
            </a>
        </li>
        <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "SchoolMatiereBundle:Matiere:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  42 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Modification d'une matière</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*     <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('matiere') }}">*/
/*                 Retourner à la liste*/
/*             </a>*/
/*         </li>*/
/*         <li>{{ form(delete_form) }}</li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
