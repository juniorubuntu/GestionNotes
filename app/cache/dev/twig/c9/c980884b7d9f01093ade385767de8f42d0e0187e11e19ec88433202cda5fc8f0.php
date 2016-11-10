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
        // line 58
        echo "    <div class=\"col-md-3\">
        ";
        // line 59
        $this->displayBlock('aside', $context, $blocks);
        // line 62
        echo "    </div>
    <div class=\"col-md-9\">
        ";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 107
        echo "    </div>
    ";
        // line 108
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
        // line 18
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">Liste des enseignants</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> Elèves <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("school_student_list");
        echo "\">Liste de élèves</a></li>
                            <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("inscription_new");
        echo "\">Inscription</a></li>
                        </ul>
                    </li>

                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-folder-open\"></i> Classes <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("classe");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> Liste des classes</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-hdd\"></i> Matières <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("matiere");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> Liste des matières</a></li>
                        </ul>
                    </li>
                </ul>
                <div class=\"pull-right\">
                    ";
        // line 43
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 44
            echo "                        Utilisateur: <b style=\"color: blue\">
                            ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                        </b> |
                        <a style=\"color: brown\" href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-off\"></span>
                            <u>";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</u>
                        </a>
                    ";
        } else {
            // line 51
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 52
        echo " 
                </div>
            </div>

        </nav>
    ";
    }

    // line 59
    public function block_aside($context, array $blocks = array())
    {
        // line 60
        echo "            <h2>Je suis le \"aside\"</h2>
        ";
    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
        // line 65
        echo "            <h2>Mes salles de classe</h2>
            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeDispense"]) ? $context["listeDispense"] : $this->getContext($context, "listeDispense")));
        foreach ($context['_seq'] as $context["_key"] => $context["dispense"]) {
            // line 67
            echo "                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"shop-item panel-primary\">
                        <div class=\"panel btn-blue\">
                            <b style=\"text-align: left\"><span style=\"color: green; font-size: 18px\" class=\"glyphicon glyphicon-folder-open\"></span> ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "classe", array()), "html", null, true);
            echo "</b>
                        </div>
                        <ol class=\"\">
                            <li><a class=\"btn-link\" data-toggle=\"modal\" data-target=\"#sequence_";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "id", array()), "html", null, true);
            echo "\">Remplir les notes</a>
                                <div id=\"sequence_";
            // line 74
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
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listSequence"]) ? $context["listSequence"] : $this->getContext($context, "listSequence")));
            foreach ($context['_seq'] as $context["_key"] => $context["sequence"]) {
                // line 83
                echo "                                                    <center>
                                                        <a href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_add", array("id" => $this->getAttribute($this->getAttribute($context["dispense"], "classe", array()), "id", array()), "idSeq" => $this->getAttribute($context["sequence"], "id", array()), "idMat" => $this->getAttribute($this->getAttribute($context["dispense"], "matiere", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-green\">
                                                            <b>";
                // line 85
                echo twig_escape_filter($this->env, $context["sequence"], "html", null, true);
                echo "</b>
                                                        </a> 
                                                    </center>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sequence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                                                <hr>
                                                <button type=\"button\" class=\"btn btn-red pull-right\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span>Annuler</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href=\"\">Modifier une note</a></li>
                            <li><a href=\"\">Exporter les notes en PDF</a></li>
                            <li><a href=\"\">Générer les statistiques</a></li>
                        </ol>
                        <div class=\"pull-right\">
                            Matière: <i style=\"color: forestgreen\">";
            // line 101
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
        // line 106
        echo "        ";
    }

    // line 108
    public function block_pied($context, array $blocks = array())
    {
        // line 109
        echo "        <div class=\"footer\" style=\"bottom: 0; width: 100%; position: fixed\"><center>&copy; 2016 GreenSoft-Team. All rights reserved.</center></div>
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
        return array (  258 => 109,  255 => 108,  251 => 106,  240 => 101,  226 => 89,  216 => 85,  212 => 84,  209 => 83,  205 => 82,  194 => 74,  190 => 73,  184 => 70,  179 => 67,  175 => 66,  172 => 65,  169 => 64,  164 => 60,  161 => 59,  152 => 52,  144 => 51,  138 => 48,  134 => 47,  129 => 45,  126 => 44,  124 => 43,  116 => 38,  107 => 32,  97 => 25,  93 => 24,  84 => 18,  71 => 8,  68 => 7,  65 => 6,  61 => 108,  58 => 107,  56 => 64,  52 => 62,  50 => 59,  47 => 58,  44 => 6,  41 => 5,  36 => 3,  33 => 2,  11 => 1,);
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
/* */
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
/*                 <div class="pull-right">*/
/*                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                         Utilisateur: <b style="color: blue">*/
/*                             {{ app.user.username }}*/
/*                         </b> |*/
/*                         <a style="color: brown" href="{{ path('fos_user_security_logout') }}"><span class="glyphicon glyphicon-off"></span>*/
/*                             <u>{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</u>*/
/*                         </a>*/
/*                     {% else %}*/
/*                         <a href="{{ path('fos_user_security_login') }}"><span class="glyphicon glyphicon-log-in"></span>{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*                         {% endif %} */
/*                 </div>*/
/*             </div>*/
/* */
/*         </nav>*/
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
/*                             <b style="text-align: left"><span style="color: green; font-size: 18px" class="glyphicon glyphicon-folder-open"></span> {{dispense.classe}}</b>*/
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
/*                             <li><a href="">Modifier une note</a></li>*/
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
/*         <div class="footer" style="bottom: 0; width: 100%; position: fixed"><center>&copy; 2016 GreenSoft-Team. All rights reserved.</center></div>*/
/*     {% endblock %}*/
/* {% endblock %}*/
