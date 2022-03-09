<?php 
    class produkModel {
        // private $table = 'produk';
        private $db;

        private $query_join = 'SELECT 
                    P.id_produk, 
                    P.kodeBarang, 
                    K.kategori, 
                    P.namaBarang, 
                    P.hargaBeli,
                    P.hargaJual, 
                    P.satuanBarang, 
                    P.stok, 
                    P.tgl_input
                FROM produk AS P
                JOIN kategori AS K
                ON P.id_kategori = K.id_kategori';

        public function __construct() {
            $this->db = new Database;
        }

        public function getAllProduk() {
            // $this->db->query('SELECT * FROM ' . $this->table);
            $this->db->query($this->query_join);

            return $this->db->resultSet();
        }

        public function getProdukById($id_produk) {
            $this->db->query($this->query_join.' WHERE P.id_produk=:id_produk');
            $this->db->bind('id_produk', $id_produk);

            return $this->db->single();
        }

        public function tambahDataProduk($data) {  
            $query = "INSERT INTO produk
                            VALUES
                        (null, :kodeBarang, :id_kategori, :namaBarang, :hargaBeli, :hargaJual, :satuanBarang, :stok, :tgl_input, :tgl_update)";

            $this->db->query($query);
            $this->db->bind('kodeBarang', $data['kodeBarang']);
            $this->db->bind('id_kategori', $data['id_kategori']);
            $this->db->bind('namaBarang', $data['namaBarang']);
            $this->db->bind('hargaBeli', $data['hargaBeli']);
            $this->db->bind('hargaJual', $data['hargaJual']);
            $this->db->bind('satuanBarang', $data['satuanBarang']);
            $this->db->bind('stok', $data['stok']);
            $this->db->bind('tgl_input', $data['tgl_input']);
            $this->db->bind('tgl_update', $data['tgl_update']);

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

        public function ubahDataProduk($data) {  
            $query = "UPDATE produk SET
                        kodeBarang = :kodeBarang,
                        id_kategori = :id_kategori,
                        namaBarang = :namaBarang,
                        hargaBeli = :hargaBeli,
                        hargaJual = :hargaJual,
                        satuanBarang = :satuanBarang,
                        stok = :stok,
                        tgl_update =  :tgl_update
                    WHERE id_produk = :id_produk";

            
            $this->db->query($query);
            $this->db->bind('kodeBarang', $data['kodeBarang']);
            $this->db->bind('id_kategori', $data['id_kategori']);
            $this->db->bind('namaBarang', $data['namaBarang']);
            $this->db->bind('hargaBeli', $data['hargaBeli']);
            $this->db->bind('hargaJual', $data['hargaJual']);
            $this->db->bind('satuanBarang', $data['satuanBarang']);
            $this->db->bind('stok', $data['stok']);
            $this->db->bind('tgl_update', $data['tgl_update']);
            $this->db->bind('id_produk', $data['id_produk']);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function cariDataProduk() {
            $cari = $_POST['cari'];
            $query = "SELECT * FROM produk WHERE kodeBarang OR namaBarang LIKE :cari";
            $this->db->query($query);
            $this->db->bind('cari', "%$cari%");
            return $this->db->resultSet();
        }
    }
?>