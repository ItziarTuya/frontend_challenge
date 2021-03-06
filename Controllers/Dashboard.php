<?php

class Dashboard extends Controller {

    function __contruct() {
        parent::__construct();
    }

    function index() {
        $this->view->dashboardRender('dashboard/index', 'request');
    }

    function loadDetailsView() {
        $this->setSessionRequest();
        $categories = $this->lib->getCategories();
        $this->view->options = $categories;
        $this->view->render('dashboard/details', true);
    }

    public function backToStep1() {
        $this->setSessionDetails();
        $this->view->description = Session::get('description');
        $this->view->time = Session::get('time');
        $this->view->render('dashboard/request', true);
    }

    function loadDataView() {
        $this->setSessionDetails();

        //prepare data view
        if ( (Session::get('name')) !== null ){
            $this->getSessionData();
        }
        $this->view->render('dashboard/data', true);
    }

    public function backToStep2() {
        $this->setSessionData();

        //prepare details view
        $this->getSessionDetails();
        $categories = $this->lib->getCategories();

        $this->view->options = $categories;
        $this->view->render('dashboard/details', true);
    }

    function finishMail() {
        $this->setSessionData();

        if (preg_match('/(.*)@(hotmail)\.(.*)/', Session::get('email')) != false) {
            $this->view->error = 'Introduce otro dominio que no sea hotmail';
            $this->loadDataView();
        } else {
           // $this->createRequest();
            $this->view->name = Session::get('name');
            $this->view->render('dashboard/finish', true);
        }
    }

    //Session records:
    function setSessionRequest() {
        Session::set("description", filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING));
        Session::set("time", filter_input(INPUT_POST, 'time', FILTER_SANITIZE_STRING));
    }

    function setSessionDetails() {
        Session::set('category', filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING));
        Session::set('subcategory', filter_input(INPUT_POST, 'subcategory', FILTER_SANITIZE_STRING));
        Session::set('rate', filter_input(INPUT_POST, 'rate', FILTER_SANITIZE_STRING));
    }

    function getSessionDetails() {
        $this->view->category = Session::get('category');
        $this->view->subcategory = Session::get('subcategory');
        $this->view->rate = Session::get('rate');
    }

    function setSessionData() {
        Session::set('name', filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
        Session::set('email', filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
        Session::set('phone', filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
    }

    function getSessionData() {
        $this->view->name = 'value="' . Session::get('name') . '"';
        $this->view->email = 'value="' . Session::get('email') . '"';
        $this->view->phone = 'value="' . Session::get('phone') . '"';
    }
}
