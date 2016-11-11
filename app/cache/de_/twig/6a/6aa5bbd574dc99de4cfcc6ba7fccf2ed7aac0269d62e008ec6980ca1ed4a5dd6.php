<?php

/* SchoolStudentBundle:Student:listStudents.html.twig */
class __TwigTemplate_17142e6323afea66128670f27f2954ef7bbb8f1de782e038a0f5a1dda23584e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SchoolGestionBundle:Default:index.html.twig", "SchoolStudentBundle:Student:listStudents.html.twig", 1);
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
        echo "<h2 class=\"page-header\">List of the students</h2>
<table class=\"records_list table table-striped panel-primary\" id=\"student\">
      <thead class=\"panel-heading\">
        <tr>
          <th>#</th>
          <th>Nom</th>
          <th>Date of birth</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
      \t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 16
            echo "        <tr>
          <th scope=\"row\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
            echo "</th>
          <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "nom", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "dateNaissance", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
          <td>
          \t<a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("school_student_show", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      Details
    </a>
\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("school_student_edit", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">
      Edit
    </a>
\t\t\t<a href=\"";
            // line 27
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
        // line 33
        echo "      </tbody>
    </table>
    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("school_student_add");
        echo "\">
                Ajouter un eleve
            </a>
        </li>
    </ul>
     <script>
        \$('#student').DataTable({
            \"pagingType\": \"full_numbers\",
            \"lengthMenu\": [[10, 20], [10, 20]],
            \"language\": {
                \"url\": \"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
            }

        });
    </script>
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
        return array (  107 => 47,  94 => 37,  88 => 33,  76 => 27,  70 => 24,  64 => 21,  59 => 19,  55 => 18,  51 => 17,  48 => 16,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content -%}*/
/* 	<h2 class="page-header">List of the students</h2>*/
/* <table class="records_list table table-striped panel-primary" id="student">*/
/*       <thead class="panel-heading">*/
/*         <tr>*/
/*           <th>#</th>*/
/*           <th>Nom</th>*/
/*           <th>Date of birth</th>*/
/*           <th>Actions</th>*/
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
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('school_student_add') }}">*/
/*                 Ajouter un eleve*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*      <script>*/
/*         $('#student').DataTable({*/
/*             "pagingType": "full_numbers",*/
/*             "lengthMenu": [[10, 20], [10, 20]],*/
/*             "language": {*/
/*                 "url": "{{ asset('DataTables/French.json') }}"*/
/*             }*/
/* */
/*         });*/
/*     </script>*/
/* {% endblock %}*/
