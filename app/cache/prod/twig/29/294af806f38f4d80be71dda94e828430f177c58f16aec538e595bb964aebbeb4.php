<?php

/* ShoppingShopBundle:Produit:pageProduit.html.twig */
class __TwigTemplate_9d61bd40e2e3705089839acaf2a027ab031f41265c46a2fe8dce1a67691e59d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<center><h4>Liste des produits concernés</h4></center>
<table class=\"col-md-12 panel panel-primary table table-hover table-striped row-border cell-border display\" id=\"produit\">
    <thead class=\"panel-heading\">
        <tr>
            <th>N<u>°</u></th>
<th>Code Bar</th>
<th>Nom du produit</th>
<th>Qté en stock</th>
<th>Catégorie d'appart.</th>
<th>Stock d'Iden.</th>
<th>Prix Unit.</th>
<th>Nbr. Ajouté</th>
<th>Annuler</th>
<th>Valider</th>
</tr>
</thead>
<tbody>
    ";
        // line 18
        $context["compt"] = 1;
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeProduit"]) ? $context["listeProduit"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 20
            echo "        <tr>
            <td><b>";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["compt"]) ? $context["compt"] : null), "html", null, true);
            echo "</b></td>
            <td><b>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "codeBar", array()), "html", null, true);
            echo "</b></td>
            <td><b>";
            // line 23
            echo twig_escape_filter($this->env, $context["produit"], "html", null, true);
            echo "</b></td>
            <td class=\"success\"><b>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "qteStock", array()), "html", null, true);
            echo " <i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "unite", array()), "html", null, true);
            echo "</i></b></td>
            <td><b>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "categorie", array()), "html", null, true);
            echo "</b></td>
            <td><b>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "stock", array()), "html", null, true);
            echo "</b></td>
            <td class=\"alert-info\"><b>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixUnit", array()), "html", null, true);
            echo " <i>FCFA</i></b></td>
            <td><b class=\"input-group\" style=\"width: 50%\">
                    <input type=\"number\" min=\"0\" value=\"0\" class=\"form-control val_";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\"/>
                    <div class=\"input-group-addon\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "unite", array()), "html", null, true);
            echo "</div>
                </b>
            </td>
            <td><input type=\"reset\" class=\"form-control btn btn-default\" value=\"Vider\"></a></td>
            <td>
                <button type=\"button\" data-toggle=\"modal\" onclick=\"document.getElementsByClassName('valeur_";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "')[0].value = document.getElementsByClassName('val_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "')[0].value;\" data-target=\"#deleteCategorieModal_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus-sign\"></span></button>
                <div id=\"deleteCategorieModal_";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\">
                    <div class=\"modal-dialog modal-sm\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                <center>Confirmation de l'insertion de <br>
                                    <div class=\"input-group\" style=\"width: 50%\">
                                        <input type=\"text\" disabled=\"\" class=\"form-control valeur_";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "\" value=\"0\"><div class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "unite", array()), "html", null, true);
            echo "</div></div> 
                                    <p><b> de <i>";
            // line 44
            echo twig_escape_filter($this->env, $context["produit"], "html", null, true);
            echo "</i></b></center>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit_modifier", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
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
            // line 57
            $context["compt"] = ((isset($context["compt"]) ? $context["compt"] : null) + 1);
            // line 58
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "</tbody>
</table>
<script>
    \$('#produit').DataTable({
        \"pagingType\": \"full_numbers\",
        \"lengthMenu\": [[10, 20], [10, 20]],
        \"language\": {
            \"url\": \"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("DataTables/French.json"), "html", null, true);
        echo "\"
        }

    });
</script>";
    }

    public function getTemplateName()
    {
        return "ShoppingShopBundle:Produit:pageProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 66,  142 => 59,  136 => 58,  134 => 57,  122 => 48,  115 => 44,  109 => 43,  99 => 36,  91 => 35,  83 => 30,  79 => 29,  74 => 27,  70 => 26,  66 => 25,  60 => 24,  56 => 23,  52 => 22,  48 => 21,  45 => 20,  40 => 19,  38 => 18,  19 => 1,);
    }

    public function getSource()
    {
        return "<center><h4>Liste des produits concernés</h4></center>
<table class=\"col-md-12 panel panel-primary table table-hover table-striped row-border cell-border display\" id=\"produit\">
    <thead class=\"panel-heading\">
        <tr>
            <th>N<u>°</u></th>
<th>Code Bar</th>
<th>Nom du produit</th>
<th>Qté en stock</th>
<th>Catégorie d'appart.</th>
<th>Stock d'Iden.</th>
<th>Prix Unit.</th>
<th>Nbr. Ajouté</th>
<th>Annuler</th>
<th>Valider</th>
</tr>
</thead>
<tbody>
    {% set compt = 1 %}
    {% for produit in listeProduit %}
        <tr>
            <td><b>{{ compt }}</b></td>
            <td><b>{{ produit.codeBar }}</b></td>
            <td><b>{{ produit }}</b></td>
            <td class=\"success\"><b>{{ produit.qteStock }} <i>{{ produit.unite }}</i></b></td>
            <td><b>{{ produit.categorie }}</b></td>
            <td><b>{{ produit.stock }}</b></td>
            <td class=\"alert-info\"><b>{{ produit.prixUnit }} <i>FCFA</i></b></td>
            <td><b class=\"input-group\" style=\"width: 50%\">
                    <input type=\"number\" min=\"0\" value=\"0\" class=\"form-control val_{{produit.id}}\"/>
                    <div class=\"input-group-addon\">{{produit.unite}}</div>
                </b>
            </td>
            <td><input type=\"reset\" class=\"form-control btn btn-default\" value=\"Vider\"></a></td>
            <td>
                <button type=\"button\" data-toggle=\"modal\" onclick=\"document.getElementsByClassName('valeur_{{produit.id}}')[0].value = document.getElementsByClassName('val_{{produit.id}}')[0].value;\" data-target=\"#deleteCategorieModal_{{produit.id}}\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-plus-sign\"></span></button>
                <div id=\"deleteCategorieModal_{{produit.id}}\" class=\"modal fade\">
                    <div class=\"modal-dialog modal-sm\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                <center>Confirmation de l'insertion de <br>
                                    <div class=\"input-group\" style=\"width: 50%\">
                                        <input type=\"text\" disabled=\"\" class=\"form-control valeur_{{produit.id}}\" value=\"0\"><div class=\"input-group-addon\">{{produit.unite}}</div></div> 
                                    <p><b> de <i>{{produit}}</i></b></center>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span></button>
                                <a href=\"{{ path('produit_modifier', {'id': produit.id}) }}\">
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
    \$('#produit').DataTable({
        \"pagingType\": \"full_numbers\",
        \"lengthMenu\": [[10, 20], [10, 20]],
        \"language\": {
            \"url\": \"{{ asset('DataTables/French.json') }}\"
        }

    });
</script>";
    }
}
