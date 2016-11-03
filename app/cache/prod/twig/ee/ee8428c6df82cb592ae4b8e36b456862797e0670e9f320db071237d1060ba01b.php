<?php

/* ShoppingShopBundle:Image:liste.html.twig */
class __TwigTemplate_9bb8a16c37cff1218e4d85dd815e485f316397cc16ca9119b54cda10db23c20d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ShoppingShopBundle:Admin:index.html.twig", "ShoppingShopBundle:Image:liste.html.twig", 1);
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
        echo "ShopproShopBundle:Image:liste";
    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"col-md-9\">
        <h2>Page de la liste des images</h2>
        <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_ajouter");
        echo "\" class=\"btn-link pull-right\"><span class=\"glyphicon glyphicon-plus-sign\"></span>
            <b>Ajouter une image</b>
        </a>
        <hr>
        <table class=\"col-md-12 table table-hover table-responsive row-border cell-border display\" id=\"image\">
            <thead class=\"alert-info active panel-heading\">
                <tr>
                    <th>N<u>°</u></th>
                    <th>Produits</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context["compt"] = 1;
        // line 23
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listimage"]) ? $context["listimage"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 24
            echo "                    <tr>
                        <td><b>";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["compt"]) ? $context["compt"] : null), "html", null, true);
            echo "</b></td>
                        <td><b>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "produit", array()), "html", null, true);
            echo "</b></td>
                        <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_modifier", array("id" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn-link\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                        <td>
                            <button  style=\"color: red\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteImageModal_";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
            echo "\" class=\"btn-link\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                            <div id=\"deleteImageModal_";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\">
                                <div class=\"modal-dialog modal-sm\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                            <center>Supprmer la catégorie <br><b>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "produit", array()), "html", null, true);
            echo "</b> ?</center>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_supprimer", array("id" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
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
            // line 48
            $context["compt"] = ((isset($context["compt"]) ? $context["compt"] : null) + 1);
            // line 49
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tbody>
        </table>
        <script>
            \$('#image').DataTable({
                \"pagingType\": \"full_numbers\",
                \"lengthMenu\": [[5, 10], [5, 10]],
                \"language\": {
                    \"url\": \"";
        // line 57
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
        return "ShoppingShopBundle:Image:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 57,  121 => 50,  115 => 49,  113 => 48,  101 => 39,  94 => 35,  86 => 30,  82 => 29,  77 => 27,  73 => 26,  69 => 25,  66 => 24,  61 => 23,  59 => 22,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"ShoppingShopBundle:Admin:index.html.twig\" %}

{% block title %}ShopproShopBundle:Image:liste{% endblock %}

{% block corps %}
    <div class=\"col-md-9\">
        <h2>Page de la liste des images</h2>
        <a href=\"{{path('image_ajouter')}}\" class=\"btn-link pull-right\"><span class=\"glyphicon glyphicon-plus-sign\"></span>
            <b>Ajouter une image</b>
        </a>
        <hr>
        <table class=\"col-md-12 table table-hover table-responsive row-border cell-border display\" id=\"image\">
            <thead class=\"alert-info active panel-heading\">
                <tr>
                    <th>N<u>°</u></th>
                    <th>Produits</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                {% set compt = 1 %}
                {% for image in listimage %}
                    <tr>
                        <td><b>{{ compt }}</b></td>
                        <td><b>{{ image.produit }}</b></td>
                        <td><a href=\"{{ path('image_modifier', {'id': image.id}) }}\"><button type=\"button\" class=\"btn-link\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                        <td>
                            <button  style=\"color: red\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteImageModal_{{image.id}}\" class=\"btn-link\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                            <div id=\"deleteImageModal_{{image.id}}\" class=\"modal fade\">
                                <div class=\"modal-dialog modal-sm\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                            <center>Supprmer la catégorie <br><b>{{image.produit}}</b> ?</center>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                            <a href=\"{{ path('image_supprimer', {'id': image.id}) }}\">
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
            \$('#image').DataTable({
                \"pagingType\": \"full_numbers\",
                \"lengthMenu\": [[5, 10], [5, 10]],
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
