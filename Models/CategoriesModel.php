<?php 

class CategoriesModel extends Model
{
        function __construct()
        {
            parent::__construct();
        }

    
	public function getCategories()
	{
            $stmt = $this->db->prepare( "SELECT id, name FROM categories" );
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}
