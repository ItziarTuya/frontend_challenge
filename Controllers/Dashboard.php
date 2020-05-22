<?php

class Dashboard extends Controller {

    function __contruct() {
        parent::__construct();
    }

    function index() {
        $this->view->dashboardRender('dashboard/index', 'request');
    }

    public function loadDetailsView() {

        Session::set("description", filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING));
        Session::set("time", filter_input(INPUT_POST, 'time', FILTER_SANITIZE_STRING));

        //prepare details view
        $categories = $this->lib->getCategories();

        $this->view->options = $categories;
        $this->view->render('dashboard/details', true);
    }

    public function backToStep1() {

        $this->setDetails();
        $this->view->description = Session::get('description');
        $this->view->time = Session::get('time');
        $this->view->render('dashboard/request', true);
    }

    function loadDataView() {
        
        Session::set('category', filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING));
        Session::set('subcategory', filter_input(INPUT_POST, 'subcategory', FILTER_SANITIZE_STRING));
        Session::set('rate', filter_input(INPUT_POST, 'rate', FILTER_SANITIZE_STRING));
        
        //prepare data view
        if (isset($_SESSION['step3']) && !empty($_SESSION['step3'])) {
        
            $this->view->name = empty(Session::get('name')) ? '' : 'value="' . Session::get('name') . '"';
            $this->view->email = empty(Session::get('email')) ? '' : 'value="' . Session::get('email') . '"';
            $this->view->phone = empty(Session::get('phone')) ? '' : 'value="' . Session::get('phone') . '"';
        }
        
        $this->view->render('dashboard/data', true);
    }   
    
    
    
    public function backToStep2() {
        
        Session::set('name', filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
        Session::set('email', filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
        Session::set('phone', filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
        Session::set('step3', true);

        $this->view->category = Session::get('category');
        $this->view->subcategory = Session::get('subcategory');
        $this->view->rate = Session::get('rate');
        
        $categories = $this->lib->getCategories();

        $this->view->options = $categories;
        $this->view->render('dashboard/details', true);
    }
    
    public function setDetails() {
        
        Session::set('category', filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING));
        Session::set('subcategory', filter_input(INPUT_POST, 'subcategory', FILTER_SANITIZE_STRING));
        Session::set('rate', filter_input(INPUT_POST, 'rate', FILTER_SANITIZE_STRING));
    }
}
