<?php

/* ShoppingShopBundle:Client:pagnier.html.twig */
class __TwigTemplate_b8264549a2c7d2cad473dd8ac32cbaef6cc063de1667898beb42a62b98b657ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ShoppingShopBundle:Default:index.html.twig", "ShoppingShopBundle:Client:pagnier.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Abonnement client";
    }

    // line 5
    public function block_page($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Votre pagnier</h2>
                </div>
            </div>
        </div>
    </div>

    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- Action Buttons -->
                    <div class=\"pull-right\">
                        <a href=\"#\" class=\"btn btn-grey\"><i class=\"glyphicon glyphicon-refresh\"></i> UPDATE</a>
                        <a href=\"#\" class=\"btn\"><i class=\"glyphicon glyphicon-shopping-cart icon-white\"></i> CHECK OUT</a>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- Shopping Cart Items -->
                    <table class=\"shopping-cart table-hover table-striped\">
                        <!-- Shopping Cart Item -->
                        <tr>
                            <!-- Shopping Cart Item Image -->
                            <td class=\"image\"><a href=\"page-product-details.html\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/product1.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a></td>
                            <!-- Shopping Cart Item Description & Features -->
                            <td class=\"\">
                                <div class=\"cart-item-title\"><a href=\"page-product-details.html\">LOREM IPSUM DOLOR</a></div>
                                <div class=\"feature color\">
                                    Color: <span class=\"color-white\"></span>
                                </div>
                                <div class=\"feature\">Size: <b>XXL</b></div>
                            </td>
                            <!-- Shopping Cart Item Quantity -->
                            <td class=\"quantity\">
                                <input class=\"form-control input-sm input-micro\" type=\"text\" value=\"1\">
                            </td>
                            <!-- Shopping Cart Item Price -->
                            <td class=\"price\">\$999.99</td>
                            <!-- Shopping Cart Item Actions -->
                            <td class=\"actions\">
                                <a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                                <a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-trash\"></i></a>
                            </td>
                        </tr>
                        <!-- End Shopping Cart Item -->
                        <tr>
                            <td class=\"image\"><a href=\"page-product-details.html\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/product2.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a></td>
                            <td>
                                <div class=\"cart-item-title\"><a href=\"page-product-details.html\">LOREM IPSUM DOLOR</a></div>
                                <div class=\"feature color\">
                                    Color: <span class=\"color-orange\"></span>
                                </div>
                                <div class=\"feature\">Size: <b>XXL</b></div>
                            </td>
                            <td class=\"quantity\">
                                <input class=\"form-control input-sm input-micro\" type=\"text\" value=\"1\">
                            </td>
                            <td class=\"price\">\$999.99</td>
                            <td class=\"actions\">
                                <a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                                <a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-trash\"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"image\"><a href=\"page-product-details.html\"><img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/product3.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a></td>
                            <td>
                                <div class=\"cart-item-title\"><a href=\"page-product-details.html\">LOREM IPSUM DOLOR</a></div>
                                <div class=\"feature color\">
                                </div>
                                <div class=\"feature\">Size: <b>XXL</b></div>
                            </td>
                            <td class=\"quantity\">
                                <input class=\"form-control input-sm input-micro\" type=\"text\" value=\"1\">
                            </td>
                            <td class=\"price\">\$999.99</td>
                            <td class=\"actions\">
                                <a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                                <a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-trash\"></i></a>
                            </td>
                        </tr>
                    </table>
                    <!-- End Shopping Cart Items -->
                </div>
            </div>
            <div class=\"row\">
                <!-- Promotion Code -->
                <div class=\"col-md-4  col-md-offset-0 col-sm-6 col-sm-offset-6\">
                    <div class=\"cart-promo-code\">
                        <h6><i class=\"glyphicon glyphicon-gift\"></i> Have a promotion code?</h6>
                        <div class=\"input-group\">
                            <input class=\"form-control input-sm\" id=\"appendedInputButton\" type=\"text\" value=\"\">
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-sm btn-grey\" type=\"button\">Apply</button>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Shipment Options -->
                <div class=\"col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6\">
                    <div class=\"cart-shippment-options\">
                        <h6><i class=\"glyphicon glyphicon-plane\"></i> Shippment options</h6>
                        <div class=\"input-append\">
                            <select class=\"form-control input-sm\">
                                <option value=\"1\">Standard - FREE</option>
                                <option value=\"2\">Next day delivery - \$10.00</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Shopping Cart Totals -->
                <div class=\"col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6\">
                    <table class=\"cart-totals\">
                        <tr>
                            <td><b>Shipping</b></td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td><b>Discount</b></td>
                            <td>- \$18.00</td>
                        </tr>
                        <tr class=\"cart-grand-total\">
                            <td><b>Total</b></td>
                            <td><b>\$163.55</b></td>
                        </tr>
                    </table>
                    <!-- Action Buttons -->
                    <div class=\"pull-right\">
                        <a href=\"#\" class=\"btn btn-grey\"><i class=\"glyphicon glyphicon-refresh\"></i> UPDATE</a>
                        <a href=\"#\" class=\"btn\"><i class=\"glyphicon glyphicon-shopping-cart icon-white\"></i> CHECK OUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ShoppingShopBundle:Client:pagnier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 75,  94 => 57,  68 => 34,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"ShoppingShopBundle:Default:index.html.twig\" %}

{% block title %}Abonnement client{% endblock %}

{% block page %}
    <div class=\"\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2>Votre pagnier</h2>
                </div>
            </div>
        </div>
    </div>

    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- Action Buttons -->
                    <div class=\"pull-right\">
                        <a href=\"#\" class=\"btn btn-grey\"><i class=\"glyphicon glyphicon-refresh\"></i> UPDATE</a>
                        <a href=\"#\" class=\"btn\"><i class=\"glyphicon glyphicon-shopping-cart icon-white\"></i> CHECK OUT</a>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- Shopping Cart Items -->
                    <table class=\"shopping-cart table-hover table-striped\">
                        <!-- Shopping Cart Item -->
                        <tr>
                            <!-- Shopping Cart Item Image -->
                            <td class=\"image\"><a href=\"page-product-details.html\"><img src=\"{{asset('img/product1.jpg')}}\" alt=\"Item Name\"></a></td>
                            <!-- Shopping Cart Item Description & Features -->
                            <td class=\"\">
                                <div class=\"cart-item-title\"><a href=\"page-product-details.html\">LOREM IPSUM DOLOR</a></div>
                                <div class=\"feature color\">
                                    Color: <span class=\"color-white\"></span>
                                </div>
                                <div class=\"feature\">Size: <b>XXL</b></div>
                            </td>
                            <!-- Shopping Cart Item Quantity -->
                            <td class=\"quantity\">
                                <input class=\"form-control input-sm input-micro\" type=\"text\" value=\"1\">
                            </td>
                            <!-- Shopping Cart Item Price -->
                            <td class=\"price\">\$999.99</td>
                            <!-- Shopping Cart Item Actions -->
                            <td class=\"actions\">
                                <a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                                <a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-trash\"></i></a>
                            </td>
                        </tr>
                        <!-- End Shopping Cart Item -->
                        <tr>
                            <td class=\"image\"><a href=\"page-product-details.html\"><img src=\"{{asset('img/product2.jpg')}}\" alt=\"Item Name\"></a></td>
                            <td>
                                <div class=\"cart-item-title\"><a href=\"page-product-details.html\">LOREM IPSUM DOLOR</a></div>
                                <div class=\"feature color\">
                                    Color: <span class=\"color-orange\"></span>
                                </div>
                                <div class=\"feature\">Size: <b>XXL</b></div>
                            </td>
                            <td class=\"quantity\">
                                <input class=\"form-control input-sm input-micro\" type=\"text\" value=\"1\">
                            </td>
                            <td class=\"price\">\$999.99</td>
                            <td class=\"actions\">
                                <a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                                <a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-trash\"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class=\"image\"><a href=\"page-product-details.html\"><img src=\"{{asset('img/product3.jpg')}}\" alt=\"Item Name\"></a></td>
                            <td>
                                <div class=\"cart-item-title\"><a href=\"page-product-details.html\">LOREM IPSUM DOLOR</a></div>
                                <div class=\"feature color\">
                                </div>
                                <div class=\"feature\">Size: <b>XXL</b></div>
                            </td>
                            <td class=\"quantity\">
                                <input class=\"form-control input-sm input-micro\" type=\"text\" value=\"1\">
                            </td>
                            <td class=\"price\">\$999.99</td>
                            <td class=\"actions\">
                                <a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-pencil\"></i></a>
                                <a href=\"#\" class=\"btn btn-xs btn-grey\"><i class=\"glyphicon glyphicon-trash\"></i></a>
                            </td>
                        </tr>
                    </table>
                    <!-- End Shopping Cart Items -->
                </div>
            </div>
            <div class=\"row\">
                <!-- Promotion Code -->
                <div class=\"col-md-4  col-md-offset-0 col-sm-6 col-sm-offset-6\">
                    <div class=\"cart-promo-code\">
                        <h6><i class=\"glyphicon glyphicon-gift\"></i> Have a promotion code?</h6>
                        <div class=\"input-group\">
                            <input class=\"form-control input-sm\" id=\"appendedInputButton\" type=\"text\" value=\"\">
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-sm btn-grey\" type=\"button\">Apply</button>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Shipment Options -->
                <div class=\"col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6\">
                    <div class=\"cart-shippment-options\">
                        <h6><i class=\"glyphicon glyphicon-plane\"></i> Shippment options</h6>
                        <div class=\"input-append\">
                            <select class=\"form-control input-sm\">
                                <option value=\"1\">Standard - FREE</option>
                                <option value=\"2\">Next day delivery - \$10.00</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Shopping Cart Totals -->
                <div class=\"col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-6\">
                    <table class=\"cart-totals\">
                        <tr>
                            <td><b>Shipping</b></td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td><b>Discount</b></td>
                            <td>- \$18.00</td>
                        </tr>
                        <tr class=\"cart-grand-total\">
                            <td><b>Total</b></td>
                            <td><b>\$163.55</b></td>
                        </tr>
                    </table>
                    <!-- Action Buttons -->
                    <div class=\"pull-right\">
                        <a href=\"#\" class=\"btn btn-grey\"><i class=\"glyphicon glyphicon-refresh\"></i> UPDATE</a>
                        <a href=\"#\" class=\"btn\"><i class=\"glyphicon glyphicon-shopping-cart icon-white\"></i> CHECK OUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
";
    }
}
