<?php 

    class Customer extends Controller {
        public function index() {
            $data['title'] = 'Customer';
            $data['customer'] = $this->model('customerModel')->getAllCustomer();
            $this->view('template/header', $data);
            $this->view('template/sidebar');
            $this->view('template/topbar');
            $this->view('customer/index', $data);
            $this->view('template/footer');
        }

        public function detail($id_customer) {
            $data['title'] = 'Detail Customer';
            $data['customer'] = $this->model('customerModel')->getCustomerById($id_customer);
        }

        public function print() {
            $data['title'] = 'Data Customer';
            $data['customer'] = $this->model('customerModel')->getAllCustomer();
            $this->view('template/header', $data);
            $this->view('template/topbar');
            $this->view('customer/print', $data);
        }

        public function tambah() {
             //Validasi Inputan
             if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING, 'htmlspecialchars');
                
                $data = [
                    'namaCustomer' => trim($_POST['namaCustomer']),
                    'alamatCustomer' => trim($_POST['alamatCustomer']),
                    'tlpCustomer' => trim($_POST['tlpCustomer']),
                ];
            }

            if( $this->model('customerModel')-> tambahDataCustomer($_POST) > 0 ) {
                Flasher::setFlash('Customer','Berhasil', 'Ditambahkan', 'success');
                header('Location:' . BASEURL . '/customer');
                exit;                
            } else {
                Flasher::setFlash('Customer','Gagal', 'Ditambahkan', 'danger');
                header('Location:' . BASEURL . '/customer');
                exit;        
            }
            $this->view('customer/index', $data);
        }

        public function hapus($id_customer) {
            if( $this->model('customerModel')->hapusDataCustomer($id_customer) > 0 ) {
                Flasher::setFlash('Customer','Berhasil', 'Dihapus', 'success');
                header('Location: ' . BASEURL . '/customer');
                exit;
            } else {
                Flasher::setFlash('Customer','Gagal', 'Dihapus', 'danger');
                header('Location: ' . BASEURL . '/customer');
                exit;
            }
        }

        public function getubah() {
            echo json_encode($this->model('customerModel')->getCustomerById($_POST['id_customer']));
        }
        
        public function ubah() {
            //Validasi Inputan
            if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING, 'htmlspecialchars');
                
                $data = [
                    'namaCustomer' => trim($_POST['namaCustomer']),
                    'alamatCustomer' => trim($_POST['alamatCustomer']),
                    'tlpCustomer' => trim($_POST['tlpCustomer']),
                ];
            }

            if( $this->model('customerModel')->ubahDataCustomer($_POST) > 0 ) {
                Flasher::setFlash('Customer','Berhasil', 'Diubah', 'success');
                header('Location: ' . BASEURL . '/customer');
                exit;
            } else {
                Flasher::setFlash('Customer','Gagal', 'Diubah', 'danger');
                header('Location: ' . BASEURL . '/customer');
                exit;
            }
            $this->view('customer/index', $data);
        }
    }
?>