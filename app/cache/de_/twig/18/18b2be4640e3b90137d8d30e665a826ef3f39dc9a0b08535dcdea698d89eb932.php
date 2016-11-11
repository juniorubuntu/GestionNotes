<?php

/* SchoolStudentBundle:Student:addStudent.html.twig */
class __TwigTemplate_3f297662457c76c718d804fd8ab7349a864652b8798472dbb1fbc94ae74ee67e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SchoolGestionBundle:Default:index.html.twig", "SchoolStudentBundle:Student:addStudent.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SchoolGestionBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
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
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Sexe: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date de Naissance: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 44
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
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lieuNaissance", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Lieu de Naissance: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 54
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
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomPere", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom du père: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 64
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
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomMere", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom de la mère: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 74
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
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adressePere", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Adresse du père: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 85
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
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresseMere", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Adresse de la mère: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 95
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
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personneAcontacter", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Personne à contacter en cas durgence: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 106
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
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dernierEtablissementFreq", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Dernier établissement fréquenté: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dernierEtablissementFreq", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>
                            <div class=\"row\">
                                <div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
                                    <div class=\"form-group\">
                                        ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Inscrit en (Choisissez la classe): "));
        echo "
                                        <div>
                                            ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
     <div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Photo: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "photo", array()), 'widget');
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>
     ";
        // line 141
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
     <a href=\"";
        // line 142
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
        return array (  254 => 142,  250 => 141,  242 => 136,  237 => 134,  226 => 126,  221 => 124,  210 => 116,  205 => 114,  194 => 106,  189 => 104,  177 => 95,  172 => 93,  161 => 85,  156 => 83,  144 => 74,  139 => 72,  128 => 64,  123 => 62,  112 => 54,  107 => 52,  96 => 44,  91 => 42,  79 => 33,  74 => 31,  63 => 23,  58 => 21,  47 => 13,  42 => 11,  34 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "SchoolGestionBundle:Default:index.html.twig" %}*/
/* */
/* */
/* {% block content %}*/
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
/*      <div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.sexe, 'Sexe: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.sexe, {'attr': {'class': 'form-control'}})  }}*/
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
/*                             <div class="row">*/
/*                                 <div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/*                                     <div class="form-group">*/
/*                                         {{ form_label(form.classe, 'Inscrit en (Choisissez la classe): ', {'label_attr': {'class': 'control-label'}}) }}*/
/*                                         <div>*/
/*                                             {{ form_widget(form.classe, {'attr': {'class': 'form-control'}})  }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
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
/*      {{ form_end(form)}}*/
/*      <a href="{{ path('school_gestion_homepage') }}" class="btn btn-info">Annuler</a>*/
/* */
/* {% endblock %}*/
