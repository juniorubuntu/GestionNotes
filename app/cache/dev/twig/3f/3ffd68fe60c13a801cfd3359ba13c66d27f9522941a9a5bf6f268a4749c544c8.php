<?php

/* SchoolStudentBundle:Inscription:index.html.twig */
class __TwigTemplate_e139b7d6203b5a901e031f9553104270c766c00c5dd86d087e1d9830738c6438 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SchoolGestionBundle:Default:index.html.twig", "SchoolStudentBundle:Inscription:index.html.twig", 1);
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
        echo "<h1 class=\"text-center\">Liste des Inscription</h1>
    <nav class=\"nav navbar-inverse alert-success col-md-12\" style=\"margin-bottom: 3px;\">
        <a style=\"color: green; font-size: 18px;
           text-shadow: -1px 0px;\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("inscription_notyet");
        echo "\" class=\"pull-left btn-link\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Inscrire un nouvel el&egrave;ve</a>
    </nav>
    <table id=\"inscription\" class=\"records_list table panel-primary\">
        <thead class=\"panel-heading\">
        <tr>
            <th>Performance</th>
            <th>Nom et prénom</th>
            <th>Classe</th>
            <th>Avance</th>
            <th>Datederniereavance</th>
            <th>Status</th>
            <th>Année Académique</th>
            <th>Détails</th>
            <th>Profil</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_performance", array("idEleve" => $this->getAttribute($this->getAttribute($context["entity"], "student", array()), "id", array()))), "html", null, true);
            echo "\">Perfo</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "student", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "classe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "avance", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["entity"], "dateDerniereAvance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDerniereAvance", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 33
            echo "                    ";
            // line 34
            echo "                    ";
            // line 35
            echo "                    ";
            // line 36
            echo "                    ";
            // line 37
            echo "                    ";
            // line 38
            echo "                    <ul style=\"list-style-type: none\">
                        <li><a class=\"btn-link\" data-toggle=\"modal\" data-target=\"#sequence-";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\">Profil</a>
                            <div style=\" position: center\" id=\"sequence-";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\">
                                <div class=\"modal-dialog modal-sm\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <span style=\"font-size: 1.2em;\" class=\"text-center\"><strong>Choisir une sequence</strong></span>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                        </div>
                                        <div class=\"col-md-12 modal-body\">
                                            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sequences"]) ? $context["sequences"] : $this->getContext($context, "sequences")));
            foreach ($context['_seq'] as $context["_key"] => $context["sequence"]) {
                // line 49
                echo "                                                <center>
                                                    <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bulletin_seq_student", array("idClasse" => $this->getAttribute($this->getAttribute($context["entity"], "classe", array()), "id", array()), "idEleve" => $this->getAttribute($this->getAttribute($context["entity"], "student", array()), "id", array()), "idSeq" => $this->getAttribute($context["sequence"], "id", array()), "idAnnee" => $this->getAttribute($this->getAttribute($context["entity"], "annee", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-green\">
                                                        <b>";
                // line 51
                echo twig_escape_filter($this->env, $context["sequence"], "html", null, true);
                echo "</b>
                                                    </a>
                                                </center>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sequence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                                            <hr>
                                            <button type=\"button\" class=\"btn btn-red pull-right\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span>Annuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "annee", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-info\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inscription_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                        <i class=\"glyphicon glyphicon-eye-open \"></i></a>
                    ";
            // line 68
            if (($this->getAttribute($context["entity"], "status", array()) == 0)) {
                // line 69
                echo "                        <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("inscription_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                            <i class=\"glyphicon glyphicon-edit \"></i>
                        </a>
                    ";
            } else {
                // line 73
                echo "                        <b style=\"color: green\">Termin&eacute;e</b>
                    ";
            }
            // line 75
            echo "                </td>
                <td>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        </tbody>
    </table>

    <script>
        \$('#inscription').DataTable({
            \"pagingType\": \"full_numbers\",
            \"lengthMenu\": [[10, 20], [10, 20]],
            \"language\": {
                \"url\": \"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
            }

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SchoolStudentBundle:Inscription:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 88,  180 => 80,  170 => 75,  166 => 73,  158 => 69,  156 => 68,  151 => 66,  146 => 64,  135 => 55,  125 => 51,  121 => 50,  118 => 49,  114 => 48,  103 => 40,  99 => 39,  96 => 38,  94 => 37,  92 => 36,  90 => 35,  88 => 34,  86 => 33,  79 => 30,  75 => 29,  71 => 28,  67 => 27,  63 => 26,  60 => 25,  56 => 24,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SchoolGestionBundle:Default:index.html.twig' %}*/
/* */
/* {% block content -%}*/
/*     <h1 class="text-center">Liste des Inscription</h1>*/
/*     <nav class="nav navbar-inverse alert-success col-md-12" style="margin-bottom: 3px;">*/
/*         <a style="color: green; font-size: 18px;*/
/*            text-shadow: -1px 0px;" href="{{path('inscription_notyet')}}" class="pull-left btn-link"><span class="glyphicon glyphicon-plus-sign"></span> Inscrire un nouvel el&egrave;ve</a>*/
/*     </nav>*/
/*     <table id="inscription" class="records_list table panel-primary">*/
/*         <thead class="panel-heading">*/
/*         <tr>*/
/*             <th>Performance</th>*/
/*             <th>Nom et prénom</th>*/
/*             <th>Classe</th>*/
/*             <th>Avance</th>*/
/*             <th>Datederniereavance</th>*/
/*             <th>Status</th>*/
/*             <th>Année Académique</th>*/
/*             <th>Détails</th>*/
/*             <th>Profil</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('student_performance', {'idEleve': entity.student.id}) }}">Perfo</a></td>*/
/*                 <td>{{ entity.student }}</td>*/
/*                 <td>{{ entity.classe }}</td>*/
/*                 <td>{{ entity.avance }}</td>*/
/*                 <td>{% if entity.dateDerniereAvance %}{{ entity.dateDerniereAvance|date('d-m-Y') }}{% endif %}</td>*/
/*                 <td>*/
/*                     {#Paiement #}*/
/*                     {#{% if entity.status == 1 %}#}*/
/*                     {#<b style="color: green">Complet</b>#}*/
/*                     {#{% else %}#}*/
/*                     {#<b style="color: red">Incomplet</b>#}*/
/*                     {#{% endif %}#}*/
/*                     <ul style="list-style-type: none">*/
/*                         <li><a class="btn-link" data-toggle="modal" data-target="#sequence-{{ entity.id }}">Profil</a>*/
/*                             <div style=" position: center" id="sequence-{{ entity.id }}" class="modal fade">*/
/*                                 <div class="modal-dialog modal-sm">*/
/*                                     <div class="modal-content">*/
/*                                         <div class="modal-header">*/
/*                                             <span style="font-size: 1.2em;" class="text-center"><strong>Choisir une sequence</strong></span>*/
/*                                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                                         </div>*/
/*                                         <div class="col-md-12 modal-body">*/
/*                                             {% for sequence in sequences %}*/
/*                                                 <center>*/
/*                                                     <a href="{{path('bulletin_seq_student', {'idClasse':entity.classe.id , 'idEleve': entity.student.id, 'idSeq':sequence.id, 'idAnnee':entity.annee.id })}}" class="btn btn-green">*/
/*                                                         <b>{{sequence}}</b>*/
/*                                                     </a>*/
/*                                                 </center>*/
/*                                             {% endfor %}*/
/*                                             <hr>*/
/*                                             <button type="button" class="btn btn-red pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span>Annuler</button>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*                 <td>{{ entity.annee }}</td>*/
/*                 <td>*/
/*                     <a class="btn btn-info" href="{{ path('inscription_show', { 'id': entity.id }) }}">*/
/*                         <i class="glyphicon glyphicon-eye-open "></i></a>*/
/*                     {% if entity.status == 0 %}*/
/*                         <a class="btn btn-success" href="{{ path('inscription_edit', { 'id': entity.id }) }}">*/
/*                             <i class="glyphicon glyphicon-edit "></i>*/
/*                         </a>*/
/*                     {% else %}*/
/*                         <b style="color: green">Termin&eacute;e</b>*/
/*                     {% endif %}*/
/*                 </td>*/
/*                 <td>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <script>*/
/*         $('#inscription').DataTable({*/
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
