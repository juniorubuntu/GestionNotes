<?php

/* ShoppingShopBundle:Approvisionnement:supprimer.html.twig */
class __TwigTemplate_e1df0e0f1ac6734aa3996aa8344680f478b4170b90f185e5d2f52488552248c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ShoppingShopBundle:Approvisionnement:supprimer.html.twig", 1);
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
        echo "ShopproShopBundle:Approvisionnement:supprimer";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the Approvisionnement:supprimer page</h1>
";
    }

    public function getTemplateName()
    {
        return "ShoppingShopBundle:Approvisionnement:supprimer.html.twig";
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

{% block title %}ShopproShopBundle:Approvisionnement:supprimer{% endblock %}

{% block body %}
<h1>Welcome to the Approvisionnement:supprimer page</h1>
{% endblock %}
";
    }
}
