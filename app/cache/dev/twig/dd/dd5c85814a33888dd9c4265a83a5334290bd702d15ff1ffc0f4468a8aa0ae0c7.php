<?php

/* SchoolStudentBundle:Absence:absenceClasse.html.twig */
class __TwigTemplate_b052d9779746da0497c6b00ceb3336af893afeeeaab70a4fecc3a48943a7948c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SchoolGestionBundle:Default:index.html.twig", "SchoolStudentBundle:Absence:absenceClasse.html.twig", 1);
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
        echo "    <h2>Insertion des absences de la <b>";
        echo twig_escape_filter($this->env, (isset($context["sequence"]) ? $context["sequence"] : $this->getContext($context, "sequence")), "html", null, true);
        echo "</b> en classe de <b>";
        echo twig_escape_filter($this->env, (isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "html", null, true);
        echo "</b></h2>
    <form method=\"POST\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("absence_classe", array("idClasse" => $this->getAttribute((isset($context["classe"]) ? $context["classe"] : $this->getContext($context, "classe")), "id", array()), "idSeq" => $this->getAttribute((isset($context["sequence"]) ? $context["sequence"] : $this->getContext($context, "sequence")), "id", array()))), "html", null, true);
        echo "\">
        <table class=\"records_list table cell-border row-border table-hover panel-primary\" id=\"liste\">
            <thead class=\"panel-heading\">
                <tr>
                    <th>Id</th>
                    <th>Année</th>
                    <th>Elève </th>
                    <th>Sexe </th>
                    <th>Classe</th>
                    <th>Séquence</th>
                    <th>Valeur actuelle</th>
                    <th>Ajouter ?</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 20
        $context["compt"] = 1;
        // line 21
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEleves"]) ? $context["listEleves"] : $this->getContext($context, "listEleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 22
            echo "                    <tr>
                        <td><a href=\"\">";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["compt"]) ? $context["compt"] : $this->getContext($context, "compt")), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "student", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eleve"], "student", array()), "sexe", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eleve"], "classe", array()), "abreviation", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["sequence"]) ? $context["sequence"] : $this->getContext($context, "sequence")), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 30
            if (twig_test_empty($this->getAttribute($context["eleve"], "nbreAbsence", array()))) {
                // line 31
                echo "                                0
                            ";
            } else {
                // line 33
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "nbreAbsence", array()), "html", null, true);
                echo "
                            ";
            }
            // line 35
            echo "                        </td>
                        <td>
                            <input type=\"number\" class=\"form-control\" value=\"0\" min=\"0\" name=\"el_";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "id", array()), "html", null, true);
            echo "\" style=\"width: 33%;\"/>
                        </td>
                    </tr>
                    ";
            // line 40
            $context["compt"] = ((isset($context["compt"]) ? $context["compt"] : $this->getContext($context, "compt")) + 1);
            // line 41
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                <tr>
                    <td>==</td>
                    <td>==</td>
                    <td>==</td>
                    <td>==</td>
                    <td>==</td>
                    <td>==</td>
                    <td>
                        <button type=\"submit\" class=\"btn btn-green\">Enregistrer</button>
                    </td>
                    <td>
                        <button type=\"reset\" class=\"btn btn-blue\">Annuler</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <script>
        \$('#liste').DataTable({
            \"pagingType\": \"full_numbers\",
            \"lengthMenu\": [[10, 20], [10, 20]],
            \"language\": {
                \"url\": \"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
            }

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SchoolStudentBundle:Absence:absenceClasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 64,  121 => 42,  115 => 41,  113 => 40,  107 => 37,  103 => 35,  97 => 33,  93 => 31,  91 => 30,  86 => 28,  82 => 27,  78 => 26,  74 => 25,  70 => 24,  66 => 23,  63 => 22,  58 => 21,  56 => 20,  38 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h2>Insertion des absences de la <b>{{sequence}}</b> en classe de <b>{{classe}}</b></h2>*/
/*     <form method="POST" action="{{path('absence_classe', {'idClasse': classe.id, 'idSeq': sequence.id})}}">*/
/*         <table class="records_list table cell-border row-border table-hover panel-primary" id="liste">*/
/*             <thead class="panel-heading">*/
/*                 <tr>*/
/*                     <th>Id</th>*/
/*                     <th>Année</th>*/
/*                     <th>Elève </th>*/
/*                     <th>Sexe </th>*/
/*                     <th>Classe</th>*/
/*                     <th>Séquence</th>*/
/*                     <th>Valeur actuelle</th>*/
/*                     <th>Ajouter ?</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% set compt = 1 %}*/
/*                 {% for eleve in listEleves %}*/
/*                     <tr>*/
/*                         <td><a href="">{{ compt }}</a></td>*/
/*                         <td>{{ annee }}</td>*/
/*                         <td>{{ eleve.student }}</td>*/
/*                         <td>{{ eleve.student.sexe }}</td>*/
/*                         <td>{{ eleve.classe.abreviation }}</td>*/
/*                         <td>{{ sequence}}</td>*/
/*                         <td>*/
/*                             {% if eleve.nbreAbsence is empty %}*/
/*                                 0*/
/*                             {% else %}*/
/*                                 {{eleve.nbreAbsence}}*/
/*                             {%endif%}*/
/*                         </td>*/
/*                         <td>*/
/*                             <input type="number" class="form-control" value="0" min="0" name="el_{{eleve.id}}" style="width: 33%;"/>*/
/*                         </td>*/
/*                     </tr>*/
/*                     {% set compt = compt + 1%}*/
/*                 {% endfor %}*/
/*                 <tr>*/
/*                     <td>==</td>*/
/*                     <td>==</td>*/
/*                     <td>==</td>*/
/*                     <td>==</td>*/
/*                     <td>==</td>*/
/*                     <td>==</td>*/
/*                     <td>*/
/*                         <button type="submit" class="btn btn-green">Enregistrer</button>*/
/*                     </td>*/
/*                     <td>*/
/*                         <button type="reset" class="btn btn-blue">Annuler</button>*/
/*                     </td>*/
/*                 </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </form>*/
/*     <script>*/
/*         $('#liste').DataTable({*/
/*             "pagingType": "full_numbers",*/
/*             "lengthMenu": [[10, 20], [10, 20]],*/
/*             "language": {*/
/*                 "url": "{{ asset('DataTables/French.json') }}"*/
/*             }*/
/* */
/*         });*/
/*     </script>*/
/* {% endblock %}*/
