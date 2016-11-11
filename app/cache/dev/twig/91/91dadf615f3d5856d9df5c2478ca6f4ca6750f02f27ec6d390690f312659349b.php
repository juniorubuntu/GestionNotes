<?php

/* SchoolNoteBundle:Evaluation:notes.html.twig */
class __TwigTemplate_fc39209ef16e8a51021cddd1940c7f75a5948b7b3b25f49e06db4b9a46eb3dc9 extends Twig_Template
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
        <form action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_add", array("id" => $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "id", array()), "idSeq" => $this->getAttribute((isset($context["sequence"]) ? $context["sequence"] : $this->getContext($context, "sequence")), "id", array()), "idMat" => $this->getAttribute((isset($context["matiere"]) ? $context["matiere"] : $this->getContext($context, "matiere")), "id", array()))), "html", null, true);
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
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleves"]) ? $context["eleves"] : $this->getContext($context, "eleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 32
            echo "                        <tr>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "nom", array()), "html", null, true);
            echo "</td>
                            <td>
                                <input type=\"text\" ";
            // line 35
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
        // line 40
        echo "                </tbody>
            </table>
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Enregistrer\" />
        </form>
    </div>
    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 47
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
        // line 57
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
        return array (  120 => 57,  107 => 47,  98 => 40,  84 => 35,  79 => 33,  76 => 32,  72 => 31,  60 => 22,  54 => 19,  46 => 14,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1 class="text-center">Remplissage des notes des élèves</h1>*/
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
/*         <form action="{{ path('note_add', { 'id': classe.id, 'idSeq':sequence.id, 'idMat':matiere.id })}}" method="post">*/
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
