<?php

/* ShoppingShopBundle:Approvisionnement:liste.html.twig */
class __TwigTemplate_3e4d755e1906b38784d36f812f671222b1d8dfe315cdae822895ea364e58f3d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ShopproShopBundle:Admin:index.html.twig", "ShoppingShopBundle:Approvisionnement:liste.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ShopproShopBundle:Admin:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "ShopproShopBundle:Approvisionnement:liste";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"col-md-10 col-md-offset-1 well\">
        <center><h2>Welcome to Approvisionnement:liste page</h2></center>
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
        // line 22
        $context["compt"] = 1;
        // line 23
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listapprovisionnement"]) ? $context["listapprovisionnement"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["approvisionnement"]) {
            // line 24
            echo "                    <tr>
                        <td><b>";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["compt"]) ? $context["compt"] : null), "html", null, true);
            echo "</b></td>
                        <td><b>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["approvisionnement"], "dateAppro", array()), "D d, M Y"), "html", null, true);
            echo "</b></td>
                        <td><b>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["approvisionnement"], "livreur", array()), "html", null, true);
            echo " </b></td>
                        <td><b>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["approvisionnement"], "receptionniste", array()), "html", null, true);
            echo "</b></td>
                        <td><b>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["approvisionnement"], "fournisseur", array()), "html", null, true);
            echo "</b></td>
                        <td><b>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["approvisionnement"], "categorie", array()), "html", null, true);
            echo "</b></td>
                        <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("approvisionnement_modifier", array("id" => $this->getAttribute($context["approvisionnement"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn-link\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                        <td>
                            <button  style=\"color: red\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteCategorieModal_";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["approvisionnement"], "id", array()), "html", null, true);
            echo "\" class=\"btn-link\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                            <div id=\"deleteCategorieModal_";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["approvisionnement"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\">
                                <div class=\"modal-dialog modal-sm\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                            <center>Supprmer le approvisionnement du <br><b>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["approvisionnement"], "dateAppro", array()), "D d, m Y"), "html", null, true);
            echo "</b> ?</center>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                            <a href=\"";
            // line 43
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
            // line 52
            $context["compt"] = ((isset($context["compt"]) ? $context["compt"] : null) + 1);
            // line 53
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['approvisionnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </tbody>
        </table>
        <script>
            \$('#approvisionnement').DataTable({
                \"pagingType\": \"full_numbers\",
                \"lengthMenu\": [[3, 3], [3, 3]],
                \"language\": {
                    \"url\": \"";
        // line 61
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
        return "ShoppingShopBundle:Approvisionnement:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 61,  134 => 54,  128 => 53,  126 => 52,  114 => 43,  107 => 39,  99 => 34,  95 => 33,  90 => 31,  86 => 30,  82 => 29,  78 => 28,  74 => 27,  70 => 26,  66 => 25,  63 => 24,  58 => 23,  56 => 22,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"ShopproShopBundle:Admin:index.html.twig\" %}

{% block title %}ShopproShopBundle:Approvisionnement:liste{% endblock %}

{% block body %}
    <div class=\"col-md-10 col-md-offset-1 well\">
        <center><h2>Welcome to Approvisionnement:liste page</h2></center>
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
                {% endfor %}
            </tbody>
        </table>
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
