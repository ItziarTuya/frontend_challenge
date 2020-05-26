<?php

class Errors extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        require 'Views/error/head.php';
        $this->view->render('error/error_404', true);
    }

}
