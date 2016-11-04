<?php

/* SchoolConfigBundle:Ecole:show.html.twig */
class __TwigTemplate_e67857f53f034c672fbf8d40acf6dd9194035db9a394427439b1bf2c902aa454 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolConfigBundle:Ecole:show.html.twig", 1);
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
        echo "<h1>Ecole</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomfrancais</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomFrancais", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomanglais</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomAnglais", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Devisefrancais</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "deviseFrancais", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Deviseanglais</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "deviseAnglais", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Boitepostal</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "boitePostal", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("config_ecole");
        echo "\">
                Retourner à la liste
            </a>
        </li>
        <li>
            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("config_ecole_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                Modifier
            </a>
        </li>
        <li>";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "SchoolConfigBundle:Ecole:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 46,  92 => 42,  84 => 37,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Ecole</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomfrancais</th>*/
/*                 <td>{{ entity.nomFrancais }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomanglais</th>*/
/*                 <td>{{ entity.nomAnglais }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Devisefrancais</th>*/
/*                 <td>{{ entity.deviseFrancais }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Deviseanglais</th>*/
/*                 <td>{{ entity.deviseAnglais }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Boitepostal</th>*/
/*                 <td>{{ entity.boitePostal }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('config_ecole') }}">*/
/*                 Retourner à la liste*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('config_ecole_edit', { 'id': entity.id }) }}">*/
/*                 Modifier*/
/*             </a>*/
/*         </li>*/
/*         <li>{{ form(delete_form) }}</li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
