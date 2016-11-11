<?php

/* SchoolNoteBundle:Evaluation:new.html.twig */
class __TwigTemplate_77d40bec19359bbcca376d65a299b9df7d0edfeed4dcad8a40842f018e9625cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolNoteBundle:Evaluation:new.html.twig", 1);
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
        echo "<h1>Evaluation creation</h1>

    ";
        // line 7
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t
\t<div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "student", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom Elève: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "student", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>
     <div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Matière: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matiere", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>

\t<div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sequence", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Séquence: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sequence", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>
     <div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Note: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>
     <div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeDebut", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Année de début: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeDebut", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>
     <div class=\"row\">
\t\t<div class=\"col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11\">
\t\t\t<div class=\"form-group\">
\t\t        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeFin", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Année de fin: "));
        echo "
\t\t        <div>
\t\t            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anneeFin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t        </div>
\t\t    </div>
     \t</div>
     </div>

     ";
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("evaluation");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "SchoolNoteBundle:Evaluation:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 76,  141 => 72,  132 => 66,  127 => 64,  116 => 56,  111 => 54,  100 => 46,  95 => 44,  84 => 36,  79 => 34,  67 => 25,  62 => 23,  51 => 15,  46 => 13,  38 => 8,  35 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Evaluation creation</h1>*/
/* */
/*     {#{{ form(form) }}#}*/
/* */
/*     {{ form_start(form)}}*/
/* 	*/
/* 	<div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.student, 'Nom Elève: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.student, {'attr': {'class': 'form-control'}})  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
/*      <div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.matiere, 'Matière: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.matiere, {'attr': {'class': 'form-control'}})  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
/* */
/* 	<div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.sequence, 'Séquence: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.sequence, {'attr': {'class': 'form-control'}})  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
/*      <div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.note, 'Note: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.note, {'attr': {'class': 'form-control'}})  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
/*      <div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.anneeDebut, 'Année de début: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.anneeDebut, {'attr': {'class': 'form-control'}})  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
/*      <div class="row">*/
/* 		<div class="col-md-offset-3 col-sm-offset-1 col-xs-offset-1 col-md-7 col-sm-11 col-xs-11">*/
/* 			<div class="form-group">*/
/* 		        {{ form_label(form.anneeFin, 'Année de fin: ', {'label_attr': {'class': 'control-label'}}) }}*/
/* 		        <div>*/
/* 		            {{ form_widget(form.anneeFin, {'attr': {'class': 'form-control'}})  }}*/
/* 		        </div>*/
/* 		    </div>*/
/*      	</div>*/
/*      </div>*/
/* */
/*      {{ form_end(form)}}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('evaluation') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
