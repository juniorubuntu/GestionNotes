<?php

/* SchoolNoteBundle:Bulletin:bulletinSeqClasse.html.twig */
class __TwigTemplate_ecb2c1382c2688ba8ac6b9a1f92c60bbd9374fd0bb90884b30ca6c2b173dcfd9 extends Twig_Template
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
        echo "<style type=\"text/css\">
    table {
        width: 100%;
        color: #717375;
        font-family: helvetica;
        line-height: 5mm;
        border-collapse: collapse;
    }

    .10p { width: 10%; } .15p { width: 15%; }
    .25p { width: 25%; } .50p { width: 50%; }
    .60p { width: 60%; } .75p { width: 75%; }
    .30p {width: 30%;} .20p{width: 20%;}
    .40p{width: 40%}

    .info td, .info1 td{
        height: 25px;
        border-top: 1px solid black; border-bottom: 1px solid black;
    }
    .notes td, .notes  th {
        border: 1px solid darkgray;
        height: 25px;
    }
    .conduite tr td{
        border: 1px solid darkgray;
        height: 35px;
    }
    .moyenne tr td{
        border: 1px solid darkgray;
        height: 55px;
    }
    .signature tr td{
        border: 1px solid darkgray;
        height: 55px;
    }

</style>
";
        // line 38
        echo (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"));
    }

    public function getTemplateName()
    {
        return "SchoolNoteBundle:Bulletin:bulletinSeqClasse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 38,  19 => 1,);
    }
}
/* <style type="text/css">*/
/*     table {*/
/*         width: 100%;*/
/*         color: #717375;*/
/*         font-family: helvetica;*/
/*         line-height: 5mm;*/
/*         border-collapse: collapse;*/
/*     }*/
/* */
/*     .10p { width: 10%; } .15p { width: 15%; }*/
/*     .25p { width: 25%; } .50p { width: 50%; }*/
/*     .60p { width: 60%; } .75p { width: 75%; }*/
/*     .30p {width: 30%;} .20p{width: 20%;}*/
/*     .40p{width: 40%}*/
/* */
/*     .info td, .info1 td{*/
/*         height: 25px;*/
/*         border-top: 1px solid black; border-bottom: 1px solid black;*/
/*     }*/
/*     .notes td, .notes  th {*/
/*         border: 1px solid darkgray;*/
/*         height: 25px;*/
/*     }*/
/*     .conduite tr td{*/
/*         border: 1px solid darkgray;*/
/*         height: 35px;*/
/*     }*/
/*     .moyenne tr td{*/
/*         border: 1px solid darkgray;*/
/*         height: 55px;*/
/*     }*/
/*     .signature tr td{*/
/*         border: 1px solid darkgray;*/
/*         height: 55px;*/
/*     }*/
/* */
/* </style>*/
/* {{ page | raw }}*/
