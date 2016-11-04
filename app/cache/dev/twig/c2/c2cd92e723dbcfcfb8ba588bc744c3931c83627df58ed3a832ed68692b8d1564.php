<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_1742fd71502862ba83aff66a7c7d6d3f3bf08ffb33369de4bd57ebf409a5155d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ShoppingShopBundle:Default:index.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'aside' => array($this, 'block_aside'),
            'corps' => array($this, 'block_corps'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ShoppingShopBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_aside($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"col-md-3\">

    </div>
";
    }

    // line 7
    public function block_corps($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"col-md-10 col-md-offset-1\">

        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
        <div class=\"col-md-12\">
            ";
        // line 19
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 21
        echo "        </div>
    </div>
";
    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 20
        echo "            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  88 => 19,  82 => 21,  80 => 19,  76 => 17,  70 => 16,  61 => 13,  56 => 12,  51 => 11,  47 => 10,  43 => 8,  40 => 7,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "ShoppingShopBundle:Default:index.html.twig" %}*/
/* {% block aside %}*/
/*     <div class="col-md-3">*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* {% block corps %}*/
/*     <div class="col-md-10 col-md-offset-1">*/
/* */
/*         {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                 <div class="{{ type }}">*/
/*                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/* */
/*         <div class="col-md-12">*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
