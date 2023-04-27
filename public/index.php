<?php

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../helpers.php';
require __DIR__.'/../routes.php';

$router = new App\Router($_SERVER['REQUEST_URI']);

$match = $router ->match();
if($match){
    if (is_callable($match['action'])) {
        call_user_func($match['action']);
    } elseif (is_array($match['action']) && isset($match['action'][0]) && isset($match['action'][1])) {
        $className = $match['action'][0];
        $controller = new $className();
        $method = $match['action'][1];
        $controller -> $method();
    }
} else {
    echo '404';
}