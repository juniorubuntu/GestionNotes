<?php

/* ShoppingShopBundle:Fournisseur:liste.html.twig */
class __TwigTemplate_149ffcff817ff0a2a579752c65b3e1ff2a11440a684dbeeae955d82f8f22a1e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ShoppingShopBundle:Admin:index.html.twig", "ShoppingShopBundle:Fournisseur:liste.html.twig", 1);
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
        echo "ShopproShopBundle:Fournisseur:liste";
    }

    // line 5
    public function block_corps($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"col-md-9\">
        <h2>Page de la liste des fournisseurs</h2>
        <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_ajouter");
        echo "\" class=\"btn-link pull-right\"><span class=\"glyphicon glyphicon-plus-sign\"></span>
            <b>Ajouter un fournisseur</b>
        </a>
        <table class=\"col-md-12 table table-hover table-responsive row-border cell-border display\" id=\"fournisseur\">
            <thead class=\"panel panel-primary alert-info active panel-heading\">
                <tr>
                    <th>N<u>°</u></th>
            <th>Nom du fournisseur</th>
            <th>Société</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Localité</th>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["listfournisseur"]) ? $context["listfournisseur"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["fournisseur"]) {
            // line 27
            echo "                    <tr>
                        <td><b>";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["compt"]) ? $context["compt"] : null), "html", null, true);
            echo "</b></td>
                        <td><b>";
            // line 29
            echo twig_escape_filter($this->env, $context["fournisseur"], "html", null, true);
            echo "</b></td>
                        <td><b>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "societe", array()), "html", null, true);
            echo " </b></td>
                        <td><b>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "telephone", array()), "html", null, true);
            echo "</b></td>
                        <td><b>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "email", array()), "html", null, true);
            echo "</b></td>
                        <td><b>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "localite", array()), "html", null, true);
            echo "</b></td>
                        <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fournisseur_modifier", array("id" => $this->getAttribute($context["fournisseur"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn-link\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                        <td>
                            <button  style=\"color: red\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteCategorieModal_";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "id", array()), "html", null, true);
            echo "\" class=\"btn-link\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                            <div id=\"deleteCategorieModal_";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["fournisseur"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\">
                                <div class=\"modal-dialog modal-sm\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                            <center>Supprmer le fournisseur de nom <br><b>";
            // line 42
            echo twig_escape_filter($this->env, $context["fournisseur"], "html", null, true);
            echo "</b> ?</center>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                            <a href=\"";
            // line 46
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
            // line 55
            $context["compt"] = ((isset($context["compt"]) ? $context["compt"] : null) + 1);
            // line 56
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fournisseur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            </tbody>
        </table>
        <script>
            \$('#fournisseur').DataTable({
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
        return "ShoppingShopBundle:Fournisseur:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 64,  140 => 57,  134 => 56,  132 => 55,  120 => 46,  113 => 42,  105 => 37,  101 => 36,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  69 => 27,  64 => 26,  62 => 25,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"ShoppingShopBundle:Admin:index.html.twig\" %}

{% block title %}ShopproShopBundle:Fournisseur:liste{% endblock %}

{% block corps %}
    <div class=\"col-md-9\">
        <h2>Page de la liste des fournisseurs</h2>
        <a href=\"{{path('fournisseur_ajouter')}}\" class=\"btn-link pull-right\"><span class=\"glyphicon glyphicon-plus-sign\"></span>
            <b>Ajouter un fournisseur</b>
        </a>
        <table class=\"col-md-12 table table-hover table-responsive row-border cell-border display\" id=\"fournisseur\">
            <thead class=\"panel panel-primary alert-info active panel-heading\">
                <tr>
                    <th>N<u>°</u></th>
            <th>Nom du fournisseur</th>
            <th>Société</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Localité</th>
            <th>Modifier</th>
            <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
                {% set compt = 1 %}
                {% for fournisseur in listfournisseur %}
                    <tr>
                        <td><b>{{ compt }}</b></td>
                        <td><b>{{ fournisseur }}</b></td>
                        <td><b>{{ fournisseur.societe }} </b></td>
                        <td><b>{{ fournisseur.telephone }}</b></td>
                        <td><b>{{ fournisseur.email }}</b></td>
                        <td><b>{{ fournisseur.localite }}</b></td>
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
                {% endfor %}
            </tbody>
        </table>
        <script>
            \$('#fournisseur').DataTable({
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
