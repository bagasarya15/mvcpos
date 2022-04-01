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

        public function profile() {
            $data = [
                'title' => 'Kelola Akun',
            ];
            
            $this->view('template/header', $data);
            $this->view('template/sidebar');
            $this->view('template/topbar');
            $this->view('user/profile', $data);
            $this->view('template/footer');
        }
    }
?>