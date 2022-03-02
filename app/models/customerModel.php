<?php 
   class customerModel {
       private $table = 'customer';
       private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getAllCustomer() {
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }

        public function getCustomerById($id_customer) {
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_customer=:id_customer');
            $this->db->bind('id_customer', $id_customer);
            return $this->db->single();
        }

        public function tambahDataCustomer($data) {  
            $query = "INSERT INTO customer
                        VALUES
                    (null, :namaCustomer, :alamatCustomer, :tlpCustomer)";

            $this->db->query($query);
            $this->db->bind('namaCustomer', $data['namaCustomer']);
            $this->db->bind('alamatCustomer', $data['alamatCustomer']);
            $this->db->bind('tlpCustomer', $data['tlpCustomer']);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function hapusDataCustomer($id_customer) {
            $query = "DELETE FROM customer WHERE id_customer = :id_customer";
            $this->db->query($query);
            $this->db->bind('id_customer', $id_customer);

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function ubahDataCustomer($data) {  
            $query = "UPDATE customer SET
                        namaCustomer = :namaCustomer,
                        alamatCustomer = :alamatCustomer, 
                        tlpCustomer = :tlpCustomer
                    WHERE id_customer = :id_customer";
            
            $this->db->query($query);
            $this->db->bind('namaCustomer', $data['namaCustomer']);
            $this->db->bind('alamatCustomer', $data['alamatCustomer']);
            $this->db->bind('tlpCustomer', $data['tlpCustomer']);
            $this->db->bind('id_customer',$data['id_customer']);

            $this->db->execute();

            return $this->db->rowCount();
        }

    }
?>