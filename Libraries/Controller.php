<?php

class Controller {

    function __construct() {
        $this->view = new View();
    }

    public function loadModel($name) {

        $path = 'Models/' . ucfirst($name) . 'Model.php';

        if (file_exists($path)) {

            require 'Models/' . ucfirst($name) . 'Model.php';
            $modelName = ucfirst($name) . 'Model';

            $this->model = new $modelName();
        }
    }

    public function loadLib($name) {

        $path = 'Libraries/' . ucfirst($name) . 'Lib.php';

        if (file_exists($path)) {

            require 'Libraries/' . ucfirst($name) . 'Lib.php';
            $libName = ucfirst($name) . 'Lib';

            $this->lib = new $libName();
        }
    }

}
