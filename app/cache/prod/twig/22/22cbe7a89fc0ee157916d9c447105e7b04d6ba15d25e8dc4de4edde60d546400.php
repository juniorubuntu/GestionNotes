<?php

/* ShoppingShopBundle:Admin:index.html.twig */
class __TwigTemplate_91d3aea9844b03141a7cb400a73efe89613c2fb684c9671463148cd56431b64b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ShoppingShopBundle:Default:index.html.twig", "ShoppingShopBundle:Admin:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'aside' => array($this, 'block_aside'),
            'corps' => array($this, 'block_corps'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    Administration | Shalom Shopping
";
    }

    // line 5
    public function block_aside($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"col-md-3\" style=\"margin-top: 1%\">
        <nav class=\"panel\">
            <ul class=\"nav navbar-link\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-cog\"></span> Gérer <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_ajouter");
        echo "\">Produits</a></li>
                        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_ajouter");
        echo "\">Catégories de produits</a></li>
                        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_ajouter");
        echo "\">Images</a></li>
                        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_ajouter");
        echo "\">Fournisseurs</a></li>
                        <li><a href=\"\">Promotions et Réductions</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-star\"></span> Suivre <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Ventes</a></li>
                        <li><a href=\"#\">Statistiques sur les achats</a></li>
                        <li><a href=\"#\">Clients en lignes</a></li>
                        <li><a href=\"#\">Problèmes des clients</a></li>
                        <li><a href=\"#\">Demandes d'abonnement</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-book\"></span> Autres <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Créer des publicités</a></li>
                        <li><a href=\"#\">Créer des annonces</a></li>
                        <li><a href=\"#\">PArticiper au forum des abonéns</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
";
    }

    // line 41
    public function block_corps($context, array $blocks = array())
    {
        // line 42
        echo "    <div class=\"col-md-9\">
        <h2><marquee BEHAVIOR=\"alternate\">Page d'administration du site</marquee></h2>
        <p>Pas de description pour l'instant!</p>
        <h3>Utiliser le menu de gauche pour vous orienter!</h3>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ShoppingShopBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 42,  91 => 41,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"ShoppingShopBundle:Default:index.html.twig\" %}
{% block title %}
    Administration | Shalom Shopping
{% endblock %}
{% block aside %}
    <div class=\"col-md-3\" style=\"margin-top: 1%\">
        <nav class=\"panel\">
            <ul class=\"nav navbar-link\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-cog\"></span> Gérer <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{path('produit_ajouter')}}\">Produits</a></li>
                        <li><a href=\"{{path('categorie_ajouter')}}\">Catégories de produits</a></li>
                        <li><a href=\"{{path('image_ajouter')}}\">Images</a></li>
                        <li><a href=\"{{path('fournisseur_ajouter')}}\">Fournisseurs</a></li>
                        <li><a href=\"\">Promotions et Réductions</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-star\"></span> Suivre <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Ventes</a></li>
                        <li><a href=\"#\">Statistiques sur les achats</a></li>
                        <li><a href=\"#\">Clients en lignes</a></li>
                        <li><a href=\"#\">Problèmes des clients</a></li>
                        <li><a href=\"#\">Demandes d'abonnement</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-book\"></span> Autres <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Créer des publicités</a></li>
                        <li><a href=\"#\">Créer des annonces</a></li>
                        <li><a href=\"#\">PArticiper au forum des abonéns</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
{% endblock %}
{% block corps %}
    <div class=\"col-md-9\">
        <h2><marquee BEHAVIOR=\"alternate\">Page d'administration du site</marquee></h2>
        <p>Pas de description pour l'instant!</p>
        <h3>Utiliser le menu de gauche pour vous orienter!</h3>
    </div>
{% endblock %}


";
    }
}
