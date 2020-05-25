<?php

class Errors extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        require 'Views/errors/head.php';
        $this->view->render('errors/error_404', true);
    }

}
