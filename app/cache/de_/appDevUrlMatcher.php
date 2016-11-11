<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/Gestion')) {
            // school_note_homepage
            if (0 === strpos($pathinfo, '/Gestion/hello') && preg_match('#^/Gestion/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'school_note_homepage')), array (  '_controller' => 'School\\NoteBundle\\Controller\\DefaultController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/Gestion/sequence')) {
                // sequence
                if (rtrim($pathinfo, '/') === '/Gestion/sequence') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sequence');
                    }

                    return array (  '_controller' => 'School\\NoteBundle\\Controller\\SequenceController::indexAction',  '_route' => 'sequence',);
                }

                // sequence_show
                if (preg_match('#^/Gestion/sequence/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sequence_show')), array (  '_controller' => 'School\\NoteBundle\\Controller\\SequenceController::showAction',));
                }

                // sequence_new
                if ($pathinfo === '/Gestion/sequence/new') {
                    return array (  '_controller' => 'School\\NoteBundle\\Controller\\SequenceController::newAction',  '_route' => 'sequence_new',);
                }

                // sequence_create
                if ($pathinfo === '/Gestion/sequence/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sequence_create;
                    }

                    return array (  '_controller' => 'School\\NoteBundle\\Controller\\SequenceController::createAction',  '_route' => 'sequence_create',);
                }
                not_sequence_create:

                // sequence_edit
                if (preg_match('#^/Gestion/sequence/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sequence_edit')), array (  '_controller' => 'School\\NoteBundle\\Controller\\SequenceController::editAction',));
                }

                // sequence_update
                if (preg_match('#^/Gestion/sequence/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_sequence_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sequence_update')), array (  '_controller' => 'School\\NoteBundle\\Controller\\SequenceController::updateAction',));
                }
                not_sequence_update:

                // sequence_delete
                if (preg_match('#^/Gestion/sequence/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_sequence_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sequence_delete')), array (  '_controller' => 'School\\NoteBundle\\Controller\\SequenceController::deleteAction',));
                }
                not_sequence_delete:

            }

            if (0 === strpos($pathinfo, '/Gestion/evaluation')) {
                // evaluation
                if (rtrim($pathinfo, '/') === '/Gestion/evaluation') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'evaluation');
                    }

                    return array (  '_controller' => 'School\\NoteBundle\\Controller\\EvaluationController::indexAction',  '_route' => 'evaluation',);
                }

                // evaluation_show
                if (preg_match('#^/Gestion/evaluation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluation_show')), array (  '_controller' => 'School\\NoteBundle\\Controller\\EvaluationController::showAction',));
                }

                // evaluation_new
                if ($pathinfo === '/Gestion/evaluation/new') {
                    return array (  '_controller' => 'School\\NoteBundle\\Controller\\EvaluationController::newAction',  '_route' => 'evaluation_new',);
                }

                // evaluation_create
                if ($pathinfo === '/Gestion/evaluation/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_evaluation_create;
                    }

                    return array (  '_controller' => 'School\\NoteBundle\\Controller\\EvaluationController::createAction',  '_route' => 'evaluation_create',);
                }
                not_evaluation_create:

                // evaluation_edit
                if (preg_match('#^/Gestion/evaluation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluation_edit')), array (  '_controller' => 'School\\NoteBundle\\Controller\\EvaluationController::editAction',));
                }

                // evaluation_update
                if (preg_match('#^/Gestion/evaluation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_evaluation_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluation_update')), array (  '_controller' => 'School\\NoteBundle\\Controller\\EvaluationController::updateAction',));
                }
                not_evaluation_update:

                // evaluation_delete
                if (preg_match('#^/Gestion/evaluation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_evaluation_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'evaluation_delete')), array (  '_controller' => 'School\\NoteBundle\\Controller\\EvaluationController::deleteAction',));
                }
                not_evaluation_delete:

                // note_add
                if (preg_match('#^/Gestion/evaluation/(?P<id>[^/]++)/(?P<idSeq>[^/]++)/(?P<idMat>[^/]++)/notes/add$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_add')), array (  '_controller' => 'School\\NoteBundle\\Controller\\EvaluationController::noteAction',));
                }

                // note_editnote
                if (preg_match('#^/Gestion/evaluation/(?P<id>[^/]++)/(?P<idSeq>[^/]++)/(?P<idMat>[^/]++)/notes/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'note_editnote')), array (  '_controller' => 'School\\NoteBundle\\Controller\\EvaluationController::editnoteAction',));
                }

            }

            // school_config_homepage
            if (0 === strpos($pathinfo, '/Gestion/hello') && preg_match('#^/Gestion/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'school_config_homepage')), array (  '_controller' => 'School\\ConfigBundle\\Controller\\DefaultController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/Gestion/c')) {
                if (0 === strpos($pathinfo, '/Gestion/config')) {
                    if (0 === strpos($pathinfo, '/Gestion/config/constante')) {
                        // constante
                        if (rtrim($pathinfo, '/') === '/Gestion/config/constante') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'constante');
                            }

                            return array (  '_controller' => 'School\\ConfigBundle\\Controller\\ConstanteController::indexAction',  '_route' => 'constante',);
                        }

                        // constante_show
                        if (preg_match('#^/Gestion/config/constante/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'constante_show')), array (  '_controller' => 'School\\ConfigBundle\\Controller\\ConstanteController::showAction',));
                        }

                        // constante_new
                        if ($pathinfo === '/Gestion/config/constante/new') {
                            return array (  '_controller' => 'School\\ConfigBundle\\Controller\\ConstanteController::newAction',  '_route' => 'constante_new',);
                        }

                        // constante_create
                        if ($pathinfo === '/Gestion/config/constante/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_constante_create;
                            }

                            return array (  '_controller' => 'School\\ConfigBundle\\Controller\\ConstanteController::createAction',  '_route' => 'constante_create',);
                        }
                        not_constante_create:

                        // constante_edit
                        if (preg_match('#^/Gestion/config/constante/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'constante_edit')), array (  '_controller' => 'School\\ConfigBundle\\Controller\\ConstanteController::editAction',));
                        }

                        // constante_update
                        if (preg_match('#^/Gestion/config/constante/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_constante_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'constante_update')), array (  '_controller' => 'School\\ConfigBundle\\Controller\\ConstanteController::updateAction',));
                        }
                        not_constante_update:

                        // constante_delete
                        if (preg_match('#^/Gestion/config/constante/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_constante_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'constante_delete')), array (  '_controller' => 'School\\ConfigBundle\\Controller\\ConstanteController::deleteAction',));
                        }
                        not_constante_delete:

                    }

                    if (0 === strpos($pathinfo, '/Gestion/config/ecole')) {
                        // config_ecole
                        if (rtrim($pathinfo, '/') === '/Gestion/config/ecole') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'config_ecole');
                            }

                            return array (  '_controller' => 'School\\ConfigBundle\\Controller\\EcoleController::indexAction',  '_route' => 'config_ecole',);
                        }

                        // config_ecole_show
                        if (preg_match('#^/Gestion/config/ecole/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'config_ecole_show')), array (  '_controller' => 'School\\ConfigBundle\\Controller\\EcoleController::showAction',));
                        }

                        // config_ecole_new
                        if ($pathinfo === '/Gestion/config/ecole/new') {
                            return array (  '_controller' => 'School\\ConfigBundle\\Controller\\EcoleController::newAction',  '_route' => 'config_ecole_new',);
                        }

                        // config_ecole_create
                        if ($pathinfo === '/Gestion/config/ecole/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_config_ecole_create;
                            }

                            return array (  '_controller' => 'School\\ConfigBundle\\Controller\\EcoleController::createAction',  '_route' => 'config_ecole_create',);
                        }
                        not_config_ecole_create:

                        // config_ecole_edit
                        if (preg_match('#^/Gestion/config/ecole/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'config_ecole_edit')), array (  '_controller' => 'School\\ConfigBundle\\Controller\\EcoleController::editAction',));
                        }

                        // config_ecole_update
                        if (preg_match('#^/Gestion/config/ecole/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_config_ecole_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'config_ecole_update')), array (  '_controller' => 'School\\ConfigBundle\\Controller\\EcoleController::updateAction',));
                        }
                        not_config_ecole_update:

                        // config_ecole_delete
                        if (preg_match('#^/Gestion/config/ecole/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_config_ecole_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'config_ecole_delete')), array (  '_controller' => 'School\\ConfigBundle\\Controller\\EcoleController::deleteAction',));
                        }
                        not_config_ecole_delete:

                    }

                }

                if (0 === strpos($pathinfo, '/Gestion/categorie')) {
                    // categorie
                    if (rtrim($pathinfo, '/') === '/Gestion/categorie') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'categorie');
                        }

                        return array (  '_controller' => 'School\\MatiereBundle\\Controller\\CategorieController::indexAction',  '_route' => 'categorie',);
                    }

                    // categorie_show
                    if (preg_match('#^/Gestion/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_show')), array (  '_controller' => 'School\\MatiereBundle\\Controller\\CategorieController::showAction',));
                    }

                    // categorie_new
                    if ($pathinfo === '/Gestion/categorie/new') {
                        return array (  '_controller' => 'School\\MatiereBundle\\Controller\\CategorieController::newAction',  '_route' => 'categorie_new',);
                    }

                    // categorie_create
                    if ($pathinfo === '/Gestion/categorie/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_categorie_create;
                        }

                        return array (  '_controller' => 'School\\MatiereBundle\\Controller\\CategorieController::createAction',  '_route' => 'categorie_create',);
                    }
                    not_categorie_create:

                    // categorie_edit
                    if (preg_match('#^/Gestion/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_edit')), array (  '_controller' => 'School\\MatiereBundle\\Controller\\CategorieController::editAction',));
                    }

                    // categorie_update
                    if (preg_match('#^/Gestion/categorie/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_categorie_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_update')), array (  '_controller' => 'School\\MatiereBundle\\Controller\\CategorieController::updateAction',));
                    }
                    not_categorie_update:

                    // categorie_delete
                    if (preg_match('#^/Gestion/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_categorie_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_delete')), array (  '_controller' => 'School\\MatiereBundle\\Controller\\CategorieController::deleteAction',));
                    }
                    not_categorie_delete:

                }

            }

            if (0 === strpos($pathinfo, '/Gestion/matiere')) {
                // matiere
                if (rtrim($pathinfo, '/') === '/Gestion/matiere') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'matiere');
                    }

                    return array (  '_controller' => 'School\\MatiereBundle\\Controller\\MatiereController::indexAction',  '_route' => 'matiere',);
                }

                // matiere_show
                if (preg_match('#^/Gestion/matiere/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_show')), array (  '_controller' => 'School\\MatiereBundle\\Controller\\MatiereController::showAction',));
                }

                // matiere_new
                if ($pathinfo === '/Gestion/matiere/new') {
                    return array (  '_controller' => 'School\\MatiereBundle\\Controller\\MatiereController::newAction',  '_route' => 'matiere_new',);
                }

                // matiere_create
                if ($pathinfo === '/Gestion/matiere/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_matiere_create;
                    }

                    return array (  '_controller' => 'School\\MatiereBundle\\Controller\\MatiereController::createAction',  '_route' => 'matiere_create',);
                }
                not_matiere_create:

                // matiere_edit
                if (preg_match('#^/Gestion/matiere/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_edit')), array (  '_controller' => 'School\\MatiereBundle\\Controller\\MatiereController::editAction',));
                }

                // matiere_update
                if (preg_match('#^/Gestion/matiere/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_matiere_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_update')), array (  '_controller' => 'School\\MatiereBundle\\Controller\\MatiereController::updateAction',));
                }
                not_matiere_update:

                // matiere_delete
                if (preg_match('#^/Gestion/matiere/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_matiere_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'matiere_delete')), array (  '_controller' => 'School\\MatiereBundle\\Controller\\MatiereController::deleteAction',));
                }
                not_matiere_delete:

            }

            if (0 === strpos($pathinfo, '/Gestion/estdispense')) {
                // estdispense
                if (rtrim($pathinfo, '/') === '/Gestion/estdispense') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'estdispense');
                    }

                    return array (  '_controller' => 'School\\MatiereBundle\\Controller\\EstDispenseController::indexAction',  '_route' => 'estdispense',);
                }

                // estdispense_show
                if (preg_match('#^/Gestion/estdispense/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'estdispense_show')), array (  '_controller' => 'School\\MatiereBundle\\Controller\\EstDispenseController::showAction',));
                }

                // estdispense_new
                if ($pathinfo === '/Gestion/estdispense/new') {
                    return array (  '_controller' => 'School\\MatiereBundle\\Controller\\EstDispenseController::newAction',  '_route' => 'estdispense_new',);
                }

                // estdispense_create
                if ($pathinfo === '/Gestion/estdispense/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_estdispense_create;
                    }

                    return array (  '_controller' => 'School\\MatiereBundle\\Controller\\EstDispenseController::createAction',  '_route' => 'estdispense_create',);
                }
                not_estdispense_create:

                // estdispense_edit
                if (preg_match('#^/Gestion/estdispense/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'estdispense_edit')), array (  '_controller' => 'School\\MatiereBundle\\Controller\\EstDispenseController::editAction',));
                }

                // estdispense_update
                if (preg_match('#^/Gestion/estdispense/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_estdispense_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'estdispense_update')), array (  '_controller' => 'School\\MatiereBundle\\Controller\\EstDispenseController::updateAction',));
                }
                not_estdispense_update:

                // estdispense_delete
                if (preg_match('#^/Gestion/estdispense/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_estdispense_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'estdispense_delete')), array (  '_controller' => 'School\\MatiereBundle\\Controller\\EstDispenseController::deleteAction',));
                }
                not_estdispense_delete:

            }

            if (0 === strpos($pathinfo, '/Gestion/classe')) {
                // classe
                if (rtrim($pathinfo, '/') === '/Gestion/classe') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'classe');
                    }

                    return array (  '_controller' => 'School\\StudentBundle\\Controller\\ClasseController::indexAction',  '_route' => 'classe',);
                }

                // classe_show
                if (preg_match('#^/Gestion/classe/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_show')), array (  '_controller' => 'School\\StudentBundle\\Controller\\ClasseController::showAction',));
                }

                // classe_new
                if ($pathinfo === '/Gestion/classe/new') {
                    return array (  '_controller' => 'School\\StudentBundle\\Controller\\ClasseController::newAction',  '_route' => 'classe_new',);
                }

                // classe_create
                if ($pathinfo === '/Gestion/classe/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_classe_create;
                    }

                    return array (  '_controller' => 'School\\StudentBundle\\Controller\\ClasseController::createAction',  '_route' => 'classe_create',);
                }
                not_classe_create:

                // classe_edit
                if (preg_match('#^/Gestion/classe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_edit')), array (  '_controller' => 'School\\StudentBundle\\Controller\\ClasseController::editAction',));
                }

                // classe_update
                if (preg_match('#^/Gestion/classe/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_classe_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_update')), array (  '_controller' => 'School\\StudentBundle\\Controller\\ClasseController::updateAction',));
                }
                not_classe_update:

                // classe_delete
                if (preg_match('#^/Gestion/classe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_classe_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'classe_delete')), array (  '_controller' => 'School\\StudentBundle\\Controller\\ClasseController::deleteAction',));
                }
                not_classe_delete:

            }

            if (0 === strpos($pathinfo, '/Gestion/inscription')) {
                // inscription
                if (rtrim($pathinfo, '/') === '/Gestion/inscription') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'inscription');
                    }

                    return array (  '_controller' => 'School\\StudentBundle\\Controller\\InscriptionController::indexAction',  '_route' => 'inscription',);
                }

                // inscription_show
                if (preg_match('#^/Gestion/inscription/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_show')), array (  '_controller' => 'School\\StudentBundle\\Controller\\InscriptionController::showAction',));
                }

                // inscription_new
                if ($pathinfo === '/Gestion/inscription/new') {
                    return array (  '_controller' => 'School\\StudentBundle\\Controller\\InscriptionController::newAction',  '_route' => 'inscription_new',);
                }

                // inscription_create
                if ($pathinfo === '/Gestion/inscription/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_inscription_create;
                    }

                    return array (  '_controller' => 'School\\StudentBundle\\Controller\\InscriptionController::createAction',  '_route' => 'inscription_create',);
                }
                not_inscription_create:

                // inscription_edit
                if (preg_match('#^/Gestion/inscription/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_edit')), array (  '_controller' => 'School\\StudentBundle\\Controller\\InscriptionController::editAction',));
                }

                // inscription_update
                if (preg_match('#^/Gestion/inscription/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_inscription_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_update')), array (  '_controller' => 'School\\StudentBundle\\Controller\\InscriptionController::updateAction',));
                }
                not_inscription_update:

                // inscription_delete
                if (preg_match('#^/Gestion/inscription/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_inscription_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_delete')), array (  '_controller' => 'School\\StudentBundle\\Controller\\InscriptionController::deleteAction',));
                }
                not_inscription_delete:

            }

            if (0 === strpos($pathinfo, '/Gestion/student')) {
                // school_student_homepage
                if (0 === strpos($pathinfo, '/Gestion/student/hello') && preg_match('#^/Gestion/student/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'school_student_homepage')), array (  '_controller' => 'School\\StudentBundle\\Controller\\DefaultController::indexAction',));
                }

                if (0 === strpos($pathinfo, '/Gestion/student/student')) {
                    // school_student_show
                    if (preg_match('#^/Gestion/student/student/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'school_student_show')), array (  '_controller' => 'School\\StudentBundle\\Controller\\StudentController::showAction',));
                    }

                    // school_student_add
                    if ($pathinfo === '/Gestion/student/student/add') {
                        return array (  '_controller' => 'School\\StudentBundle\\Controller\\StudentController::addAction',  '_route' => 'school_student_add',);
                    }

                }

                // school_student_list
                if ($pathinfo === '/Gestion/student/listeEleves') {
                    return array (  '_controller' => 'School\\StudentBundle\\Controller\\StudentController::listAction',  '_route' => 'school_student_list',);
                }

                if (0 === strpos($pathinfo, '/Gestion/student/student')) {
                    // school_student_edit
                    if (0 === strpos($pathinfo, '/Gestion/student/student/edit') && preg_match('#^/Gestion/student/student/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'school_student_edit')), array (  '_controller' => 'School\\StudentBundle\\Controller\\StudentController::editAction',));
                    }

                    // school_student_delete
                    if (preg_match('#^/Gestion/student/student/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'school_student_delete')), array (  '_controller' => 'School\\StudentBundle\\Controller\\StudentController::deleteAction',));
                    }

                }

            }

            // school_gestion_homepage
            if (rtrim($pathinfo, '/') === '/Gestion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'school_gestion_homepage');
                }

                return array (  '_controller' => 'School\\GestionBundle\\Controller\\DefaultController::indexAction',  '_route' => 'school_gestion_homepage',);
            }

            if (0 === strpos($pathinfo, '/Gestion/user')) {
                // user
                if (rtrim($pathinfo, '/') === '/Gestion/user') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'user');
                    }

                    return array (  '_controller' => 'School\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
                }

                // user_show
                if (0 === strpos($pathinfo, '/Gestion/user/09092886UFGKGZDYBZHYYUGYGFZ') && preg_match('#^/Gestion/user/09092886UFGKGZDYBZHYYUGYGFZ(?P<id>[^/]+)1325375DHKJVKHFYUugluvgyu475437/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'School\\UserBundle\\Controller\\UserController::showAction',));
                }

                // user_new
                if ($pathinfo === '/Gestion/user/new') {
                    return array (  '_controller' => 'School\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
                }

                // user_create
                if ($pathinfo === '/Gestion/user/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_create;
                    }

                    return array (  '_controller' => 'School\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
                }
                not_user_create:

                if (0 === strpos($pathinfo, '/Gestion/user/jblbd')) {
                    // user_edit
                    if (0 === strpos($pathinfo, '/Gestion/user/jblbdsqvjblsdvhujsbvmljb0861456135643563754') && preg_match('#^/Gestion/user/jblbdsqvjblsdvhujsbvmljb0861456135643563754(?P<id>[^/]+)887067656545534332jblbcvqvugluvgyu475437/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'School\\UserBundle\\Controller\\UserController::editAction',));
                    }

                    // user_update
                    if (0 === strpos($pathinfo, '/Gestion/user/jblbdVHVZYVvhujsbvmljb0861456135643563754') && preg_match('#^/Gestion/user/jblbdVHVZYVvhujsbvmljb0861456135643563754(?P<id>[^/]+)60067656545534332jblbcvqvugluvgyu475437/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_user_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'School\\UserBundle\\Controller\\UserController::updateAction',));
                    }
                    not_user_update:

                }

                // user_delete
                if (0 === strpos($pathinfo, '/Gestion/user/HJGKGYZvmljb0861456135643563754') && preg_match('#^/Gestion/user/HJGKGYZvmljb0861456135643563754(?P<id>[^/]+)0024245067656545534332jblbcvqvugluvgyu475437/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'School\\UserBundle\\Controller\\UserController::deleteAction',));
                }
                not_user_delete:

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}