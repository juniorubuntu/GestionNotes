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
            'content' => array($this, 'block_content'),
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
        // line 59
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
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
        // line 19
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">Liste des enseignants</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-tags\"></i> Elèves <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("school_student_list");
        echo "\">Liste de élèves</a></li>
                            <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("inscription_new");
        echo "\">Inscription</a></li>
                        </ul>
                    </li>

                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> Classes <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("classe");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> Liste des classes</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-gift\"></i> Matières <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("matiere");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> Liste des matières</a></li>
                        </ul>
                    </li>
                </ul>
                <div class=\"pull-right\">
                    ";
        // line 44
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 45
            echo "                        Utilisateur: <b style=\"color: blue\">
                            ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                        </b> |
                        <a style=\"color: brown\" href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-off\"></span>
                            <u>";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</u>
                        </a>
                    ";
        } else {
            // line 52
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 53
        echo " 
                </div>
            </div>

        </nav>
    ";
    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
        // line 60
        echo "    ";
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
        return array (  150 => 60,  147 => 59,  138 => 53,  130 => 52,  124 => 49,  120 => 48,  115 => 46,  112 => 45,  110 => 44,  102 => 39,  93 => 33,  83 => 26,  79 => 25,  70 => 19,  56 => 8,  53 => 7,  50 => 6,  45 => 59,  42 => 6,  39 => 5,  34 => 3,  31 => 2,  11 => 1,);
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
/* */
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
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-tags"></i> Elèves <b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="{{ path('school_student_list')}}">Liste de élèves</a></li>*/
/*                             <li><a href="{{ path('inscription_new')}}">Inscription</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/* */
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Classes <b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="{{ path('classe')}}"><i class="glyphicon glyphicon-user"></i> Liste des classes</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-gift"></i> Matières <b class="caret"></b></a>*/
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
/*     {% block content %}*/
/*     {% endblock %}*/
/* {% endblock %}*/
