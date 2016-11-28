<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'accueil_connecte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::rechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'administration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::administrationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'connexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::connexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deconnexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::deconnexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deconnexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'redirection_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::redirectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/redirection',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajax_recherche_auteur' => array (  0 =>   array (    0 => 'prenom',    1 => 'nom',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AjaxController::rechercheAuteurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nom',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'prenom',    ),    2 =>     array (      0 => 'text',      1 => '/ajax/recherche/auteur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajax_recherche_periodique' => array (  0 =>   array (    0 => 'nom',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AjaxController::recherchePeriodiqueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nom',    ),    1 =>     array (      0 => 'text',      1 => '/ajax/recherche/periodique',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'auteur_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CdiBundle\\Controller\\AuteurController::listeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/auteurs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'auteur_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CdiBundle\\Controller\\AuteurController::ajoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/auteur/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'auteur_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CdiBundle\\Controller\\AuteurController::supprimerAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimer',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/auteur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'periodique_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CdiBundle\\Controller\\PeriodiqueController::listeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/periodiques',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'periodique_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CdiBundle\\Controller\\PeriodiqueController::ajoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/periodique/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'periodique_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CdiBundle\\Controller\\PeriodiqueController::supprimerAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/supprimer',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/periodique',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_voir' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CdiBundle\\Controller\\ArticleController::voirAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_liste' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CdiBundle\\Controller\\ArticleController::listeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/articles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_ajout_auteur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CdiBundle\\Controller\\ArticleController::ajoutAuteurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/article/ajout/auteur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_ajout_periodique' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CdiBundle\\Controller\\ArticleController::ajoutPeriodiqueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/article/ajout/periodique',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_ajout_informations' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CdiBundle\\Controller\\ArticleController::ajoutInformationsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/article/ajout/informations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_ajout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CdiBundle\\Controller\\ArticleController::ajoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/article/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_recherche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CdiBundle\\Controller\\ArticleController::rechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recherche/resultats',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
