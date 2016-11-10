<?php

/* SchoolStudentBundle:Inscription:new.html.twig */
class __TwigTemplate_15e89bd27115a9fcde9b19e9c88333eaaae534ae02bdae0e97deef85110cd9b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolStudentBundle:Inscription:new.html.twig", 1);
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
        echo "<h1>Inscription creation</h1>

    ";
        // line 7
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"row\">
        <div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
            <div class=\"form-group\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Année scolaire: "));
        echo "
                <div>
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'widget', array("attr" => array("class" => "form-control", "disabled" => "disabled")));
        echo "
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
            <div class=\"form-group\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "student", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom Elève: "));
        echo "
                <div>
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "student", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
            <div class=\"form-group\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Classe: "));
        echo "
                <div>
                    ";
        // line 34
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
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "avance", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Avance: "));
        echo "
                <div>
                    ";
        // line 44
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
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDerniereAvance", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date dernière avance: "));
        echo "
                <div>
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDerniereAvance", array()), 'widget', array("attr" => array("class" => "form-control", "disabled" => "disabled")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Status: "));
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
        echo "

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("inscription");
        echo "\">
                Back to the list
            </a>
        </li>
    </ul>
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
        return array (  146 => 74,  139 => 70,  130 => 64,  125 => 62,  114 => 54,  109 => 52,  98 => 44,  93 => 42,  82 => 34,  77 => 32,  66 => 24,  61 => 22,  50 => 14,  45 => 12,  38 => 8,  35 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Inscription creation</h1>*/
/* */
/*     {# {{ form(form) }} #}*/
/* */
/*     {{ form_start(form)}}*/
/*     <div class="row">*/
/*         <div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.annee, 'Année scolaire: ', {'label_attr': {'class': 'control-label'}}) }}*/
/*                 <div>*/
/*                     {{ form_widget(form.annee, {'attr': {'class': 'form-control', 'disabled':'disabled'}})  }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.student, 'Nom Elève: ', {'label_attr': {'class': 'control-label'}}) }}*/
/*                 <div>*/
/*                     {{ form_widget(form.student, {'attr': {'class': 'form-control'}})  }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
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
/*                 {{ form_label(form.dateDerniereAvance, 'Date dernière avance: ', {'label_attr': {'class': 'control-label'}}) }}*/
/*                 <div>*/
/*                     {{ form_widget(form.dateDerniereAvance, {'attr': {'class': 'form-control', 'disabled':'disabled'}})  }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.status, 'Status: ', {'label_attr': {'class': 'control-label'}}) }}*/
/*                 <div>*/
/*                     {{ form_widget(form.status, {'attr': {'class': 'form-control'}})  }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {{ form_end(form)}}*/
/* */
/*     <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('inscription') }}">*/
/*                 Back to the list*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
