<?php

/* SchoolStudentBundle:Inscription:edit.html.twig */
class __TwigTemplate_1ed842cac73578ed6c1b1ccbc4467180122f7afe842c09a8cf78319ce80ae4e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SchoolGestionBundle:Default:index.html.twig", "SchoolStudentBundle:Inscription:edit.html.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1 class=\"text-center\">Mise &agrave; jour d'une Inscription</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

    <div class=\"row\">
        <div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
            <div class=\"form-group\">
                <label> Nom de l'&eacute;l&egrave;ve</label>
                <div>
                    <input value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "student", array()), "nom", array()), "html", null, true);
        echo "\" class=\"form-control\" disabled=\"disabled\" type=\"text\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
            <div class=\"form-group\">
                <label> Classe</label>
                <div>
                    <input value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "classe", array()), "html", null, true);
        echo "\" class=\"form-control\" disabled=\"disabled\" type=\"text\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
            <div class=\"form-group\">
                <label> Date derni&egrave;re Avance</label>
                <div>
                    <input value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDerniereAvance", array()), "d-m-Y"), "html", null, true);
        echo "\" class=\"form-control\" disabled=\"disabled\" type=\"text\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
            <div class=\"form-group\">
                <label> Ann&eacute;e scolaire</label>
                <div>
                    <input value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "annee", array()), "html", null, true);
        echo "\" class=\"form-control\" disabled=\"disabled\" type=\"text\">
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
            <div class=\"form-group\">
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "avance", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Avance: "));
        echo "
                <div>
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "avance", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
            <div class=\"form-group\">
                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "status", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Statut: "));
        echo "
                <div>
                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "status", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>

    </div>
    ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "<br><br>

        <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("inscription_notyet");
        echo "\">
            Back to the list
        </a>
";
    }

    public function getTemplateName()
    {
        return "SchoolStudentBundle:Inscription:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 72,  126 => 70,  117 => 64,  112 => 62,  101 => 54,  96 => 52,  84 => 43,  71 => 33,  58 => 23,  45 => 13,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1 class="text-center">Mise &agrave; jour d'une Inscription</h1>*/
/* */
/*     {{ form_start(edit_form)}}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/*             <div class="form-group">*/
/*                 <label> Nom de l'&eacute;l&egrave;ve</label>*/
/*                 <div>*/
/*                     <input value="{{ entity.student.nom }}" class="form-control" disabled="disabled" type="text">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/*             <div class="form-group">*/
/*                 <label> Classe</label>*/
/*                 <div>*/
/*                     <input value="{{ entity.classe }}" class="form-control" disabled="disabled" type="text">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/*             <div class="form-group">*/
/*                 <label> Date derni&egrave;re Avance</label>*/
/*                 <div>*/
/*                     <input value="{{ entity.dateDerniereAvance|date('d-m-Y') }}" class="form-control" disabled="disabled" type="text">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/*             <div class="form-group">*/
/*                 <label> Ann&eacute;e scolaire</label>*/
/*                 <div>*/
/*                     <input value="{{ entity.annee}}" class="form-control" disabled="disabled" type="text">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/*             <div class="form-group">*/
/*                 {{ form_label(edit_form.avance, 'Avance: ', {'label_attr': {'class': 'control-label'}}) }}*/
/*                 <div>*/
/*                     {{ form_widget(edit_form.avance, {'attr': {'class': 'form-control'}})  }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/*             <div class="form-group">*/
/*                 {{ form_label(edit_form.status, 'Statut: ', {'label_attr': {'class': 'control-label'}}) }}*/
/*                 <div>*/
/*                     {{ form_widget(edit_form.status, {'attr': {'class': 'form-control'}})  }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/*     {{ form_end(edit_form) }}<br><br>*/
/* */
/*         <a href="{{ path('inscription_notyet') }}">*/
/*             Back to the list*/
/*         </a>*/
/* {% endblock %}*/
/* */
