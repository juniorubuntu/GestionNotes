<?php

/* SchoolStudentBundle:Student:listStudents.html.twig */
class __TwigTemplate_fb99a78591357dc9494ff91e4bb5eacec43cfc03d76c29f0b074b84efbae60c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "SchoolStudentBundle:Student:listStudents.html.twig", 1);
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
        echo "\t<h2 class=\"page-header\">List of the students</h2>
<table class=\"table table-striped\">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Date of birth</th>
        </tr>
      </thead>
      <tbody>
      \t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 15
            echo "        <tr>
          <th scope=\"row\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
            echo "</th>
          <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "nom", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "dateNaissance", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
          <td>
          \t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("school_student_show", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      Details
    </a>
\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("school_student_edit", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      Edit
    </a>
\t\t\t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("school_student_delete", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
      Delete
    </a>
          </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "      </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "SchoolStudentBundle:Student:listStudents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 32,  75 => 26,  69 => 23,  63 => 20,  58 => 18,  54 => 17,  50 => 16,  47 => 15,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<h2 class="page-header">List of the students</h2>*/
/* <table class="table table-striped">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>#</th>*/
/*           <th>Name</th>*/
/*           <th>Date of birth</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*       	{% for student in students %}*/
/*         <tr>*/
/*           <th scope="row">{{ student.id}}</th>*/
/*           <td>{{ student.nom }}</td>*/
/*           <td>{{ student.dateNaissance|date('F j, Y, g:i a')}}</td>*/
/*           <td>*/
/*           	<a href="{{ path('school_student_show', {'id':student.id})}}" class="btn btn-default">*/
/*       Details*/
/*     </a>*/
/* 			<a href="{{ path('school_student_edit' , {'id':student.id})}}" class="btn btn-default">*/
/*       Edit*/
/*     </a>*/
/* 			<a href="{{ path('school_student_delete' , {'id':student.id})}}" class="btn btn-danger">*/
/*       Delete*/
/*     </a>*/
/*           </td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/* {% endblock %}*/
