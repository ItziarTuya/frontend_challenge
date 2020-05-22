<?php

class SubcategoriesModel extends Model {

    function __construct() {
        parent::__construct();
    }

    public function getSubcategories($id) {
        
        $stmt = $this->db->prepare("SELECT id, name FROM subcategories WHERE id_category = :id_category");
        $stmt->execute( array(
                ':id_category' => $id
        ));
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
