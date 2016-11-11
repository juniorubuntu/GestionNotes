<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_b405415d52319a8da06ef8c2dbf9374ca52eccf2b5f56252554d53ca0716b40b extends Twig_Template
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
        echo "<div class=\"col-md-12\">
    <h2>Créer votre compte</h2>
    <form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"col-md-5\">

        ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST", "attr" => array("class" => "register")));
        echo "

        <table class=\"table table-hover\">
            <tr>
                <td>
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" class=\"btn active\">
                        <span class=\"glyphicon glyphicon-log-in\"></span> J'ai déjà un compte
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                </td>
                <td>
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ex: junior")));
        echo "
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                </td>
                <td>
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ex: juniorubuntu@gmail.com")));
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "

                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo "
                </td>
                <td>
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ex: junior")));
        echo "
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo "
                </td>
                <td>
                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
                </td>
            </tr>
            <tr>
                <td colspan=\"2\">
            <center>                    
                <input type=\"submit\" class=\"btn btn-orange\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </center>
            </td>
            </tr>
        </table>
        ";
        // line 60
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
        return array (  130 => 60,  122 => 55,  113 => 49,  109 => 48,  103 => 45,  95 => 40,  91 => 39,  85 => 36,  76 => 30,  72 => 29,  66 => 26,  58 => 21,  54 => 20,  48 => 17,  38 => 10,  30 => 5,  23 => 3,  19 => 1,);
    }
}
/* <div class="col-md-12">*/
/*     <h2>Créer votre compte</h2>*/
/*     <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="col-md-5">*/
/* */
/*         {{form_start(form, {'method': 'POST', 'attr':{'class': 'register'}})}}*/
/* */
/*         <table class="table table-hover">*/
/*             <tr>*/
/*                 <td>*/
/*                     <a href="{{path('fos_user_security_login')}}" class="btn active">*/
/*                         <span class="glyphicon glyphicon-log-in"></span> J'ai déjà un compte*/
/*                     </a>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     {{ form_label(form.username) }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ form_widget(form.username, {'attr':{'class': 'form-control', 'placeholder': 'Ex: junior'}}) }}*/
/*                     {{ form_errors(form.username) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     {{ form_label(form.email) }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ form_widget(form.email, {'attr':{'class': 'form-control', 'placeholder': 'Ex: juniorubuntu@gmail.com'}}) }}*/
/*                     {{ form_errors(form.email) }}*/
/* */
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     {{ form_label(form.plainPassword.first) }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ form_widget(form.plainPassword.first, {'attr':{'class': 'form-control', 'placeholder': 'Ex: junior'}}) }}*/
/*                     {{ form_errors(form.plainPassword.first) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     {{ form_label(form.plainPassword.second) }}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ form_widget(form.plainPassword.second, {'attr':{'class': 'form-control'}}) }}*/
/*                     {{ form_errors(form.plainPassword.second) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td colspan="2">*/
/*             <center>                    */
/*                 <input type="submit" class="btn btn-orange" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*             </center>*/
/*             </td>*/
/*             </tr>*/
/*         </table>*/
/*         {{ form_end(form) }}*/
/*     </form>*/
/* </div>*/
