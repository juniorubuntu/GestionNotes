<?php

/* SchoolNoteBundle:Evaluation:editnotes.html.twig */
class __TwigTemplate_204698400cad1fdfc671bec9a181d511c7cc27142f703194567be9388ed54665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SchoolGestionBundle:Default:index.html.twig", "SchoolNoteBundle:Evaluation:editnotes.html.twig", 1);
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
        echo "<h1 class=\"text-center\">Edition des notes des élèves</h1>

    <div class=\"col-md-12\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <label for=\"\">Classe: </label> <span>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "nom", array()), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <label for=\"\">Séquence: </label> <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sequence"]) ? $context["sequence"] : $this->getContext($context, "sequence")), "nom", array()), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <label for=\"\">Matière: </label> <span>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "nom", array()), "html", null, true);
        echo "</span>
            </div>
        </div>
        <form  action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_editnote", array("id" => $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "id", array()), "idSeq" => $this->getAttribute((isset($context["sequence"]) ? $context["sequence"] : $this->getContext($context, "sequence")), "id", array()), "idMat" => $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
            <table class=\"table table-bordered table-hover panel-primary\" id=\"notes\">
                <thead class=\"panel-heading\">
                    <tr>
                        <th>Noms et prénoms</th>
                        <th class=\"col-md-2\">Notes</th>
                        <th class=\"col-md-2\">Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")));
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
            // line 33
            echo "                        <tr>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["evaluation"], "student", array()), "nom", array()), "html", null, true);
            echo "</td>
                            <td>
                                <input id=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
            echo "\" type=\"text\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "note", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["evaluation"], "student", array()), "id", array()), "html", null, true);
            echo "\" class=\"form-control col-md-1\" placeholder=\"note-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["evaluation"], "student", array()), "nom", array()), "html", null, true);
            echo "\" disabled=\"true\"/>
                            </td>
                            <td>
                                <a class=\"btn btn-primary\" onclick=\"activer(";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
            echo ")\">Modifier</a>

                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </tbody>
            </table>
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Enregistrer\" />
        </form>
    </div>
    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("school_gestion_homepage");
        echo "\">
                Back to the list
            </a>
        </li>
    </ul>
    <script>
        \$('#notes').DataTable({
            \"pagingType\": \"full_numbers\",
            \"lengthMenu\": [[10, 20], [10, 20]],
            \"language\": {
                \"url\": \"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
            }

        });
    </script>
    <script>
        function activer(id){
            document.getElementById(id).disabled =false;
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "SchoolNoteBundle:Evaluation:editnotes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 61,  117 => 51,  108 => 44,  97 => 39,  85 => 36,  80 => 34,  77 => 33,  73 => 32,  60 => 22,  54 => 19,  46 => 14,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1 class="text-center">Edition des notes des élèves</h1>*/
/* */
/*     <div class="col-md-12">*/
/*         <div class="row">*/
/*             <div class="col-md-3">*/
/*                 <label for="">Classe: </label> <span>{{classe.nom}}</span>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-3">*/
/*                 <label for="">Séquence: </label> <span>{{sequence.nom}}</span>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-3">*/
/*                 <label for="">Matière: </label> <span>{{matiere.nom}}</span>*/
/*             </div>*/
/*         </div>*/
/*         <form  action="{{ path('note_editnote', { 'id': classe.id, 'idSeq':sequence.id, 'idMat':matiere.id })}}" method="POST">*/
/*             <table class="table table-bordered table-hover panel-primary" id="notes">*/
/*                 <thead class="panel-heading">*/
/*                     <tr>*/
/*                         <th>Noms et prénoms</th>*/
/*                         <th class="col-md-2">Notes</th>*/
/*                         <th class="col-md-2">Action</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for evaluation in evaluations %}*/
/*                         <tr>*/
/*                             <td>{{evaluation.student.nom}}</td>*/
/*                             <td>*/
/*                                 <input id="{{ evaluation.id }}" type="text" value="{{ evaluation.note }}" name="{{ evaluation.student.id }}" class="form-control col-md-1" placeholder="note-{{ evaluation.student.nom }}" disabled="true"/>*/
/*                             </td>*/
/*                             <td>*/
/*                                 <a class="btn btn-primary" onclick="activer({{ evaluation.id }})">Modifier</a>*/
/* */
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             <input class="btn btn-primary" type="submit" value="Enregistrer" />*/
/*         </form>*/
/*     </div>*/
/*     <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('school_gestion_homepage') }}">*/
/*                 Back to the list*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     <script>*/
/*         $('#notes').DataTable({*/
/*             "pagingType": "full_numbers",*/
/*             "lengthMenu": [[10, 20], [10, 20]],*/
/*             "language": {*/
/*                 "url": "{{ asset('DataTables/French.json') }}"*/
/*             }*/
/* */
/*         });*/
/*     </script>*/
/*     <script>*/
/*         function activer(id){*/
/*             document.getElementById(id).disabled =false;*/
/*         }*/
/*     </script>*/
/* {% endblock %}*/
