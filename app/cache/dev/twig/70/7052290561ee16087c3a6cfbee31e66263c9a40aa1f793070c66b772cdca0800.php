<?php

/* SchoolStudentBundle:Classe:index.html.twig */
class __TwigTemplate_0bc3a0f32b8ef8120b6141206f08c2da06eff89c462f8a957f1b43e786697ec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SchoolGestionBundle:Default:index.html.twig", "SchoolStudentBundle:Classe:index.html.twig", 1);
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
        echo "<h2>Liste des salles de classes</h2>
    <nav class=\"nav navbar-inverse alert-success col-md-12\" style=\"margin-bottom: 3px;\">
        <a style=\"color: green; font-size: 18px;
           text-shadow: -1px 0px;\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("classe_new");
        echo "\" class=\"pull-left btn-link\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Ajouter une classe</a>
    </nav>
    <table class=\"records_list table cell-border row-border table-hover panel-primary\" id=\"classe\">
        <thead class=\"panel-heading\">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Classe Père</th>
            <th>Abreviation</th>
            <th>Marquer les élèves absents</th>
            <th>Détails</th>
            <th>Modifier</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classe_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "classePere", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "abreviation", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn-link\" data-toggle=\"modal\" data-target=\"#seq_";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-blue\"><span class=\"glyphicon glyphicon-calendar\"></span> Insérer</a>
                    <div id=\"seq_";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\">
                        <div class=\"modal-dialog modal-sm\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                    <center><b>Choisir la séquence</b></center>
                                </div>
                                <div class=\"col-md-12 modal-body\">
                                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listSequence"]) ? $context["listSequence"] : $this->getContext($context, "listSequence")));
            foreach ($context['_seq'] as $context["_key"] => $context["sequence"]) {
                // line 39
                echo "                                        <center>
                                            <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("absence_classe", array("idClasse" => $this->getAttribute($context["entity"], "id", array()), "idSeq" => $this->getAttribute($context["sequence"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-green\">
                                                <b>";
                // line 41
                echo twig_escape_filter($this->env, $context["sequence"], "html", null, true);
                echo "</b>
                                            </a>
                                        </center>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sequence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                                    <hr>
                                    <button type=\"button\" class=\"btn btn-red pull-right\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span>Annuler</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classe_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Voir</a>
                </td>
                <td>
                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classe_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </tbody>
    </table>
    <script>
        \$('#classe').DataTable({
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
";
    }

    public function getTemplateName()
    {
        return "SchoolStudentBundle:Classe:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 67,  142 => 60,  132 => 56,  126 => 53,  116 => 45,  106 => 41,  102 => 40,  99 => 39,  95 => 38,  84 => 30,  80 => 29,  75 => 27,  71 => 26,  67 => 25,  61 => 24,  58 => 23,  54 => 22,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h2>Liste des salles de classes</h2>*/
/*     <nav class="nav navbar-inverse alert-success col-md-12" style="margin-bottom: 3px;">*/
/*         <a style="color: green; font-size: 18px;*/
/*            text-shadow: -1px 0px;" href="{{path('classe_new')}}" class="pull-left btn-link"><span class="glyphicon glyphicon-plus-sign"></span> Ajouter une classe</a>*/
/*     </nav>*/
/*     <table class="records_list table cell-border row-border table-hover panel-primary" id="classe">*/
/*         <thead class="panel-heading">*/
/*         <tr>*/
/*             <th>Id</th>*/
/*             <th>Nom</th>*/
/*             <th>Classe Père</th>*/
/*             <th>Abreviation</th>*/
/*             <th>Marquer les élèves absents</th>*/
/*             <th>Détails</th>*/
/*             <th>Modifier</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('classe_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.nom }}</td>*/
/*                 <td>{{ entity.classePere }}</td>*/
/*                 <td>{{ entity.abreviation }}</td>*/
/*                 <td>*/
/*                     <a class="btn-link" data-toggle="modal" data-target="#seq_{{entity.id}}" class="btn btn-blue"><span class="glyphicon glyphicon-calendar"></span> Insérer</a>*/
/*                     <div id="seq_{{entity.id}}" class="modal fade">*/
/*                         <div class="modal-dialog modal-sm">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                                     <center><b>Choisir la séquence</b></center>*/
/*                                 </div>*/
/*                                 <div class="col-md-12 modal-body">*/
/*                                     {% for sequence in listSequence %}*/
/*                                         <center>*/
/*                                             <a href="{{path('absence_classe', {'idClasse':entity.id , 'idSeq': sequence.id })}}" class="btn btn-green">*/
/*                                                 <b>{{sequence}}</b>*/
/*                                             </a>*/
/*                                         </center>*/
/*                                     {% endfor %}*/
/*                                     <hr>*/
/*                                     <button type="button" class="btn btn-red pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span>Annuler</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </td>*/
/*                 <td>*/
/*                     <a href="{{ path('classe_show', { 'id': entity.id }) }}">Voir</a>*/
/*                 </td>*/
/*                 <td>*/
/*                     <a href="{{ path('classe_edit', { 'id': entity.id }) }}">Modifier</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     <script>*/
/*         $('#classe').DataTable({*/
/*             "pagingType": "full_numbers",*/
/*             "lengthMenu": [[10, 20], [10, 20]],*/
/*             "language": {*/
/*                 "url": "{{ asset('DataTables/French.json') }}"*/
/*             }*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
