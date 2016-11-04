<?php

/* SchoolStudentBundle:Student:addStudent.html.twig */
class __TwigTemplate_ee2599cf3ba7575ab3f4cb4190fb5a57f1aabfa52bdca7fdeb1e18a0b83be2b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SchoolStudentBundle:Student:addStudent.html.twig", 1);
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
        echo "\t<h2 class=\"page-header\">Ajout Eleve</h2>
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

\t<div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Matricule: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>
     <div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 23
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
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date de Naissance: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>
     <div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuNaissance", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Lieu de Naissance: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuNaissance", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>
     <div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomPere", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom du père: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomPere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>
     <div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomMere", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom de la mère: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomMere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>

     <div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adressePere", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Adresse du père: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adressePere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>
     <div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresseMere", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Adresse de la mère: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresseMere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>

     <div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personneAcontacter", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Personne à contacter en cas durgence: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personneAcontacter", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>
     <div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dernierEtablissementFreq", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Dernier établissement fréquenté: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dernierEtablissementFreq", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>
     <div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Photo: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo", array()), 'widget');
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>

     <div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Status: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>
     ";
        // line 132
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
     <a href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("school_gestion_homepage");
        echo "\" class=\"btn btn-info\">Annuler</a>

";
    }

    public function getTemplateName()
    {
        return "SchoolStudentBundle:Student:addStudent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 133,  235 => 132,  227 => 127,  222 => 125,  210 => 116,  205 => 114,  194 => 106,  189 => 104,  178 => 96,  173 => 94,  161 => 85,  156 => 83,  145 => 75,  140 => 73,  128 => 64,  123 => 62,  112 => 54,  107 => 52,  96 => 44,  91 => 42,  80 => 34,  75 => 32,  63 => 23,  58 => 21,  47 => 13,  42 => 11,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/* 	<h2 class="page-header">Ajout Eleve</h2>*/
/* {{ form_start(form)}}*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.matricule, 'Matricule: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.matricule, {'attr': {'class': 'form-control'}})  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
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
/* */
/*      <div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.dateNaissance, 'Date de Naissance: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.dateNaissance, {'attr': {'class': 'form-control'}})  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
/*      <div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.lieuNaissance, 'Lieu de Naissance: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.lieuNaissance, {'attr': {'class': 'form-control'}})  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
/*      <div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.nomPere, 'Nom du père: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.nomPere, {'attr': {'class': 'form-control'}})  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
/*      <div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.nomMere, 'Nom de la mère: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.nomMere, {'attr': {'class': 'form-control'}})  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
/* */
/*      <div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.adressePere, 'Adresse du père: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.adressePere, {'attr': {'class': 'form-control'}})  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
/*      <div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.adresseMere, 'Adresse de la mère: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.adresseMere, {'attr': {'class': 'form-control'}})  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
/* */
/*      <div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.personneAcontacter, 'Personne à contacter en cas durgence: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.personneAcontacter, {'attr': {'class': 'form-control'}})  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
/*      <div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.dernierEtablissementFreq, 'Dernier établissement fréquenté: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.dernierEtablissementFreq, {'attr': {'class': 'form-control'}})  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
/*      <div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.photo, 'Photo: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.photo)  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
/* */
/*      <div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.status, 'Status: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.status, {'attr': {'class': 'form-control'}})  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
/*      {{ form_end(form)}}*/
/*      <a href="{{ path('school_gestion_homepage') }}" class="btn btn-info">Annuler</a>*/
/* */
/* {% endblock %}*/
