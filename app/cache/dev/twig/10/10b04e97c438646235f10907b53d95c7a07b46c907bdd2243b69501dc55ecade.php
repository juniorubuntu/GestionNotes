<?php

/* SchoolConfigBundle:Constante:show.html.twig */
class __TwigTemplate_6173cb10d8e87145ab3a9f31fe8b6b47ef0ad7571c0ad6687cd43d940ad91881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolConfigBundle:Constante:show.html.twig", 1);
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
        echo "<h1>Paramètres régionaux</h1>

    <table class=\"record_properties table table-striped\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Paysfrancais</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paysFrancais", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Paysanglais</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "paysAnglais", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ministerefrancais</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ministereFrancais", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ministereanglais</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ministereAnglais", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Devisefrancais</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "deviseFrancais", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Deviseanglais</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "deviseAnglais", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("constante");
        echo "\">
                Retourner à la page
            </a>
        </li>
        <li>
            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("constante_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                Modifier
            </a>
        </li>
        <li>";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
    <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("config_ecole_new");
        echo "\" class=\"btn green\">Suivant</a>
";
    }

    public function getTemplateName()
    {
        return "SchoolConfigBundle:Constante:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 52,  106 => 50,  99 => 46,  91 => 41,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Paramètres régionaux</h1>*/
/* */
/*     <table class="record_properties table table-striped">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Paysfrancais</th>*/
/*                 <td>{{ entity.paysFrancais }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Paysanglais</th>*/
/*                 <td>{{ entity.paysAnglais }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ministerefrancais</th>*/
/*                 <td>{{ entity.ministereFrancais }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ministereanglais</th>*/
/*                 <td>{{ entity.ministereAnglais }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Devisefrancais</th>*/
/*                 <td>{{ entity.deviseFrancais }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Deviseanglais</th>*/
/*                 <td>{{ entity.deviseAnglais }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul class="record_actions">*/
/*         <li>*/
/*             <a href="{{ path('constante') }}">*/
/*                 Retourner à la page*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('constante_edit', { 'id': entity.id }) }}">*/
/*                 Modifier*/
/*             </a>*/
/*         </li>*/
/*         <li>{{ form(delete_form) }}</li>*/
/*     </ul>*/
/*     <a href="{{ path('config_ecole_new')}}" class="btn green">Suivant</a>*/
/* {% endblock %}*/
/* */
