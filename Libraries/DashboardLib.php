<?php

class DashboardLib {

    function getCategories() {

        require 'Models/CategoriesModel.php';
        $model = new CategoriesModel();

        $rows = $model->getCategories();

        $options = array();
        $options[] = '<option value="0">Selecciona una categoría</option>';
        foreach ($rows as $row) {
            $options[] = '<option value=' . $row['id'] . '>' . ucfirst($row['name']) . '</option>';
        }

        return $options;
    }

}
