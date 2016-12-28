<?php

/* SchoolGestionBundle:Default:index.html.twig */
class __TwigTemplate_e8393c43c396d1f92e78124bac6b603d741611055ceb90af2e52412e8a7cea7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SchoolGestionBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'aside' => array($this, 'block_aside'),
            'content' => array($this, 'block_content'),
            'pied' => array($this, 'block_pied'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    Accueil
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayBlock('menu', $context, $blocks);
        // line 84
        echo "    <div class=\"col-md-3\">
        ";
        // line 85
        $this->displayBlock('aside', $context, $blocks);
        // line 88
        echo "    </div>
    <div class=\"col-md-9\">
        ";
        // line 90
        $this->displayBlock('content', $context, $blocks);
        // line 226
        echo "    </div>
    ";
        // line 227
        $this->displayBlock('pied', $context, $blocks);
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "        <nav id=\"navbar-darkblue\" class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"navbar-header\"><a class=\"navbar-brand\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("school_gestion_homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> Accueil</a>
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-menubuilder\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span>
                </button>
            </div>
            <div class=\"collapse navbar-collapse navbar-menubuilder\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-th-list\"></i> Enseigants <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">Liste des enseignants</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-th-list\"></i> Enseignements <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("estdispense");
        echo "\">Liste des enseignements</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> Elèves <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("school_student_list");
        echo "\">Liste des élèves</a></li>
                            <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("inscription");
        echo "\">Inscriptions</a></li>
                        </ul>
                    </li>

                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-folder-open\"></i>  Cat&eacute;gories <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("categorie");
        echo "\"><i class=\"glyphicon glyphicon-folder-open\"></i> Cat&eacute;gories</a></li>
                            <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("matiere");
        echo "\"><i class=\"glyphicon glyphicon-folder-open\"></i> Mati&egrave;res</a></li>
                        </ul>
                    </li>
                    ";
        // line 42
        echo "                        ";
        // line 43
        echo "                        ";
        // line 44
        echo "                            ";
        // line 45
        echo "                        ";
        // line 46
        echo "                    ";
        // line 47
        echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-list\"></i> Séquences <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("sequence");
        echo "\"><i class=\"glyphicon glyphicon-list\"></i> Liste des séquences</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-list\"></i> Cycles <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("cycle");
        echo "\"><i class=\"glyphicon glyphicon-list\"></i> Liste des cycles</a></li>
                            <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("classe");
        echo "\"><i class=\"glyphicon glyphicon-folder-open\"></i> Liste des classes</a></li>
                        </ul>
                    </li>
                </ul>
                <p class=\"navbar-text navbar-right\">
                    ";
        // line 62
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 63
            echo "                        Utilisateur: <b style=\"color: blue\">
                            ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                        </b> |
                        <a style=\"color: brown\" href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-off\"></span>
                            <span>";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</span>
                        </a>
                    ";
        } else {
            // line 70
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 72
        echo "                </p>
            </div>
        </nav>
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flas_message"]) {
            // line 77
            echo "                <div class=\"alert alert-warning text-center\">";
            echo twig_escape_filter($this->env, $context["flas_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flas_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flas_message"]) {
            // line 80
            echo "                <div class=\"alert alert-danger text-center\">";
            echo twig_escape_filter($this->env, $context["flas_message"], "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flas_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </div>
    ";
    }

    // line 85
    public function block_aside($context, array $blocks = array())
    {
        // line 86
        echo "            <h2>Je suis le \"aside\"</h2>
        ";
    }

    // line 90
    public function block_content($context, array $blocks = array())
    {
        // line 91
        echo "            <h2 class=\"text-center\">Mes salles de classe</h2>
            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeDispense"]) ? $context["listeDispense"] : $this->getContext($context, "listeDispense")));
        foreach ($context['_seq'] as $context["_key"] => $context["dispense"]) {
            // line 93
            echo "                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"shop-item panel-primary\">
                        <div class=\"panel btn-blue\">
                            <b style=\"text-align: left\"><span style=\"color: orange; font-size: 18px\" class=\"glyphicon glyphicon-folder-open\"></span> ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "classe", array()), "html", null, true);
            echo "</b>
                        </div>
                        <ol class=\"\">
                            <li><a class=\"btn-link\" data-toggle=\"modal\" data-target=\"#sequence_";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "id", array()), "html", null, true);
            echo "\">Remplir les notes</a>
                                <div id=\"sequence_";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <center><b>Choisir la séquence</b></center>
                                            </div>
                                            <div class=\"col-md-12 modal-body\">
                                                ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listSequence"]) ? $context["listSequence"] : $this->getContext($context, "listSequence")));
            foreach ($context['_seq'] as $context["_key"] => $context["sequence"]) {
                // line 109
                echo "                                                    <center>
                                                        <a href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_add", array("id" => $this->getAttribute($this->getAttribute($context["dispense"], "classe", array()), "id", array()), "idSeq" => $this->getAttribute($context["sequence"], "id", array()), "idMat" => $this->getAttribute($this->getAttribute($context["dispense"], "matiere", array()), "id", array()), "idAnnee" => $this->getAttribute($this->getAttribute($context["dispense"], "annee", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-green\">
                                                            <b>";
                // line 111
                echo twig_escape_filter($this->env, $context["sequence"], "html", null, true);
                echo "</b>
                                                        </a> 
                                                    </center>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sequence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                                                <hr>
                                                <button type=\"button\" class=\"btn btn-red pull-right\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span>Annuler</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a class=\"btn-link\" data-toggle=\"modal\" data-target=\"#sequenceedit_";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "id", array()), "html", null, true);
            echo "\">Modifier une note</a>
                                <div id=\"sequenceedit_";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <center><b>Choisir la séquence</b></center>
                                            </div>
                                            <div class=\"col-md-12 modal-body\">
                                                ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listSequence"]) ? $context["listSequence"] : $this->getContext($context, "listSequence")));
            foreach ($context['_seq'] as $context["_key"] => $context["sequence"]) {
                // line 132
                echo "                                                    <center>
                                                        <a href=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("note_editnote", array("id" => $this->getAttribute($this->getAttribute($context["dispense"], "classe", array()), "id", array()), "idSeq" => $this->getAttribute($context["sequence"], "id", array()), "idMat" => $this->getAttribute($this->getAttribute($context["dispense"], "matiere", array()), "id", array()), "idAnnee" => $this->getAttribute($this->getAttribute($context["dispense"], "annee", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-green\">
                                                            <b>";
                // line 134
                echo twig_escape_filter($this->env, $context["sequence"], "html", null, true);
                echo "</b>
                                                        </a>
                                                    </center>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sequence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                                                <hr>
                                                <button type=\"button\" class=\"btn btn-red pull-right\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span>Annuler</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a class=\"btn-link\" data-toggle=\"modal\" data-target=\"#notespdf_";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "id", array()), "html", null, true);
            echo "\">Exporter les notes en PDF</a>
                                <div id=\"notespdf_";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <center><b>Choisir la séquence</b></center>
                                            </div>
                                            <div class=\"col-md-12 modal-body\">
                                                ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listSequence"]) ? $context["listSequence"] : $this->getContext($context, "listSequence")));
            foreach ($context['_seq'] as $context["_key"] => $context["sequence"]) {
                // line 155
                echo "                                                    <center>
                                                        <a href=\"";
                // line 156
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notespdf", array("idEnseignement" => $this->getAttribute($context["dispense"], "id", array()), "idSequence" => $this->getAttribute($context["sequence"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-green\">
                                                            <b>";
                // line 157
                echo twig_escape_filter($this->env, $context["sequence"], "html", null, true);
                echo "</b>
                                                        </a>
                                                    </center>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sequence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                                                <hr>
                                                <button type=\"button\" class=\"btn btn-red pull-right\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span>Annuler</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a class=\"btn-link\" data-toggle=\"modal\" data-target=\"#stat_";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "id", array()), "html", null, true);
            echo "\">Générer les statistiques</a>
                                <div id=\"stat_";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <center><b>Choisir la séquence</b></center>
                                            </div>
                                            <div class=\"col-md-12 modal-body\">
                                                ";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listSequence"]) ? $context["listSequence"] : $this->getContext($context, "listSequence")));
            foreach ($context['_seq'] as $context["_key"] => $context["sequence"]) {
                // line 178
                echo "                                                    <center>
                                                        <a href=\"";
                // line 179
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("statistiques", array("idSequence" => $this->getAttribute($context["sequence"], "id", array()), "idMatiere" => $this->getAttribute($this->getAttribute($context["dispense"], "matiere", array()), "id", array()), "idEnseignant" => $this->getAttribute($this->getAttribute($context["dispense"], "enseignant", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-green\">
                                                            <b>";
                // line 180
                echo twig_escape_filter($this->env, $context["sequence"], "html", null, true);
                echo "</b>
                                                        </a>
                                                    </center>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sequence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "                                                <hr>
                                                <button type=\"button\" class=\"btn btn-red pull-right\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span>Annuler</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            ";
            // line 192
            if (($this->getAttribute($context["dispense"], "titulaire", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
                // line 193
                echo "                                <li><a class=\"btn-link\" data-toggle=\"modal\" data-target=\"#bulletin_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "id", array()), "html", null, true);
                echo "\" href=\"\">Générer les bulletins</a></li>
                                <div id=\"bulletin_";
                // line 194
                echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "id", array()), "html", null, true);
                echo "\" class=\"modal fade\">
                                    <div class=\"modal-dialog modal-sm\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <center><b>Choisir la séquence</b></center>
                                            </div>
                                            <div class=\"col-md-12 modal-body\">
                                                ";
                // line 202
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listSequence"]) ? $context["listSequence"] : $this->getContext($context, "listSequence")));
                foreach ($context['_seq'] as $context["_key"] => $context["sequence"]) {
                    // line 203
                    echo "                                                    <center>
                                                        <a href=\"";
                    // line 204
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bulletin_seq_classe", array("idClasse" => $this->getAttribute($this->getAttribute($context["dispense"], "classe", array()), "id", array()), "idSeq" => $this->getAttribute($context["sequence"], "id", array()), "idAnnee" => $this->getAttribute($this->getAttribute($context["dispense"], "annee", array()), "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-green\">
                                                            <b>";
                    // line 205
                    echo twig_escape_filter($this->env, $context["sequence"], "html", null, true);
                    echo "</b>
                                                        </a>
                                                    </center>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sequence'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 209
                echo "                                                <hr>
                                                <button type=\"button\" class=\"btn btn-red pull-right\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove-sign\"></span>Annuler</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
            } else {
                // line 216
                echo "                                ..
                            ";
            }
            // line 218
            echo "                        </ol>
                        <div class=\"pull-right\">
                            Matière: <i style=\"color: forestgreen\">";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute($context["dispense"], "matiere", array()), "html", null, true);
            echo "</i>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dispense'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "        ";
    }

    // line 227
    public function block_pied($context, array $blocks = array())
    {
        // line 228
        echo "        ";
        // line 229
        echo "

        ";
        // line 232
        echo "            ";
        // line 233
        echo "                ";
        // line 234
        echo "                    ";
        // line 235
        echo "                ";
        // line 236
        echo "            ";
        // line 237
        echo "        ";
        // line 238
        echo "    ";
    }

    public function getTemplateName()
    {
        return "SchoolGestionBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 238,  527 => 237,  525 => 236,  523 => 235,  521 => 234,  519 => 233,  517 => 232,  513 => 229,  511 => 228,  508 => 227,  504 => 225,  493 => 220,  489 => 218,  485 => 216,  476 => 209,  466 => 205,  462 => 204,  459 => 203,  455 => 202,  444 => 194,  439 => 193,  437 => 192,  427 => 184,  417 => 180,  413 => 179,  410 => 178,  406 => 177,  395 => 169,  391 => 168,  382 => 161,  372 => 157,  368 => 156,  365 => 155,  361 => 154,  350 => 146,  346 => 145,  337 => 138,  327 => 134,  323 => 133,  320 => 132,  316 => 131,  305 => 123,  301 => 122,  292 => 115,  282 => 111,  278 => 110,  275 => 109,  271 => 108,  260 => 100,  256 => 99,  250 => 96,  245 => 93,  241 => 92,  238 => 91,  235 => 90,  230 => 86,  227 => 85,  222 => 82,  213 => 80,  208 => 79,  199 => 77,  195 => 76,  189 => 72,  181 => 70,  175 => 67,  171 => 66,  166 => 64,  163 => 63,  161 => 62,  153 => 57,  149 => 56,  140 => 50,  135 => 47,  133 => 46,  131 => 45,  129 => 44,  127 => 43,  125 => 42,  119 => 38,  115 => 37,  105 => 30,  101 => 29,  92 => 23,  83 => 17,  71 => 8,  68 => 7,  65 => 6,  61 => 227,  58 => 226,  56 => 90,  52 => 88,  50 => 85,  47 => 84,  44 => 6,  41 => 5,  36 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block title %}*/
/*     Accueil*/
/* {% endblock %}*/
/* {% block body %}*/
/*     {% block menu %}*/
/*         <nav id="navbar-darkblue" class="navbar navbar-default" role="navigation">*/
/*             <div class="navbar-header"><a class="navbar-brand" href="{{ path('school_gestion_homepage')}}"><i class="glyphicon glyphicon-home"></i> Accueil</a>*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>*/
/*                 </button>*/
/*             </div>*/
/*             <div class="collapse navbar-collapse navbar-menubuilder">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th-list"></i> Enseigants <b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="{{ path('user') }}">Liste des enseignants</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-th-list"></i> Enseignements <b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="{{ path('estdispense') }}">Liste des enseignements</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Elèves <b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="{{ path('school_student_list')}}">Liste des élèves</a></li>*/
/*                             <li><a href="{{ path('inscription')}}">Inscriptions</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/* */
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-folder-open"></i>  Cat&eacute;gories <b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="{{ path('categorie')}}"><i class="glyphicon glyphicon-folder-open"></i> Cat&eacute;gories</a></li>*/
/*                             <li><a href="{{ path('matiere')}}"><i class="glyphicon glyphicon-folder-open"></i> Mati&egrave;res</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     {#<li class="dropdown">#}*/
/*                         {#<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-hdd"></i> Matières <b class="caret"></b></a>#}*/
/*                         {#<ul class="dropdown-menu">#}*/
/*                             {#<li><a href="{{ path('matiere')}}"><i class="glyphicon glyphicon-user"></i> Liste des matières</a></li>#}*/
/*                         {#</ul>#}*/
/*                     {#</li>#}*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-list"></i> Séquences <b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="{{ path('sequence')}}"><i class="glyphicon glyphicon-list"></i> Liste des séquences</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-list"></i> Cycles <b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="{{ path('cycle')}}"><i class="glyphicon glyphicon-list"></i> Liste des cycles</a></li>*/
/*                             <li><a href="{{ path('classe')}}"><i class="glyphicon glyphicon-folder-open"></i> Liste des classes</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <p class="navbar-text navbar-right">*/
/*                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                         Utilisateur: <b style="color: blue">*/
/*                             {{ app.user.username }}*/
/*                         </b> |*/
/*                         <a style="color: brown" href="{{ path('fos_user_security_logout') }}"><span class="glyphicon glyphicon-off"></span>*/
/*                             <span>{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</span>*/
/*                         </a>*/
/*                     {% else %}*/
/*                         <a href="{{ path('fos_user_security_login') }}"><span class="glyphicon glyphicon-log-in"></span> {{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*                         {% endif %}*/
/*                 </p>*/
/*             </div>*/
/*         </nav>*/
/*         <div class="col-md-12 col-sm-12 col-xs-12">*/
/*             {% for flas_message in app.session.flashbag.get('notice') %}*/
/*                 <div class="alert alert-warning text-center">{{ flas_message }}</div>*/
/*             {% endfor %}*/
/*             {% for flas_message in app.session.flashbag.get('error') %}*/
/*                 <div class="alert alert-danger text-center">{{ flas_message }}</div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endblock %}*/
/*     <div class="col-md-3">*/
/*         {% block aside %}*/
/*             <h2>Je suis le "aside"</h2>*/
/*         {% endblock %}*/
/*     </div>*/
/*     <div class="col-md-9">*/
/*         {% block content %}*/
/*             <h2 class="text-center">Mes salles de classe</h2>*/
/*             {% for dispense in listeDispense %}*/
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <div class="shop-item panel-primary">*/
/*                         <div class="panel btn-blue">*/
/*                             <b style="text-align: left"><span style="color: orange; font-size: 18px" class="glyphicon glyphicon-folder-open"></span> {{dispense.classe}}</b>*/
/*                         </div>*/
/*                         <ol class="">*/
/*                             <li><a class="btn-link" data-toggle="modal" data-target="#sequence_{{dispense.id}}">Remplir les notes</a>*/
/*                                 <div id="sequence_{{dispense.id}}" class="modal fade">*/
/*                                     <div class="modal-dialog modal-sm">*/
/*                                         <div class="modal-content">*/
/*                                             <div class="modal-header">*/
/*                                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                                                 <center><b>Choisir la séquence</b></center>*/
/*                                             </div>*/
/*                                             <div class="col-md-12 modal-body">*/
/*                                                 {% for sequence in listSequence %}*/
/*                                                     <center>*/
/*                                                         <a href="{{path('note_add', {'id':dispense.classe.id , 'idSeq': sequence.id, 'idMat':dispense.matiere.id, 'idAnnee':dispense.annee.id })}}" class="btn btn-green">*/
/*                                                             <b>{{sequence}}</b>*/
/*                                                         </a> */
/*                                                     </center>*/
/*                                                 {% endfor %}*/
/*                                                 <hr>*/
/*                                                 <button type="button" class="btn btn-red pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span>Annuler</button>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li><a class="btn-link" data-toggle="modal" data-target="#sequenceedit_{{dispense.id}}">Modifier une note</a>*/
/*                                 <div id="sequenceedit_{{dispense.id}}" class="modal fade">*/
/*                                     <div class="modal-dialog modal-sm">*/
/*                                         <div class="modal-content">*/
/*                                             <div class="modal-header">*/
/*                                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                                                 <center><b>Choisir la séquence</b></center>*/
/*                                             </div>*/
/*                                             <div class="col-md-12 modal-body">*/
/*                                                 {% for sequence in listSequence %}*/
/*                                                     <center>*/
/*                                                         <a href="{{path('note_editnote', {'id':dispense.classe.id , 'idSeq': sequence.id, 'idMat':dispense.matiere.id, 'idAnnee':dispense.annee.id })}}" class="btn btn-green">*/
/*                                                             <b>{{sequence}}</b>*/
/*                                                         </a>*/
/*                                                     </center>*/
/*                                                 {% endfor %}*/
/*                                                 <hr>*/
/*                                                 <button type="button" class="btn btn-red pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span>Annuler</button>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li><a class="btn-link" data-toggle="modal" data-target="#notespdf_{{dispense.id}}">Exporter les notes en PDF</a>*/
/*                                 <div id="notespdf_{{dispense.id}}" class="modal fade">*/
/*                                     <div class="modal-dialog modal-sm">*/
/*                                         <div class="modal-content">*/
/*                                             <div class="modal-header">*/
/*                                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                                                 <center><b>Choisir la séquence</b></center>*/
/*                                             </div>*/
/*                                             <div class="col-md-12 modal-body">*/
/*                                                 {% for sequence in listSequence %}*/
/*                                                     <center>*/
/*                                                         <a href="{{path('notespdf', {'idEnseignement':dispense.id, 'idSequence':sequence.id })}}" class="btn btn-green">*/
/*                                                             <b>{{sequence}}</b>*/
/*                                                         </a>*/
/*                                                     </center>*/
/*                                                 {% endfor %}*/
/*                                                 <hr>*/
/*                                                 <button type="button" class="btn btn-red pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span>Annuler</button>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <li><a class="btn-link" data-toggle="modal" data-target="#stat_{{dispense.id}}">Générer les statistiques</a>*/
/*                                 <div id="stat_{{dispense.id}}" class="modal fade">*/
/*                                     <div class="modal-dialog modal-sm">*/
/*                                         <div class="modal-content">*/
/*                                             <div class="modal-header">*/
/*                                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                                                 <center><b>Choisir la séquence</b></center>*/
/*                                             </div>*/
/*                                             <div class="col-md-12 modal-body">*/
/*                                                 {% for sequence in listSequence %}*/
/*                                                     <center>*/
/*                                                         <a href="{{path('statistiques', {'idSequence':sequence.id, 'idMatiere':dispense.matiere.id, 'idEnseignant':dispense.enseignant.id })}}" class="btn btn-green">*/
/*                                                             <b>{{sequence}}</b>*/
/*                                                         </a>*/
/*                                                     </center>*/
/*                                                 {% endfor %}*/
/*                                                 <hr>*/
/*                                                 <button type="button" class="btn btn-red pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span>Annuler</button>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                             </li>*/
/*                             {% if dispense.titulaire == app.user %}*/
/*                                 <li><a class="btn-link" data-toggle="modal" data-target="#bulletin_{{dispense.id}}" href="">Générer les bulletins</a></li>*/
/*                                 <div id="bulletin_{{dispense.id}}" class="modal fade">*/
/*                                     <div class="modal-dialog modal-sm">*/
/*                                         <div class="modal-content">*/
/*                                             <div class="modal-header">*/
/*                                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                                                 <center><b>Choisir la séquence</b></center>*/
/*                                             </div>*/
/*                                             <div class="col-md-12 modal-body">*/
/*                                                 {% for sequence in listSequence %}*/
/*                                                     <center>*/
/*                                                         <a href="{{path('bulletin_seq_classe', {'idClasse':dispense.classe.id , 'idSeq': sequence.id, 'idAnnee':dispense.annee.id })}}" class="btn btn-green">*/
/*                                                             <b>{{sequence}}</b>*/
/*                                                         </a>*/
/*                                                     </center>*/
/*                                                 {% endfor %}*/
/*                                                 <hr>*/
/*                                                 <button type="button" class="btn btn-red pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span>Annuler</button>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             {% else%}*/
/*                                 ..*/
/*                             {% endif %}*/
/*                         </ol>*/
/*                         <div class="pull-right">*/
/*                             Matière: <i style="color: forestgreen">{{dispense.matiere}}</i>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endblock %}*/
/*     </div>*/
/*     {% block pied %}*/
/*         {#<div class="" style=""><center>&copy; 2016 GreenSoft-Team. All rights reserved.</center></div>#}*/
/* */
/* */
/*         {#<div id="navbar-piedDePage" class="navbar navbar-default navbar-fixed-bottom" role="navigation">#}*/
/*             {#<div class="container">#}*/
/*                 {#<div class="navbar-text col-lg-12 col-md-12 col-sm-12 col-xs-12 ">#}*/
/*                     {#<p class="text-center"> &copy; 2016 GreenSoft-Team. All rights reserved.</p>#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
/*     {% endblock %}*/
/* {% endblock %}*/
