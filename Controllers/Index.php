<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->status = 'Comenzar';
        if (isset($_SESSION)){
            $this->view->status = 'Continuar';
        }
        $this->view->render('welcome_habitissimo');
    }

}
