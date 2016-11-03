<?php

/* ShoppingShopBundle:Produit:ajouter.html.twig */
class __TwigTemplate_26ff094f164b7a73eea1d2216603aa832383423f131ccdeba52ca895cd9535fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ShoppingShopBundle:Admin:index.html.twig", "ShoppingShopBundle:Produit:ajouter.html.twig", 1);
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
        echo "Page d'ajout des produits";
    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"well col-md-9\"  style=\"\">
        <h2>Page d'ajout des produits</h2>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom"));
        echo "
                </td>
                <td>
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom du produit")));
        echo "
                </td>
                <td>
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prixUnit", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Prix Unit."));
        echo "
                </td>
                <td>
                    <div class=\"input-group\">
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prixUnit", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "1000")));
        echo "
                        <div class=\"input-group-addon\"><b>FCFA</b></div>
                    </div>
                </td>
                <td>
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "unite", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Unité de mésure"));
        echo "
                </td>
                <td>
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "unite", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Unité de mésure")));
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "categorie", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Catégorie"));
        echo "
                </td>
                <td>
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </td>
                <td>
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "qteStock", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Qté. Stock"));
        echo "
                </td>
                <td>
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "qteStock", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </td>
                <td>
                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "qteMin", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Qté Min."));
        echo "
                </td>
                <td>
                    <div class=\"input-group\">
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "qteMin", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "1")));
        echo "
                        <div class=\"input-group-addon\"><b>Cartons</b></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 59
        if (array_key_exists("edit", $context)) {
            // line 60
            echo "                        <button class=\"btn btn-info \">
                            Modifier
                        </button>   
                    ";
        } else {
            // line 64
            echo "                        <button class=\"btn btn-info\">
                            Ajouter
                        </button>  
                    ";
        }
        // line 68
        echo "
                </td>
                <td>
                    <a href=\"\" class=\"btn btn-default \">
                        Annuler
                    </a> 
                </td>
                ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </tr>
        </table>
        <hr>
        <table class=\"col-md-12 table table-hover table-responsive row-border cell-border display\" id=\"produit\">
            <thead class=\"alert-info panel-heading\">
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
        // line 93
        $context["compt"] = 1;
        // line 94
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listproduit"]) ? $context["listproduit"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 95
            echo "                    ";
            if (((isset($context["compt"]) ? $context["compt"] : null) <= 3)) {
                // line 96
                echo "                        <tr>
                            <td><b>";
                // line 97
                echo twig_escape_filter($this->env, (isset($context["compt"]) ? $context["compt"] : null), "html", null, true);
                echo "</b></td>
                            <td><b>";
                // line 98
                echo twig_escape_filter($this->env, $context["produit"], "html", null, true);
                echo "</b></td>
                            <td><b>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "qteMin", array()), "html", null, true);
                echo " <i>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "unite", array()), "html", null, true);
                echo "</i></b></td>
                            <td><b>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixUnit", array()), "html", null, true);
                echo " <i>FCFA</i></b></td>
                            <td><b>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "qteStock", array()), "html", null, true);
                echo " <i>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "unite", array()), "html", null, true);
                echo "</i></b></td>
                            <td><b>";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "categorie", array()), "html", null, true);
                echo "</b></td>
                            <td><a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_modifier", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn-link\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                            <td>
                                <button  style=\"color: red\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteCategorieModal_";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
                echo "\" class=\"btn-link\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                                <div id=\"deleteCategorieModal_";
                // line 106
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
                echo "\" class=\"modal fade\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <center>Supprmer le produit de nom <br><b>";
                // line 111
                echo twig_escape_filter($this->env, $context["produit"], "html", null, true);
                echo "</b> ?</center>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                                <a href=\"";
                // line 115
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
                // line 124
                $context["compt"] = ((isset($context["compt"]) ? $context["compt"] : null) + 1);
                // line 125
                echo "                    ";
            }
            // line 126
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "            </tbody>
        </table>
        <a class=\"pull-right\" href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_liste");
        echo "\" style=\"color: green\"><span class=\"glyphicon glyphicon-list\"></span><b> Voir toute la liste</b></a>
        <script>
            \$('#produit').DataTable({
                \"pagingType\": \"full_numbers\",
                \"lengthMenu\": [[3, 3], [3, 3]],
                \"language\": {
                    \"url\": \"";
        // line 135
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
        return "ShoppingShopBundle:Produit:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 135,  271 => 129,  267 => 127,  261 => 126,  258 => 125,  256 => 124,  244 => 115,  237 => 111,  229 => 106,  225 => 105,  220 => 103,  216 => 102,  210 => 101,  206 => 100,  200 => 99,  196 => 98,  192 => 97,  189 => 96,  186 => 95,  181 => 94,  179 => 93,  158 => 75,  149 => 68,  143 => 64,  137 => 60,  135 => 59,  125 => 52,  118 => 48,  112 => 45,  106 => 42,  100 => 39,  94 => 36,  86 => 31,  80 => 28,  72 => 23,  65 => 19,  59 => 16,  53 => 13,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"ShoppingShopBundle:Admin:index.html.twig\" %}

{% block title %}Page d'ajout des produits{% endblock %}

{% block corps %}
    <div class=\"well col-md-9\"  style=\"\">
        <h2>Page d'ajout des produits</h2>
        {{ form_start(form, {'attr': {'class': 'form-inline'}})}}
        {{ form_errors(form) }}
        <table class=\"table\">
            <tr>
                <td>
                    {{ form_label(form.nom, \"Nom\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder':'Nom du produit'}}) }}
                </td>
                <td>
                    {{ form_label(form.prixUnit, \"Prix Unit.\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    <div class=\"input-group\">
                        {{ form_widget(form.prixUnit, {'attr': {'class': 'form-control', 'placeholder':'1000'}}) }}
                        <div class=\"input-group-addon\"><b>FCFA</b></div>
                    </div>
                </td>
                <td>
                    {{ form_label(form.unite, \"Unité de mésure\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    {{ form_widget(form.unite, {'attr': {'class': 'form-control', 'placeholder':'Unité de mésure'}}) }}
                </td>
            </tr>
            <tr>
                <td>
                    {{ form_label(form.categorie, \"Catégorie\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    {{ form_widget(form.categorie, {'attr': {'class': 'form-control'}}) }}
                </td>
                <td>
                    {{ form_label(form.qteStock, \"Qté. Stock\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    {{ form_widget(form.qteStock, {'attr': {'class': 'form-control'}}) }}
                </td>
                <td>
                    {{ form_label(form.qteMin, \"Qté Min.\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    <div class=\"input-group\">
                        {{ form_widget(form.qteMin, {'attr': {'class': 'form-control', 'placeholder':'1'}}) }}
                        <div class=\"input-group-addon\"><b>Cartons</b></div>
                    </div>
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
                    <a href=\"\" class=\"btn btn-default \">
                        Annuler
                    </a> 
                </td>
                {{ form_end(form) }}
            </tr>
        </table>
        <hr>
        <table class=\"col-md-12 table table-hover table-responsive row-border cell-border display\" id=\"produit\">
            <thead class=\"alert-info panel-heading\">
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
                    {% if compt <= 3 %}
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
                    {% endif %}
                {% endfor %}
            </tbody>
        </table>
        <a class=\"pull-right\" href=\"{{path('produit_liste')}}\" style=\"color: green\"><span class=\"glyphicon glyphicon-list\"></span><b> Voir toute la liste</b></a>
        <script>
            \$('#produit').DataTable({
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
