<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/Shop')) {
            // shopping_shop_homepage
            if (rtrim($pathinfo, '/') === '/Shop') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'shopping_shop_homepage');
                }

                return array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\DefaultController::indexAction',  '_route' => 'shopping_shop_homepage',);
            }

            // article_detail
            if (0 === strpos($pathinfo, '/Shop/Article/detail') && preg_match('#^/Shop/Article/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_detail')), array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ProduitController::detailleAction',));
            }

            // detail
            if (0 === strpos($pathinfo, '/Shop/Produit/detail') && preg_match('#^/Shop/Produit/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail')), array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ProduitController::detailAction',));
            }

            if (0 === strpos($pathinfo, '/Shop/Client')) {
                // compte_client
                if ($pathinfo === '/Shop/Client/register') {
                    return array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ClientController::signInAction',  '_route' => 'compte_client',);
                }

                // pagnier_client
                if ($pathinfo === '/Shop/Client/pagnier') {
                    return array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ClientController::pagnierAction',  '_route' => 'pagnier_client',);
                }

                // ajouter
                if ($pathinfo === '/Shop/Client/ajouter') {
                    return array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ClientController::ajouterAction',  '_route' => 'ajouter',);
                }

            }

            if (0 === strpos($pathinfo, '/Shop/categorie')) {
                // categorie_ajouter
                if ($pathinfo === '/Shop/categorie/ajouter') {
                    return array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\CategorieController::ajouterAction',  '_route' => 'categorie_ajouter',);
                }

                // categorie_modifier
                if (0 === strpos($pathinfo, '/Shop/categorie/modifier') && preg_match('#^/Shop/categorie/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_modifier')), array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\CategorieController::modifierAction',));
                }

                // categorie_supprimer
                if (0 === strpos($pathinfo, '/Shop/categorie/supprimer') && preg_match('#^/Shop/categorie/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_supprimer')), array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\CategorieController::supprimerAction',));
                }

                // categorie_liste
                if ($pathinfo === '/Shop/categorie/liste') {
                    return array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\CategorieController::listeAction',  '_route' => 'categorie_liste',);
                }

            }

            if (0 === strpos($pathinfo, '/Shop/fournisseur')) {
                // fournisseur_ajouter
                if ($pathinfo === '/Shop/fournisseur/ajouter') {
                    return array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\FournisseurController::ajouterAction',  '_route' => 'fournisseur_ajouter',);
                }

                // fournisseur_modifier
                if (0 === strpos($pathinfo, '/Shop/fournisseur/modifier') && preg_match('#^/Shop/fournisseur/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fournisseur_modifier')), array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\FournisseurController::modifierAction',));
                }

                // fournisseur_supprimer
                if (0 === strpos($pathinfo, '/Shop/fournisseur/supprimer') && preg_match('#^/Shop/fournisseur/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fournisseur_supprimer')), array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\FournisseurController::supprimerAction',));
                }

                // fournisseur_liste
                if ($pathinfo === '/Shop/fournisseur/liste') {
                    return array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\FournisseurController::listeAction',  '_route' => 'fournisseur_liste',);
                }

            }

            if (0 === strpos($pathinfo, '/Shop/approvisionnement')) {
                // approvisionnement_ajouter
                if ($pathinfo === '/Shop/approvisionnement/ajouter') {
                    return array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ApprovisionnementController::ajouterAction',  '_route' => 'approvisionnement_ajouter',);
                }

                // approvisionnement_modifier
                if (0 === strpos($pathinfo, '/Shop/approvisionnement/modifier') && preg_match('#^/Shop/approvisionnement/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'approvisionnement_modifier')), array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ApprovisionnementController::modifierAction',));
                }

                // approvisionnement_supprimer
                if (0 === strpos($pathinfo, '/Shop/approvisionnement/supprimer') && preg_match('#^/Shop/approvisionnement/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'approvisionnement_supprimer')), array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ApprovisionnementController::supprimerAction',));
                }

                // approvisionnement_liste
                if ($pathinfo === '/Shop/approvisionnement/liste') {
                    return array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ApprovisionnementController::listeAction',  '_route' => 'approvisionnement_liste',);
                }

            }

            if (0 === strpos($pathinfo, '/Shop/p')) {
                if (0 === strpos($pathinfo, '/Shop/personnel')) {
                    // personnel_ajouter
                    if ($pathinfo === '/Shop/personnel/ajouter') {
                        return array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\PersonnelController::ajouterAction',  '_route' => 'personnel_ajouter',);
                    }

                    // personnel_modifier
                    if (0 === strpos($pathinfo, '/Shop/personnel/modifier') && preg_match('#^/Shop/personnel/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'personnel_modifier')), array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\PersonnelController::modifierAction',));
                    }

                    // personnel_supprimer
                    if (0 === strpos($pathinfo, '/Shop/personnel/supprimer') && preg_match('#^/Shop/personnel/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'personnel_supprimer')), array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\PersonnelController::supprimerAction',));
                    }

                    // personnel_liste
                    if ($pathinfo === '/Shop/personnel/liste') {
                        return array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\PersonnelController::listeAction',  '_route' => 'personnel_liste',);
                    }

                }

                if (0 === strpos($pathinfo, '/Shop/produit')) {
                    // produit_ajouter
                    if ($pathinfo === '/Shop/produit/ajouter') {
                        return array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ProduitController::ajouterAction',  '_route' => 'produit_ajouter',);
                    }

                    if (0 === strpos($pathinfo, '/Shop/produit/inserer')) {
                        // produit_inserer
                        if ($pathinfo === '/Shop/produit/inserer') {
                            return array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ProduitController::insererAction',  '_route' => 'produit_inserer',);
                        }

                        // produit_add_inserer
                        if (0 === strpos($pathinfo, '/Shop/produit/inserer/categorie') && preg_match('#^/Shop/produit/inserer/categorie\\-(?P<idCat>[^/\\-]++)\\-Stock\\-(?P<idStock>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_add_inserer')), array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ProduitController::addInsererAction',));
                        }

                    }

                    // produit_modifier
                    if (0 === strpos($pathinfo, '/Shop/produit/modifier') && preg_match('#^/Shop/produit/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_modifier')), array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ProduitController::modifierAction',));
                    }

                    // produit_supprimer
                    if (0 === strpos($pathinfo, '/Shop/produit/supprimer') && preg_match('#^/Shop/produit/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_supprimer')), array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ProduitController::supprimerAction',));
                    }

                    // produit_liste
                    if ($pathinfo === '/Shop/produit/liste') {
                        return array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ProduitController::listeAction',  '_route' => 'produit_liste',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/Shop/image')) {
                // image_ajouter
                if ($pathinfo === '/Shop/image/ajouter') {
                    return array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ImageController::ajouterAction',  '_route' => 'image_ajouter',);
                }

                // image_modifier
                if (0 === strpos($pathinfo, '/Shop/image/modifier') && preg_match('#^/Shop/image/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_modifier')), array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ImageController::modifierAction',));
                }

                // image_supprimer
                if (0 === strpos($pathinfo, '/Shop/image/supprimer') && preg_match('#^/Shop/image/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_supprimer')), array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ImageController::supprimerAction',));
                }

                // image_liste
                if ($pathinfo === '/Shop/image/liste') {
                    return array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\ImageController::listeAction',  '_route' => 'image_liste',);
                }

            }

            // page_admin
            if ($pathinfo === '/Shop/admin/accueil') {
                return array (  '_controller' => 'Shopping\\ShopBundle\\Controller\\AdministrationController::indexAction',  '_route' => 'page_admin',);
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
