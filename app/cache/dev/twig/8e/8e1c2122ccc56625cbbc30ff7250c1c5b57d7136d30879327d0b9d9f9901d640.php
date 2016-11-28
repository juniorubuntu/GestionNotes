<?php

/* SchoolStudentBundle:Inscription:new.html.twig */
class __TwigTemplate_679bd0d700a77aa2b2ec78d2017128226b2b5493474d9983b407ee91af60652e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SchoolGestionBundle:Default:index.html.twig", "SchoolStudentBundle:Inscription:new.html.twig", 1);
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    <div class=\"row\">
        <div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
            <div class=\"form-group\">
                <label> Nom de l'&eacute;l&egrave;ve</label>
                <div>
                    <input value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "student", array()), "html", null, true);
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
        // line 23
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
        // line 33
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
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Classe: "));
        echo "
                <div>
                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
            <div class=\"form-group\">
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "avance", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Avance: "));
        echo "
                <div>
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "avance", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Statut: "));
        echo "
                <div>
                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>

    </div>
    ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        return "SchoolStudentBundle:Inscription:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 72,  129 => 70,  120 => 64,  115 => 62,  104 => 54,  99 => 52,  88 => 44,  83 => 42,  71 => 33,  58 => 23,  45 => 13,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1 class="text-center">Mise &agrave; jour d'une Inscription</h1>*/
/* */
/*     {{ form_start(form)}}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/*             <div class="form-group">*/
/*                 <label> Nom de l'&eacute;l&egrave;ve</label>*/
/*                 <div>*/
/*                     <input value="{{ entity.student }}" class="form-control" disabled="disabled" type="text">*/
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
/*                 {{ form_label(form.classe, 'Classe: ', {'label_attr': {'class': 'control-label'}}) }}*/
/*                 <div>*/
/*                     {{ form_widget(form.classe, {'attr': {'class': 'form-control'}})  }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.avance, 'Avance: ', {'label_attr': {'class': 'control-label'}}) }}*/
/*                 <div>*/
/*                     {{ form_widget(form.avance, {'attr': {'class': 'form-control'}})  }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.status, 'Statut: ', {'label_attr': {'class': 'control-label'}}) }}*/
/*                 <div>*/
/*                     {{ form_widget(form.status, {'attr': {'class': 'form-control'}})  }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/*     {{ form_end(form) }}<br><br>*/
/* */
/*     <a href="{{ path('inscription_notyet') }}">*/
/*         Back to the list*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* */
