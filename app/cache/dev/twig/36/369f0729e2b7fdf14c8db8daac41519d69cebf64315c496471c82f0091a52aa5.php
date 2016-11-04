<?php

/* SchoolStudentBundle:Classe:addClass.html.twig */
class __TwigTemplate_bc3f5c7f327ec008ad4601556abb19c577eb2561bea95bc76107df92d26230af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SchoolStudentBundle:Classe:addClass.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<h2 class=\"page-header\">Ajout CLasse</h2>
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
     <div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>
     <div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "abreviation", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Abreviation: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "abreviation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>
     ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
     <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("school_gestion_homepage");
        echo "\" class=\"btn btn-default\">Annuler</a>
";
    }

    public function getTemplateName()
    {
        return "SchoolStudentBundle:Classe:addClass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  70 => 27,  62 => 22,  57 => 20,  46 => 12,  41 => 10,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/* 		<h2 class="page-header">Ajout CLasse</h2>*/
/* {{ form_start(form)}}*/
/*      <div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.nom, 'Nom: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.nom, {'attr': {'class': 'form-control'}})  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
/*      <div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.abreviation, 'Abreviation: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.abreviation, {'attr': {'class': 'form-control'}})  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
/*      {{ form_end(form)}}*/
/*      <a href="{{ path('school_gestion_homepage') }}" class="btn btn-default">Annuler</a>*/
/* {% endblock %}*/
