<?php

/* SchoolConfigBundle:Ecole:new.html.twig */
class __TwigTemplate_f5790fd57e08c1c095b9a4e690b2211c7734aee5150a30e7db8533f89252f63e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolConfigBundle:Ecole:new.html.twig", 1);
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
        echo "<h1>Enregistrement des paramètres de l'établissement</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    ";
    }

    public function getTemplateName()
    {
        return "SchoolConfigBundle:Ecole:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Enregistrement des paramètres de l'établissement</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*     {#*/
/*         <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('config_ecole') }}">*/
/*                 Retourner à la liste*/
/*             </a>*/
/*         </li>*/
/*         </ul>*/
/*     #}*/
/* {% endblock %}*/
/* */
