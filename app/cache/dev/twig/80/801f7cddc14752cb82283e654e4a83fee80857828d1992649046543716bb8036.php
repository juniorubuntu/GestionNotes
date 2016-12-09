<?php

/* SchoolNoteBundle:Bulletin:performancesEleve.html.twig */
class __TwigTemplate_961c8fe874f843e727a5ca327379dcb6cbed764d499ce7ebad89b3ca6a441b0b extends Twig_Template
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
        echo "<table border=\"1\">
    <thead>
        <th></th>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCategories"]) ? $context["listCategories"] : $this->getContext($context, "listCategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 5
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</th>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </thead>
    <tbody>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscriptions"]) ? $context["inscriptions"] : $this->getContext($context, "inscriptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
            // line 10
            echo "        <tr>
            <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscription"], "annee", array()), "anneeScolaire", array()), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inscription"], "classe", array()), "nom", array()), "html", null, true);
            echo ")</td>
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["listeSequences"]) ? $context["listeSequences"] : $this->getContext($context, "listeSequences")), 0, array(), "array"), "listeCategories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 13
                echo "            <td>
                ";
                // line 14
                $context["moySeq"] = 0;
                // line 15
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listeSequences"]) ? $context["listeSequences"] : $this->getContext($context, "listeSequences")));
                foreach ($context['_seq'] as $context["_key"] => $context["sequence"]) {
                    // line 16
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sequence"], "nom", array()), "html", null, true);
                    echo "
                        ";
                    // line 17
                    $context["totalCat"] = 0;
                    // line 18
                    echo "                        ";
                    $context["totalCoeff"] = 0;
                    // line 19
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sequence"], "listeCategories", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                        // line 20
                        echo "                            ";
                        if (($context["cat"] == $context["categorie"])) {
                            // line 21
                            echo "                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cat"], "listeMatieres", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
                                // line 22
                                echo "                                    ";
                                if ( !(null === $context["matiere"])) {
                                    // line 23
                                    echo "                                        ";
                                    if ( !(null === $this->getAttribute($context["matiere"], "evaluationSeq", array()))) {
                                        // line 24
                                        echo "                                            ";
                                        $context["totalCat"] = ((isset($context["totalCat"]) ? $context["totalCat"] : $this->getContext($context, "totalCat")) + ($this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "note", array()) * $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "index", array()), "coefficient", array())));
                                        // line 25
                                        echo "                                            ";
                                        $context["totalCoeff"] = ((isset($context["totalCoeff"]) ? $context["totalCoeff"] : $this->getContext($context, "totalCoeff")) + $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "index", array()), "coefficient", array()));
                                        // line 26
                                        echo "                                            ";
                                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["matiere"], "evaluationSeq", array()), 0, array(), "array"), "note", array()), "html", null, true);
                                        echo "
                                        ";
                                    }
                                    // line 28
                                    echo "                                        ";
                                    $context["moySeq"] = ((isset($context["moySeq"]) ? $context["moySeq"] : $this->getContext($context, "moySeq")) + ((isset($context["totalCat"]) ? $context["totalCat"] : $this->getContext($context, "totalCat")) / (isset($context["totalCoeff"]) ? $context["totalCoeff"] : $this->getContext($context, "totalCoeff"))));
                                    // line 29
                                    echo "                                    ";
                                }
                                // line 30
                                echo "                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 31
                            echo "                            ";
                        }
                        // line 32
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 33
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sequence'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "                ";
                $context["moyAnn"] = ((isset($context["moySeq"]) ? $context["moySeq"] : $this->getContext($context, "moySeq")) / twig_length_filter($this->env, (isset($context["listeSequences"]) ? $context["listeSequences"] : $this->getContext($context, "listeSequences"))));
                // line 35
                echo "                MoyAnn: ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["moyAnn"]) ? $context["moyAnn"] : $this->getContext($context, "moyAnn")), 2), "html", null, true);
                echo "
            </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </tbody>

</table>";
    }

    public function getTemplateName()
    {
        return "SchoolNoteBundle:Bulletin:performancesEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 40,  149 => 38,  139 => 35,  136 => 34,  130 => 33,  124 => 32,  121 => 31,  115 => 30,  112 => 29,  109 => 28,  103 => 26,  100 => 25,  97 => 24,  94 => 23,  91 => 22,  86 => 21,  83 => 20,  78 => 19,  75 => 18,  73 => 17,  68 => 16,  63 => 15,  61 => 14,  58 => 13,  54 => 12,  48 => 11,  45 => 10,  41 => 9,  37 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <table border="1">*/
/*     <thead>*/
/*         <th></th>*/
/*     {% for categorie in listCategories %}*/
/*         <th>{{ categorie.nom }}</th>*/
/*     {% endfor %}*/
/*     </thead>*/
/*     <tbody>*/
/*     {% for inscription in inscriptions %}*/
/*         <tr>*/
/*             <td>{{ inscription.annee.anneeScolaire }}({{ inscription.classe.nom }})</td>*/
/*             {% for categorie  in listeSequences[0].listeCategories %}*/
/*             <td>*/
/*                 {% set moySeq = 0 %}*/
/*                     {% for sequence  in listeSequences %}*/
/*                         {{ sequence.nom }}*/
/*                         {% set totalCat = 0 %}*/
/*                         {% set totalCoeff = 0 %}*/
/*                         {% for cat  in sequence.listeCategories %}*/
/*                             {% if cat == categorie %}*/
/*                                 {% for  matiere in cat.listeMatieres %}*/
/*                                     {% if matiere is not null %}*/
/*                                         {% if matiere.evaluationSeq is not null %}*/
/*                                             {% set totalCat = totalCat + (matiere.evaluationSeq[0].note * matiere.evaluationSeq[0].index.coefficient )  %}*/
/*                                             {% set totalCoeff = totalCoeff +  matiere.evaluationSeq[0].index.coefficient  %}*/
/*                                             {{ matiere.evaluationSeq[0].note }}*/
/*                                         {% endif %}*/
/*                                         {% set moySeq =  moySeq +  (totalCat / totalCoeff) %}*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     {% endfor %}*/
/*                 {% set  moyAnn = moySeq /listeSequences |length  %}*/
/*                 MoyAnn: {{ moyAnn | number_format(2) }}*/
/*             </td>*/
/*             {% endfor %}*/
/*         </tr>*/
/*     {% endfor %}*/
/*     </tbody>*/
/* */
/* </table>*/
