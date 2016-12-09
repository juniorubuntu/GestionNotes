<?php

/* SchoolStudentBundle:Student:showStudent.html.twig */
class __TwigTemplate_f29a002c475a29031652b5b18f30f19e032922f5c326b7daf7c3a4673094cddc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SchoolStudentBundle:Student:showStudent.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "nom", array()), "html", null, true);
        echo "</h2>
\t<div class=\"row\">
\t";
        // line 6
        if ( !(null === $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "photo", array()))) {
            // line 7
            echo "\t\t<img class=\"col-md-3\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "photo", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "photo", array()), "alt", array()), "html", null, true);
            echo "\"/>
\t";
        }
        // line 9
        echo "</div><br>
\t<ul class=\"list-group\">
\t\t<li class=\"list-group-item\">Category: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "matricule", array()), "html", null, true);
        echo "</li>
\t\t<li class=\"list-group-item\">Priority: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "nomPere", array()), "html", null, true);
        echo "</li>
\t\t<li class=\"list-group-item\"><strong>Due Date: ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "dateNaissance", array())), "html", null, true);
        echo "</strong></li>
\t\t<li class=\"list-group-item\">Lieu de Naissance: ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "lieuNaissance", array()), "html", null, true);
        echo "</li>
\t</ul>
\t<p>
\t\t";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "personneAcontacter", array()), "html", null, true);
        echo "
\t</p>
\t<a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("school_gestion_homepage");
        echo "\" class=\"btn btn-primary\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour
\t\t</a>
";
    }

    public function getTemplateName()
    {
        return "SchoolStudentBundle:Student:showStudent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  69 => 17,  63 => 14,  59 => 13,  55 => 12,  51 => 11,  47 => 9,  39 => 7,  37 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<h2 class="page-header">{{ student.nom}}</h2>*/
/* 	<div class="row">*/
/* 	{% if student.photo is not null %}*/
/* 		<img class="col-md-3" src="{{ asset( student.photo.webPath) }}" alt="{{ student.photo.alt }}"/>*/
/* 	{% endif %}*/
/* </div><br>*/
/* 	<ul class="list-group">*/
/* 		<li class="list-group-item">Category: {{ student.matricule }}</li>*/
/* 		<li class="list-group-item">Priority: {{ student.nomPere }}</li>*/
/* 		<li class="list-group-item"><strong>Due Date: {{ student.dateNaissance|date() }}</strong></li>*/
/* 		<li class="list-group-item">Lieu de Naissance: {{ student.lieuNaissance }}</li>*/
/* 	</ul>*/
/* 	<p>*/
/* 		{{ student.personneAcontacter }}*/
/* 	</p>*/
/* 	<a href="{{ path('school_gestion_homepage')}}" class="btn btn-primary">*/
/* 			<i class="glyphicon glyphicon-chevron-left"></i>*/
/* 			Retour*/
/* 		</a>*/
/* {% endblock %}*/
