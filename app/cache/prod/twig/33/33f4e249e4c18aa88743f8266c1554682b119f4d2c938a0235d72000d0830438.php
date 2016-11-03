<?php

/* ShoppingShopBundle:Personnel:supprimer.html.twig */
class __TwigTemplate_aa4d7e4abe3cab505d8533b4146980a72e4b6451bd279bb0d30bcf3d9e1eeaf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ShoppingShopBundle:Personnel:supprimer.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "ShopproShopBundle:Personnel:supprimer";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the Personnel:supprimer page</h1>
";
    }

    public function getTemplateName()
    {
        return "ShoppingShopBundle:Personnel:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %}ShopproShopBundle:Personnel:supprimer{% endblock %}

{% block body %}
<h1>Welcome to the Personnel:supprimer page</h1>
{% endblock %}
";
    }
}
