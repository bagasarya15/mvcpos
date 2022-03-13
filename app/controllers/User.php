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