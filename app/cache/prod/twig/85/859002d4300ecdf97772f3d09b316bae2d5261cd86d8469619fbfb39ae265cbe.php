<?php

/* ShoppingShopBundle:Approvisionnement:ajouter.html.twig */
class __TwigTemplate_1dc2c629f5bb2d2963faf75cd4334257e073a244ad02c8083e21226b6f9a5add extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ShoppingShopBundle:Admin:index.html.twig", "ShoppingShopBundle:Approvisionnement:ajouter.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
        echo "ShopproShopBundle:Approvisionnement:ajouter";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"well col-md-12\"  style=\"\">
        <h3>Welcome to the Stock:Approvisionnement ajouter page</h3>
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-inline")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "livreur", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom du Livreur"));
        echo "
                </td>
                <td>
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "livreur", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom du livreur")));
        echo "
                </td>
                <td>
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "receptionniste", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Receptionniste"));
        echo "
                </td>
                <td>
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "receptionniste", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Receptionniste")));
        echo "
                </td>
                <td>
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fournisseur", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Fournisseur"));
        echo "
                </td>
                <td>
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fournisseur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </td>
                <td>
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "categorie", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Catégorie"));
        echo "
                </td>
                <td>
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 39
        if (array_key_exists("edit", $context)) {
            // line 40
            echo "                        <button class=\"btn btn-info \">
                            Modifier
                        </button>   
                    ";
        } else {
            // line 44
            echo "                        <button class=\"btn btn-info\">
                            Ajouter
                        </button>  
                    ";
        }
        // line 48
        echo "
                </td>
                <td>
                    <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_liste");
        echo "\" class=\"btn btn-default \">
                        Annuler
                    </a> 
                </td>
                ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </tr>
        </table>
        <hr>
        <table class=\"col-md-12 table table-hover table-responsive row-border cell-border display\" id=\"approvisionnement\">
            <thead class=\"panel panel-primary alert-info active panel-heading\">
                <tr>
                    <th>N<u>°</u></th>
            <th>Date Appro.</th>
            <th>Livreur</th>
            <th>Réceptionniste</th>
            <th>Fournisseur</th>
            <th>Catégorie</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
                ";
        // line 73
        $context["compt"] = 1;
        // line 74
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listapprovisionnement"]) ? $context["listapprovisionnement"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["approvisionnement"]) {
            // line 75
            echo "                    ";
            if (((isset($context["compt"]) ? $context["compt"] : null) <= 3)) {
                // line 76
                echo "                        <tr>
                            <td><b>";
                // line 77
                echo twig_escape_filter($this->env, (isset($context["compt"]) ? $context["compt"] : null), "html", null, true);
                echo "</b></td>
                            <td><b>";
                // line 78
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["approvisionnement"], "dateAppro", array()), "D d, M Y"), "html", null, true);
                echo "</b></td>
                            <td><b>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["approvisionnement"], "livreur", array()), "html", null, true);
                echo " </b></td>
                            <td><b>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["approvisionnement"], "receptionniste", array()), "html", null, true);
                echo "</b></td>
                            <td><b>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["approvisionnement"], "fournisseur", array()), "html", null, true);
                echo "</b></td>
                            <td><b>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["approvisionnement"], "categorie", array()), "html", null, true);
                echo "</b></td>
                            <td><a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("approvisionnement_modifier", array("id" => $this->getAttribute($context["approvisionnement"], "id", array()))), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn-link\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                            <td>
                                <button  style=\"color: red\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteCategorieModal_";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["approvisionnement"], "id", array()), "html", null, true);
                echo "\" class=\"btn-link\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                                <div id=\"deleteCategorieModal_";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["approvisionnement"], "id", array()), "html", null, true);
                echo "\" class=\"modal fade\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <center>Supprmer le approvisionnement du <br><b>";
                // line 91
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["approvisionnement"], "dateAppro", array()), "D d, m Y"), "html", null, true);
                echo "</b> ?</center>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                                <a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("approvisionnement_supprimer", array("id" => $this->getAttribute($context["approvisionnement"], "id", array()))), "html", null, true);
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
                // line 104
                $context["compt"] = ((isset($context["compt"]) ? $context["compt"] : null) + 1);
                // line 105
                echo "                    ";
            }
            // line 106
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['approvisionnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "            </tbody>
        </table>
        <a class=\"pull-right\" href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("approvisionnement_liste");
        echo "\" style=\"color: green\"><span class=\"glyphicon glyphicon-list\"></span><b> Voir toute la liste</b></a>
        <script>
            \$('#approvisionnement').DataTable({
                \"pagingType\": \"full_numbers\",
                \"lengthMenu\": [[3, 3], [3, 3]],
                \"language\": {
                    \"url\": \"";
        // line 115
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
        return "ShoppingShopBundle:Approvisionnement:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 115,  238 => 109,  234 => 107,  228 => 106,  225 => 105,  223 => 104,  211 => 95,  204 => 91,  196 => 86,  192 => 85,  187 => 83,  183 => 82,  179 => 81,  175 => 80,  171 => 79,  167 => 78,  163 => 77,  160 => 76,  157 => 75,  152 => 74,  150 => 73,  129 => 55,  122 => 51,  117 => 48,  111 => 44,  105 => 40,  103 => 39,  95 => 34,  89 => 31,  83 => 28,  77 => 25,  71 => 22,  65 => 19,  59 => 16,  53 => 13,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"ShoppingShopBundle:Admin:index.html.twig\" %}

{% block title %}ShopproShopBundle:Approvisionnement:ajouter{% endblock %}

{% block body %}
    <div class=\"well col-md-12\"  style=\"\">
        <h3>Welcome to the Stock:Approvisionnement ajouter page</h3>
        {{ form_start(form, {'attr': {'class': 'form-inline'}})}}
        {{ form_errors(form) }}
        <table class=\"table\">
            <tr>
                <td>
                    {{ form_label(form.livreur, \"Nom du Livreur\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    {{ form_widget(form.livreur, {'attr': {'class': 'form-control', 'placeholder':'Nom du livreur'}}) }}
                </td>
                <td>
                    {{ form_label(form.receptionniste, \"Receptionniste\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    {{ form_widget(form.receptionniste, {'attr': {'class': 'form-control', 'placeholder':'Receptionniste'}}) }}
                </td>
                <td>
                    {{ form_label(form.fournisseur, \"Fournisseur\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    {{ form_widget(form.fournisseur, {'attr': {'class': 'form-control' }}) }}
                </td>
                <td>
                    {{ form_label(form.categorie, \"Catégorie\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    {{ form_widget(form.categorie, {'attr': {'class': 'form-control' }}) }}
                </td>
            </tr>
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
                    <a href=\"{{path('stock_liste')}}\" class=\"btn btn-default \">
                        Annuler
                    </a> 
                </td>
                {{ form_end(form) }}
            </tr>
        </table>
        <hr>
        <table class=\"col-md-12 table table-hover table-responsive row-border cell-border display\" id=\"approvisionnement\">
            <thead class=\"panel panel-primary alert-info active panel-heading\">
                <tr>
                    <th>N<u>°</u></th>
            <th>Date Appro.</th>
            <th>Livreur</th>
            <th>Réceptionniste</th>
            <th>Fournisseur</th>
            <th>Catégorie</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
                {% set compt = 1 %}
                {% for approvisionnement in listapprovisionnement %}
                    {% if compt <= 3 %}
                        <tr>
                            <td><b>{{ compt }}</b></td>
                            <td><b>{{ approvisionnement.dateAppro | date('D d, M Y') }}</b></td>
                            <td><b>{{ approvisionnement.livreur }} </b></td>
                            <td><b>{{ approvisionnement.receptionniste }}</b></td>
                            <td><b>{{ approvisionnement.fournisseur }}</b></td>
                            <td><b>{{ approvisionnement.categorie }}</b></td>
                            <td><a href=\"{{ path('approvisionnement_modifier', {'id': approvisionnement.id}) }}\"><button type=\"button\" class=\"btn-link\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                            <td>
                                <button  style=\"color: red\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteCategorieModal_{{approvisionnement.id}}\" class=\"btn-link\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                                <div id=\"deleteCategorieModal_{{approvisionnement.id}}\" class=\"modal fade\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <center>Supprmer le approvisionnement du <br><b>{{ approvisionnement.dateAppro | date('D d, m Y') }}</b> ?</center>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                                <a href=\"{{ path('approvisionnement_supprimer', {'id': approvisionnement.id}) }}\">
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
        <a class=\"pull-right\" href=\"{{path('approvisionnement_liste')}}\" style=\"color: green\"><span class=\"glyphicon glyphicon-list\"></span><b> Voir toute la liste</b></a>
        <script>
            \$('#approvisionnement').DataTable({
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
