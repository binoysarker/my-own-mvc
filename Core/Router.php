<?php
namespace App\Core;

/**
 *
 */
class Router
{
    public $routes = [
        'GET' => [],
        'POST' => [],
    ];
    public function __construct()
    {
        # code...
    }
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public static function load($file)
    {
        $router = new self;
        require $file;

        return $router;
    }
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            // die($this->routes[$requestType][$uri]);
            $controller = explode('@', $this->routes[$requestType][$uri]);
            return $this->callAction(...$controller);
        } else {
            throw new Exception("No route is defined for the uri");

        }
    }
    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;
        // die(var_dump($controller, $action));
        if (!method_exists($controller, $action)) {
            throw new Exception("the {$controller} does not respond to the {$action} action.");
        }
        return $controller->$action();
    }
}
