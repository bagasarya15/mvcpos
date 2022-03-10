<?php 
    class transaksiModel {
        private $table = 'transaksi';
        private $db;

        private $query_join = 'SELECT 
                    T.id_transaksi, 
                    T.kodeBarang, 
                    T.namaBarang
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
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }

        public function getTransaksiJoin() {
            $this->db->query($this->query_join);
            return $this->db->resultSet();
        }

        public function tambahKeranjang() {
            $query = "INSERT INTO transaksi
                            VALUES
                        (null, :kodeBarang, :namaBarang, :jumlah)";

            $this->db->query($query);
            $this->db->bind('kodeBarang', $data['kodeBarang']);
            $this->db->bind('namaBarang', $data['namaBarang']);
            $this->db->bind('jumlah', $data['jumlah']);
            $this->db->execute();

            return $this->db->rowCount();
        }
    }    
?>