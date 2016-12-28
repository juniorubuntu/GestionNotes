<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_d875745ecf771289203f4cd9370b30e5410351ba0433686c394b96f081cedae4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"col-md-9 col-md-offset-2\">
        <h2><marquee BEHAVIOR=\"alternate\">Authentifiez-vous avant de continuer!</marquee></h2>
                ";
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "            <div style=\"color: red\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
        ";
        }
        // line 9
        echo "
        <table class=\"table\">
            <tr>
                <td>
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">
                        <button class=\"btn btn-primary col-md-8 col-sm-8 col-xs-8 active\"><span class=\"glyphicon glyphicon-log-in\"></span> Je n'ai pas encore de compte!</button>
                    </a>
                </td>
            </tr>
        </table>

        <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" class=\"form-inline\" method=\"post\">
            <table class=\"table table-hover\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                <tr>
                    <td>
                        <label for=\"username\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </td>
                    <td>
                        <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for=\"password\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </td>
                    <td>
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />

                        <label for=\"remember_me\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </td>
                    <td>
                        <b><i>Votre mode passe sera enregistré.</i></b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type=\"submit\" id=\"_submit\" class=\"btn btn-orange\" name=\"_submit\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </td>
                    <td>
                        <input type=\"reset\" class=\"btn btn-blue\" value=\"Annuler\"/>
                    </td>
                </tr>
            </table>
        </form>

    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 51,  97 => 43,  84 => 33,  76 => 28,  70 => 25,  64 => 22,  59 => 20,  49 => 13,  43 => 9,  37 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <div class="col-md-9 col-md-offset-2">*/
/*         <h2><marquee BEHAVIOR="alternate">Authentifiez-vous avant de continuer!</marquee></h2>*/
/*                 {% if error %}*/
/*             <div style="color: red">{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/*         {% endif %}*/
/* */
/*         <table class="table">*/
/*             <tr>*/
/*                 <td>*/
/*                     <a href="{{path('fos_user_registration_register')}}">*/
/*                         <button class="btn btn-primary col-md-8 col-sm-8 col-xs-8 active"><span class="glyphicon glyphicon-log-in"></span> Je n'ai pas encore de compte!</button>*/
/*                     </a>*/
/*                 </td>*/
/*             </tr>*/
/*         </table>*/
/* */
/*         <form action="{{ path("fos_user_security_check") }}" class="form-inline" method="post">*/
/*             <table class="table table-hover">*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                 <tr>*/
/*                     <td>*/
/*                         <label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*                     </td>*/
/*                     <td>*/
/*                         <input type="text" id="username" class="form-control" name="_username" value="{{ last_username }}" required="required" />*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         <label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/*                     </td>*/
/*                     <td>*/
/*                         <input type="password" class="form-control" id="password" name="_password" required="required" />*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/* */
/*                         <label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>*/
/*                     </td>*/
/*                     <td>*/
/*                         <b><i>Votre mode passe sera enregistré.</i></b>*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td>*/
/*                         <input type="submit" id="_submit" class="btn btn-orange" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*                     </td>*/
/*                     <td>*/
/*                         <input type="reset" class="btn btn-blue" value="Annuler"/>*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/*         </form>*/
/* */
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
