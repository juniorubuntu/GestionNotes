<?php

/* SchoolNoteBundle:Evaluation:notes.html.twig */
class __TwigTemplate_5c33408d25e318f910dd841c6588d023397289c55211ac06b815ff4cb53f8d4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SchoolGestionBundle:Default:index.html.twig", "SchoolNoteBundle:Evaluation:notes.html.twig", 1);
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
        echo "<h1 class=\"text-center\">Remplissage des notes des élèves</h1>


    <div class=\"col-md-12\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <label for=\"\">Ann&eacute;e Acad&eacute;mique: </label> <span>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "anneeScolaire", array()), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <label for=\"\">Classe: </label> <span>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "nom", array()), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <label for=\"\">Séquence: </label> <span>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sequence"]) ? $context["sequence"] : $this->getContext($context, "sequence")), "nom", array()), "html", null, true);
        echo "</span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <label for=\"\">Matière: </label> <span>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "nom", array()), "html", null, true);
        echo "</span>
            </div>
        </div>
        <form action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_add", array("id" => $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "id", array()), "idSeq" => $this->getAttribute((isset($context["sequence"]) ? $context["sequence"] : $this->getContext($context, "sequence")), "id", array()), "idMat" => $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "id", array()), "idAnnee" => $this->getAttribute((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <table class=\"table table-bordered table-hover panel-primary\" id=\"notes\">
                <thead class=\"panel-heading\">
                    <tr>
                        <th>Noms et prénoms</th>
                        <th class=\"col-md-2\">Notes</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleves"]) ? $context["eleves"] : $this->getContext($context, "eleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 38
            echo "                        <tr>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>
                                <input type=\"text\" ";
            // line 41
            echo " name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "id", array()), "html", null, true);
            echo "\" class=\"form-control col-md-1\" placeholder=\"note-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "nom", array()), "html", null, true);
            echo "\">

                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </tbody>
            </table>
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Enregistrer\" />
        </form>
    </div>
    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 53
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
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
            }

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SchoolNoteBundle:Evaluation:notes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 63,  116 => 53,  107 => 46,  93 => 41,  88 => 39,  85 => 38,  81 => 37,  69 => 28,  63 => 25,  55 => 20,  47 => 15,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1 class="text-center">Remplissage des notes des élèves</h1>*/
/* */
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
/*         <form action="{{ path('note_add', { 'id': classe.id, 'idSeq':sequence.id, 'idMat':matiere.id, 'idAnnee':annee.id })}}" method="post">*/
/*             <table class="table table-bordered table-hover panel-primary" id="notes">*/
/*                 <thead class="panel-heading">*/
/*                     <tr>*/
/*                         <th>Noms et prénoms</th>*/
/*                         <th class="col-md-2">Notes</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for eleve in eleves %}*/
/*                         <tr>*/
/*                             <td>{{eleve.nom}}</td>*/
/*                             <td>*/
/*                                 <input type="text" {#value="{{ notes.student.nom }}"#} name="{{ eleve.id }}" class="form-control col-md-1" placeholder="note-{{ eleve.nom }}">*/
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
/* {% endblock %}*/
/* */
