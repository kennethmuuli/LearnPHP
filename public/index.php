<?php

//require __DIR__ . '/../src/Router.php';

require __DIR__.'/../vendor/autoload.php';

use App\Controllers\PublicController as Controller;

$router = new App\Router();
$dog = new App\Dog();
$controller = new Controller();
dump($_SERVER);

// switch($_SERVER['REQUEST_URI']) {
//     case '/':
//         $name = 'Kenneth';
//         require 'views/index.php';
//         break;
//     case '/about':
//         require 'views/about.php';
//         break;
//     default:
//         echo '404';
//         break;
// }