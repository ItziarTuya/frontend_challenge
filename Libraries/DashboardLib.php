<?php

class DashboardLib {

    function getCategories() {

        require 'Models/CategoriesModel.php';
        $model = new CategoriesModel();
        
        $rows = $model->getCategories();

        $options = array();
        foreach ($rows as $row) {
            $options[] = '<option value=' . $row['id'] . '>' . $row['name'] .'</option>';
        }
        
        return $options;
    }

}
