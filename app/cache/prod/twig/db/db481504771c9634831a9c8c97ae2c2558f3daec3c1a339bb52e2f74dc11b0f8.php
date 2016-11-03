<?php

/* ShoppingShopBundle:Produit:liste.html.twig */
class __TwigTemplate_ce4841d9c90ce2d09e51113a94f055c3a9fefb08cd4b45e1cd9c78ca0928b47b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ShoppingShopBundle:Admin:index.html.twig", "ShoppingShopBundle:Produit:liste.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'corps' => array($this, 'block_corps'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ShoppingShopBundle:Admin:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "ShopproShopBundle:Produit:liste";
    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"col-md-9\">
        <h2>Pae de la liste des produits</h2>
        <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_ajouter");
        echo "\" class=\"btn-link pull-right\"><span class=\"glyphicon glyphicon-plus-sign\"></span>
            <b>Ajouter un produit</b>
        </a>
        <table class=\"col-md-12 table table-hover table-responsive row-border cell-border display\" id=\"produit\">
            <thead class=\"alert-info\">
                <tr>
                    <th>N<u>°</u></th>
            <th>Nom du produit</th>
            <th>Qté Min.</th>
            <th>Prix Unit.</th>
            <th>Qté en stock</th>
            <th>Catégorie d'appart.</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
                ";
        // line 25
        $context["compt"] = 1;
        // line 26
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listproduit"]) ? $context["listproduit"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 27
            echo "                    <tr>
                        <td><b>";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["compt"]) ? $context["compt"] : null), "html", null, true);
            echo "</b></td>
                        <td><b>";
            // line 29
            echo twig_escape_filter($this->env, $context["produit"], "html", null, true);
            echo "</b></td>
                        <td><b>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "qteMin", array()), "html", null, true);
            echo " <i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "unite", array()), "html", null, true);
            echo "</i></b></td>
                        <td><b>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixUnit", array()), "html", null, true);
            echo " <i>FCFA</i></b></td>
                        <td><b>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "qteStock", array()), "html", null, true);
            echo " <i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "unite", array()), "html", null, true);
            echo "</i></b></td>
                        <td><b>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "categorie", array()), "html", null, true);
            echo "</b></td>
                        <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_modifier", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn-link\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                        <td>
                            <button  style=\"color: red\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteCategorieModal_";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\" class=\"btn-link\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                            <div id=\"deleteCategorieModal_";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\">
                                <div class=\"modal-dialog modal-sm\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                            <center>Supprmer le produit de nom <br><b>";
            // line 42
            echo twig_escape_filter($this->env, $context["produit"], "html", null, true);
            echo "</b> ?</center>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" class=\"btn btn-primary col-md-offset-1\"><span class=\"glyphicon glyphicon-ok-sign\"></span></button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    ";
            // line 55
            $context["compt"] = ((isset($context["compt"]) ? $context["compt"] : null) + 1);
            // line 56
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            </tbody>
        </table>
        <script>
            \$('#produit').DataTable({
                \"pagingType\": \"full_numbers\",
                \"lengthMenu\": [[10, 20], [10, 20]],
                \"language\": {
                    \"url\": \"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
                }

            });
        </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ShoppingShopBundle:Produit:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 64,  144 => 57,  138 => 56,  136 => 55,  124 => 46,  117 => 42,  109 => 37,  105 => 36,  100 => 34,  96 => 33,  90 => 32,  86 => 31,  80 => 30,  76 => 29,  72 => 28,  69 => 27,  64 => 26,  62 => 25,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"ShoppingShopBundle:Admin:index.html.twig\" %}

{% block title %}ShopproShopBundle:Produit:liste{% endblock %}

{% block corps %}
    <div class=\"col-md-9\">
        <h2>Pae de la liste des produits</h2>
        <a href=\"{{path('produit_ajouter')}}\" class=\"btn-link pull-right\"><span class=\"glyphicon glyphicon-plus-sign\"></span>
            <b>Ajouter un produit</b>
        </a>
        <table class=\"col-md-12 table table-hover table-responsive row-border cell-border display\" id=\"produit\">
            <thead class=\"alert-info\">
                <tr>
                    <th>N<u>°</u></th>
            <th>Nom du produit</th>
            <th>Qté Min.</th>
            <th>Prix Unit.</th>
            <th>Qté en stock</th>
            <th>Catégorie d'appart.</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
                {% set compt = 1 %}
                {% for produit in listproduit %}
                    <tr>
                        <td><b>{{ compt }}</b></td>
                        <td><b>{{ produit }}</b></td>
                        <td><b>{{ produit.qteMin }} <i>{{ produit.unite }}</i></b></td>
                        <td><b>{{ produit.prixUnit }} <i>FCFA</i></b></td>
                        <td><b>{{ produit.qteStock }} <i>{{ produit.unite }}</i></b></td>
                        <td><b>{{ produit.categorie }}</b></td>
                        <td><a href=\"{{ path('produit_modifier', {'id': produit.id}) }}\"><button type=\"button\" class=\"btn-link\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                        <td>
                            <button  style=\"color: red\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteCategorieModal_{{produit.id}}\" class=\"btn-link\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                            <div id=\"deleteCategorieModal_{{produit.id}}\" class=\"modal fade\">
                                <div class=\"modal-dialog modal-sm\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                            <center>Supprmer le produit de nom <br><b>{{produit}}</b> ?</center>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                            <a href=\"{{ path('produit_supprimer', {'id': produit.id}) }}\">
                                                <button type=\"button\" class=\"btn btn-primary col-md-offset-1\"><span class=\"glyphicon glyphicon-ok-sign\"></span></button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    {% set compt = compt + 1 %}
                {% endfor %}
            </tbody>
        </table>
        <script>
            \$('#produit').DataTable({
                \"pagingType\": \"full_numbers\",
                \"lengthMenu\": [[10, 20], [10, 20]],
                \"language\": {
                    \"url\": \"{{ asset('DataTables/French.json') }}\"
                }

            });
        </script>
    </div>
{% endblock %}
";
    }
}
