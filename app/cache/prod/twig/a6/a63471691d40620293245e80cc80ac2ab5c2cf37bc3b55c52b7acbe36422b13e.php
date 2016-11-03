<?php

/* ShoppingShopBundle:Fournisseur:modifier.html.twig */
class __TwigTemplate_f91c708a4c3489be1ce139d669b1b6028c3ceeda357dba50978c3d4534211f9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ShoppingShopBundle:Fournisseur:modifier.html.twig", 1);
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
        echo "ShopproShopBundle:Fournisseur:modifier";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the Fournisseur:modifier page</h1>
";
    }

    public function getTemplateName()
    {
        return "ShoppingShopBundle:Fournisseur:modifier.html.twig";
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

{% block title %}ShopproShopBundle:Fournisseur:modifier{% endblock %}

{% block body %}
<h1>Welcome to the Fournisseur:modifier page</h1>
{% endblock %}
";
    }
}
