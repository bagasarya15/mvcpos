<?php 

    class Home extends Controller {
        public function index() {
            $data['title'] = 'Home';
            $data['cus'] = $this->model('CustomerModel')->getAllCustomer();
            $this->view('template/header', $data);
            $this->view('template/sidebar');
            $this->view('template/topbar');
            $this->view('home/index', $data);
            $this->view('template/footer');
            
        }
    }
?>