<?php

class Bootstrap {

    function __construct() {

        $uri = $_SERVER['REQUEST_URI'];
        rtrim($uri, '/');
        $url = explode('/', $uri);

        if (empty($url[2])) {
            require 'Controllers/Index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }

        $file = 'Controllers/' . ucfirst($url[2]) . '.php';
        if (file_exists($file)) {
            require $file;
        } else {
            $this->error();
            return false;
        }

        $controller = new $url[2];
        $controller->loadModel($url[2]);
        $controller->loadLib($url[2]);

        //calling methods
        if (isset($url[4])) {
            if (method_exists($controller, $url[2])) {
                $controller->{$url[3]}($url[4]);
            } else {
                $this->error();
                return false;
            }
        } else {
            if (isset($url[3])) {
                $controller->{$url[3]}();
                return false;
            } else {
                $controller->index();
            }
        }
    }

    function error() {
        require 'Controllers/Errors.php';
        $controller = new Errors();
        $controller->index();
    }

}
