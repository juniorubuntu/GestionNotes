<?php

/* SchoolGestionBundle:Default:index.html.twig */
class __TwigTemplate_cffa5f45dad579bbdf0552605e119a7cd7dbfab08667e0a32bd042233e86d01a extends Twig_Template
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
        // line 61
        echo "    <div class=\"col-md-3\">
        ";
        // line 62
        $this->displayBlock('aside', $context, $blocks);
        // line 65
        echo "    </div>
    <div class=\"col-md-9\">
        ";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 132
        echo "    </div>
    ";
        // line 133
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
        echo $this->env->getExtension('routing')->getPath("inscription_new");
        echo "\">Inscription</a></li>
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
            echo "                <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $context["flas_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flas_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </div>
    ";
    }

    // line 62
    public function block_aside($context, array $blocks = array())
    {
        // line 63
        echo "            <h2>Je suis le \"aside\"</h2>
        ";
    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
        // line 68
        echo "            <h2>Mes salles de classe</h2>
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeDispense"]) ? $context["listeDispense"] : $this->getContext($context, "listeDispense")));
        foreach ($context['_seq'] as $context["_key"] => $context["dispense"]) {
            // line 70
            echo "                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"shop-item panel-primary\">
                        <div class=\"panel btn-blue\">
                            <b style=\"text-align: left\"><span style=\"color: orange; font-size: 18px\" class=\"glyphicon glyphicon-folder-open\"></span> ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "classe", array()), "html", null, true);
            echo "</b>
                        </div>
                        <ol class=\"\">
                            <li><a class=\"btn-link\" data-toggle=\"modal\" data-target=\"#sequence_";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "id", array()), "html", null, true);
            echo "\">Remplir les notes</a>
                                <div id=\"sequence_";
            // line 77
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
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listSequence"]) ? $context["listSequence"] : $this->getContext($context, "listSequence")));
            foreach ($context['_seq'] as $context["_key"] => $context["sequence"]) {
                // line 86
                echo "                                                    <center>
                                                        <a href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_add", array("id" => $this->getAttribute($this->getAttribute($context["dispense"], "classe", array()), "id", array()), "idSeq" => $this->getAttribute($context["sequence"], "id", array()), "idMat" => $this->getAttribute($this->getAttribute($context["dispense"], "matiere", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-green\">
                                                            <b>";
                // line 88
                echo twig_escape_filter($this->env, $context["sequence"], "html", null, true);
                echo "</b>
                                                        </a> 
                                                    </center>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sequence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                                                <hr>
                                                <button type=\"button\" class=\"btn btn-red pull-right\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span>Annuler</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a class=\"btn-link\" data-toggle=\"modal\" data-target=\"#sequenceedit_";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "id", array()), "html", null, true);
            echo "\">Modifier une note</a>
                                <div id=\"sequenceedit_";
            // line 100
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
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listSequence"]) ? $context["listSequence"] : $this->getContext($context, "listSequence")));
            foreach ($context['_seq'] as $context["_key"] => $context["sequence"]) {
                // line 109
                echo "                                                    <center>
                                                        <a href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_editnote", array("id" => $this->getAttribute($this->getAttribute($context["dispense"], "classe", array()), "id", array()), "idSeq" => $this->getAttribute($context["sequence"], "id", array()), "idMat" => $this->getAttribute($this->getAttribute($context["dispense"], "matiere", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-green\">
                                                            <b>";
                // line 111
                echo twig_escape_filter($this->env, $context["sequence"], "html", null, true);
                echo "</b>
                                                        </a>
                                                    </center>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sequence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
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
            // line 126
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
        // line 131
        echo "        ";
    }

    // line 133
    public function block_pied($context, array $blocks = array())
    {
        // line 134
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
        return array (  316 => 134,  313 => 133,  309 => 131,  298 => 126,  285 => 115,  275 => 111,  271 => 110,  268 => 109,  264 => 108,  253 => 100,  249 => 99,  240 => 92,  230 => 88,  226 => 87,  223 => 86,  219 => 85,  208 => 77,  204 => 76,  198 => 73,  193 => 70,  189 => 69,  186 => 68,  183 => 67,  178 => 63,  175 => 62,  170 => 59,  161 => 57,  157 => 56,  151 => 52,  143 => 50,  137 => 47,  133 => 46,  128 => 44,  125 => 43,  123 => 42,  115 => 37,  106 => 31,  96 => 24,  92 => 23,  83 => 17,  71 => 8,  68 => 7,  65 => 6,  61 => 133,  58 => 132,  56 => 67,  52 => 65,  50 => 62,  47 => 61,  44 => 6,  41 => 5,  36 => 3,  33 => 2,  11 => 1,);
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
/*                             <li><a href="{{ path('inscription_new')}}">Inscription</a></li>*/
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
/*                 <div class="alert alert-warning">{{ flas_message }}</div>*/
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
/*                                                         <a href="{{path('note_add', {'id':dispense.classe.id , 'idSeq': sequence.id, 'idMat':dispense.matiere.id })}}" class="btn btn-green">*/
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
/*                                                         <a href="{{path('note_editnote', {'id':dispense.classe.id , 'idSeq': sequence.id, 'idMat':dispense.matiere.id })}}" class="btn btn-green">*/
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
