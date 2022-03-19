<?php 
    class User extends Controller {
        
        public function index() {
            $data = [
                'title' => 'User',
                'users' => $this->model('usersModel')->getAllUsers(),
            ];
            $this->view('template/header', $data);
            $this->view('template/sidebar',$data);
            $this->view('template/topbar');
            $this->view('user/index', $data);
            $this->view('template/footer');
        }
        
        public function tambah() {
            //Validasi Inputan
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'username' => trim($_POST['username']),
                'name' => trim($_POST['name']),
                'password' => trim($_POST['password'])
            ];
            
            $data = hash('md5', $data['password']);
        
            if( $this->model('usersModel')-> tambahDataUser($_POST) > 0 ) {
                Flasher::setFlash('Users','Berhasil', 'Ditambahkan', 'success');
                header('Location:' . BASEURL . '/user');
                exit;                
            } else {
                Flasher::setFlash('Users','Gagal', 'Ditambahkan', 'danger');
                header('Location:' . BASEURL . '/user');
                exit;        
            }
            $this->view('user/index', $data);
        }

        public function hapus($id_user) {
            if( $this->model('usersModel')->hapusDataUser($id_user) > 0 ) {
                Flasher::setFlash('User','Berhasil', 'Dihapus', 'success');
                header('Location: ' . BASEURL . '/user/index');
                exit;
            } else {
                Flasher::setFlash('User', 'Gagal', 'Dihapus', 'danger');
                header('Location: ' . BASEURL . '/user/index');
                exit;
            }
        }
    }
?>