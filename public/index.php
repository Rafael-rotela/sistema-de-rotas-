<?php
require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/router/route.php';

try {
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $request = $_SERVER['REQUEST_METHOD'];

    if (!isset($router[$request])) {
        throw new Exception('A rota não existe');
    }

    if (!array_key_exists($uri, $router[$request])) {
        throw new Exception('A rota não existe');
    }

    $controller = $router[$request][$uri];
    $controller();
} catch (Exception $e) {
    echo $e->getMessage();
}
