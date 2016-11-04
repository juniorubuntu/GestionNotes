<?php

/* SchoolStudentBundle:Classe:listClasses.html.twig */
class __TwigTemplate_1aea20d6755fcbeabf08f9a1b9a9a72156497de28fa374cb570d8f25abfda4f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SchoolStudentBundle:Classe:listClasses.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<h2 class=\"page-header\">List of the Classes</h2>
<table class=\"table table-striped\">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
        </tr>
      </thead>
      <tbody>
      \t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 14
            echo "        <tr>
          <th scope=\"row\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "id", array()), "html", null, true);
            echo "</th>
          <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["classe"], "nom", array()), "html", null, true);
            echo "</td>
          <td>
          \t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("school_class_show", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      Details
    </a>
\t\t\t<a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("school_class_edit", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      Edit
    </a>
\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("school_class_delete", array("id" => $this->getAttribute($context["classe"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
      Delete
    </a>
          </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "      </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "SchoolStudentBundle:Classe:listClasses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  70 => 24,  64 => 21,  58 => 18,  53 => 16,  49 => 15,  46 => 14,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<h2 class="page-header">List of the Classes</h2>*/
/* <table class="table table-striped">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>#</th>*/
/*           <th>Name</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*       	{% for classe in classes %}*/
/*         <tr>*/
/*           <th scope="row">{{ classe.id}}</th>*/
/*           <td>{{ classe.nom }}</td>*/
/*           <td>*/
/*           	<a href="{{ path('school_class_show', {'id':classe.id})}}" class="btn btn-default">*/
/*       Details*/
/*     </a>*/
/* 			<a href="{{ path('school_class_edit' , {'id':classe.id})}}" class="btn btn-default">*/
/*       Edit*/
/*     </a>*/
/* 			<a href="{{ path('school_class_delete' , {'id':classe.id})}}" class="btn btn-danger">*/
/*       Delete*/
/*     </a>*/
/*           </td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/* {% endblock %}*/
