<?php

/* SchoolGestionBundle:Error:error.html.twig */
class __TwigTemplate_23bdc40bfd88297671dee299688a9e2c28455a767a39e9649986e08e84e426ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolGestionBundle:Error:error.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <h2>Erreur de configuration</h2>
    Code: <b><i>Region/Ecole-Duplicate</i></b>
    <p>Contacter l'administrateur ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "SchoolGestionBundle:Error:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block body %}*/
/*     <h2>Erreur de configuration</h2>*/
/*     Code: <b><i>Region/Ecole-Duplicate</i></b>*/
/*     <p>Contacter l'administrateur {{webmaster}}</p>*/
/* {% endblock %}*/
