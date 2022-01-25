<?php 
   class SupplierModel {
       private $table = 'supplier';
       private $db;

       public function __construct() {
           $this->db = new Database;
       }

       public function getAllSupplier() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
   }
?>