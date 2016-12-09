<?php

/* SchoolGestionBundle:Default:index.html.twig */
class __TwigTemplate_706ccf5647312e192af612d346772fbfd55407dccfe1934e080d843fdc9438c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolGestionBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'aside' => array($this, 'block_aside'),
            'content' => array($this, 'block_content'),
            'pied' => array($this, 'block_pied'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    Accueil
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayBlock('menu', $context, $blocks);
        // line 64
        echo "    <div class=\"col-md-3\">
        ";
        // line 65
        $this->displayBlock('aside', $context, $blocks);
        // line 68
        echo "    </div>
    <div class=\"col-md-9\">
        ";
        // line 70
        $this->displayBlock('content', $context, $blocks);
        // line 135
        echo "    </div>
    ";
        // line 136
        $this->displayBlock('pied', $context, $blocks);
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "        <nav id=\"navbar-darkblue\" class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"navbar-header\"><a class=\"navbar-brand\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("school_gestion_homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> Accueil</a>
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-menubuilder\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span>
                </button>
            </div>
            <div class=\"collapse navbar-collapse navbar-menubuilder\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-th-list\"></i> Enseigants <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">Liste des enseignants</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> Elèves <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("school_student_list");
        echo "\">Liste de élèves</a></li>
                            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("inscription");
        echo "\">Inscriptions</a></li>
                        </ul>
                    </li>

                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-folder-open\"></i> Classes <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("classe");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> Liste des classes</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-hdd\"></i> Matières <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("matiere");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> Liste des matières</a></li>
                        </ul>
                    </li>
                </ul>
                <p class=\"navbar-text navbar-right\">
                    ";
        // line 42
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 43
            echo "                        Utilisateur: <b style=\"color: blue\">
                            ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                        </b> |
                        <a style=\"color: brown\" href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-off\"></span>
                            <span>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</span>
                        </a>
                    ";
        } else {
            // line 50
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 52
        echo "                </p>
            </div>
        </nav>
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flas_message"]) {
            // line 57
            echo "                <div class=\"alert alert-warning text-center\">";
            echo twig_escape_filter($this->env, $context["flas_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flas_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flas_message"]) {
            // line 60
            echo "                <div class=\"alert alert-danger text-center\">";
            echo twig_escape_filter($this->env, $context["flas_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flas_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </div>
    ";
    }

    // line 65
    public function block_aside($context, array $blocks = array())
    {
        // line 66
        echo "            <h2>Je suis le \"aside\"</h2>
        ";
    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
        // line 71
        echo "            <h2>Mes salles de classe</h2>
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeDispense"]) ? $context["listeDispense"] : $this->getContext($context, "listeDispense")));
        foreach ($context['_seq'] as $context["_key"] => $context["dispense"]) {
            // line 73
            echo "                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"shop-item panel-primary\">
                        <div class=\"panel btn-blue\">
                            <b style=\"text-align: left\"><span style=\"color: orange; font-size: 18px\" class=\"glyphicon glyphicon-folder-open\"></span> ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "classe", array()), "html", null, true);
            echo "</b>
                        </div>
                        <ol class=\"\">
                            <li><a class=\"btn-link\" data-toggle=\"modal\" data-target=\"#sequence_";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "id", array()), "html", null, true);
            echo "\">Remplir les notes</a>
                                <div id=\"sequence_";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <center><b>Choisir la séquence</b></center>
                                            </div>
                                            <div class=\"col-md-12 modal-body\">
                                                ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listSequence"]) ? $context["listSequence"] : $this->getContext($context, "listSequence")));
            foreach ($context['_seq'] as $context["_key"] => $context["sequence"]) {
                // line 89
                echo "                                                    <center>
                                                        <a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_add", array("id" => $this->getAttribute($this->getAttribute($context["dispense"], "classe", array()), "id", array()), "idSeq" => $this->getAttribute($context["sequence"], "id", array()), "idMat" => $this->getAttribute($this->getAttribute($context["dispense"], "matiere", array()), "id", array()), "idAnnee" => $this->getAttribute($this->getAttribute($context["dispense"], "annee", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-green\">
                                                            <b>";
                // line 91
                echo twig_escape_filter($this->env, $context["sequence"], "html", null, true);
                echo "</b>
                                                        </a> 
                                                    </center>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sequence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                                                <hr>
                                                <button type=\"button\" class=\"btn btn-red pull-right\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span>Annuler</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a class=\"btn-link\" data-toggle=\"modal\" data-target=\"#sequenceedit_";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "id", array()), "html", null, true);
            echo "\">Modifier une note</a>
                                <div id=\"sequenceedit_";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <center><b>Choisir la séquence</b></center>
                                            </div>
                                            <div class=\"col-md-12 modal-body\">
                                                ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listSequence"]) ? $context["listSequence"] : $this->getContext($context, "listSequence")));
            foreach ($context['_seq'] as $context["_key"] => $context["sequence"]) {
                // line 112
                echo "                                                    <center>
                                                        <a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_editnote", array("id" => $this->getAttribute($this->getAttribute($context["dispense"], "classe", array()), "id", array()), "idSeq" => $this->getAttribute($context["sequence"], "id", array()), "idMat" => $this->getAttribute($this->getAttribute($context["dispense"], "matiere", array()), "id", array()), "idAnnee" => $this->getAttribute($this->getAttribute($context["dispense"], "annee", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-green\">
                                                            <b>";
                // line 114
                echo twig_escape_filter($this->env, $context["sequence"], "html", null, true);
                echo "</b>
                                                        </a>
                                                    </center>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sequence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                                                <hr>
                                                <button type=\"button\" class=\"btn btn-red pull-right\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span>Annuler</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href=\"\">Exporter les notes en PDF</a></li>
                            <li><a href=\"\">Générer les statistiques</a></li>
                        </ol>
                        <div class=\"pull-right\">
                            Matière: <i style=\"color: forestgreen\">";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "matiere", array()), "html", null, true);
            echo "</i>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dispense'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "        ";
    }

    // line 136
    public function block_pied($context, array $blocks = array())
    {
        // line 137
        echo "        <div class=\"\" style=\"\"><center>&copy; 2016 GreenSoft-Team. All rights reserved.</center></div>
    ";
    }

    public function getTemplateName()
    {
        return "SchoolGestionBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 137,  327 => 136,  323 => 134,  312 => 129,  299 => 118,  289 => 114,  285 => 113,  282 => 112,  278 => 111,  267 => 103,  263 => 102,  254 => 95,  244 => 91,  240 => 90,  237 => 89,  233 => 88,  222 => 80,  218 => 79,  212 => 76,  207 => 73,  203 => 72,  200 => 71,  197 => 70,  192 => 66,  189 => 65,  184 => 62,  175 => 60,  170 => 59,  161 => 57,  157 => 56,  151 => 52,  143 => 50,  137 => 47,  133 => 46,  128 => 44,  125 => 43,  123 => 42,  115 => 37,  106 => 31,  96 => 24,  92 => 23,  83 => 17,  71 => 8,  68 => 7,  65 => 6,  61 => 136,  58 => 135,  56 => 70,  52 => 68,  50 => 65,  47 => 64,  44 => 6,  41 => 5,  36 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block title %}*/
/*     Accueil*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% block menu %}*/
/*         <nav id="navbar-darkblue" class="navbar navbar-default" role="navigation">*/
/*             <div class="navbar-header"><a class="navbar-brand" href="{{ path('school_gestion_homepage')}}"><i class="glyphicon glyphicon-home"></i> Accueil</a>*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="collapse navbar-collapse navbar-menubuilder">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th-list"></i> Enseigants <b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="{{ path('user') }}">Liste des enseignants</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Elèves <b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="{{ path('school_student_list')}}">Liste de élèves</a></li>*/
/*                             <li><a href="{{ path('inscription')}}">Inscriptions</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/* */
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-folder-open"></i> Classes <b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="{{ path('classe')}}"><i class="glyphicon glyphicon-user"></i> Liste des classes</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-hdd"></i> Matières <b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="{{ path('matiere')}}"><i class="glyphicon glyphicon-user"></i> Liste des matières</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <p class="navbar-text navbar-right">*/
/*                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                         Utilisateur: <b style="color: blue">*/
/*                             {{ app.user.username }}*/
/*                         </b> |*/
/*                         <a style="color: brown" href="{{ path('fos_user_security_logout') }}"><span class="glyphicon glyphicon-off"></span>*/
/*                             <span>{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</span>*/
/*                         </a>*/
/*                     {% else %}*/
/*                         <a href="{{ path('fos_user_security_login') }}"><span class="glyphicon glyphicon-log-in"></span>{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*                         {% endif %}*/
/*                 </p>*/
/*             </div>*/
/*         </nav>*/
/*         <div class="col-md-12 col-sm-12 col-xs-12">*/
/*             {% for flas_message in app.session.flashbag.get('notice') %}*/
/*                 <div class="alert alert-warning text-center">{{ flas_message }}</div>*/
/*             {% endfor %}*/
/*             {% for flas_message in app.session.flashbag.get('error') %}*/
/*                 <div class="alert alert-danger text-center">{{ flas_message }}</div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endblock %}*/
/*     <div class="col-md-3">*/
/*         {% block aside %}*/
/*             <h2>Je suis le "aside"</h2>*/
/*         {% endblock %}*/
/*     </div>*/
/*     <div class="col-md-9">*/
/*         {% block content %}*/
/*             <h2>Mes salles de classe</h2>*/
/*             {% for dispense in listeDispense %}*/
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <div class="shop-item panel-primary">*/
/*                         <div class="panel btn-blue">*/
/*                             <b style="text-align: left"><span style="color: orange; font-size: 18px" class="glyphicon glyphicon-folder-open"></span> {{dispense.classe}}</b>*/
/*                         </div>*/
/*                         <ol class="">*/
/*                             <li><a class="btn-link" data-toggle="modal" data-target="#sequence_{{dispense.id}}">Remplir les notes</a>*/
/*                                 <div id="sequence_{{dispense.id}}" class="modal fade">*/
/*                                     <div class="modal-dialog modal-sm">*/
/*                                         <div class="modal-content">*/
/*                                             <div class="modal-header">*/
/*                                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                                                 <center><b>Choisir la séquence</b></center>*/
/*                                             </div>*/
/*                                             <div class="col-md-12 modal-body">*/
/*                                                 {% for sequence in listSequence %}*/
/*                                                     <center>*/
/*                                                         <a href="{{path('note_add', {'id':dispense.classe.id , 'idSeq': sequence.id, 'idMat':dispense.matiere.id, 'idAnnee':dispense.annee.id })}}" class="btn btn-green">*/
/*                                                             <b>{{sequence}}</b>*/
/*                                                         </a> */
/*                                                     </center>*/
/*                                                 {% endfor %}*/
/*                                                 <hr>*/
/*                                                 <button type="button" class="btn btn-red pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span>Annuler</button>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li><a class="btn-link" data-toggle="modal" data-target="#sequenceedit_{{dispense.id}}">Modifier une note</a>*/
/*                                 <div id="sequenceedit_{{dispense.id}}" class="modal fade">*/
/*                                     <div class="modal-dialog modal-sm">*/
/*                                         <div class="modal-content">*/
/*                                             <div class="modal-header">*/
/*                                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                                                 <center><b>Choisir la séquence</b></center>*/
/*                                             </div>*/
/*                                             <div class="col-md-12 modal-body">*/
/*                                                 {% for sequence in listSequence %}*/
/*                                                     <center>*/
/*                                                         <a href="{{path('note_editnote', {'id':dispense.classe.id , 'idSeq': sequence.id, 'idMat':dispense.matiere.id, 'idAnnee':dispense.annee.id })}}" class="btn btn-green">*/
/*                                                             <b>{{sequence}}</b>*/
/*                                                         </a>*/
/*                                                     </center>*/
/*                                                 {% endfor %}*/
/*                                                 <hr>*/
/*                                                 <button type="button" class="btn btn-red pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span>Annuler</button>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li><a href="">Exporter les notes en PDF</a></li>*/
/*                             <li><a href="">Générer les statistiques</a></li>*/
/*                         </ol>*/
/*                         <div class="pull-right">*/
/*                             Matière: <i style="color: forestgreen">{{dispense.matiere}}</i>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endblock %}*/
/*     </div>*/
/*     {% block pied %}*/
/*         <div class="" style=""><center>&copy; 2016 GreenSoft-Team. All rights reserved.</center></div>*/
/*     {% endblock %}*/
/* {% endblock %}*/
