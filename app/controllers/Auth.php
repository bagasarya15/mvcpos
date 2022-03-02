<?php 
    class Auth extends Controller {
        
        public function index() {
            $data = [
                'title' => 'SR-POS | Login',
            ];
            $this->view('auth/login', $data);
        }
        
        public function register() {
            $data = [
                'title' => 'SR-POS | Register',
            ];
            $this->view('auth/register', $data);
        }

        public function logout() {
            $this->view('auth/logout');
        }
    }
?>