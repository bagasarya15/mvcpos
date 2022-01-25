<?php 

    class Supplier extends Controller {
        public function index() {
            $data['title'] = 'Supplier';
            $data['sup'] = $this->model('SupplierModel')->getAllSupplier();
            $this->view('template/header', $data);
            $this->view('template/sidebar');
            $this->view('template/topbar');
            $this->view('supplier/index', $data);
            $this->view('template/footer');
        }
    }
?>