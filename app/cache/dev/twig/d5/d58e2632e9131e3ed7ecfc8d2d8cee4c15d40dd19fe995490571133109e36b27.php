<?php

/* SchoolNoteBundle:Evaluation:editnotes.html.twig */
class __TwigTemplate_a3e4d3ed5a33acb057eb5c88f1e4c72f261114ddd5e11c1fc0d28e57ca8dcb30 extends Twig_Template
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
            <div class=\"col-md-4\">
                <label for=\"\">Ann&eacute;e Acad&eacute;mique: </label> <span>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "anneeScolaire", array()), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <label for=\"\">Classe: </label> <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "nom", array()), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <label for=\"\">Séquence: </label> <span>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sequence"]) ? $context["sequence"] : $this->getContext($context, "sequence")), "nom", array()), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <label for=\"\">Matière: </label> <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "nom", array()), "html", null, true);
        echo "</span>
            </div>
        </div>
            <table class=\"table table-bordered table-hover panel-primary\" id=\"notes\">
                <thead class=\"panel-heading\">
                    <tr>
                        <th>Noms et prénoms</th>
                        <th class=\"col-md-3\">Notes</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations")));
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
            // line 36
            echo "
                        <tr>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["evaluation"], "student", array()), "nom", array()), "html", null, true);
            echo "</td>
                            <td>
                            <form action=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_inserer", array("idNote" => $this->getAttribute($context["evaluation"], "id", array()), "idClasse" => $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "id", array()), "idAnnee" => $this->getAttribute((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "id", array()))), "html", null, true);
            echo "\" method=\"POST\">
                                     <input style=\"width: 78px;\" id=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
            echo "\" type=\"text\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "note", array()), "html", null, true);
            echo "\" name=\"note\" class=\"form-control\" placeholder=\"note-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["evaluation"], "student", array()), "nom", array()), "html", null, true);
            echo "\" disabled=\"true\"/>
                                <a class=\"btn btn-primary\" id=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
            echo "-edit\" onclick=\"activer(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
            echo ")\">Modifier</a>
                                <input  class=\"btn btn-primary hidden\" id=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["evaluation"], "id", array()), "html", null, true);
            echo "-ok\" type=\"submit\" value=\"OK\" />
                            </form>
                            </td>
                        </tr>


                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </tbody>
            </table>
            ";
        // line 53
        echo "        ";
        // line 54
        echo "    </div>
    <ul class=\"record_actions\">
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("school_gestion_homepage");
        echo "\">
                Retour
            </a>
        </li>
    </ul>
    <script>
        \$('#notes').DataTable({
            \"pagingType\": \"full_numbers\",
            \"lengthMenu\": [[10, 20], [10, 20]],
            \"language\": {
                \"url\": \"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
            }

        });
    </script>
    <script>
        function activer(id){
            document.getElementById(id).disabled =false;
            \$(\"#\"+id+\"-ok\").removeClass('hidden');
            \$(\"#\"+id+\"-edit\").addClass('hidden');
        }
        /*function desactiver(id){
//            document.getElementById(id).disabled =true;
            \$(\"#\"+id+\"-edit\").removeClass('hidden');
            \$(\"#\"+id+\"-ok\").addClass('hidden');
        }*/

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
        return array (  144 => 67,  131 => 57,  126 => 54,  124 => 53,  120 => 50,  107 => 43,  101 => 42,  93 => 41,  89 => 40,  84 => 38,  80 => 36,  76 => 35,  62 => 24,  54 => 19,  46 => 14,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1 class="text-center">Edition des notes des élèves</h1>*/
/* */
/*     <div class="col-md-12">*/
/*         <div class="row">*/
/*             <div class="col-md-4">*/
/*                 <label for="">Ann&eacute;e Acad&eacute;mique: </label> <span>{{annee.anneeScolaire}}</span>*/
/*             </div>*/
/*         </div>*/
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
/*             <table class="table table-bordered table-hover panel-primary" id="notes">*/
/*                 <thead class="panel-heading">*/
/*                     <tr>*/
/*                         <th>Noms et prénoms</th>*/
/*                         <th class="col-md-3">Notes</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for evaluation in evaluations %}*/
/* */
/*                         <tr>*/
/*                             <td>{{evaluation.student.nom}}</td>*/
/*                             <td>*/
/*                             <form action="{{ path('note_inserer', { 'idNote':evaluation.id, 'idClasse':classe.id, 'idAnnee':annee.id })}}" method="POST">*/
/*                                      <input style="width: 78px;" id="{{ evaluation.id }}" type="text" value="{{ evaluation.note }}" name="note" class="form-control" placeholder="note-{{ evaluation.student.nom }}" disabled="true"/>*/
/*                                 <a class="btn btn-primary" id="{{ evaluation.id }}-edit" onclick="activer({{ evaluation.id }})">Modifier</a>*/
/*                                 <input  class="btn btn-primary hidden" id="{{ evaluation.id }}-ok" type="submit" value="OK" />*/
/*                             </form>*/
/*                             </td>*/
/*                         </tr>*/
/* */
/* */
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             {#<input class="btn btn-primary" type="submit" value="Enregistrer" />#}*/
/*         {#</form>#}*/
/*     </div>*/
/*     <ul class="record_actions">*/
/*         <li>*/
/*             <a class="btn btn-primary" href="{{ path('school_gestion_homepage') }}">*/
/*                 Retour*/
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
/*             $("#"+id+"-ok").removeClass('hidden');*/
/*             $("#"+id+"-edit").addClass('hidden');*/
/*         }*/
/*         /*function desactiver(id){*/
/* //            document.getElementById(id).disabled =true;*/
/*             $("#"+id+"-edit").removeClass('hidden');*/
/*             $("#"+id+"-ok").addClass('hidden');*/
/*         }*//* */
/* */
/*     </script>*/
/* {% endblock %}*/
