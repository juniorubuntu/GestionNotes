<?php

/* ::base.html.twig */
class __TwigTemplate_e62eca47e5b722a6e3871e06353b25706bd5eafa8dd9eaba27c01d58eed4cd7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">
        <title>
            ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "        </title>
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    </body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        // line 10
        echo "                Bienvenue!
            ";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icomoon-social.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/leaflet.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
            <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/extensions/Buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/extensions/Buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/extensions/Buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/extensions/Buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/extensions/Buttons/js/buttons.colVis.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/jszip.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("DataTables/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "
        ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "            <script>window.jQuery || document.write('<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
            <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.sequence-min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main-menu.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/template.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 45,  172 => 44,  168 => 43,  164 => 42,  160 => 41,  156 => 40,  151 => 39,  148 => 38,  143 => 36,  140 => 35,  134 => 30,  130 => 29,  126 => 28,  122 => 27,  118 => 26,  114 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  69 => 14,  66 => 13,  61 => 10,  58 => 9,  52 => 47,  49 => 38,  47 => 35,  40 => 32,  38 => 13,  35 => 12,  33 => 9,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <meta name="description" content="">*/
/*         <meta name="viewport" content="width=device-width">*/
/*         <title>*/
/*             {% block title %}*/
/*                 Bienvenue!*/
/*             {% endblock %}*/
/*         </title>*/
/*         {% block stylesheets %}*/
/*             <script src="{{asset('js/jquery.min.js')}}"></script>*/
/*             <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">*/
/*             <link rel="stylesheet" href="{{asset('css/icomoon-social.css')}}">*/
/*             <link rel="stylesheet" href="{{asset('css/leaflet.css')}}" />*/
/*             <link rel="stylesheet" href="{{asset('css/main.css')}}">*/
/*             <script src="{{asset('js/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>*/
/*             <script type="text/javascript" src="{{ asset('DataTables/media/js/jquery.dataTables.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('DataTables/media/js/dataTables.bootstrap.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('DataTables/extensions/Buttons/js/dataTables.buttons.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('DataTables/extensions/Buttons/js/buttons.bootstrap.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('DataTables/extensions/Buttons/js/buttons.flash.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('DataTables/extensions/Buttons/js/buttons.html5.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('DataTables/extensions/Buttons/js/buttons.print.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('DataTables/extensions/Buttons/js/buttons.colVis.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('DataTables/jszip.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('DataTables/pdfmake.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('DataTables/vfs_fonts.js') }}"></script>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/* */
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script>window.jQuery || document.write('<script src="{{asset('js/jquery-1.9.1.min.js')}}"><\/script>')</script>*/
/*             <script src="{{asset('js/bootstrap.min.js')}}"></script>*/
/*             <script src="{{asset('js/jquery.fitvids.js')}}"></script>*/
/*             <script src="{{asset('js/jquery.sequence-min.js')}}"></script>*/
/*             <script src="{{asset('js/jquery.bxslider.js')}}"></script>*/
/*             <script src="{{asset('js/main-menu.js')}}"></script>*/
/*             <script src="{{asset('js/template.js')}}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
