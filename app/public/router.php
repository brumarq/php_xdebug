<?php

class PatternRouter
{
    public function route($uri)
    {
        $defaultController = 'home';
        $defaultMethod = 'index';

        $path = explode('/', $uri);

        if (empty($path[0])) {
            $path[0] = $defaultController;
        }
        $controllerName = $path[0] . 'Controller';

        if (!isset($path[1]) || empty($path['1'])) {
            $path[1] = $defaultMethod;
        }
        $methodName = $path[1];

        try {
            require __DIR__ . '/controller/' . $controllerName . '.php';
            $controllerObject = new $controllerName;
            $controllerObject->$methodName();

        } catch (Exception $e) {
            http_response_code(404);
            die('404 not found');
        }
    }
}