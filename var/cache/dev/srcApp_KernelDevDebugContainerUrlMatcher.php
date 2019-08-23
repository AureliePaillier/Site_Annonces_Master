<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/' => [[['_route' => 'job.list', '_controller' => 'App\\Controller\\JobController::list'], null, ['GET' => 0], null, false, false, null]],
            '/job/create' => [[['_route' => 'job.create', '_controller' => 'App\\Controller\\JobController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/category/([^/]++)(?:/(\\d+))?(*:36)'
                    .'|/job/(?'
                        .'|(\\d+)(*:56)'
                        .'|(\\w+)/edit(*:73)'
                        .'|(\\w+)(*:85)'
                        .'|(\\w+)/delete(*:104)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:144)'
                        .'|wdt/([^/]++)(*:164)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:210)'
                                .'|router(*:224)'
                                .'|exception(?'
                                    .'|(*:244)'
                                    .'|\\.css(*:257)'
                                .')'
                            .')'
                            .'|(*:267)'
                        .')'
                    .')'
                .')/?$}sD',
        ];
        $this->dynamicRoutes = [
            36 => [[['_route' => 'category.show', 'page' => 1, '_controller' => 'App\\Controller\\CategoryController::show'], ['slug', 'page'], ['GET' => 0], null, false, true, null]],
            56 => [[['_route' => 'job.show', '_controller' => 'App\\Controller\\JobController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            73 => [[['_route' => 'job.edit', '_controller' => 'App\\Controller\\JobController::edit'], ['token'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            85 => [[['_route' => 'job.preview', '_controller' => 'App\\Controller\\JobController::preview'], ['token'], ['GET' => 0], null, false, true, null]],
            104 => [[['_route' => 'job.delete', '_controller' => 'App\\Controller\\JobController::delete'], ['token'], ['DELETE' => 0], null, false, false, null]],
            144 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            164 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            210 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            224 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            244 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            257 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            267 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
