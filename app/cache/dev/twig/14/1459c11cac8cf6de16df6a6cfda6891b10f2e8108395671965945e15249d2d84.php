<?php

/* SchoolUserBundle:Default:layout.html.twig */
class __TwigTemplate_5a463825478b34f9df22f255616ec0b5076b2d08c93ba950c99821e05574134a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "SchoolUserBundle:Default:layout.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        // line 8
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "        Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
    ";
        } else {
            // line 11
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
    ";
        }
        // line 13
        echo "    <div>
        ";
        // line 14
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
            <a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
            </a>
        ";
        } else {
            // line 20
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 22
        echo "    </div>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 24
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    <div>
        ";
        // line 29
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 31
        echo "    </div>
";
    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 30
        echo "        ";
    }

    public function getTemplateName()
    {
        return "SchoolUserBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 30,  110 => 29,  105 => 31,  103 => 29,  100 => 28,  91 => 25,  86 => 24,  82 => 23,  79 => 22,  71 => 20,  65 => 17,  61 => 16,  56 => 15,  54 => 14,  51 => 13,  45 => 11,  37 => 9,  34 => 8,  32 => 6,  29 => 5,  11 => 3,);
    }
}
/* {# src/Sdz/UserBundle/Resources/views/layout.html.twig #}*/
/* {# On étend notre layout à nous #}*/
/* {% extends "::layout.html.twig" %}*/
/* {# Dans notre layout, il faut définir le block body #}*/
/* {% block body %}*/
/*     {# On y place le contenu du layout par défaut de FOSUB :*/
/*     https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Resources/views/layout.html.twig #}*/
/*     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*         Connecté en tant que {{ app.user.username }} - <a href="{{path('fos_user_security_logout') }}">Déconnexion</a>*/
/*     {% else %}*/
/*         <a href="{{ path('fos_user_security_login') }}">Connexion</a>*/
/*     {% endif %}*/
/*     <div>*/
/*         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*             <a href="{{ path('fos_user_security_logout') }}">*/
/*                 {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*             </a>*/
/*         {% else %}*/
/*             <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({},'FOSUserBundle') }}</a>*/
/*         {% endif %}*/
/*     </div>*/
/*     {% for key, message in app.session.getFlashes() %}*/
/*         <div class="{{ key }}">*/
/*             {{ message|trans({}, 'FOSUserBundle') }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     <div>*/
/*         {% block fos_user_content %}*/
/*         {% endblock fos_user_content %}*/
/*     </div>*/
/* {% endblock %}*/
