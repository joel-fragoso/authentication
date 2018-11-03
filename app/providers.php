<?php

// Fetch DI Container
$container = $app->getContainer();

// Register Twig View helper
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('/../resources/views/templates/template', [
        'cache' => '/../resources/cache'
    ]);
    
    // Instantiate and add Slim specific extension
    $router = $container->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));

    return $view;
}
