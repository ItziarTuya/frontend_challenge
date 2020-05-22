<?php
class Database extends PDO
{
    public function __construct(){
        parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS); 
	}
        // database credentials
        /*private $host       = "localhost";
        private $db_name    = "habitissimo";
        private $username   = "root";
        private $password   = "";
        public  $conn;
      
       
        private static function connection(){
      
            try{
                $pdo = new PDO ( "mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password );
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }catch( PDOException $exception ){
                echo "Connection error: " . $exception->getMessage();
            }
      
            return $pdo;
        }

        public static function query($query, $params = array()){
        
            $statement = self::connection()->prepare($query);
            $statement->execute($params);

            if(explode('', $query)[0] == 'SELECT'){
                $data = $statement->fetchAll();
                return $data;
			}else{
                return $statement;     
			}
		}*/

    }

?>