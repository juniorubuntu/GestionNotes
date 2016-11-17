<?php

/* SchoolConfigBundle:Constante:index.html.twig */
class __TwigTemplate_8d1bea36b855c7d1763aaba83bb373a7c450cf6679046abe9fb9e21ea9094ea5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolConfigBundle:Constante:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h2>Informations régionnale</h2>

    <table class=\"records_list table table-striped\">
        <thead class=\"alert-info\">
            <tr>
                <th>Id</th>
                <th>Pays en francais</th>
                <th>Pays en anglais</th>
                <th>Ministère en francais</th>
                <th>Ministère en anglais</th>
                <th>Devise en francais</th>
                <th>Devise en anglais</th>
                <th>Détails</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 22
            echo "                <tr>
                    <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("constante_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "paysFrancais", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "paysAnglais", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ministereFrancais", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ministereAnglais", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "deviseFrancais", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "deviseAnglais", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("constante_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Voir</a>
                    </td>
                    <td>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("constante_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    <ul>
        ";
        // line 51
        echo "    </ul>
    <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("config_ecole_new");
        echo "\" class=\"btn green\">Suivant</a>
";
    }

    public function getTemplateName()
    {
        return "SchoolConfigBundle:Constante:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 52,  110 => 51,  104 => 38,  94 => 34,  88 => 31,  83 => 29,  79 => 28,  75 => 27,  71 => 26,  67 => 25,  63 => 24,  57 => 23,  54 => 22,  50 => 21,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h2>Informations régionnale</h2>*/
/* */
/*     <table class="records_list table table-striped">*/
/*         <thead class="alert-info">*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Pays en francais</th>*/
/*                 <th>Pays en anglais</th>*/
/*                 <th>Ministère en francais</th>*/
/*                 <th>Ministère en anglais</th>*/
/*                 <th>Devise en francais</th>*/
/*                 <th>Devise en anglais</th>*/
/*                 <th>Détails</th>*/
/*                 <th>Modifier</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('constante_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                     <td>{{ entity.paysFrancais }}</td>*/
/*                     <td>{{ entity.paysAnglais }}</td>*/
/*                     <td>{{ entity.ministereFrancais }}</td>*/
/*                     <td>{{ entity.ministereAnglais }}</td>*/
/*                     <td>{{ entity.deviseFrancais }}</td>*/
/*                     <td>{{ entity.deviseAnglais }}</td>*/
/*                     <td>*/
/*                         <a href="{{ path('constante_show', { 'id': entity.id }) }}">Voir</a>*/
/*                     </td>*/
/*                     <td>*/
/*                         <a href="{{ path('constante_edit', { 'id': entity.id }) }}">Modifier</a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         {#*/
/*         <li>*/
/*             */
/*             <a href="{{ path('constante_new') }}">*/
/*                 */
/*             </a>*/
/*             */
/*         </li>*/
/*         #}*/
/*     </ul>*/
/*     <a href="{{ path('config_ecole_new')}}" class="btn green">Suivant</a>*/
/* {% endblock %}*/
/* */
