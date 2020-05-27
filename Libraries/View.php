<?php

class View {

    function __construct() {
        Session::init();
    }

    public function render($name, $noInclude = false) {
        if ($noInclude == true) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/header.php';
            require 'views/' . $name . '.php';
        }
    }

    public function dashboardRender($name, $step = false) {

        require 'Views/dashboard/head.php';
        require 'Views/dashboard/header.php';
        require 'Views/dashboard/section.php';

        if ($step == true) {
            require 'Views/dashboard/' . $step . '.php';
        }

        require 'Views/dashboard/further.php';
        require 'Views/dashboard/footer.php';
    }

}
