<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_52aba0c6df4236845eccf6d2cbc47362e8f0ca239a3a21807ea090ff75af49c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2><marquee BEHAVIOR=\"alternate\">Créer gratuitement votre compte pour profiter de divers avantages</marquee></h2>
<div class=\"col-md-7\">
    <div class=\"\">
        <div class=\"\">
            <div class=\"\">
                <div class=\"\">
                    <ol style=\"\">
                        <li>Discussions en ligne avec des boutiques et responsables des super marchés</li>
                        <li>Réductions sur vos achats</li>
                        <li>Etre informé des nouveautés</li>
                        <li>Participer aux forums et ventes au en chers en ligne</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-7 social-login\">
        <p>Vous pouvez utiliser facebook ou twitter pour vous enregistrer !</p>
        <div class=\"social-login-buttons\">
            <a href=\"#\" class=\"btn-facebook-login\">Avec Facebook</a>
            <a href=\"#\" class=\"btn-twitter-login\">Avec Twitter</a>
        </div>
    </div>
</div>
<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">
    <button class=\"btn btn-primary col-md-2 active\"><span class=\"glyphicon glyphicon-log-in\"></span> J'ai déjà un compte</button>
</a>
<form action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"col-md-5\">

    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST", "attr" => array("class" => "register")));
        echo "

    <table class=\"table table-hover\">
        <tr>
            <td>
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
            </td>
            <td>
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
            </td>
        </tr>
        <tr>
            <td>
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
            </td>
            <td>
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "

            </td>
        </tr>
        <tr>
            <td>
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo "
            </td>
            <td>
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
            </td>
        </tr>
        <tr>
            <td>
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo "
            </td>
            <td>
                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "
                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
            </td>
        </tr>
        <tr>
            <td colspan=\"2\">
        <center>                    
            <input type=\"submit\" class=\"btn btn-orange\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </center>
        </td>
        </tr>
    </table>
    ";
        // line 78
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</form>
</div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 78,  140 => 73,  131 => 67,  127 => 66,  121 => 63,  113 => 58,  109 => 57,  103 => 54,  94 => 48,  90 => 47,  84 => 44,  76 => 39,  72 => 38,  66 => 35,  58 => 30,  51 => 28,  45 => 25,  19 => 1,);
    }
}
/* <h2><marquee BEHAVIOR="alternate">Créer gratuitement votre compte pour profiter de divers avantages</marquee></h2>*/
/* <div class="col-md-7">*/
/*     <div class="">*/
/*         <div class="">*/
/*             <div class="">*/
/*                 <div class="">*/
/*                     <ol style="">*/
/*                         <li>Discussions en ligne avec des boutiques et responsables des super marchés</li>*/
/*                         <li>Réductions sur vos achats</li>*/
/*                         <li>Etre informé des nouveautés</li>*/
/*                         <li>Participer aux forums et ventes au en chers en ligne</li>*/
/*                     </ol>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-md-7 social-login">*/
/*         <p>Vous pouvez utiliser facebook ou twitter pour vous enregistrer !</p>*/
/*         <div class="social-login-buttons">*/
/*             <a href="#" class="btn-facebook-login">Avec Facebook</a>*/
/*             <a href="#" class="btn-twitter-login">Avec Twitter</a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <a href="{{path('fos_user_security_login')}}">*/
/*     <button class="btn btn-primary col-md-2 active"><span class="glyphicon glyphicon-log-in"></span> J'ai déjà un compte</button>*/
/* </a>*/
/* <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="col-md-5">*/
/* */
/*     {{form_start(form, {'method': 'POST', 'attr':{'class': 'register'}})}}*/
/* */
/*     <table class="table table-hover">*/
/*         <tr>*/
/*             <td>*/
/*                 {{ form_label(form.username) }}*/
/*             </td>*/
/*             <td>*/
/*                 {{ form_widget(form.username) }}*/
/*                 {{ form_errors(form.username) }}*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 {{ form_label(form.email) }}*/
/*             </td>*/
/*             <td>*/
/*                 {{ form_widget(form.email) }}*/
/*                 {{ form_errors(form.email) }}*/
/* */
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 {{ form_label(form.plainPassword.first) }}*/
/*             </td>*/
/*             <td>*/
/*                 {{ form_widget(form.plainPassword.first) }}*/
/*                 {{ form_errors(form.plainPassword.first) }}*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 {{ form_label(form.plainPassword.second) }}*/
/*             </td>*/
/*             <td>*/
/*                 {{ form_widget(form.plainPassword.second) }}*/
/*                 {{ form_errors(form.plainPassword.second) }}*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td colspan="2">*/
/*         <center>                    */
/*             <input type="submit" class="btn btn-orange" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*         </center>*/
/*         </td>*/
/*         </tr>*/
/*     </table>*/
/*     {{ form_end(form) }}*/
/* </form>*/
/* </div>*/
