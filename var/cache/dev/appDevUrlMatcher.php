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

        if (0 === strpos($pathinfo, '/js/b9cf0e8')) {
            // _assetic_b9cf0e8
            if ($pathinfo === '/js/b9cf0e8.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b9cf0e8',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b9cf0e8',);
            }

            // _assetic_b9cf0e8_0
            if ($pathinfo === '/js/b9cf0e8_paris_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b9cf0e8',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b9cf0e8_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/d29f592')) {
            // _assetic_d29f592
            if ($pathinfo === '/css/d29f592.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd29f592',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_d29f592',);
            }

            // _assetic_d29f592_0
            if ($pathinfo === '/css/d29f592_style_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd29f592',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_d29f592_0',);
            }

        }

        if (0 === strpos($pathinfo, '/images/62d0bf9')) {
            // _assetic_62d0bf9
            if ($pathinfo === '/images/62d0bf9.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '62d0bf9',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_62d0bf9',);
            }

            // _assetic_62d0bf9_0
            if ($pathinfo === '/images/62d0bf9_Qt_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '62d0bf9',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_62d0bf9_0',);
            }

        }

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

        if (0 === strpos($pathinfo, '/gagnegros')) {
            // gagnegros_accueil
            if (rtrim($pathinfo, '/') === '/gagnegros') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gagnegros_accueil');
                }

                return array (  '_controller' => 'GagneGrosBundle\\Controller\\GagneGrosController::indexAction',  '_route' => 'gagnegros_accueil',);
            }

            if (0 === strpos($pathinfo, '/gagnegros/paris')) {
                // paris_normal
                if ($pathinfo === '/gagnegros/paris/normal') {
                    return array (  '_controller' => 'GagneGrosBundle\\Controller\\GagneGrosController::parisNormalAction',  '_route' => 'paris_normal',);
                }

                // paris_mitemp
                if ($pathinfo === '/gagnegros/paris/mitemp') {
                    return array (  '_controller' => 'GagneGrosBundle\\Controller\\GagneGrosController::parisMitempAction',  '_route' => 'paris_mitemp',);
                }

                // paris_scorefinal
                if ($pathinfo === '/gagnegros/paris/score') {
                    return array (  '_controller' => 'GagneGrosBundle\\Controller\\GagneGrosController::parisScoreAction',  '_route' => 'paris_scorefinal',);
                }

            }

            if (0 === strpos($pathinfo, '/gagnegros/hasard')) {
                // hasard_normal
                if ($pathinfo === '/gagnegros/hasard/normal') {
                    return array (  '_controller' => 'GagneGrosBundle\\Controller\\GagneGrosController::hasardNormalAction',  '_route' => 'hasard_normal',);
                }

                // hasard_pognon
                if ($pathinfo === '/gagnegros/hasard/pognon') {
                    return array (  '_controller' => 'GagneGrosBundle\\Controller\\GagneGrosController::hasardPognonAction',  '_route' => 'hasard_pognon',);
                }

                // hasard_bigmoney
                if ($pathinfo === '/gagnegros/hasard/bigmoney') {
                    return array (  '_controller' => 'GagneGrosBundle\\Controller\\GagneGrosController::hasardBigmoneyAction',  '_route' => 'hasard_bigmoney',);
                }

                // hasard_floush
                if ($pathinfo === '/gagnegros/hasard/floush') {
                    return array (  '_controller' => 'GagneGrosBundle;GagneGros:hasardFloush',  '_route' => 'hasard_floush',);
                }

                // hasard_surprise
                if ($pathinfo === '/gagnegros/hasard/surprise') {
                    return array (  '_controller' => 'GagneGrosBundle;GagneGros:hasardSurprise',  '_route' => 'hasard_surprise',);
                }

                // hasard_identique
                if ($pathinfo === '/gagnegros/hasard/identique') {
                    return array (  '_controller' => 'GagneGrosBundle;GagneGros:hasardIdentique',  '_route' => 'hasard_identique',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
