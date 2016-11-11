<?php

/* SchoolStudentBundle:Inscription:new.html.twig */
class __TwigTemplate_9a4f6a9a922c4045c5af4292cd32b28024d0c82731e534090f900803d68668fd extends Twig_Template
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
        echo "<h1 class=\"text-center\">Nouvelle Inscription</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"row\">
        <div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
            <div class=\"form-group\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Année scolaire: "));
        echo "
                <div>
                    ";
        // line 12
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
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "student", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom Elève: "));
        echo "
                <div>
                    ";
        // line 22
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
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classe", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Classe: "));
        echo "
                <div>
                    ";
        // line 32
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
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "avance", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Avance: "));
        echo "
                <div>
                    ";
        // line 42
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
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDerniereAvance", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date dernière avance: "));
        echo "
                <div>
                    ";
        // line 52
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
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Status: "));
        echo "
                <div>
                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </div>
    </div>

    ";
        // line 68
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 72
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
        return array (  143 => 72,  136 => 68,  127 => 62,  122 => 60,  111 => 52,  106 => 50,  95 => 42,  90 => 40,  79 => 32,  74 => 30,  63 => 22,  58 => 20,  47 => 12,  42 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1 class="text-center">Nouvelle Inscription</h1>*/
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
