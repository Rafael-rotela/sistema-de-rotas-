<?php

function load(string $controller, string $action)
{
    try {
        // se controller existe
        $controllerNamespace = "Rjvra\\SistemaDeRotas\\controllers\\{$controller}";

        if (!class_exists($controllerNamespace)) {
            throw new Exception("O controller {$controller} não existe");
        }

        $controllerInstance = new $controllerNamespace();

        if (!method_exists($controllerInstance, $action)) {
            throw new Exception("O metodo {$action} não existe no controller {$controller}");
        }

        $controllerInstance->$action();
    } catch (Exception $erro) {
        echo $erro->getMessage();
    }
}



$router = [
    'GET' => [
        '/' =>fn() => ['HomeController', 'index'],
        '/contact' => fn() => ['ContactController', 'index'],
    ],
    'POST' => [
        '/contact' => fn() => ['ContactController', 'store'],
    ],
];
