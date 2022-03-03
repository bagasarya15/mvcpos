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

        public function tambahDataProduk($data) {  
            $query = "INSERT INTO produk
                            VALUES
                        (null, :kodeBarang, :namaBarang, :id_kategori, :hargaBeli, :hargaJual, :satuanBarang, :stok, :tgl_input)";

            $this->db->query($query);
            $this->db->bind('kodeBarang', $data['kodeBarang']);
            $this->db->bind('id_kategori', $data['id_kategori']);
            $this->db->bind('namaBarang', $data['namaBarang']);
            $this->db->bind('hargaBeli', $data['hargaBeli']);
            $this->db->bind('hargaJual', $data['hargaJual']);
            $this->db->bind('satuanBarang', $data['satuanBarang']);
            $this->db->bind('stok', $data['stok']);
            $this->db->bind('tgl_input', $data['tgl_input']);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function hapusDataProduk($id_produk) {
            $query = "DELETE FROM produk WHERE id_produk = :id_produk";
            $this->db->query($query);
            $this->db->bind('id_produk', $id_produk);

            $this->db->execute();

            return $this->db->rowCount();
        }
    }
?>