<?php

/* ShoppingShopBundle:Produit:modifier.html.twig */
class __TwigTemplate_c2a0bf1356f10f30e2f9e3bd70cf702d5928c46a9a3054362ded86a2c29615bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ShoppingShopBundle:Produit:modifier.html.twig", 1);
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
        echo "ShopproShopBundle:Produit:modifier";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the Produit:modifier page</h1>
";
    }

    public function getTemplateName()
    {
        return "ShoppingShopBundle:Produit:modifier.html.twig";
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

{% block title %}ShopproShopBundle:Produit:modifier{% endblock %}

{% block body %}
<h1>Welcome to the Produit:modifier page</h1>
{% endblock %}
";
    }
}
