<?php 

    class Home extends Controller {

        public function index() {
            $data =[
                'title' => 'Home',
                'supplier' => $this->model('supplierModel')->getAllSupplier(),
                'customer' => $this->model('customerModel')->getAllCustomer(),
                'produk' => $this->model('produkModel')->getAllProduk(),
                'users' => $this->model('usersModel')->getAllUsers(),
            ];

            $this->view('template/header', $data);
            $this->view('template/sidebar');
            $this->view('template/topbar');
            $this->view('home/index', $data);
            $this->view('template/footer');
            
        }
    }
?>