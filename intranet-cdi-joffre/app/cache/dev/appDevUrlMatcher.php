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
        $context = $this->context;
        $request = $this->request;

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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'accueil');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'accueil',);
        }

        // administration
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::administrationAction',  '_route' => 'administration',);
        }

        // connexion
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::connexionAction',  '_route' => 'connexion',);
        }

        // deconnexion
        if ($pathinfo === '/deconnexion') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::deconnexionAction',  '_route' => 'deconnexion',);
        }

        // redirection_accueil
        if ($pathinfo === '/redirection') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::redirectAction',  '_route' => 'redirection_accueil',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/ajax/recherche')) {
                // ajax_recherche_auteur
                if (0 === strpos($pathinfo, '/ajax/recherche/auteur') && preg_match('#^/ajax/recherche/auteur/(?P<prenom>[^/]++)/(?P<nom>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajax_recherche_auteur')), array (  '_controller' => 'AppBundle\\Controller\\AjaxController::rechercheAuteurAction',));
                }

                // ajax_recherche_periodique
                if (0 === strpos($pathinfo, '/ajax/recherche/periodique') && preg_match('#^/ajax/recherche/periodique/(?P<nom>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajax_recherche_periodique')), array (  '_controller' => 'AppBundle\\Controller\\AjaxController::recherchePeriodiqueAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/auteur')) {
                    // auteur_liste
                    if ($pathinfo === '/admin/auteurs') {
                        return array (  '_controller' => 'CdiBundle\\Controller\\AuteurController::listeAction',  '_route' => 'auteur_liste',);
                    }

                    // auteur_ajout
                    if ($pathinfo === '/admin/auteur/ajout') {
                        return array (  '_controller' => 'CdiBundle\\Controller\\AuteurController::ajoutAction',  '_route' => 'auteur_ajout',);
                    }

                    // auteur_supprimer
                    if (preg_match('#^/admin/auteur/(?P<id>\\d+)/supprimer$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'auteur_supprimer')), array (  '_controller' => 'CdiBundle\\Controller\\AuteurController::supprimerAction',));
                    }

                    // auteur_editer
                    if (preg_match('#^/admin/auteur/(?P<id>\\d+)/auteur_editer$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'auteur_editer')), array (  '_controller' => 'CdiBundle\\Controller\\AuteurController::editerAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/periodique')) {
                    // periodique_liste
                    if ($pathinfo === '/admin/periodiques') {
                        return array (  '_controller' => 'CdiBundle\\Controller\\PeriodiqueController::listeAction',  '_route' => 'periodique_liste',);
                    }

                    // periodique_ajout
                    if ($pathinfo === '/admin/periodique/ajout') {
                        return array (  '_controller' => 'CdiBundle\\Controller\\PeriodiqueController::ajoutAction',  '_route' => 'periodique_ajout',);
                    }

                    // periodique_supprimer
                    if (preg_match('#^/admin/periodique/(?P<id>\\d+)/supprimer$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'periodique_supprimer')), array (  '_controller' => 'CdiBundle\\Controller\\PeriodiqueController::supprimerAction',));
                    }

                    // periodique_editer
                    if (preg_match('#^/admin/periodique/(?P<id>\\d+)/editer$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'periodique_editer')), array (  '_controller' => 'CdiBundle\\Controller\\PeriodiqueController::editerAction',));
                    }

                }

            }

            // article_voir
            if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_voir')), array (  '_controller' => 'CdiBundle\\Controller\\ArticleController::voirAction',));
            }

            if (0 === strpos($pathinfo, '/admin/article')) {
                // article_liste
                if (0 === strpos($pathinfo, '/admin/articles') && preg_match('#^/admin/articles(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_liste')), array (  '_controller' => 'CdiBundle\\Controller\\ArticleController::listeAction',  'page' => NULL,));
                }

                if (0 === strpos($pathinfo, '/admin/article/ajout')) {
                    // article_ajout_auteur
                    if ($pathinfo === '/admin/article/ajout/auteur') {
                        return array (  '_controller' => 'CdiBundle\\Controller\\ArticleController::ajoutAuteurAction',  '_route' => 'article_ajout_auteur',);
                    }

                    // article_ajout_periodique
                    if ($pathinfo === '/admin/article/ajout/periodique') {
                        return array (  '_controller' => 'CdiBundle\\Controller\\ArticleController::ajoutPeriodiqueAction',  '_route' => 'article_ajout_periodique',);
                    }

                    // article_ajout_informations
                    if ($pathinfo === '/admin/article/ajout/informations') {
                        return array (  '_controller' => 'CdiBundle\\Controller\\ArticleController::ajoutInformationsAction',  '_route' => 'article_ajout_informations',);
                    }

                    // article_ajout
                    if ($pathinfo === '/admin/article/ajout') {
                        return array (  '_controller' => 'CdiBundle\\Controller\\ArticleController::ajoutAction',  '_route' => 'article_ajout',);
                    }

                }

                // article_supprimer
                if (preg_match('#^/admin/article/(?P<id>\\d+)/supprimer$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_supprimer')), array (  '_controller' => 'CdiBundle\\Controller\\ArticleController::supprimerAction',));
                }

                // article_editer
                if (preg_match('#^/admin/article/(?P<id>\\d+)/editer$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_editer')), array (  '_controller' => 'CdiBundle\\Controller\\ArticleController::editerAction',));
                }

            }

        }

        // article_recherche
        if ($pathinfo === '/recherche/resultats') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_article_recherche;
            }

            return array (  '_controller' => 'CdiBundle\\Controller\\ArticleController::rechercheAction',  '_route' => 'article_recherche',);
        }
        not_article_recherche:

        // article_pdf
        if ($pathinfo === '/admin/article/vuePDF') {
            return array (  '_controller' => 'CdiBundle\\Controller\\ArticleController::pdfAction',  '_route' => 'article_pdf',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
