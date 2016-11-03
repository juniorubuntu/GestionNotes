<?php

/* ShoppingShopBundle:Fournisseur:ajouter.html.twig */
class __TwigTemplate_c7d7cbaeb8716d405f1c58d09818035724924908ccd484538ec5966ba25c48c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ShoppingShopBundle:Admin:index.html.twig", "ShoppingShopBundle:Fournisseur:ajouter.html.twig", 1);
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
        echo "ShopproShopBundle:Fournisseur:ajouter";
    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"well col-md-9\"  style=\"\">
        <h2>Page d'ajout des fournisseurs</h2>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom du fournisseur"));
        echo "
                </td>
                <td>
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom du fournisseur")));
        echo "
                </td>
                <td>
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "societe", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Société"));
        echo "
                </td>
                <td>
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "societe", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Société du fournisseur")));
        echo "
                </td>
                <td>
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Téléphone"));
        echo "
                </td>
                <td>
                    <div class=\"input-group\">
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ex: 00237695887564")));
        echo "
                        <div class=\"input-group-addon\"><b class=\"glyphicon glyphicon-phone\"></b></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Email"));
        echo "
                </td>
                <td>
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "email du fournisseur")));
        echo "
                </td>
                <td>
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "localite", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "localite"));
        echo "
                </td>
                <td>
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "localite", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "localité du fournisseur")));
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 50
        if (array_key_exists("edit", $context)) {
            // line 51
            echo "                        <button class=\"btn btn-info \">
                            Modifier
                        </button>   
                    ";
        } else {
            // line 55
            echo "                        <button class=\"btn btn-info\">
                            Ajouter
                        </button>  
                    ";
        }
        // line 59
        echo "
                </td>
                <td>
                    <a href=\"\" class=\"btn btn-default \">
                        Annuler
                    </a> 
                </td>
                ";
        // line 66
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </tr>
        </table>
        <hr>
        <table class=\"col-md-12 table table-hover table-responsive row-border cell-border display\" id=\"fournisseur\">
            <thead class=\" alert-info active panel-heading\">
                <tr>
                    <th>N<u>°</u></th>
            <th>Nom du fournisseur</th>
            <th>Société</th>
            <th>Téléphone</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
                ";
        // line 82
        $context["compt"] = 1;
        // line 83
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listfournisseur"]) ? $context["listfournisseur"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 84
            echo "                    ";
            if (((isset($context["compt"]) ? $context["compt"] : null) <= 3)) {
                // line 85
                echo "                        <tr>
                            <td><b>";
                // line 86
                echo twig_escape_filter($this->env, (isset($context["compt"]) ? $context["compt"] : null), "html", null, true);
                echo "</b></td>
                            <td><b>";
                // line 87
                echo twig_escape_filter($this->env, $context["fournisseur"], "html", null, true);
                echo "</b></td>
                            <td><b>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "societe", array()), "html", null, true);
                echo " </b></td>
                            <td><b>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "telephone", array()), "html", null, true);
                echo "</b></td>
                            <td><a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_modifier", array("id" => $this->getAttribute($context["fournisseur"], "id", array()))), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn-link\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                            <td>
                                <button  style=\"color: red\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteCategorieModal_";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "id", array()), "html", null, true);
                echo "\" class=\"btn-link\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                                <div id=\"deleteCategorieModal_";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "id", array()), "html", null, true);
                echo "\" class=\"modal fade\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <center>Supprmer le fournisseur de nom <br><b>";
                // line 98
                echo twig_escape_filter($this->env, $context["fournisseur"], "html", null, true);
                echo "</b> ?</center>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                                <a href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_supprimer", array("id" => $this->getAttribute($context["fournisseur"], "id", array()))), "html", null, true);
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
                // line 111
                $context["compt"] = ((isset($context["compt"]) ? $context["compt"] : null) + 1);
                // line 112
                echo "                    ";
            }
            // line 113
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "            </tbody>
        </table>
        <a class=\"pull-right\" href=\"";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_liste");
        echo "\" style=\"color: green\"><span class=\"glyphicon glyphicon-list\"></span><b> Voir toute la liste</b></a>
        <script>
            \$('#fournisseur').DataTable({
                \"pagingType\": \"full_numbers\",
                \"lengthMenu\": [[3, 3], [3, 3]],
                \"language\": {
                    \"url\": \"";
        // line 122
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
        return "ShoppingShopBundle:Fournisseur:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 122,  242 => 116,  238 => 114,  232 => 113,  229 => 112,  227 => 111,  215 => 102,  208 => 98,  200 => 93,  196 => 92,  191 => 90,  187 => 89,  183 => 88,  179 => 87,  175 => 86,  172 => 85,  169 => 84,  164 => 83,  162 => 82,  143 => 66,  134 => 59,  128 => 55,  122 => 51,  120 => 50,  112 => 45,  106 => 42,  100 => 39,  94 => 36,  84 => 29,  77 => 25,  71 => 22,  65 => 19,  59 => 16,  53 => 13,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"ShoppingShopBundle:Admin:index.html.twig\" %}

{% block title %}ShopproShopBundle:Fournisseur:ajouter{% endblock %}

{% block corps %}
    <div class=\"well col-md-9\"  style=\"\">
        <h2>Page d'ajout des fournisseurs</h2>
        {{ form_start(form, {'attr': {'class': 'form-inline'}})}}
        {{ form_errors(form) }}
        <table class=\"table\">
            <tr>
                <td>
                    {{ form_label(form.nom, \"Nom du fournisseur\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder':'Nom du fournisseur'}}) }}
                </td>
                <td>
                    {{ form_label(form.societe, \"Société\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    {{ form_widget(form.societe, {'attr': {'class': 'form-control', 'placeholder':'Société du fournisseur'}}) }}
                </td>
                <td>
                    {{ form_label(form.telephone, \"Téléphone\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    <div class=\"input-group\">
                        {{ form_widget(form.telephone, {'attr': {'class': 'form-control', 'placeholder':'Ex: 00237695887564'}}) }}
                        <div class=\"input-group-addon\"><b class=\"glyphicon glyphicon-phone\"></b></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    {{ form_label(form.email, \"Email\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder':'email du fournisseur'}}) }}
                </td>
                <td>
                    {{ form_label(form.localite, \"localite\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    {{ form_widget(form.localite, {'attr': {'class': 'form-control', 'placeholder':'localité du fournisseur'}}) }}
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
        <table class=\"col-md-12 table table-hover table-responsive row-border cell-border display\" id=\"fournisseur\">
            <thead class=\" alert-info active panel-heading\">
                <tr>
                    <th>N<u>°</u></th>
            <th>Nom du fournisseur</th>
            <th>Société</th>
            <th>Téléphone</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
                {% set compt = 1 %}
                {% for fournisseur in listfournisseur %}
                    {% if compt <= 3 %}
                        <tr>
                            <td><b>{{ compt }}</b></td>
                            <td><b>{{ fournisseur }}</b></td>
                            <td><b>{{ fournisseur.societe }} </b></td>
                            <td><b>{{ fournisseur.telephone }}</b></td>
                            <td><a href=\"{{ path('fournisseur_modifier', {'id': fournisseur.id}) }}\"><button type=\"button\" class=\"btn-link\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                            <td>
                                <button  style=\"color: red\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteCategorieModal_{{fournisseur.id}}\" class=\"btn-link\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                                <div id=\"deleteCategorieModal_{{fournisseur.id}}\" class=\"modal fade\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <center>Supprmer le fournisseur de nom <br><b>{{fournisseur}}</b> ?</center>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                                <a href=\"{{ path('fournisseur_supprimer', {'id': fournisseur.id}) }}\">
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
        <a class=\"pull-right\" href=\"{{path('fournisseur_liste')}}\" style=\"color: green\"><span class=\"glyphicon glyphicon-list\"></span><b> Voir toute la liste</b></a>
        <script>
            \$('#fournisseur').DataTable({
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
