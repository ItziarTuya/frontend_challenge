<?php

class Subcategories extends Controller {

    function __contruct() {
        parent::__construct();
    }
    
    function getSubcategories(){
        
        //$SESSION['category'] = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        
        $subcategories = $this->model->getSubcategories($id);
        
        $options = array();
        foreach ($subcategories as $subcategory) {
            $options[$subcategory['id']] = $subcategory['name'];
        }
        
        echo json_encode( $options );
        
    }
    
}