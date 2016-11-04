<?php

/* SchoolGestionBundle:Default:index.html.twig */
class __TwigTemplate_fb2b4936047f1ae1d3c35709dd08b85bce6596ad79809c3a32761055f1717705 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolGestionBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    Accueil
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h2>Je suis la page d'accueil. Je me trouve dans</h2>
    <h3><b><i>School/GestionBundle/Resources/views/Default</i></b></h3>
    <h3>je suis en outre le Bundle de base de l'application</h3>
    <p>
        Pour un début faisons des pages simples utilisant les couleurs par défaut.
    </p>
    <p><a href=\"#\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
        echo "</a></p>

    <h3>Test d'implémentton du module StudentBundle</h3>
    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("school_student_add");
        echo "\" class=\"btn btn-primary\">
\t\t\tAdd a new student
\t\t</a>
\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("school_student_list");
        echo "\" class=\"btn btn-primary\">
\t\t\tList of students
\t\t\t<i class=\"glyphicon glyphicon-chevron-right\"></i>
\t\t</a><br><br>
        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("school_class_add");
        echo "\" class=\"btn btn-primary\">
            Add a new class
        </a>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("school_class_list");
        echo "\" class=\"btn btn-primary\">
            List of classes
        </a>
";
    }

    public function getTemplateName()
    {
        return "SchoolGestionBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  67 => 22,  60 => 18,  54 => 15,  48 => 12,  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block title %}*/
/*     Accueil*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <h2>Je suis la page d'accueil. Je me trouve dans</h2>*/
/*     <h3><b><i>School/GestionBundle/Resources/views/Default</i></b></h3>*/
/*     <h3>je suis en outre le Bundle de base de l'application</h3>*/
/*     <p>*/
/*         Pour un début faisons des pages simples utilisant les couleurs par défaut.*/
/*     </p>*/
/*     <p><a href="#">{{webmaster}}</a></p>*/
/* */
/*     <h3>Test d'implémentton du module StudentBundle</h3>*/
/*     <a href="{{ path('school_student_add')}}" class="btn btn-primary">*/
/* 			Add a new student*/
/* 		</a>*/
/* 		<a href="{{ path('school_student_list')}}" class="btn btn-primary">*/
/* 			List of students*/
/* 			<i class="glyphicon glyphicon-chevron-right"></i>*/
/* 		</a><br><br>*/
/*         <a href="{{ path('school_class_add')}}" class="btn btn-primary">*/
/*             Add a new class*/
/*         </a>*/
/*         <a href="{{ path('school_class_list')}}" class="btn btn-primary">*/
/*             List of classes*/
/*         </a>*/
/* {% endblock %}*/
