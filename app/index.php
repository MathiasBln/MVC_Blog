<?php

require_once 'vendor/autoload.php';

$url = "/" . trim(explode("?", $_SERVER['REQUEST_URI'])[0], "/");

switch ($url) {
    case "/":
        $controller = new \Root\Html\Controller\PostController();
        $controller->home();
        break;


    case "/login":
        $controller = new \Root\Html\Controller\LoginController();
        $controller->home();
        break;

    default:
        throw new Exception("RIEN TROUVE !");
}
