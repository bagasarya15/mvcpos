<?php 
    class Auth extends Controller {
        
        public function index() {
            $data = [
                'title' => 'SR-POS | Login',
            ];
            $this->view('auth/login', $data);
        }
        
        public function logout() {
            $this->view('auth/logout');
        }

        public function kasir() {
            $data = [
                'title' => 'Kasir',
                'users' => $this->model('usersModel')->getAllUsers(),
            ];
            $this->view('template/header', $data);
            $this->view('template/sidebar');
            $this->view('template/topbar');
            $this->view('auth/kasir', $data);
            $this->view('template/footer');
        }

          public function hapus($id_user) {
            if( $this->model('usersModel')->hapusDataUser($id_user) > 0 ) {
                Flasher::setFlash('User','Berhasil', 'Dihapus', 'success');
                header('Location: ' . BASEURL . '/auth/kasir');
                exit;
            } else {
                Flasher::setFlash('User', 'Gagal', 'Dihapus', 'danger');
                header('Location: ' . BASEURL . '/auth/kasir');
                exit;
            }
        }
    }
?>