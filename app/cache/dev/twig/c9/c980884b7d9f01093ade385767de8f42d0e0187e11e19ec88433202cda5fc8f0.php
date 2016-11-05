<?php

/* SchoolGestionBundle:Default:index.html.twig */
class __TwigTemplate_cffa5f45dad579bbdf0552605e119a7cd7dbfab08667e0a32bd042233e86d01a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolGestionBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    Accueil
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h2>Je suis la page d'accueil. Je me trouve dans</h2>
    <h3><b><i>School/GestionBundle/Resources/views/Default</i></b></h3>
    <h3>je suis en outre le Bundle de base de l'application</h3>
    <p>
        Pour un début faisons des pages simples utilisant les couleurs par défaut.
    </p>
    <div class=\"footer footer-copyright\" style=\"bottom: 0; position: fixed; width: 100%\"><a href=\"#\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
        echo "</a></div>
";
    }

    public function getTemplateName()
    {
        return "SchoolGestionBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block title %}*/
/*     Accueil*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <h2>Je suis la page d'accueil. Je me trouve dans</h2>*/
/*     <h3><b><i>School/GestionBundle/Resources/views/Default</i></b></h3>*/
/*     <h3>je suis en outre le Bundle de base de l'application</h3>*/
/*     <p>*/
/*         Pour un début faisons des pages simples utilisant les couleurs par défaut.*/
/*     </p>*/
/*     <div class="footer footer-copyright" style="bottom: 0; position: fixed; width: 100%"><a href="#">{{webmaster}}</a></div>*/
/* {% endblock %}*/
