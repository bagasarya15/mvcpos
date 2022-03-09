<?php 
    class transaksiModel {
        // private $table = 'transaksi';
        private $db;

        private $query_join = 'SELECT 
                    T.id_transaksi, 
                    T.kodeBarang, 
                    T.jumlah,
                    T.total, 
                    C.customer
                    
                FROM transaksi AS T
                JOIN customer AS C
                ON T.id_customer = C.id_customer';

        public function __construct() {
            $this->db = new Database;
        }

        public function getAllTransaksi() {
            // $this->db->query('SELECT * FROM ' . $this->table);
            $this->db->query($this->query_join);
            return $this->db->resultSet();
        }
    }    
?>