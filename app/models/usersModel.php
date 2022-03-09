<?php 
    class usersModel {
        private $table = 'users';
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getAllUsers() {
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }

        public function tambahDataUser($data) {  
            $query = "INSERT INTO users
                            VALUES
                        (null, :username, :password)";

            $this->db->query($query);
            $this->db->bind('username', $data['username']);
            $this->db->bind('password', $data['password']);
            
            $this->db->execute();
            return $this->db->rowCount();
        }

       public function hapusDataUser($id_user) {
            $query = "DELETE FROM users WHERE id_user = :id_user";
            $this->db->query($query);
            $this->db->bind('id_user', $id_user);

            $this->db->execute();
            return $this->db->rowCount();
        }
    }    
?>