<?php
    include 'database.php';
?>
<?php
    class category {
        private $db;
         public function __construct()
         {
            $this->db= new Database();
         }
         public function insertIntoCategory($category_name)
         {
            $query = "INSERT INTO category(category_name) VALUES ('$category_name')";
            $result = $this->db->insert($query);
            return $result;
         }
    }
?>