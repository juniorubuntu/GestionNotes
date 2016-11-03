<?php

/* ShoppingShopBundle:Produit:inserer.html.twig */
class __TwigTemplate_2ecbd491b738db11c217a7a362c5052c9021e1c00af204b12c8aeddb9c5bcadc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ShopproShopBundle:Index:index.html.twig", "ShoppingShopBundle:Produit:inserer.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ShopproShopBundle:Index:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "ShopproShopBundle:Produit:insertion";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"col-md-12 well\">
        <div class=\"col-md-5 col-md-offset-4\"  style=\"\">
            <center><h3>Welcome to the Insertion:Produit page</h3></center>
            <table class=\"table table-hover\">
                <tr>
                <script>
                    var ok = 0;
                    var dac = 0;
                </script>
                <td>
                    <select class=\"cat form-control\" 
                            onchange=\"
                                    if (value !== '0') {
                                        ok = 1;
                                        if ((ok + dac) >= 2) {
                                            \$('.ok').removeClass('disabled');
                                        } else {
                                            \$('.ok').addClass('disabled');
                                        }
                                    } else {
                                        ok = 0;
                                        \$('.ok').addClass('disabled');
                                    }
                            \">
                        <option value=\"0\" selected=\"selected\">Choisir une catégorie</option>
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCategorie"]) ? $context["listCategorie"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 32
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["categorie"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    </select>
                    <p><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_ajouter");
        echo "\" target=\"blank\" class=\"btn btn-link\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Nouvelle Catégorie</a></p>
                </td>
                <td>
                    <select class=\"stock form-control\" 
                            onchange=\"
                                    if (value !== '0') {
                                        dac = 1;
                                        if ((dac + ok) >= 2) {
                                            \$('.ok').removeClass('disabled');
                                        } else {
                                            \$('.ok').addClass('disabled');
                                        }
                                    } else {
                                        dac = 0;
                                        \$('.ok').addClass('disabled');
                                    }
                            \">
                        <option value=\"0\" selected=\"selected\">Choisir un Stock</option>
                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liststock"]) ? $context["liststock"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 54
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["stock"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["stock"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </select>
                    <p><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_ajouter");
        echo "\" target=\"blank\" class=\"btn btn-link\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Nouveau Stock</a></p>
                </td>
                <td>
                    <button class=\"btn btn-success glyphicon glyphicon-circle-arrow-down ok disabled\" onclick=\"chargerProduit()\"></button>
                </td>
                </tr>
            </table>
            <hr style=\"color: #ccccff; border: 1px solid\">
        </div>
        <div class=\"produitTrouve col-md-12\">
        </div>
        <script>

            function chargerProduit() {
                if (!\$('.ok').hasClass('disabled')) {
                    var lien = '";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_add_inserer", array("idCat" => "CATEGORIE", "idStock" => "STOCK")), "html", null, true);
        echo "';
                    var cat = document.getElementsByClassName('cat')[0].value;
                    var stock = document.getElementsByClassName('stock')[0].value;
                    lien = lien.replace('CATEGORIE', cat);
                    lien = lien.replace('STOCK', stock);
                    \$('.produitTrouve').load(lien);
                }
            }
        </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ShoppingShopBundle:Produit:inserer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 72,  122 => 57,  119 => 56,  108 => 54,  104 => 53,  83 => 35,  80 => 34,  69 => 32,  65 => 31,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"ShopproShopBundle:Index:index.html.twig\" %}

{% block title %}ShopproShopBundle:Produit:insertion{% endblock %}

{% block body %}
    <div class=\"col-md-12 well\">
        <div class=\"col-md-5 col-md-offset-4\"  style=\"\">
            <center><h3>Welcome to the Insertion:Produit page</h3></center>
            <table class=\"table table-hover\">
                <tr>
                <script>
                    var ok = 0;
                    var dac = 0;
                </script>
                <td>
                    <select class=\"cat form-control\" 
                            onchange=\"
                                    if (value !== '0') {
                                        ok = 1;
                                        if ((ok + dac) >= 2) {
                                            \$('.ok').removeClass('disabled');
                                        } else {
                                            \$('.ok').addClass('disabled');
                                        }
                                    } else {
                                        ok = 0;
                                        \$('.ok').addClass('disabled');
                                    }
                            \">
                        <option value=\"0\" selected=\"selected\">Choisir une catégorie</option>
                        {% for categorie in listCategorie %}
                            <option value=\"{{categorie.id}}\">{{ categorie }}</option>
                        {% endfor %}
                    </select>
                    <p><a href=\"{{path('categorie_ajouter')}}\" target=\"blank\" class=\"btn btn-link\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Nouvelle Catégorie</a></p>
                </td>
                <td>
                    <select class=\"stock form-control\" 
                            onchange=\"
                                    if (value !== '0') {
                                        dac = 1;
                                        if ((dac + ok) >= 2) {
                                            \$('.ok').removeClass('disabled');
                                        } else {
                                            \$('.ok').addClass('disabled');
                                        }
                                    } else {
                                        dac = 0;
                                        \$('.ok').addClass('disabled');
                                    }
                            \">
                        <option value=\"0\" selected=\"selected\">Choisir un Stock</option>
                        {% for stock in liststock %}
                            <option value=\"{{stock.id}}\">{{ stock }}</option>
                        {% endfor %}
                    </select>
                    <p><a href=\"{{path('stock_ajouter')}}\" target=\"blank\" class=\"btn btn-link\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Nouveau Stock</a></p>
                </td>
                <td>
                    <button class=\"btn btn-success glyphicon glyphicon-circle-arrow-down ok disabled\" onclick=\"chargerProduit()\"></button>
                </td>
                </tr>
            </table>
            <hr style=\"color: #ccccff; border: 1px solid\">
        </div>
        <div class=\"produitTrouve col-md-12\">
        </div>
        <script>

            function chargerProduit() {
                if (!\$('.ok').hasClass('disabled')) {
                    var lien = '{{path('produit_add_inserer', {'idCat': 'CATEGORIE', 'idStock': 'STOCK'})}}';
                    var cat = document.getElementsByClassName('cat')[0].value;
                    var stock = document.getElementsByClassName('stock')[0].value;
                    lien = lien.replace('CATEGORIE', cat);
                    lien = lien.replace('STOCK', stock);
                    \$('.produitTrouve').load(lien);
                }
            }
        </script>
    </div>
{% endblock %}

";
    }
}
