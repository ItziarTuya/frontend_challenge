<?php

class Model {

    function __construct() {
        $this->db = new Database();
    }

    function fetch_array($stm) {

        $records = $stm->fetchAll();
        $result = array();
        if (!empty($records)) {

            foreach ($records as $record) {
                $result['name'][] = $record['name'];
            }
            
        return $result['name'];
        }
    }

}
