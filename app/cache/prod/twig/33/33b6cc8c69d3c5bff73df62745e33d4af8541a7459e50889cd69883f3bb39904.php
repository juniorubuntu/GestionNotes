<?php

/* ShoppingShopBundle:Image:ajouter.html.twig */
class __TwigTemplate_8b738c5569c110a64ddbf7937eb5e34ee9e8010cec12ac3fe4adf6c6acb25c94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ShoppingShopBundle:Admin:index.html.twig", "ShoppingShopBundle:Image:ajouter.html.twig", 1);
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
        echo "Ajout d'images";
    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"col-md-9\"  style=\"\">
        <h2>Page d'ajout d'une image</h2>
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-inline", "enctype" => "multipart/form-data")));
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        <table class=\"table\">
            <tr>
                <td>
                    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "produit", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Choisir un produit"));
        echo "
                </td>
                <td>
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "produit", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </td>
                <td>
                    <label class=\"control-label\">Votre image</label>
                </td>
                <td>
                    <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"30000\" />
                    <input type=\"file\" name=\"image\"/>
                </td>
            <tr>
                <td>
                    ";
        // line 27
        if (array_key_exists("edit", $context)) {
            // line 28
            echo "                        <button class=\"btn btn-info \">
                            Modifier
                        </button>   
                    ";
        } else {
            // line 32
            echo "                        <button class=\"btn btn-info\">
                            Ajouter
                        </button>  
                    ";
        }
        // line 36
        echo "
                </td>
                <td>
                    <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_liste");
        echo "\" class=\"btn btn-default \">
                        Annuler
                    </a> 
                </td>
                ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </tr>
        </table>
        <hr>
        <table class=\"col-md-12 table table-hover panel-primary row-border cell-border display\" id=\"\">
            <thead class=\"alert-info\">
                <tr>
                    <th>N<u>°</u></th>
            <th>Produit</th>
            <th>Image</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
                ";
        // line 58
        $context["compt"] = 1;
        // line 59
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listimage"]) ? $context["listimage"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 60
            echo "                    ";
            if (((isset($context["compt"]) ? $context["compt"] : null) <= 3)) {
                // line 61
                echo "                        <tr>
                            <td><b>";
                // line 62
                echo twig_escape_filter($this->env, (isset($context["compt"]) ? $context["compt"] : null), "html", null, true);
                echo "</b></td>
                            <td><b>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "produit", array()), "html", null, true);
                echo "</b></td>
                            <td><b><a class=\"linkD\" href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "nom", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-download\"></span> Image</a></b></td>
                            <td><a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_modifier", array("id" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn-link\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                            <td>
                                <button  style=\"color: red\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteImageModal_";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
                echo "\" class=\"btn-link\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                                <div id=\"deleteImageModal_";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
                echo "\" class=\"modal fade\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <center>Supprmer l'image du produit <br><b>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "produit", array()), "html", null, true);
                echo "</b> ?</center>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                                <a href=\"";
                // line 77
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
                // line 86
                $context["compt"] = ((isset($context["compt"]) ? $context["compt"] : null) + 1);
                // line 87
                echo "                    ";
            }
            // line 88
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            </tbody>
        </table>
        <a class=\"pull-right\" href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("image_liste");
        echo "\" style=\"color: green\"><span class=\"glyphicon glyphicon-list\"></span><b> Voir toute la liste</b></a>
        <script>
            \$('#image').DataTable({
                \"pagingType\": \"full_numbers\",
                \"lengthMenu\": [[3, 3], [3, 3]],
                \"language\": {
                    \"url\": \"";
        // line 97
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
        return "ShoppingShopBundle:Image:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 97,  193 => 91,  189 => 89,  183 => 88,  180 => 87,  178 => 86,  166 => 77,  159 => 73,  151 => 68,  147 => 67,  142 => 65,  138 => 64,  134 => 63,  130 => 62,  127 => 61,  124 => 60,  119 => 59,  117 => 58,  99 => 43,  92 => 39,  87 => 36,  81 => 32,  75 => 28,  73 => 27,  59 => 16,  53 => 13,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"ShoppingShopBundle:Admin:index.html.twig\" %}

{% block title %}Ajout d'images{% endblock %}

{% block corps %}
    <div class=\"col-md-9\"  style=\"\">
        <h2>Page d'ajout d'une image</h2>
        {{ form_start(form, {'attr': {'class': 'form-inline', 'enctype': 'multipart/form-data'}})}}
        {{ form_errors(form) }}
        <table class=\"table\">
            <tr>
                <td>
                    {{ form_label(form.produit, \"Choisir un produit\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    {{ form_widget(form.produit, {'attr': {'class': 'form-control'}}) }}
                </td>
                <td>
                    <label class=\"control-label\">Votre image</label>
                </td>
                <td>
                    <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"30000\" />
                    <input type=\"file\" name=\"image\"/>
                </td>
            <tr>
                <td>
                    {%  if edit is defined  %}
                        <button class=\"btn btn-info \">
                            Modifier
                        </button>   
                    {% else %}
                        <button class=\"btn btn-info\">
                            Ajouter
                        </button>  
                    {% endif %}

                </td>
                <td>
                    <a href=\"{{path('image_liste')}}\" class=\"btn btn-default \">
                        Annuler
                    </a> 
                </td>
                {{ form_end(form) }}
            </tr>
        </table>
        <hr>
        <table class=\"col-md-12 table table-hover panel-primary row-border cell-border display\" id=\"\">
            <thead class=\"alert-info\">
                <tr>
                    <th>N<u>°</u></th>
            <th>Produit</th>
            <th>Image</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
                {% set compt = 1 %}
                {% for image in listimage %}
                    {% if compt <= 3 %}
                        <tr>
                            <td><b>{{ compt }}</b></td>
                            <td><b>{{ image.produit }}</b></td>
                            <td><b><a class=\"linkD\" href=\"{{image.nom}}\"><span class=\"glyphicon glyphicon-download\"></span> Image</a></b></td>
                            <td><a href=\"{{ path('image_modifier', {'id': image.id}) }}\"><button type=\"button\" class=\"btn-link\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                            <td>
                                <button  style=\"color: red\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteImageModal_{{image.id}}\" class=\"btn-link\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                                <div id=\"deleteImageModal_{{image.id}}\" class=\"modal fade\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <center>Supprmer l'image du produit <br><b>{{image.produit}}</b> ?</center>
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
                    {% endif %}
                {% endfor %}
            </tbody>
        </table>
        <a class=\"pull-right\" href=\"{{path('image_liste')}}\" style=\"color: green\"><span class=\"glyphicon glyphicon-list\"></span><b> Voir toute la liste</b></a>
        <script>
            \$('#image').DataTable({
                \"pagingType\": \"full_numbers\",
                \"lengthMenu\": [[3, 3], [3, 3]],
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
