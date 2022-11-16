<?php

require_once 'vendor/autoload.php';

$url = "/" . trim(explode("?", $_SERVER['REQUEST_URI'])[0], "/");

switch ($url) {
    case "/":
        $controller = new \App\Controller\PostController();
        $controller->home();
        break;


    case "/login":
        $controller = new \App\Controller\LoginController();
        $controller->login();
        break;

    default:
        throw new Exception("RIEN TROUVE !");
}
