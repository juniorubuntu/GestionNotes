<?php

/* ShoppingShopBundle:Personnel:ajouter.html.twig */
class __TwigTemplate_2c81f17a9ab1123c301eb1d373869d80344a296a0f6cf4f67fc72cbe4d962b78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ShopproShopBundle:Index:index.html.twig", "ShoppingShopBundle:Personnel:ajouter.html.twig", 1);
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
        echo "ShopproShopBundle:Personnel:ajouter";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"well col-md-8 col-md-offset-2\"  style=\"\">
        <h3>Welcome to the Stock:Personnel ajouter page</h3>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom du personnel"));
        echo "
                </td>
                <td>
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom du personnel")));
        echo "
                </td>
                <td>
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Téléphone"));
        echo "
                </td>
                <td>
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Télephone")));
        echo "
                </td>
            </tr>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_liste");
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
        <table class=\"col-md-12 table table-hover table-responsive row-border cell-border display\" id=\"personnel\">
            <thead class=\"panel panel-primary alert-info active panel-heading\">
                <tr>
                    <th>N<u>°</u></th>
            <th>Nom du personnel</th>
            <th>Téléphone</th>
            <th>Date de recru.</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
                ";
        // line 59
        $context["compt"] = 1;
        // line 60
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listpersonnel"]) ? $context["listpersonnel"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 61
            echo "                    ";
            if (((isset($context["compt"]) ? $context["compt"] : null) <= 3)) {
                // line 62
                echo "                        <tr>
                            <td><b>";
                // line 63
                echo twig_escape_filter($this->env, (isset($context["compt"]) ? $context["compt"] : null), "html", null, true);
                echo "</b></td>
                            <td><b>";
                // line 64
                echo twig_escape_filter($this->env, $context["personnel"], "html", null, true);
                echo "</b></td>
                            <td><b>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["personnel"], "telephone", array()), "html", null, true);
                echo " </b></td>
                            <td><b>";
                // line 66
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["personnel"], "dateRecru", array()), "D d, M Y"), "html", null, true);
                echo "</b></td>
                            <td><a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personnel_modifier", array("id" => $this->getAttribute($context["personnel"], "id", array()))), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn-link\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                            <td>
                                <button  style=\"color: red\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteCategorieModal_";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["personnel"], "id", array()), "html", null, true);
                echo "\" class=\"btn-link\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                                <div id=\"deleteCategorieModal_";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["personnel"], "id", array()), "html", null, true);
                echo "\" class=\"modal fade\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <center>Supprmer le personnel de nom <br><b>";
                // line 75
                echo twig_escape_filter($this->env, $context["personnel"], "html", null, true);
                echo "</b> ?</center>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                                <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personnel_supprimer", array("id" => $this->getAttribute($context["personnel"], "id", array()))), "html", null, true);
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
                // line 88
                $context["compt"] = ((isset($context["compt"]) ? $context["compt"] : null) + 1);
                // line 89
                echo "                    ";
            }
            // line 90
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personnel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "            </tbody>
        </table>
        <a class=\"pull-right\" href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personnel_liste");
        echo "\" style=\"color: green\"><span class=\"glyphicon glyphicon-list\"></span><b> Voir toute la liste</b></a>
        <script>
            \$('#personnel').DataTable({
                \"pagingType\": \"full_numbers\",
                \"lengthMenu\": [[3, 3], [3, 3]],
                \"language\": {
                    \"url\": \"";
        // line 99
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
        return "ShoppingShopBundle:Personnel:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 99,  204 => 93,  200 => 91,  194 => 90,  191 => 89,  189 => 88,  177 => 79,  170 => 75,  162 => 70,  158 => 69,  153 => 67,  149 => 66,  145 => 65,  141 => 64,  137 => 63,  134 => 62,  131 => 61,  126 => 60,  124 => 59,  105 => 43,  98 => 39,  93 => 36,  87 => 32,  81 => 28,  79 => 27,  71 => 22,  65 => 19,  59 => 16,  53 => 13,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"ShopproShopBundle:Index:index.html.twig\" %}

{% block title %}ShopproShopBundle:Personnel:ajouter{% endblock %}

{% block body %}
    <div class=\"well col-md-8 col-md-offset-2\"  style=\"\">
        <h3>Welcome to the Stock:Personnel ajouter page</h3>
        {{ form_start(form, {'attr': {'class': 'form-inline'}})}}
        {{ form_errors(form) }}
        <table class=\"table\">
            <tr>
                <td>
                    {{ form_label(form.nom, \"Nom du personnel\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder':'Nom du personnel'}}) }}
                </td>
                <td>
                    {{ form_label(form.telephone, \"Téléphone\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder':'Télephone'}}) }}
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
        <table class=\"col-md-12 table table-hover table-responsive row-border cell-border display\" id=\"personnel\">
            <thead class=\"panel panel-primary alert-info active panel-heading\">
                <tr>
                    <th>N<u>°</u></th>
            <th>Nom du personnel</th>
            <th>Téléphone</th>
            <th>Date de recru.</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
                {% set compt = 1 %}
                {% for personnel in listpersonnel %}
                    {% if compt <= 3 %}
                        <tr>
                            <td><b>{{ compt }}</b></td>
                            <td><b>{{ personnel }}</b></td>
                            <td><b>{{ personnel.telephone }} </b></td>
                            <td><b>{{ personnel.dateRecru | date('D d, M Y') }}</b></td>
                            <td><a href=\"{{ path('personnel_modifier', {'id': personnel.id}) }}\"><button type=\"button\" class=\"btn-link\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                            <td>
                                <button  style=\"color: red\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteCategorieModal_{{personnel.id}}\" class=\"btn-link\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                                <div id=\"deleteCategorieModal_{{personnel.id}}\" class=\"modal fade\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <center>Supprmer le personnel de nom <br><b>{{ personnel }}</b> ?</center>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                                <a href=\"{{ path('personnel_supprimer', {'id': personnel.id}) }}\">
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
        <a class=\"pull-right\" href=\"{{path('personnel_liste')}}\" style=\"color: green\"><span class=\"glyphicon glyphicon-list\"></span><b> Voir toute la liste</b></a>
        <script>
            \$('#personnel').DataTable({
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
