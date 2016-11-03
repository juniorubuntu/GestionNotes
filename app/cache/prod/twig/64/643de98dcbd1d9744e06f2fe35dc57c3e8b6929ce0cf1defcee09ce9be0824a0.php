<?php

/* ShoppingShopBundle:Client:ajouter.html.twig */
class __TwigTemplate_067a7cf308f89b467efb11c00992a983cc3addc1fe93b2f22d15aa15d8bc245a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ShoppingShopBundle:Default:index.html.twig", "ShoppingShopBundle:Client:ajouter.html.twig", 1);
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
            <div class=\"\">
                <div class=\"col-md-12\">
                    <h2><marquee BEHAVIOR=\"alternate\">Créer gratuitement votre compte pour profiter des:</marquee></h2>
                    <ol style=\"\">
                        <li>Discussions en ligne avec des commerciaux</li>
                        <li>Réductions sur vos achats</li>
                        <li>Etre informé des nouveautés</li>
                        <li>Participer aux forums et ventes au en chers en ligne</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <div class=\"basic-login\">
                        <form role=\"form\">
                            <div class=\"form-group\">
                                <label for=\"register-username\"><i class=\"icon-user\"></i> <b>Email</b></label>
                                <input class=\"form-control\" id=\"register-username\" type=\"text\" placeholder=\"\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"register-password\"><i class=\"icon-lock\"></i> <b>Password</b></label>
                                <input class=\"form-control\" id=\"register-password\" type=\"password\" placeholder=\"\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"register-password2\"><i class=\"icon-lock\"></i> <b>Re-enter Password</b></label>
                                <input class=\"form-control\" id=\"register-password2\" type=\"password\" placeholder=\"\">
                            </div>
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-green pull-left\"><span class=\"glyphicon glyphicon-log-in\"></span> J'ai déjà un compte</button>
                                <button type=\"submit\" class=\"btn pull-right\"><span class=\"glyphicon glyphicon-ok-circle\"></span> Enregistrer</button>
                                <div class=\"clearfix\"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-sm-6 col-sm-offset-1 social-login\">
                    <p>Vous pouvez utiliser facebook ou twitter pour vous enregistrer !</p>
                    <div class=\"social-login-buttons\">
                        <a href=\"#\" class=\"btn-facebook-login\">Avec Facebook</a>
                        <a href=\"#\" class=\"btn-twitter-login\">Avec Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ShoppingShopBundle:Client:ajouter.html.twig";
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
        return "{% extends \"ShoppingShopBundle:Default:index.html.twig\" %}

{% block title %}Abonnement client{% endblock %}

{% block page %}
    <div class=\"\">
        <div class=\"container\">
            <div class=\"\">
                <div class=\"col-md-12\">
                    <h2><marquee BEHAVIOR=\"alternate\">Créer gratuitement votre compte pour profiter des:</marquee></h2>
                    <ol style=\"\">
                        <li>Discussions en ligne avec des commerciaux</li>
                        <li>Réductions sur vos achats</li>
                        <li>Etre informé des nouveautés</li>
                        <li>Participer aux forums et ventes au en chers en ligne</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <div class=\"basic-login\">
                        <form role=\"form\">
                            <div class=\"form-group\">
                                <label for=\"register-username\"><i class=\"icon-user\"></i> <b>Email</b></label>
                                <input class=\"form-control\" id=\"register-username\" type=\"text\" placeholder=\"\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"register-password\"><i class=\"icon-lock\"></i> <b>Password</b></label>
                                <input class=\"form-control\" id=\"register-password\" type=\"password\" placeholder=\"\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"register-password2\"><i class=\"icon-lock\"></i> <b>Re-enter Password</b></label>
                                <input class=\"form-control\" id=\"register-password2\" type=\"password\" placeholder=\"\">
                            </div>
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-green pull-left\"><span class=\"glyphicon glyphicon-log-in\"></span> J'ai déjà un compte</button>
                                <button type=\"submit\" class=\"btn pull-right\"><span class=\"glyphicon glyphicon-ok-circle\"></span> Enregistrer</button>
                                <div class=\"clearfix\"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-sm-6 col-sm-offset-1 social-login\">
                    <p>Vous pouvez utiliser facebook ou twitter pour vous enregistrer !</p>
                    <div class=\"social-login-buttons\">
                        <a href=\"#\" class=\"btn-facebook-login\">Avec Facebook</a>
                        <a href=\"#\" class=\"btn-twitter-login\">Avec Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
";
    }
}
