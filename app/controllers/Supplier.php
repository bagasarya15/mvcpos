<?php 

    class Supplier extends Controller {
        public function index() {
            $data = [
                'title' => 'Supplier',
            ];
            $data['sup'] = $this->model('supplierModel')->getAllSupplier();
            $this->view('template/header', $data);
            $this->view('template/sidebar');
            $this->view('template/topbar');
            $this->view('supplier/index', $data);
            $this->view('template/footer');
        }

        public function cetakPDF() {
            $data['title'] = 'Supplier';
            $data['sup'] = $this->model('supplierModel')->getAllSupplier();
            $this->view('supplier/cetakPDF');
        }

        public function print() {
            $data['title'] = 'Laporan Supplier';
            $data['sup'] = $this->model('supplierModel')->getAllSupplier();
            $this->view('template/header', $data);
            $this->view('supplier/print', $data);
        }

        public function detail($id_supplier) {
            $data['title'] = 'Detail Supplier';
            $data['sup'] = $this->model('supplierModel')->getSupplierById($id_supplier);
        }

        public function tambah() {
            //Validasi Inputan
            if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING, 'htmlspecialchars');

                $data = [
                    'namaSupplier' => trim($_POST['namaSupplier']),
                    'alamatSupplier' => trim($_POST['alamatSupplier']),
                    'tlpSupplier' => trim($_POST['tlpSupplier']),
                ];
            }
            
            if( $this->model('supplierModel')-> tambahDataSupplier($_POST) > 0 ) {
                Flasher::setFlash('Supplier','Berhasil', 'Ditambahkan', 'success');
                header('Location:' . BASEURL . '/supplier');
                exit;                
            } else {
                Flasher::setFlash('Supplier','Gagal', 'Ditambahkan', 'danger');
                header('Location:' . BASEURL . '/supplier');
                exit;        
            }
            $this->view('supplier/index', $data);
        }

        public function hapus($id_supplier) {
            if( $this->model('supplierModel')->hapusDataSupplier($id_supplier) > 0 ) {
                Flasher::setFlash('Supplier','Berhasil', 'Dihapus', 'success');
                header('Location: ' . BASEURL . '/supplier');
                exit;
            } else {
                Flasher::setFlash('Supplier','Gagal', 'Dihapus', 'danger');
                header('Location: ' . BASEURL . '/supplier');
                exit;
            }
        }

        public function getubah() {
            echo json_encode($this->model('supplierModel')->getSupplierById($_POST['id_supplier']));
        }
        
        public function ubah() {
            //Validasi Inputan
            if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING, 'htmlspecialchars');
                
                $data = [
                    'namaSupplier' => trim($_POST['namaSupplier']),
                    'alamatSupplier' => trim($_POST['alamatSupplier']),
                    'tlpSupplier' => trim($_POST['tlpSupplier']),
                ];
            }
            
            if( $this->model('supplierModel')->ubahDataSupplier($_POST) > 0 ) {
                Flasher::setFlash('Supplier','Berhasil', 'Diubah', 'success');
                header('Location: ' . BASEURL . '/supplier');
                exit;
            } else {
                Flasher::setFlash('Supplier','Gagal', 'Diubah', 'danger');
                header('Location: ' . BASEURL . '/supplier');
                exit;
            }
            $this->view('supplier/index', $data);
        }
    }
?>