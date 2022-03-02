<?php 
   class supplierModel {
       private $table = 'supplier';
       private $db;

       public function __construct() {
           $this->db = new Database;
       }

       public function getAllSupplier() {
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
       }

       public function getSupplierById($id_supplier) {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_supplier=:id_supplier');
            $this->db->bind('id_supplier', $id_supplier);
            return $this->db->single();
        }

        public function tambahDataSupplier($data) {  
            $query = "INSERT INTO supplier
                            VALUES
                        (null, :namaSupplier, :alamatSupplier, :tlpSupplier, :deskripsi)";

            $this->db->query($query);
            $this->db->bind('namaSupplier', $data['namaSupplier']);
            $this->db->bind('alamatSupplier', $data['alamatSupplier']);
            $this->db->bind('tlpSupplier', $data['tlpSupplier']);
            $this->db->bind('deskripsi', $data['deskripsi']);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function hapusDataSupplier($id_supplier) {
            $query = "DELETE FROM supplier WHERE id_supplier = :id_supplier";
            $this->db->query($query);
            $this->db->bind('id_supplier', $id_supplier);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function ubahDataSupplier($data) {  
            $query = "UPDATE supplier SET
                        namaSupplier = :namaSupplier,
                        alamatSupplier = :alamatSupplier, 
                        tlpSupplier = :tlpSupplier,
                        deskripsi =  :deskripsi
                    WHERE id_supplier = :id_supplier";

            
            $this->db->query($query);
            $this->db->bind('namaSupplier', $data['namaSupplier']);
            $this->db->bind('alamatSupplier', $data['alamatSupplier']);
            $this->db->bind('tlpSupplier', $data['tlpSupplier']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('id_supplier',$data['id_supplier']);

            $this->db->execute();

            return $this->db->rowCount();
        }
    }
?>