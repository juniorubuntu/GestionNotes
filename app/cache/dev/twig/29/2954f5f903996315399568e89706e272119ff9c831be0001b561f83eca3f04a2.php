<?php

/* SchoolStudentBundle:Classe:showClass.html.twig */
class __TwigTemplate_33b283126b00386193e31c7412a642e4ceb8cd5fc960ba8d9c9d14052259b9e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SchoolStudentBundle:Classe:showClass.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "nom", array()), "html", null, true);
        echo "</h2>

\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("school_gestion_homepage");
        echo "\" class=\"btn btn-primary\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour
\t\t</a>
";
    }

    public function getTemplateName()
    {
        return "SchoolStudentBundle:Classe:showClass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<h2 class="page-header">{{ classe.nom}}</h2>*/
/* */
/* 	<a href="{{ path('school_gestion_homepage')}}" class="btn btn-primary">*/
/* 			<i class="glyphicon glyphicon-chevron-left"></i>*/
/* 			Retour*/
/* 		</a>*/
/* {% endblock %}*/
