<?php

/* ShoppingShopBundle:Produit:detail.html.twig */
class __TwigTemplate_5ac1cc18f4150b33e412ab3f9c39684a50b930055527581e45345305260b28d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ShoppingShopBundle:Default:index.html.twig", "ShoppingShopBundle:Produit:detail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'aside' => array($this, 'block_aside'),
            'chat' => array($this, 'block_chat'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Detail produit";
    }

    // line 4
    public function block_aside($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"col-md-3 col-sm-3 panel-primary\" style=\"padding-left: 2%; padding-top: 1%\">
        <div class=\"panel-heading\"><i class=\"glyphicon glyphicon-eye-open\"><b>Aperçue</b></i></div>
        <div class=\"product-image-large\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/product6.jpg"), "html", null, true);
        echo "\" height=\"350\" width=\"300\" alt=\"Item Name\">
        </div>
        <div class=\"colors\">
            <span class=\"color-white\"></span>
            <span class=\"color-black\"></span>
            <span class=\"color-blue\"></span>
            <span class=\"color-orange\"></span>
            <span class=\"color-green\"></span>
        </div>
    </div>
    <div class=\"col-sm-6 product-details\">
        <h4 class=\"\">Nos articles</h4>
        <div class=\"price\">
            <span class=\"price-was\">45000 Frcfa</span> 40000 Fcfa
        </div>
        <h5>Quick Overview</h5>
        <p>
            Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat massa ornare vitae. Ut fermentum justo vel venenatis eleifend. Fusce id magna eros.
        </p>
        <table class=\"shop-item-selections\">
            <!-- Color Selector -->
            <tr>
                <td><b>Color:</b></td>
                <td>
                    <div class=\"dropdown choose-item-color\">
                        <a class=\"btn btn-sm btn-grey\" data-toggle=\"dropdown\" href=\"#\"><span class=\"color-orange\"></span> Orange <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li role=\"menuitem\"><a href=\"#\"><span class=\"color-white\"></span> White</a></li>
                            <li role=\"menuitem\"><a href=\"#\"><span class=\"color-black\"></span> Black</a></li>
                            <li role=\"menuitem\"><a href=\"#\"><span class=\"color-blue\"></span> Blue</a></li>
                            <li role=\"menuitem\"><a href=\"#\"><span class=\"color-orange\"></span> Orange</a></li>
                            <li role=\"menuitem\"><a href=\"#\"><span class=\"color-green\"></span> Green</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <!-- Size Selector -->
            <tr>
                <td><b>Size:</b></td>
                <td>
                    <div class=\"dropdown\">
                        <a class=\"btn btn-sm btn-grey\" data-toggle=\"dropdown\" href=\"#\">XXL <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li role=\"menuitem\"><a href=\"#\">XS</a></li>
                            <li role=\"menuitem\"><a href=\"#\">S</a></li>
                            <li role=\"menuitem\"><a href=\"#\">M</a></li>
                            <li role=\"menuitem\"><a href=\"#\">L</a></li>
                            <li role=\"menuitem\"><a href=\"#\">XXL</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <!-- Quantity -->
            <tr>
                <td><b>Quantity:</b></td>
                <td>
                    <input type=\"text\" class=\"form-control input-sm input-micro\" value=\"1\">
                </td>
            </tr>
            <!-- Add to Cart Button -->
            <tr>
                <td>&nbsp;</td>
                <td>
                    <a href=\"#\" class=\"btn btn\"><i class=\"icon-shopping-cart icon-white\"></i> Ajouter au pagnier</a>
                </td>
            </tr>
            <tr>
                <td><b>Votre note:</b></td>
                <td>
                    <a href=\"#\" class=\"\" style=\"color: yellowgreen; font-size: 20px;\">
                        <i class=\"glyphicon glyphicon-star\"></i>
                        <i class=\"glyphicon glyphicon-star\"></i>
                        <i class=\"glyphicon glyphicon-star-empty\"></i>
                        <i class=\"glyphicon glyphicon-star-empty\"></i>
                        <i class=\"glyphicon glyphicon-star-empty\"></i>
                    </a>
                </td>
            </tr>
        </table>
    </div>
