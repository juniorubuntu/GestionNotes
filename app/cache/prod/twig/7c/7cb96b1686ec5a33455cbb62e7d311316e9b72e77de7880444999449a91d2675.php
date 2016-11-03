<?php

/* ShoppingShopBundle:Default:index.html.twig */
class __TwigTemplate_50564cdcef52d49348afa5a0fb019f7435f926f4f836df28fd43122ae4a46438 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ShoppingShopBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'page' => array($this, 'block_page'),
            'aside' => array($this, 'block_aside'),
            'chat' => array($this, 'block_chat'),
            'corps' => array($this, 'block_corps'),
            'slider' => array($this, 'block_slider'),
            'client' => array($this, 'block_client'),
            'pied' => array($this, 'block_pied'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    Shalom Shopping
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayBlock('menu', $context, $blocks);
        // line 66
        echo "    ";
        $this->displayBlock('page', $context, $blocks);
        // line 336
        echo "    ";
        $this->displayBlock('client', $context, $blocks);
        // line 357
        echo "    <!-- Footer -->
    ";
        // line 358
        $this->displayBlock('pied', $context, $blocks);
        // line 408
        echo "    ";
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "        <div class=\"mainmenu-wrapper col-md-12\" style=\"\">
            <div class=\"\">
                <div class=\"menuextras\">
                    <div class=\"extras\">
                        <ul>
                            <li style=\"font-size: 30px; color: yellowgreen\" class=\"shopping-cart-items\"><i class=\"glyphicon glyphicon-shopping-cart icon-white\" style=\"color: yellowgreen\"></i> <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagnier_client");
        echo "\"><b style=\"color: palegreen\">3 articles</b></a></li>
                            <li>
                                <div class=\"dropdown choose-country\">
                                    <a class=\"#\" data-toggle=\"dropdown\" href=\"#\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/flags/gb.png"), "html", null, true);
        echo "\" alt=\"Great Britain\"> UK</a>
                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                        <li role=\"menuitem\"><a href=\"#\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/flags/us.png"), "html", null, true);
        echo "\" alt=\"United States\"> US</a></li>
                                        <li role=\"menuitem\"><a href=\"#\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/flags/de.png"), "html", null, true);
        echo "\" alt=\"Germany\"> DE</a></li>
                                        <li role=\"menuitem\"><a href=\"#\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/flags/es.png"), "html", null, true);
        echo "\" alt=\"Spain\"> ES</a></li>
                                        <li role=\"menuitem\"><a href=\"#\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/flags/es.png"), "html", null, true);
        echo "\" alt=\"Spain\"> ES</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href=\"page-login.html\">Login</a></li>
                            <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_admin");
        echo "\">Administration</a></li>
                        </ul>
                    </div>
                </div>
                <nav id=\"mainmenu\" class=\"mainmenu\">
                    <ul>
                        <li class=\"logo-wrapper\"><a href=\"\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/travels.png"), "html", null, true);
        echo "\" style=\"height: 8pc; width: 19pc\" alt=\"Multipurpose Twitter Bootstrap Template\"></a></li>
                        <li class=\"active\">
                            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shopping_shop_homepage");
        echo "\">Home</a>
                        </li>
                        <li>
                            <a href=\"features.html\">Shopping</a>
                        </li>
                        <li class=\"\">
                            <a href=\"#\">Travels</a>
                        </li>
                        <li>
                            <a href=\"credits.html\">Business</a>
                        </li>
                        <div class=\"col-md-12\">
                            <div class=\"ribbon-wrapper alert-success col-md-12\" id=\"test\" style=\"
                                 border-radius: 9px;
                                 box-shadow: 2px 2px 2px #333;
                                 width: 100px; position: fixed; top: 10%; right: 15%\">
                                <div class=\"price-ribbon ribbon-green\" style=\"box-shadow: -2px 2px 2px #333;\"> <b>Offres</b></div>
                                10000 Fcfa/Mois
                            </div>
                        </div>
                        <script>
                            function FaireClignoterImage() {
                                \$(\"#test\").fadeOut(900).delay(300).fadeIn(800);
                            }
                            \$(document).ready(function () {
                                setInterval('FaireClignoterImage()', 2200);
                            });
                        </script>
                    </ul>
                </nav>
            </div>
        </div>
    ";
    }

    // line 66
    public function block_page($context, array $blocks = array())
    {
        // line 67
        echo "        <div class=\"row\">
            ";
        // line 68
        $this->displayBlock('aside', $context, $blocks);
        // line 123
        echo "            ";
        $this->displayBlock('chat', $context, $blocks);
        // line 125
        echo "            ";
        $this->displayBlock('corps', $context, $blocks);
        // line 334
        echo "        </div>
    ";
    }

    // line 68
    public function block_aside($context, array $blocks = array())
    {
        // line 69
        echo "                <div class=\"col-md-3\" style=\"padding-top: 2%\">
                    <div class=\"panel-default\">
                        <div class=\"table panel-heading\">
                            Filtrer Par Catégorie 
                        </div>
                        <form class=\"form-row panel-body\">
                            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listcategorie"]) ? $context["listcategorie"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 76
            echo "                                <div class=\"form-row\" style=\"margin-left: 10%\">
                                    <input type=\"checkbox\" id=\"cate\" name=\"cate\" />
                                    <label for=\"cate\" class=\"control-label\">";
            // line 78
            echo twig_escape_filter($this->env, $context["categorie"], "html", null, true);
            echo "</label>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                        </form>
                    </div>
                    <div class=\"panel-default\">
                        <div class=\"table panel panel-heading\">
                            Autres filtres
                        </div>
                        <form class=\"form-row panel-body\" style=\"margin-left: 10%\">
                            <div class=\"form-row\">
                                <input type=\"checkbox\" id=\"cate\" name=\"cate\" />
                                <label for=\"cate\" class=\"control-label\">Marques</label>
                            </div>
                            <div class=\"form-row\">
                                <input type=\"checkbox\" id=\"cate\" name=\"cate\" />
                                <label for=\"cate\" class=\"control-label\">Prix</label>
                            </div>
                            <div class=\"form-row\">
                                <input type=\"checkbox\" id=\"cate\" name=\"cate\" />
                                <label for=\"cate\" class=\"control-label\">Nouveautés</label>
                            </div>
                        </form>
                    </div>
                    <div class=\"panel-default\">
                        <div class=\"table panel panel-heading\">
                            S'inscrire pour obtenir des réductions
                        </div>
                        <form class=\"form-row panel-body\">
                            <div class=\"form-row\">
                                <input type=\"checkbox\" id=\"cate\" name=\"cate\" />
                                <label for=\"cate\" class=\"control-label\">Marques</label>
                            </div>
                            <div class=\"form-row\">
                                <input type=\"checkbox\" id=\"cate\" name=\"cate\" />
                                <label for=\"cate\" class=\"control-label\">Prix</label>
                            </div>
                            <div class=\"form-row\">
                                <input type=\"checkbox\" id=\"cate\" name=\"cate\" />
                                <label for=\"cate\" class=\"control-label\">Nouveautés</label>
                            </div>
                        </form>
                    </div>
                </div>
            ";
    }

    // line 123
    public function block_chat($context, array $blocks = array())
    {
        // line 124
        echo "            ";
    }

    // line 125
    public function block_corps($context, array $blocks = array())
    {
        // line 126
        echo "                ";
        $this->displayBlock('slider', $context, $blocks);
        // line 191
        echo "                <div class=\"col-md-9\">
                    <div class=\"col-md-3 col-sm-6\">
                        <!-- Product -->
                        <div class=\"shop-item\">
                            <!-- Product Image -->
                            <div class=\"shop-item-image\" style=\"height: 10%\">
                                <a href=\"";
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/product1.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
                            </div>
                            <!-- Product Title -->
                            <div class=\"title\">
                                <h3 style=\"text-align: left\"><a href=\"";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\"><b>Nos articles</b></a></h3>
                            </div>
                            <div class=\"price\">
                                <span style=\"color: green; font-size: 14px\"> 4500Frcfa </span><a href=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\" class=\"btn btn-orange\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> J'achète</a>
                            </div>
                        </div>
                        <!-- End Product -->
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"shop-item\">
                            <div class=\"shop-item-image\">
                                <a href=\"";
        // line 212
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/product2.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
                            </div>
                            <div class=\"title\">
                                <h3 style=\"text-align: left\"><a href=\"";
        // line 215
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\"><b>Nos articles</b></a></h3>
                            </div>
                            <div class=\"price\">
                                <span style=\"color: green; font-size: 14px\"> 4500Frcfa </span><a href=\"";
        // line 218
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\" class=\"btn btn-orange\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> J'achète</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"shop-item\">
                            <div class=\"shop-item-image\">
                                <a href=\"";
        // line 225
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/product3.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
                            </div>
                            <div class=\"title\">
                                <h3 style=\"text-align: left\"><a href=\"";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\"><b>Nos articles</b></a></h3>
                            </div>
                            <div class=\"price\">
                                <span style=\"color: green; font-size: 14px\"> 4500Frcfa </span><a href=\"";
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\" class=\"btn btn-orange\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> J'achète</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"shop-item\">
                            <div class=\"shop-item-image\">
                                <a href=\"";
        // line 238
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/product4.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
                            </div>
                            <div class=\"title\">
                                <h3 style=\"text-align: left\"><a href=\"";
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\"><b>Nos articles</b></a></h3>
                            </div>
                            <div class=\"price\">
                                <span style=\"color: green; font-size: 14px\"> 4500Frcfa </span><a href=\"";
        // line 244
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\" class=\"btn btn-orange\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> J'achète</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"shop-item\">
                            <div class=\"shop-item-image\">
                                <a href=\"";
        // line 252
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/product5.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
                            </div>
                            <div class=\"title\">
                                <h3 style=\"text-align: left\"><a href=\"";
        // line 255
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\"><b>Nos articles</b></a></h3>
                            </div>
                            <div class=\"price\">
                                <span style=\"color: green; font-size: 14px\"> 4500Frcfa </span><a href=\"";
        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\" class=\"btn btn-orange\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> J'achète</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"shop-item\">
                            <div class=\"shop-item-image\">
                                <a href=\"";
        // line 265
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/product6.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
                            </div>
                            <div class=\"title\">
                                <h3 style=\"text-align: left\"><a href=\"";
        // line 268
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\"><b>Nos articles</b></a></h3>
                            </div>
                            <div class=\"price\">
                                <span style=\"color: green; font-size: 14px\"> 4500Frcfa </span><a href=\"";
        // line 271
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\" class=\"btn btn-orange\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> J'achète</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"shop-item\">
                            <div class=\"shop-item-image\">
                                <a href=\"";
        // line 278
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/product7.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
                            </div>
                            <div class=\"title\">
                                <h3 style=\"text-align: left\"><a href=\"";
        // line 281
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\"><b>Nos articles</b></a></h3>
                            </div>
                            <div class=\"price\">
                                <span style=\"color: green; font-size: 14px\"> 4500Frcfa </span><a href=\"";
        // line 284
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\" class=\"btn btn-orange\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> J'achète</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"shop-item\">
                            <div class=\"shop-item-image\">
                                <a href=\"";
        // line 291
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/product8.jpg"), "html", null, true);
        echo "\" alt=\"Item Name\"></a>
                            </div>
                            <div class=\"title\">
                                <h3 style=\"text-align: left\"><a href=\"";
        // line 294
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\"><b>Nos articles</b></a></h3>
                            </div>
                            <div class=\"price\">
                                <span style=\"color: green; font-size: 14px\"> 4500Frcfa </span><a href=\"";
        // line 297
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
        echo "\" class=\"btn btn-orange\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> J'achète</a>
                            </div>
                        </div>
                    </div>
                    ";
        // line 301
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeImage"]) ? $context["listeImage"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 302
            echo "                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"shop-item\">
                                <div class=\"shop-item-image\">
                                    <a href=\"";
            // line 305
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "nom", array()), "html", null, true);
            echo "\" alt=\"Item Name\"></a>
                                </div>
                                <div class=\"title\">
                                    <h3 style=\"text-align: left\"><a href=\"";
            // line 308
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "produit", array()), "html", null, true);
            echo "</b></a></h3>
                                </div>
                                <div class=\"price\">
                                    <span style=\"color: green; font-size: 14px\"> ";
            // line 311
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "produit", array()), "prixUnit", array()), "html", null, true);
            echo "Frcfa </span><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => 1));
            echo "\" class=\"btn btn-orange\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> J'achète</a>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        echo "                </div>
                <div class=\"pagination-wrapper col-md-9 pull-right\">
                    <ul class=\"pagination pagination-lg\">
                        <li class=\"disabled\"><a href=\"#\">Previous</a></li>
                        <li class=\"active\"><a href=\"#\">1</a></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">6</a></li>
                        <li><a href=\"#\">7</a></li>
                        <li><a href=\"#\">8</a></li>
                        <li><a href=\"#\">9</a></li>
                        <li><a href=\"#\">10</a></li>
                        <li><a href=\"#\">Next</a></li>
                    </ul>
                </div>
            ";
    }

    // line 126
    public function block_slider($context, array $blocks = array())
    {
        // line 127
        echo "                    <div class=\"col-md-9\">
                        <div class=\"homepage-slider\">
                            <div id=\"sequence\" style=\"height: 310px; margin-top: 3%\">
                                <ul class=\"sequence-canvas\">
                                    <!-- Slide 1 -->
                                    <li class=\"bg4\">
                                        <!-- Slide Title -->
                                        <h2 class=\"title\">Acheter aussi des solution web</h2>
                                        <!-- Slide Text -->
                                        <h3 class=\"subtitle\">Adaptables au PC, Tablettes et mobiles</h3>
                                        <!-- Slide Image -->
                                        <img class=\"slide-img\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/homepage-slider/slide1.png"), "html", null, true);
        echo "\" alt=\"Slide 1\" />
                                    </li>
                                    <!-- End Slide 1 -->
                                    <!-- Slide 2 -->
                                    <li class=\"bg3\">
                                        <!-- Slide Title -->
                                        <h2 class=\"title\">Trouver aussi des assistances en Design</h2>
                                        <!-- Slide Text -->
                                        <h3 class=\"subtitle\">Consulter nos experts pour le choix des couleurs</h3>
                                        <!-- Slide Image -->
                                        <img class=\"slide-img\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/homepage-slider/slide2.png"), "html", null, true);
        echo "\" alt=\"Slide 2\" />
                                    </li>
                                    <!-- End Slide 2 -->
                                    <!-- Slide 3 -->
                                    <li class=\"bg1\">
                                        <!-- Slide Title -->
                                        <h2 class=\"title\">Quelques exemples</h2>
                                        <!-- Slide Text -->
                                        <h3 class=\"subtitle\">Découvrer de vous même!</h3>
                                        <!-- Slide Image -->
                                        <img class=\"slide-img\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/homepage-slider/slide3.png"), "html", null, true);
        echo "\" alt=\"Slide 3\" />
                                    </li>
                                    <li class=\"bg1\">
                                        <!-- Slide Title -->
                                        <h2 class=\"title\">Nouveautés</h2>
                                        <!-- Slide Text -->
                                        <h3 class=\"subtitle\">Habillement pour hommes et femmes</h3>
                                        <!-- Slide Image -->
                                        <img class=\"slide-img\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/product1.jpg"), "html", null, true);
        echo "\" alt=\"Slide 3\" />
                                    </li>
                                    <li class=\"bg1\">
                                        <!-- Slide Title -->
                                        <h2 class=\"title\">Nouvelles marques</h2>
                                        <!-- Slide Text -->
                                        <h3 class=\"subtitle\">Des tablettes à des prix défiants toutes concurances</h3>
                                        <!-- Slide Image -->
                                        <img class=\"slide-img\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/product4.jpg"), "html", null, true);
        echo "\" alt=\"Slide 3\" />
                                    </li>
                                    <!-- End Slide 3 -->
                                </ul>
                                <div class=\"sequence-pagination-wrapper\">
                                    <ul class=\"sequence-pagination\">
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>4</li>
                                        <li>5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
    }

    // line 336
    public function block_client($context, array $blocks = array())
    {
        // line 337
        echo "        <div class=\"section\">
            <div class=\"container\">
                <h2>Nos Clients</h2>
                <div class=\"clients-logo-wrapper text-center row\" style=\"background: olivedrab\">
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/logos/canon.png"), "html", null, true);
        echo "\" alt=\"Client Name\" /></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/logos/cisco.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/logos/dell.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/logos/ea.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/logos/ebay.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/logos/facebook.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/logos/google.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/logos/hp.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/logos/microsoft.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/logos/mysql.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/logos/sony.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/logos/yahoo.png"), "html", null, true);
        echo "\" alt=\"Client Name\"></a></div>
                </div>
            </div>
        </div>
    ";
    }

    // line 358
    public function block_pied($context, array $blocks = array())
    {
        // line 359
        echo "        <div class=\"footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-footer col-md-3 col-xs-6\">
                        <h3>Nos innovations</h3>
                        <div class=\"portfolio-item\">
                            <div class=\"portfolio-image\">
                                <a href=\"page-portfolio-item.html\"><img src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("img/portfolio7.jpg"), "html", null, true);
        echo "\" alt=\"Project Name\"></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-footer col-md-3 col-xs-6\">
                        <h3>Naviguer sur</h3>
                        <ul class=\"no-list-style footer-navigate-section\">
                            <li><a href=\"page-blog-posts.html\">Blog</a></li>
                            <li><a href=\"page-portfolio-3-columns-2.html\">Notre page</a></li>
                            <li><a href=\"page-products-3-columns.html\">eShop</a></li>
                            <li><a href=\"page-services-3-columns.html\">Services</a></li>
                            <li><a href=\"page-pricing.html\">Nos facturations</a></li>
                            <li><a href=\"page-faq.html\">FAQ</a></li>
                        </ul>
                    </div>

                    <div class=\"col-footer col-md-4 col-xs-6\">
                        <h3>Contacts</h3>
                        <p class=\"contact-us-details\">
                            <b>Address:</b> Boulevard Melen, 3ème Rue Emia<br/>
                            <b>Phone:</b> +00237 690294940<br/>
                            <b>Fax:</b> +44 123 654321<br/>
                            <b>Email:</b> <a href=\"mailto:getintoutch@yourcompanydomain.com\">info.mails@bloomfield-consulting.net</a>
                        </p>
                    </div>
                    <div class=\"col-footer col-md-2 col-xs-6\">
                        <h3>Restez Connecté</h3>
                        <ul class=\"footer-stay-connected no-list-style\">
                            <li><a href=\"#\" class=\"facebook\"></a></li>
                            <li><a href=\"#\" class=\"twitter\"></a></li>
                            <li><a href=\"#\" class=\"googleplus\"></a></li>
                        </ul>
                    </div>
                    </divt
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"footer-copyright\">&copy; 2016 Bloomfield-Consulting. All rights reserved.</div>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "ShoppingShopBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  681 => 366,  672 => 359,  669 => 358,  660 => 352,  656 => 351,  652 => 350,  648 => 349,  644 => 348,  640 => 347,  636 => 346,  632 => 345,  628 => 344,  624 => 343,  620 => 342,  616 => 341,  610 => 337,  607 => 336,  586 => 174,  575 => 166,  564 => 158,  551 => 148,  538 => 138,  525 => 127,  522 => 126,  501 => 316,  488 => 311,  480 => 308,  472 => 305,  467 => 302,  463 => 301,  456 => 297,  450 => 294,  442 => 291,  432 => 284,  426 => 281,  418 => 278,  408 => 271,  402 => 268,  394 => 265,  384 => 258,  378 => 255,  370 => 252,  359 => 244,  353 => 241,  345 => 238,  335 => 231,  329 => 228,  321 => 225,  311 => 218,  305 => 215,  297 => 212,  286 => 204,  280 => 201,  271 => 197,  263 => 191,  260 => 126,  257 => 125,  253 => 124,  250 => 123,  205 => 81,  196 => 78,  192 => 76,  188 => 75,  180 => 69,  177 => 68,  172 => 334,  169 => 125,  166 => 123,  164 => 68,  161 => 67,  158 => 66,  121 => 33,  116 => 31,  107 => 25,  99 => 20,  95 => 19,  91 => 18,  87 => 17,  82 => 15,  76 => 12,  69 => 7,  66 => 6,  62 => 408,  60 => 358,  57 => 357,  54 => 336,  51 => 66,  48 => 6,  45 => 5,  40 => 3,  37 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}
{% block title %}
    Shalom Shopping
{% endblock %}
{% block body %}
    {% block menu %}
        <div class=\"mainmenu-wrapper col-md-12\" style=\"\">
            <div class=\"\">
                <div class=\"menuextras\">
                    <div class=\"extras\">
                        <ul>
                            <li style=\"font-size: 30px; color: yellowgreen\" class=\"shopping-cart-items\"><i class=\"glyphicon glyphicon-shopping-cart icon-white\" style=\"color: yellowgreen\"></i> <a href=\"{{path('pagnier_client')}}\"><b style=\"color: palegreen\">3 articles</b></a></li>
                            <li>
                                <div class=\"dropdown choose-country\">
                                    <a class=\"#\" data-toggle=\"dropdown\" href=\"#\"><img src=\"{{asset('img/flags/gb.png')}}\" alt=\"Great Britain\"> UK</a>
                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                        <li role=\"menuitem\"><a href=\"#\"><img src=\"{{asset('img/flags/us.png')}}\" alt=\"United States\"> US</a></li>
                                        <li role=\"menuitem\"><a href=\"#\"><img src=\"{{asset('img/flags/de.png')}}\" alt=\"Germany\"> DE</a></li>
                                        <li role=\"menuitem\"><a href=\"#\"><img src=\"{{asset('img/flags/es.png')}}\" alt=\"Spain\"> ES</a></li>
                                        <li role=\"menuitem\"><a href=\"#\"><img src=\"{{asset('img/flags/es.png')}}\" alt=\"Spain\"> ES</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href=\"page-login.html\">Login</a></li>
                            <li><a href=\"{{path('page_admin')}}\">Administration</a></li>
                        </ul>
                    </div>
                </div>
                <nav id=\"mainmenu\" class=\"mainmenu\">
                    <ul>
                        <li class=\"logo-wrapper\"><a href=\"\"><img src=\"{{asset('img/travels.png')}}\" style=\"height: 8pc; width: 19pc\" alt=\"Multipurpose Twitter Bootstrap Template\"></a></li>
                        <li class=\"active\">
                            <a href=\"{{path('shopping_shop_homepage')}}\">Home</a>
                        </li>
                        <li>
                            <a href=\"features.html\">Shopping</a>
                        </li>
                        <li class=\"\">
                            <a href=\"#\">Travels</a>
                        </li>
                        <li>
                            <a href=\"credits.html\">Business</a>
                        </li>
                        <div class=\"col-md-12\">
                            <div class=\"ribbon-wrapper alert-success col-md-12\" id=\"test\" style=\"
                                 border-radius: 9px;
                                 box-shadow: 2px 2px 2px #333;
                                 width: 100px; position: fixed; top: 10%; right: 15%\">
                                <div class=\"price-ribbon ribbon-green\" style=\"box-shadow: -2px 2px 2px #333;\"> <b>Offres</b></div>
                                10000 Fcfa/Mois
                            </div>
                        </div>
                        <script>
                            function FaireClignoterImage() {
                                \$(\"#test\").fadeOut(900).delay(300).fadeIn(800);
                            }
                            \$(document).ready(function () {
                                setInterval('FaireClignoterImage()', 2200);
                            });
                        </script>
                    </ul>
                </nav>
            </div>
        </div>
    {% endblock %}
    {% block page %}
        <div class=\"row\">
            {% block aside %}
                <div class=\"col-md-3\" style=\"padding-top: 2%\">
                    <div class=\"panel-default\">
                        <div class=\"table panel-heading\">
                            Filtrer Par Catégorie 
                        </div>
                        <form class=\"form-row panel-body\">
                            {% for categorie in listcategorie %}
                                <div class=\"form-row\" style=\"margin-left: 10%\">
                                    <input type=\"checkbox\" id=\"cate\" name=\"cate\" />
                                    <label for=\"cate\" class=\"control-label\">{{categorie}}</label>
                                </div>
                            {% endfor %}
                        </form>
                    </div>
                    <div class=\"panel-default\">
                        <div class=\"table panel panel-heading\">
                            Autres filtres
                        </div>
                        <form class=\"form-row panel-body\" style=\"margin-left: 10%\">
                            <div class=\"form-row\">
                                <input type=\"checkbox\" id=\"cate\" name=\"cate\" />
                                <label for=\"cate\" class=\"control-label\">Marques</label>
                            </div>
                            <div class=\"form-row\">
                                <input type=\"checkbox\" id=\"cate\" name=\"cate\" />
                                <label for=\"cate\" class=\"control-label\">Prix</label>
                            </div>
                            <div class=\"form-row\">
                                <input type=\"checkbox\" id=\"cate\" name=\"cate\" />
                                <label for=\"cate\" class=\"control-label\">Nouveautés</label>
                            </div>
                        </form>
                    </div>
                    <div class=\"panel-default\">
                        <div class=\"table panel panel-heading\">
                            S'inscrire pour obtenir des réductions
                        </div>
                        <form class=\"form-row panel-body\">
                            <div class=\"form-row\">
                                <input type=\"checkbox\" id=\"cate\" name=\"cate\" />
                                <label for=\"cate\" class=\"control-label\">Marques</label>
                            </div>
                            <div class=\"form-row\">
                                <input type=\"checkbox\" id=\"cate\" name=\"cate\" />
                                <label for=\"cate\" class=\"control-label\">Prix</label>
                            </div>
                            <div class=\"form-row\">
                                <input type=\"checkbox\" id=\"cate\" name=\"cate\" />
                                <label for=\"cate\" class=\"control-label\">Nouveautés</label>
                            </div>
                        </form>
                    </div>
                </div>
            {% endblock %}
            {% block chat %}
            {% endblock %}
            {% block corps %}
                {% block slider %}
                    <div class=\"col-md-9\">
                        <div class=\"homepage-slider\">
                            <div id=\"sequence\" style=\"height: 310px; margin-top: 3%\">
                                <ul class=\"sequence-canvas\">
                                    <!-- Slide 1 -->
                                    <li class=\"bg4\">
                                        <!-- Slide Title -->
                                        <h2 class=\"title\">Acheter aussi des solution web</h2>
                                        <!-- Slide Text -->
                                        <h3 class=\"subtitle\">Adaptables au PC, Tablettes et mobiles</h3>
                                        <!-- Slide Image -->
                                        <img class=\"slide-img\" src=\"{{asset('img/homepage-slider/slide1.png')}}\" alt=\"Slide 1\" />
                                    </li>
                                    <!-- End Slide 1 -->
                                    <!-- Slide 2 -->
                                    <li class=\"bg3\">
                                        <!-- Slide Title -->
                                        <h2 class=\"title\">Trouver aussi des assistances en Design</h2>
                                        <!-- Slide Text -->
                                        <h3 class=\"subtitle\">Consulter nos experts pour le choix des couleurs</h3>
                                        <!-- Slide Image -->
                                        <img class=\"slide-img\" src=\"{{asset('img/homepage-slider/slide2.png')}}\" alt=\"Slide 2\" />
                                    </li>
                                    <!-- End Slide 2 -->
                                    <!-- Slide 3 -->
                                    <li class=\"bg1\">
                                        <!-- Slide Title -->
                                        <h2 class=\"title\">Quelques exemples</h2>
                                        <!-- Slide Text -->
                                        <h3 class=\"subtitle\">Découvrer de vous même!</h3>
                                        <!-- Slide Image -->
                                        <img class=\"slide-img\" src=\"{{asset('img/homepage-slider/slide3.png')}}\" alt=\"Slide 3\" />
                                    </li>
                                    <li class=\"bg1\">
                                        <!-- Slide Title -->
                                        <h2 class=\"title\">Nouveautés</h2>
                                        <!-- Slide Text -->
                                        <h3 class=\"subtitle\">Habillement pour hommes et femmes</h3>
                                        <!-- Slide Image -->
                                        <img class=\"slide-img\" src=\"{{asset('img/product1.jpg')}}\" alt=\"Slide 3\" />
                                    </li>
                                    <li class=\"bg1\">
                                        <!-- Slide Title -->
                                        <h2 class=\"title\">Nouvelles marques</h2>
                                        <!-- Slide Text -->
                                        <h3 class=\"subtitle\">Des tablettes à des prix défiants toutes concurances</h3>
                                        <!-- Slide Image -->
                                        <img class=\"slide-img\" src=\"{{asset('img/product4.jpg')}}\" alt=\"Slide 3\" />
                                    </li>
                                    <!-- End Slide 3 -->
                                </ul>
                                <div class=\"sequence-pagination-wrapper\">
                                    <ul class=\"sequence-pagination\">
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>4</li>
                                        <li>5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endblock %}
                <div class=\"col-md-9\">
                    <div class=\"col-md-3 col-sm-6\">
                        <!-- Product -->
                        <div class=\"shop-item\">
                            <!-- Product Image -->
                            <div class=\"shop-item-image\" style=\"height: 10%\">
                                <a href=\"{{path('article_detail', {id: 1})}}\"><img src=\"{{asset('img/product1.jpg')}}\" alt=\"Item Name\"></a>
                            </div>
                            <!-- Product Title -->
                            <div class=\"title\">
                                <h3 style=\"text-align: left\"><a href=\"{{path('article_detail', {id: 1})}}\"><b>Nos articles</b></a></h3>
                            </div>
                            <div class=\"price\">
                                <span style=\"color: green; font-size: 14px\"> 4500Frcfa </span><a href=\"{{path('article_detail', {id: 1})}}\" class=\"btn btn-orange\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> J'achète</a>
                            </div>
                        </div>
                        <!-- End Product -->
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"shop-item\">
                            <div class=\"shop-item-image\">
                                <a href=\"{{path('article_detail', {id: 1})}}\"><img src=\"{{asset('img/product2.jpg')}}\" alt=\"Item Name\"></a>
                            </div>
                            <div class=\"title\">
                                <h3 style=\"text-align: left\"><a href=\"{{path('article_detail', {id: 1})}}\"><b>Nos articles</b></a></h3>
                            </div>
                            <div class=\"price\">
                                <span style=\"color: green; font-size: 14px\"> 4500Frcfa </span><a href=\"{{path('article_detail', {id: 1})}}\" class=\"btn btn-orange\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> J'achète</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"shop-item\">
                            <div class=\"shop-item-image\">
                                <a href=\"{{path('article_detail', {id: 1})}}\"><img src=\"{{asset('img/product3.jpg')}}\" alt=\"Item Name\"></a>
                            </div>
                            <div class=\"title\">
                                <h3 style=\"text-align: left\"><a href=\"{{path('article_detail', {id: 1})}}\"><b>Nos articles</b></a></h3>
                            </div>
                            <div class=\"price\">
                                <span style=\"color: green; font-size: 14px\"> 4500Frcfa </span><a href=\"{{path('article_detail', {id: 1})}}\" class=\"btn btn-orange\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> J'achète</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"shop-item\">
                            <div class=\"shop-item-image\">
                                <a href=\"{{path('article_detail', {id: 1})}}\"><img src=\"{{asset('img/product4.jpg')}}\" alt=\"Item Name\"></a>
                            </div>
                            <div class=\"title\">
                                <h3 style=\"text-align: left\"><a href=\"{{path('article_detail', {id: 1})}}\"><b>Nos articles</b></a></h3>
                            </div>
                            <div class=\"price\">
                                <span style=\"color: green; font-size: 14px\"> 4500Frcfa </span><a href=\"{{path('article_detail', {id: 1})}}\" class=\"btn btn-orange\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> J'achète</a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"shop-item\">
                            <div class=\"shop-item-image\">
                                <a href=\"{{path('article_detail', {id: 1})}}\"><img src=\"{{asset('img/product5.jpg')}}\" alt=\"Item Name\"></a>
                            </div>
                            <div class=\"title\">
                                <h3 style=\"text-align: left\"><a href=\"{{path('article_detail', {id: 1})}}\"><b>Nos articles</b></a></h3>
                            </div>
                            <div class=\"price\">
                                <span style=\"color: green; font-size: 14px\"> 4500Frcfa </span><a href=\"{{path('article_detail', {id: 1})}}\" class=\"btn btn-orange\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> J'achète</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"shop-item\">
                            <div class=\"shop-item-image\">
                                <a href=\"{{path('article_detail', {id: 1})}}\"><img src=\"{{asset('img/product6.jpg')}}\" alt=\"Item Name\"></a>
                            </div>
                            <div class=\"title\">
                                <h3 style=\"text-align: left\"><a href=\"{{path('article_detail', {id: 1})}}\"><b>Nos articles</b></a></h3>
                            </div>
                            <div class=\"price\">
                                <span style=\"color: green; font-size: 14px\"> 4500Frcfa </span><a href=\"{{path('article_detail', {id: 1})}}\" class=\"btn btn-orange\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> J'achète</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"shop-item\">
                            <div class=\"shop-item-image\">
                                <a href=\"{{path('article_detail', {id: 1})}}\"><img src=\"{{asset('img/product7.jpg')}}\" alt=\"Item Name\"></a>
                            </div>
                            <div class=\"title\">
                                <h3 style=\"text-align: left\"><a href=\"{{path('article_detail', {id: 1})}}\"><b>Nos articles</b></a></h3>
                            </div>
                            <div class=\"price\">
                                <span style=\"color: green; font-size: 14px\"> 4500Frcfa </span><a href=\"{{path('article_detail', {id: 1})}}\" class=\"btn btn-orange\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> J'achète</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6\">
                        <div class=\"shop-item\">
                            <div class=\"shop-item-image\">
                                <a href=\"{{path('article_detail', {id: 1})}}\"><img src=\"{{asset('img/product8.jpg')}}\" alt=\"Item Name\"></a>
                            </div>
                            <div class=\"title\">
                                <h3 style=\"text-align: left\"><a href=\"{{path('article_detail', {id: 1})}}\"><b>Nos articles</b></a></h3>
                            </div>
                            <div class=\"price\">
                                <span style=\"color: green; font-size: 14px\"> 4500Frcfa </span><a href=\"{{path('article_detail', {id: 1})}}\" class=\"btn btn-orange\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> J'achète</a>
                            </div>
                        </div>
                    </div>
                    {% for image in listeImage %}
                        <div class=\"col-md-3 col-sm-6\">
                            <div class=\"shop-item\">
                                <div class=\"shop-item-image\">
                                    <a href=\"{{path('article_detail', {id: 1})}}\"><img src=\"{{image.nom}}\" alt=\"Item Name\"></a>
                                </div>
                                <div class=\"title\">
                                    <h3 style=\"text-align: left\"><a href=\"{{path('article_detail', {id: image.id})}}\"><b>{{image.produit}}</b></a></h3>
                                </div>
                                <div class=\"price\">
                                    <span style=\"color: green; font-size: 14px\"> {{image.produit.prixUnit}}Frcfa </span><a href=\"{{path('article_detail', {id: 1})}}\" class=\"btn btn-orange\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> J'achète</a>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
                <div class=\"pagination-wrapper col-md-9 pull-right\">
                    <ul class=\"pagination pagination-lg\">
                        <li class=\"disabled\"><a href=\"#\">Previous</a></li>
                        <li class=\"active\"><a href=\"#\">1</a></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">6</a></li>
                        <li><a href=\"#\">7</a></li>
                        <li><a href=\"#\">8</a></li>
                        <li><a href=\"#\">9</a></li>
                        <li><a href=\"#\">10</a></li>
                        <li><a href=\"#\">Next</a></li>
                    </ul>
                </div>
            {% endblock %}
        </div>
    {% endblock %}
    {% block client %}
        <div class=\"section\">
            <div class=\"container\">
                <h2>Nos Clients</h2>
                <div class=\"clients-logo-wrapper text-center row\" style=\"background: olivedrab\">
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{asset('img/logos/canon.png')}}\" alt=\"Client Name\" /></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{asset('img/logos/cisco.png')}}\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{asset('img/logos/dell.png')}}\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{asset('img/logos/ea.png')}}\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{asset('img/logos/ebay.png')}}\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{asset('img/logos/facebook.png')}}\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{asset('img/logos/google.png')}}\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{asset('img/logos/hp.png')}}\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{asset('img/logos/microsoft.png')}}\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{asset('img/logos/mysql.png')}}\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{asset('img/logos/sony.png')}}\" alt=\"Client Name\"></a></div>
                    <div class=\"col-lg-1 col-md-1 col-sm-3 col-xs-6\"><a href=\"#\"><img src=\"{{asset('img/logos/yahoo.png')}}\" alt=\"Client Name\"></a></div>
                </div>
            </div>
        </div>
    {% endblock %}
    <!-- Footer -->
    {% block pied %}
        <div class=\"footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-footer col-md-3 col-xs-6\">
                        <h3>Nos innovations</h3>
                        <div class=\"portfolio-item\">
                            <div class=\"portfolio-image\">
                                <a href=\"page-portfolio-item.html\"><img src=\"{{asset('img/portfolio7.jpg')}}\" alt=\"Project Name\"></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-footer col-md-3 col-xs-6\">
                        <h3>Naviguer sur</h3>
                        <ul class=\"no-list-style footer-navigate-section\">
                            <li><a href=\"page-blog-posts.html\">Blog</a></li>
                            <li><a href=\"page-portfolio-3-columns-2.html\">Notre page</a></li>
                            <li><a href=\"page-products-3-columns.html\">eShop</a></li>
                            <li><a href=\"page-services-3-columns.html\">Services</a></li>
                            <li><a href=\"page-pricing.html\">Nos facturations</a></li>
                            <li><a href=\"page-faq.html\">FAQ</a></li>
                        </ul>
                    </div>

                    <div class=\"col-footer col-md-4 col-xs-6\">
                        <h3>Contacts</h3>
                        <p class=\"contact-us-details\">
                            <b>Address:</b> Boulevard Melen, 3ème Rue Emia<br/>
                            <b>Phone:</b> +00237 690294940<br/>
                            <b>Fax:</b> +44 123 654321<br/>
                            <b>Email:</b> <a href=\"mailto:getintoutch@yourcompanydomain.com\">info.mails@bloomfield-consulting.net</a>
                        </p>
                    </div>
                    <div class=\"col-footer col-md-2 col-xs-6\">
                        <h3>Restez Connecté</h3>
                        <ul class=\"footer-stay-connected no-list-style\">
                            <li><a href=\"#\" class=\"facebook\"></a></li>
                            <li><a href=\"#\" class=\"twitter\"></a></li>
                            <li><a href=\"#\" class=\"googleplus\"></a></li>
                        </ul>
                    </div>
                    </divt
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"footer-copyright\">&copy; 2016 Bloomfield-Consulting. All rights reserved.</div>
                        </div>
                    </div>
                </div>
            </div>
        {% endblock %}
    {% endblock %}
";
    }
}
