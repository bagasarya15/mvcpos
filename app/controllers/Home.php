<?php 

    class Home extends Controller {
        public function index() {
            $data['title'] = 'Home';
            $data['nama'] = $this->model('UserModel')->getUser();
            $this->view('template/header', $data);
            $this->view('template/sidebar');
            $this->view('template/topbar');
            $this->view('admin/index', $data);
            $this->view('template/footer');
            
        }
    }
?>