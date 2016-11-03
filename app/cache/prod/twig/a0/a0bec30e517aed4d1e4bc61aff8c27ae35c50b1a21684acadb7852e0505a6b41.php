<?php

/* ShoppingShopBundle:Personnel:liste.html.twig */
class __TwigTemplate_adf98ccb267b6f7af20107c118ea3fa77f121f8b6849ede6dbca6699c5425432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ShopproShopBundle:Index:index.html.twig", "ShoppingShopBundle:Personnel:liste.html.twig", 1);
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
        echo "ShopproShopBundle:Personnel:liste";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"col-md-8 col-md-offset-2 well\">
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
        // line 19
        $context["compt"] = 1;
        // line 20
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listpersonnel"]) ? $context["listpersonnel"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["personnel"]) {
            // line 21
            echo "                    <tr>
                        <td><b>";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["compt"]) ? $context["compt"] : null), "html", null, true);
            echo "</b></td>
                        <td><b>";
            // line 23
            echo twig_escape_filter($this->env, $context["personnel"], "html", null, true);
            echo "</b></td>
                        <td><b>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["personnel"], "telephone", array()), "html", null, true);
            echo " </b></td>
                        <td><b>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["personnel"], "dateRecru", array()), "D d, M Y"), "html", null, true);
            echo "</b></td>
                        <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personnel_modifier", array("id" => $this->getAttribute($context["personnel"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn-link\"><span class=\"glyphicon glyphicon-edit\"></span></button></a></td>
                        <td>
                            <button  style=\"color: red\" type=\"button\" data-toggle=\"modal\" data-target=\"#deleteCategorieModal_";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["personnel"], "id", array()), "html", null, true);
            echo "\" class=\"btn-link\"><span class=\"glyphicon glyphicon-trash\"></span></button>
                            <div id=\"deleteCategorieModal_";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["personnel"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\">
                                <div class=\"modal-dialog modal-sm\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                            <center>Supprmer le personnel de nom <br><b>";
            // line 34
            echo twig_escape_filter($this->env, $context["personnel"], "html", null, true);
            echo "</b> ?</center>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                            <a href=\"";
            // line 38
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
            // line 47
            $context["compt"] = ((isset($context["compt"]) ? $context["compt"] : null) + 1);
            // line 48
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personnel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        </table>
        <a class=\"pull-right\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("personnel_liste");
        echo "\" style=\"color: green\"><span class=\"glyphicon glyphicon-list\"></span><b> Voir toute la liste</b></a>
        <script>
            \$('#personnel').DataTable({
                \"pagingType\": \"full_numbers\",
                \"lengthMenu\": [[3, 3], [3, 3]],
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
        return "ShoppingShopBundle:Personnel:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 57,  127 => 51,  123 => 49,  117 => 48,  115 => 47,  103 => 38,  96 => 34,  88 => 29,  84 => 28,  79 => 26,  75 => 25,  71 => 24,  67 => 23,  63 => 22,  60 => 21,  55 => 20,  53 => 19,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"ShopproShopBundle:Index:index.html.twig\" %}

{% block title %}ShopproShopBundle:Personnel:liste{% endblock %}

{% block body %}
    <div class=\"col-md-8 col-md-offset-2 well\">
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