";
    }

    // line 90
    public function block_chat($context, array $blocks = array())
    {
        // line 91
        echo "    <div class=\"col-md-3 col-sm-3\" style=\"padding: 1%;\">
        <div class=\"alert-success panel-heading\">
            <span class=\"glyphicon glyphicon-comment\"></span><b> Espace interactif | Contacter le vendeur</b>
        </div>
        <div class=\"col-md-12\">
            <div class=\"avatar col-md-3\">
                <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/product2.jpg"), "html", null, true);
        echo "\" style=\"border-radius: 50%\" height=\"120%\" width=\"120%\">
            </div>
            <div class=\"info col-md-9\">
                <b>Par: </b><i> Shopping Express</i><br>
                <i class=\"glyphicon glyphicon-phone-alt\"> <span style=\"font-family: monospace\">+00237695887564</span></i><br>
                <i><a href=\"#\"> shopping.express@webmail.com</a></i><br>
            </div>
        </div>
        <hr style=\"border: 1px solid rgba(124, 252, 0, 0.28);\">
        <div class=\"col-md-12 col-sm-12\">
            <div class=\"col-md-9 col-sm-9 alert-success\" style=\"border-radius: 33px 2px 29px 35px; border: 1px solid lightsteelblue; padding: 2%; font-size: 12px\">
                <p>Bonjour Bienvenue dans notre boutique. Que puis-je pour vous?</p>
            </div>
            <div class=\"col-md-3 col-sm-3\">
                <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/product2.jpg"), "html", null, true);
        echo "\" style=\"border-radius: 50%\" height=\"120%\" width=\"120%\">
            </div>
        </div>
        <div class=\"col-md-12 col-sm-12\" style=\"margin-top: 1%\">
            <div class=\"col-md-3 col-sm-3\">
                <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/product1.jpg"), "html", null, true);
        echo "\" style=\"border-radius: 50%\" height=\"120%\" width=\"120%\">
            </div>
            <textarea placeholder=\"Votre message\" class=\"col-md-9 col-sm-9\" style=\"border-radius: 20px; border: 1px solid lightsteelblue; font-size: 12px\">
                    
            </textarea>
        </div>
    </div>
";
    }

    // line 125
    public function block_corps($context, array $blocks = array())
    {
        // line 126
        echo "    <div class=\"col-sm-12\">
        <div class=\"tabbable\">
            <!-- Tabs -->
            <ul class=\"nav nav-tabs product-details-nav\">
                <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\">Description</a></li>
                <li><a href=\"#tab2\" data-toggle=\"tab\">Specification</a></li>
            </ul>
            <!-- Tab Content (Full Description) -->
            <div class=\"tab-content product-detail-info\">
                <div class=\"tab-pane active\" id=\"tab1\">
                    <h4>Product Description</h4>
                    <p>
                        Donec hendrerit massa metus, a ultrices elit iaculis eu. Pellentesque ullamcorper augue lacus. Phasellus et est quis diam iaculis fringilla id nec sapien. Sed tempor ornare felis, non vulputate dolor. Etiam ornare diam vitae ligula malesuada tempor. Vestibulum nec odio vel libero ullamcorper euismod et in sapien. Suspendisse potenti.
                    </p>
                    <h4>Product Highlights</h4>
                    <ul>
                        <li>Nullam dictum augue nec iaculis rhoncus. Aenean lobortis fringilla orci, vitae varius purus eleifend vitae.</li>
                        <li>Nunc ornare, dolor a ultrices ultricies, magna dolor convallis enim, sed volutpat quam sem sed tellus.</li>
                        <li>Aliquam malesuada cursus urna a rutrum. Ut ultricies facilisis suscipit.</li>
                        <li>Duis a magna iaculis, aliquam metus in, luctus eros.</li>
                        <li>Aenean nisi nibh, imperdiet sit amet eleifend et, gravida vitae sem.</li>
                        <li>Donec quis nisi congue, ultricies massa ut, bibendum velit.</li>
                    </ul>
                    <h4>Usage Information</h4>
                    <p>
                        Donec hendrerit massa metus, a ultrices elit iaculis eu. Pellentesque ullamcorper augue lacus. Phasellus et est quis diam iaculis fringilla id nec sapien. Sed tempor ornare felis, non vulputate dolor. Etiam ornare diam vitae ligula malesuada tempor. Vestibulum nec odio vel libero ullamcorper euismod et in sapien. Suspendisse potenti.
                    </p>
                </div>
                <!-- Tab Content (Specification) -->
                <div class=\"tab-pane\" id=\"tab2\">
                    <table>
                        <tr>
                            <td>Total sensor Pixels (megapixels)</td>
                            <td>Approx. 16.7</td>
                        </tr>
                        <tr>
                            <td>Effective Pixels (megapixels)</td>
                            <td>Approx. 16.1</td>
                        </tr>
                        <tr>
                            <td>Automatic White Balance</td>
                            <td>YES</td>
                        </tr>
                        <tr>
                            <td>White balance: preset selection</td>
                            <td>Daylight, Shade, Cloudy, Incandescent, Fluorescent, Flash</td>
                        </tr>
                        <tr>
                            <td>White balance: custom setting</td>
                            <td>YES</td>
                        </tr>
                        <tr>
                            <td>White balance: types of color temperature</td>
                            <td>YES (G7 to M7,15-step) (A7 to B7,15-step)</td>
                        </tr>
                        <tr>
                            <td>White balance bracketing</td>
                            <td>NO</td>
                        </tr>
                        <tr>
                            <td>ISO Sensitivity Setting</td>
                            <td>ISO100 - 25600 equivalent</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ShoppingShopBundle:Produit:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 126,  178 => 125,  166 => 116,  158 => 111,  141 => 97,  133 => 91,  130 => 90,  45 => 8,  40 => 5,  37 => 4,  31 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"ShoppingShopBundle:Default:index.html.twig\" %}

{% block title %}Detail produit{% endblock %}
{% block aside %}
    <div class=\"col-md-3 col-sm-3 panel-primary\" style=\"padding-left: 2%; padding-top: 1%\">
        <div class=\"panel-heading\"><i class=\"glyphicon glyphicon-eye-open\"><b>Aperçue</b></i></div>
        <div class=\"product-image-large\">
            <img src=\"{{asset('img/product6.jpg')}}\" height=\"350\" width=\"300\" alt=\"Item Name\">
        </div>
        <div class=\"colors\">
            <span class=\"color-white\"></span>
            <span class=\"color-black\"></span>
            <span class=\"color-blue\"></span>
            <span class=\"color-orange\"></span>
            <span class=\"color-green\"></span>
        </div>
    </div>
    <div class=\"col-sm-6 product-details\">
        <h4 class=\"\">Nos articles</h4>
        <div class=\"price\">
            <span class=\"price-was\">45000 Frcfa</span> 40000 Fcfa
        </div>
        <h5>Quick Overview</h5>
        <p>
            Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat massa ornare vitae. Ut fermentum justo vel venenatis eleifend. Fusce id magna eros.
        </p>
        <table class=\"shop-item-selections\">
            <!-- Color Selector -->
            <tr>
                <td><b>Color:</b></td>
                <td>
                    <div class=\"dropdown choose-item-color\">
                        <a class=\"btn btn-sm btn-grey\" data-toggle=\"dropdown\" href=\"#\"><span class=\"color-orange\"></span> Orange <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li role=\"menuitem\"><a href=\"#\"><span class=\"color-white\"></span> White</a></li>
                            <li role=\"menuitem\"><a href=\"#\"><span class=\"color-black\"></span> Black</a></li>
                            <li role=\"menuitem\"><a href=\"#\"><span class=\"color-blue\"></span> Blue</a></li>
                            <li role=\"menuitem\"><a href=\"#\"><span class=\"color-orange\"></span> Orange</a></li>
                            <li role=\"menuitem\"><a href=\"#\"><span class=\"color-green\"></span> Green</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <!-- Size Selector -->
            <tr>
                <td><b>Size:</b></td>
                <td>
                    <div class=\"dropdown\">
                        <a class=\"btn btn-sm btn-grey\" data-toggle=\"dropdown\" href=\"#\">XXL <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li role=\"menuitem\"><a href=\"#\">XS</a></li>
                            <li role=\"menuitem\"><a href=\"#\">S</a></li>
                            <li role=\"menuitem\"><a href=\"#\">M</a></li>
                            <li role=\"menuitem\"><a href=\"#\">L</a></li>
                            <li role=\"menuitem\"><a href=\"#\">XXL</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <!-- Quantity -->
            <tr>
                <td><b>Quantity:</b></td>
                <td>
                    <input type=\"text\" class=\"form-control input-sm input-micro\" value=\"1\">
                </td>
            </tr>
            <!-- Add to Cart Button -->
            <tr>
                <td>&nbsp;</td>
                <td>
                    <a href=\"#\" class=\"btn btn\"><i class=\"icon-shopping-cart icon-white\"></i> Ajouter au pagnier</a>
                </td>
            </tr>
            <tr>
                <td><b>Votre note:</b></td>
                <td>
                    <a href=\"#\" class=\"\" style=\"color: yellowgreen; font-size: 20px;\">
                        <i class=\"glyphicon glyphicon-star\"></i>
                        <i class=\"glyphicon glyphicon-star\"></i>
                        <i class=\"glyphicon glyphicon-star-empty\"></i>
                        <i class=\"glyphicon glyphicon-star-empty\"></i>
                        <i class=\"glyphicon glyphicon-star-empty\"></i>
                    </a>
                </td>
            </tr>
        </table>
    </div>
{% endblock %}

{% block chat %}
    <div class=\"col-md-3 col-sm-3\" style=\"padding: 1%;\">
        <div class=\"alert-success panel-heading\">
            <span class=\"glyphicon glyphicon-comment\"></span><b> Espace interactif | Contacter le vendeur</b>
        </div>
        <div class=\"col-md-12\">
            <div class=\"avatar col-md-3\">
                <img src=\"{{asset('img/product2.jpg')}}\" style=\"border-radius: 50%\" height=\"120%\" width=\"120%\">
            </div>
            <div class=\"info col-md-9\">
                <b>Par: </b><i> Shopping Express</i><br>
                <i class=\"glyphicon glyphicon-phone-alt\"> <span style=\"font-family: monospace\">+00237695887564</span></i><br>
                <i><a href=\"#\"> shopping.express@webmail.com</a></i><br>
            </div>
        </div>
        <hr style=\"border: 1px solid rgba(124, 252, 0, 0.28);\">
        <div class=\"col-md-12 col-sm-12\">
            <div class=\"col-md-9 col-sm-9 alert-success\" style=\"border-radius: 33px 2px 29px 35px; border: 1px solid lightsteelblue; padding: 2%; font-size: 12px\">
                <p>Bonjour Bienvenue dans notre boutique. Que puis-je pour vous?</p>
            </div>
            <div class=\"col-md-3 col-sm-3\">
                <img src=\"{{asset('img/product2.jpg')}}\" style=\"border-radius: 50%\" height=\"120%\" width=\"120%\">
            </div>
        </div>
        <div class=\"col-md-12 col-sm-12\" style=\"margin-top: 1%\">
            <div class=\"col-md-3 col-sm-3\">
                <img src=\"{{asset('img/product1.jpg')}}\" style=\"border-radius: 50%\" height=\"120%\" width=\"120%\">
            </div>
            <textarea placeholder=\"Votre message\" class=\"col-md-9 col-sm-9\" style=\"border-radius: 20px; border: 1px solid lightsteelblue; font-size: 12px\">
                    
            </textarea>
        </div>
    </div>
{% endblock %}

{% block corps %}
    <div class=\"col-sm-12\">
        <div class=\"tabbable\">
            <!-- Tabs -->
            <ul class=\"nav nav-tabs product-details-nav\">
                <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\">Description</a></li>
                <li><a href=\"#tab2\" data-toggle=\"tab\">Specification</a></li>
            </ul>
            <!-- Tab Content (Full Description) -->
            <div class=\"tab-content product-detail-info\">
                <div class=\"tab-pane active\" id=\"tab1\">
                    <h4>Product Description</h4>
                    <p>
                        Donec hendrerit massa metus, a ultrices elit iaculis eu. Pellentesque ullamcorper augue lacus. Phasellus et est quis diam iaculis fringilla id nec sapien. Sed tempor ornare felis, non vulputate dolor. Etiam ornare diam vitae ligula malesuada tempor. Vestibulum nec odio vel libero ullamcorper euismod et in sapien. Suspendisse potenti.
                    </p>
                    <h4>Product Highlights</h4>
                    <ul>
                        <li>Nullam dictum augue nec iaculis rhoncus. Aenean lobortis fringilla orci, vitae varius purus eleifend vitae.</li>
                        <li>Nunc ornare, dolor a ultrices ultricies, magna dolor convallis enim, sed volutpat quam sem sed tellus.</li>
                        <li>Aliquam malesuada cursus urna a rutrum. Ut ultricies facilisis suscipit.</li>
                        <li>Duis a magna iaculis, aliquam metus in, luctus eros.</li>
                        <li>Aenean nisi nibh, imperdiet sit amet eleifend et, gravida vitae sem.</li>
                        <li>Donec quis nisi congue, ultricies massa ut, bibendum velit.</li>
                    </ul>
                    <h4>Usage Information</h4>
                    <p>
                        Donec hendrerit massa metus, a ultrices elit iaculis eu. Pellentesque ullamcorper augue lacus. Phasellus et est quis diam iaculis fringilla id nec sapien. Sed tempor ornare felis, non vulputate dolor. Etiam ornare diam vitae ligula malesuada tempor. Vestibulum nec odio vel libero ullamcorper euismod et in sapien. Suspendisse potenti.
                    </p>
                </div>
                <!-- Tab Content (Specification) -->
                <div class=\"tab-pane\" id=\"tab2\">
                    <table>
                        <tr>
                            <td>Total sensor Pixels (megapixels)</td>
                            <td>Approx. 16.7</td>
                        </tr>
                        <tr>
                            <td>Effective Pixels (megapixels)</td>
                            <td>Approx. 16.1</td>
                        </tr>
                        <tr>
                            <td>Automatic White Balance</td>
                            <td>YES</td>
                        </tr>
                        <tr>
                            <td>White balance: preset selection</td>
                            <td>Daylight, Shade, Cloudy, Incandescent, Fluorescent, Flash</td>
                        </tr>
                        <tr>
                            <td>White balance: custom setting</td>
                            <td>YES</td>
                        </tr>
                        <tr>
                            <td>White balance: types of color temperature</td>
                            <td>YES (G7 to M7,15-step) (A7 to B7,15-step)</td>
                        </tr>
                        <tr>
                            <td>White balance bracketing</td>
                            <td>NO</td>
                        </tr>
                        <tr>
                            <td>ISO Sensitivity Setting</td>
                            <td>ISO100 - 25600 equivalent</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}


";
    }
}
