<?php 
    class kategoriModel {
        private $table = 'kategori';
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getAllKategori() {
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }

        public function getKategoriById($id_kategori) {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_kategori=:id_kategori');
            $this->db->bind('id_kategori', $id_kategori);
            return $this->db->single();
        }

        public function tambahDataKategori($data) {  
            $query = "INSERT INTO kategori
                            VALUES
                        (null, :kategori, :tgl_input)";

            $this->db->query($query);
            $this->db->bind('kategori', $data['kategori']);
            $this->db->bind('tgl_input', $data['tgl_input']);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function hapusDataKategori($id_kategori) {
            $query = "DELETE FROM kategori WHERE id_kategori = :id_kategori";
            $this->db->query($query);
            $this->db->bind('id_kategori', $id_kategori);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function ubahDataKategori($data) {  
            $query = "UPDATE kategori SET
                        kategori = :kategori,
                        tgl_input =  :tgl_input
                    WHERE id_kategori = :id_kategori";

            
            $this->db->query($query);
            $this->db->bind('kategori', $data['kategori']);
            $this->db->bind('tgl_input', $data['tgl_input']);
            $this->db->bind('id_kategori', $data['id_kategori']);

            $this->db->execute();

            return $this->db->rowCount();
        }
    }
?>