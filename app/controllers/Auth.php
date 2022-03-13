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
    }
?>