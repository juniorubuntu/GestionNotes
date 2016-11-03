<?php

/* ShoppingShopBundle:Categorie:ajouter.html.twig */
class __TwigTemplate_4f0fc1ee431be9784987329440490a723e12974265e9483f456136bac8f5ae0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ShoppingShopBundle:Admin:index.html.twig", "ShoppingShopBundle:Categorie:ajouter.html.twig", 1);
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
        echo "Ajout d'articles";
    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"col-md-9\"  style=\"\">
        <h2>Page d'ajout d'une catégorie</h2>
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Nom de la catégorie"));
        echo "
                </td>
                <td>
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </td>
            <tr>
                <td>
                    ";
        // line 20
        if (array_key_exists("edit", $context)) {
            // line 21
            echo "                        <button class=\"btn btn-info \">
                            Modifier
                        </button>   
                    ";
        } else {
            // line 25
            echo "                        <button class=\"btn btn-info\">
                            Ajouter
                        </button>  
                    ";
        }
        // line 29
        echo "
                </td>
                <td>
                    <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_liste");
        echo "\" class=\"btn btn-default \">
                        Annuler
                    </a> 
                </td>
                ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </tr>
        </table>
        <hr>
        <table class=\"col-md-12 table table-hover panel-primary table-responsive row-border cell-border display\" id=\"categorie\">
            <thead class=\"alert-info\">
                <tr>
                    <th>N<u>°</u></th>
            <th>Intitulés</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
                ";
        // line 50
        $context["compt"] = 1;
        // line 51
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listcategorie"]) ? $context["listcategorie"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 52
            echo "                    ";
            if (((isset($context["compt"]) ? $context["compt"] : null) <= 3)) {
                // line 53
                echo "                        <tr>
                            <td><b>";
                // line 54
                echo twig_escape_filter($this->env, (isset($context["compt"]) ? $context["compt"] : null), "html", null, true);
                echo "</b></td>
                            <td><b>";
                // line 55
                echo twig_escape_filter($this->env, $context["categorie"], "html", null, true);
                echo "</b></td>
                            <td><a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_modifier", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn-link\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                            <td>
                                <button  style=\"color: red\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteCategorieModal_";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
                echo "\" class=\"btn-link\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                                <div id=\"deleteCategorieModal_";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
                echo "\" class=\"modal fade\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <center>Supprmer la catégorie <br><b>";
                // line 64
                echo twig_escape_filter($this->env, $context["categorie"], "html", null, true);
                echo "</b> ?</center>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                                <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_supprimer", array("id" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
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
                // line 77
                $context["compt"] = ((isset($context["compt"]) ? $context["compt"] : null) + 1);
                // line 78
                echo "                    ";
            }
            // line 79
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "            </tbody>
        </table>
        <a class=\"pull-right\" href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("categorie_liste");
        echo "\" style=\"color: green\"><span class=\"glyphicon glyphicon-list\"></span><b> Voir toute la liste</b></a>
        <script>
            \$('#categorie').DataTable({
                \"pagingType\": \"full_numbers\",
                \"lengthMenu\": [[3, 3], [3, 3]],
                \"language\": {
                    \"url\": \"";
        // line 88
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
        return "ShoppingShopBundle:Categorie:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 88,  181 => 82,  177 => 80,  171 => 79,  168 => 78,  166 => 77,  154 => 68,  147 => 64,  139 => 59,  135 => 58,  130 => 56,  126 => 55,  122 => 54,  119 => 53,  116 => 52,  111 => 51,  109 => 50,  92 => 36,  85 => 32,  80 => 29,  74 => 25,  68 => 21,  66 => 20,  59 => 16,  53 => 13,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"ShoppingShopBundle:Admin:index.html.twig\" %}

{% block title %}Ajout d'articles{% endblock %}

{% block corps %}
    <div class=\"col-md-9\"  style=\"\">
        <h2>Page d'ajout d'une catégorie</h2>
        {{ form_start(form, {'attr': {'class': 'form-inline'}})}}
        {{ form_errors(form) }}
        <table class=\"table\">
            <tr>
                <td>
                    {{ form_label(form.nom, \"Nom de la catégorie\", {'label_attr': {'class': 'control-label'}}) }}
                </td>
                <td>
                    {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
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
                    <a href=\"{{path('categorie_liste')}}\" class=\"btn btn-default \">
                        Annuler
                    </a> 
                </td>
                {{ form_end(form) }}
            </tr>
        </table>
        <hr>
        <table class=\"col-md-12 table table-hover panel-primary table-responsive row-border cell-border display\" id=\"categorie\">
            <thead class=\"alert-info\">
                <tr>
                    <th>N<u>°</u></th>
            <th>Intitulés</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
                {% set compt = 1 %}
                {% for categorie in listcategorie %}
                    {% if compt <= 3 %}
                        <tr>
                            <td><b>{{ compt }}</b></td>
                            <td><b>{{ categorie }}</b></td>
                            <td><a href=\"{{ path('categorie_modifier', {'id': categorie.id}) }}\"><button type=\"button\" class=\"btn-link\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                            <td>
                                <button  style=\"color: red\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteCategorieModal_{{categorie.id}}\" class=\"btn-link\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                                <div id=\"deleteCategorieModal_{{categorie.id}}\" class=\"modal fade\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <center>Supprmer la catégorie <br><b>{{categorie}}</b> ?</center>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                                <a href=\"{{ path('categorie_supprimer', {'id': categorie.id}) }}\">
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
        <a class=\"pull-right\" href=\"{{path('categorie_liste')}}\" style=\"color: green\"><span class=\"glyphicon glyphicon-list\"></span><b> Voir toute la liste</b></a>
        <script>
            \$('#categorie').DataTable({
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
