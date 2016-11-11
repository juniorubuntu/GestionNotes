<?php

/* SchoolStudentBundle:Inscription:edit.html.twig */
class __TwigTemplate_f8ca654e8ccd55e68447a0fb3c7a0c2af8cfbb707e13ebcc79c3c193f5221cf0 extends Twig_Template
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
        echo "<h1 class=\"text-center\">Edition d'une Inscription</h1>

    ";
        // line 7
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    <div class=\"row\">
        <div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
            <div class=\"form-group\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "annee", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Année scolaire: "));
        echo "
                <div>
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "annee", array()), 'widget', array("attr" => array("class" => "form-control", "disabled" => "disabled")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "student", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom Elève: "));
        echo "
                <div>
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "student", array()), 'widget', array("attr" => array("class" => "form-control", "disabled" => "disabled")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "classe", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Classe: "));
        echo "
                <div>
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "classe", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "avance", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Avance: "));
        echo "
                <div>
                    ";
        // line 44
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
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateDerniereAvance", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Date dernière avance: "));
        echo "
                <div>
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateDerniereAvance", array()), 'widget', array("attr" => array("class" => "form-control", "disabled" => "disabled")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "status", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Status(Cocher cette case dans le cas l'élève a payé toutes les tranches): "));
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
        echo "<br>

        <ul class=\"record_actions\">
            <br> <li>";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
            <li>
                <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("inscription");
        echo "\">
                    Retour à la liste
                </a>
            </li>
</ul>
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
        return array (  150 => 75,  145 => 73,  139 => 70,  130 => 64,  125 => 62,  114 => 54,  109 => 52,  98 => 44,  93 => 42,  82 => 34,  77 => 32,  66 => 24,  61 => 22,  50 => 14,  45 => 12,  38 => 8,  35 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1 class="text-center">Edition d'une Inscription</h1>*/
/* */
/*     {#{{ form(edit_form) }}#}*/
/* */
/*     {{ form_start(edit_form)}}*/
/*     <div class="row">*/
/*         <div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/*             <div class="form-group">*/
/*                 {{ form_label(edit_form.annee, 'Année scolaire: ', {'label_attr': {'class': 'control-label'}}) }}*/
/*                 <div>*/
/*                     {{ form_widget(edit_form.annee, {'attr': {'class': 'form-control', 'disabled':'disabled'}})  }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/*             <div class="form-group">*/
/*                 {{ form_label(edit_form.student, 'Nom Elève: ', {'label_attr': {'class': 'control-label'}}) }}*/
/*                 <div>*/
/*                     {{ form_widget(edit_form.student, {'attr': {'class': 'form-control', 'disabled':'disabled'}})  }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/*             <div class="form-group">*/
/*                 {{ form_label(edit_form.classe, 'Classe: ', {'label_attr': {'class': 'control-label'}}) }}*/
/*                 <div>*/
/*                     {{ form_widget(edit_form.classe, {'attr': {'class': 'form-control'}})  }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
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
/*                 {{ form_label(edit_form.dateDerniereAvance, 'Date dernière avance: ', {'label_attr': {'class': 'control-label'}}) }}*/
/*                 <div>*/
/*                     {{ form_widget(edit_form.dateDerniereAvance, {'attr': {'class': 'form-control', 'disabled':'disabled'}})  }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/*             <div class="form-group">*/
/*                 {{ form_label(edit_form.status, 'Status(Cocher cette case dans le cas l\'élève a payé toutes les tranches): ', {'label_attr': {'class': 'control-label'}}) }}*/
/*                 <div>*/
/*                     {{ form_widget(edit_form.status, {'attr': {'class': 'form-control'}})  }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {{ form_end(edit_form)}}<br>*/
/* */
/*         <ul class="record_actions">*/
/*             <br> <li>{{ form(delete_form) }}</li>*/
/*             <li>*/
/*                 <a href="{{ path('inscription') }}">*/
/*                     Retour à la liste*/
/*                 </a>*/
/*             </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
