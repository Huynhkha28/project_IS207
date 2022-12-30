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
         public function showCategory()
         {
            $query = "SELECT *FROM category ORDER BY category_id DESC";
            $result = $this->db->select($query);
            return $result;
         }
         public function get_category($category_id)
         {
            $query = "SELECT *FROM category WHERE category_id = '$category_id'";
            $result = $this->db->select($query);
            return $result;
         }
         public function updateIntoCategory($category_name, $category_id)
         {
            $query = "UPDATE category SET category_name = '$category_name' WHERE category_id = '$category_id'";
            $result = $this->db->update($query);
            header('Location:categorylist.php');
            return $result;

         }
         public function deleteCategory($category_id)
         {
            $query = "DELETE FROM category WHERE category_id = '$category_id'";
            $result = $this->db->delete($query);
            header('Location:categorylist.php');
            return $result;
         }
      }
?>