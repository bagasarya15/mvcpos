<?php 
    class produkModel {
        private $table = 'produk';
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getAllProduk() {
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }

        public function getProdukById($id_produk) {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_produk=:id_produk');
            $this->db->bind('id_produk', $id_produk);
            return $this->db->single();
        }
    }
?>