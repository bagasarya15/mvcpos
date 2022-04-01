<?php 
    class Transaksi extends Controller {
        public function index() {
            $data = [
                'title' => 'Transaksi Penjualan',
                'produk' => $this->model('produkModel')->getAllProduk(),
                'customer' => $this->model('customerModel')->getAllCustomer(),
                'keranjang' => $this->model('transaksiModel')->getAllTransaksi(),
            ];
           
            $this->view('template/header', $data);
            $this->view('template/sidebar', $data);
            $this->view('template/topbar');
            $this->view('transaksi/index', $data);
            $this->view('template/footer');
        }

        public function tambahCustomer() {
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
                header('Location:' . BASEURL . '/transaksi');
                exit;                
            } else {
                Flasher::setFlash('Customer','Gagal', 'Ditambahkan', 'danger');
                header('Location:' . BASEURL . '/transaksi');
                exit;        
            }
            $this->view('customer/index', $data);
        }

        public function riwayatTransaksi() {
            $data = [
            'title' => 'Riwayat Transaksi',
            'produk' => $this->model('produkModel')->getAllProduk(),
            'customer' => $this->model('customerModel')->getAllCustomer(),
            ];
           
            $this->view('template/header', $data);
            $this->view('template/sidebar', $data);
            $this->view('template/topbar');
            $this->view('transaksi/riwayatTransaksi', $data);
            $this->view('template/footer');
        }
        
        public function cari() {
            $data = [
                'title' => 'Transaksi Penjualan',
                'produk' => $this->model('produkModel')->cariDataProduk(),
                'customer' => $this->model('customerModel')->getAllCustomer(),
                'keranjang' => $this->model('transaksiModel')->getAllTransaksi(),
            ]; 
            
            $this->view('template/header', $data);
            $this->view('template/sidebar');
            $this->view('template/topbar');
            $this->view('transaksi/index', $data);
            $this->view('template/footer');
        }

        public function tambahKeranjang() {
            if( $this->model('transaksiModel')->tambahKeranjang($_POST) > 0 ) {
                Flasher::setFlash('Barang','Berhasil', 'Ditambahkan', 'success');
                header('Location:' . BASEURL . '/transaksi');
                exit;                
            } else {
                Flasher::setFlash('Barang','Gagal', 'Ditambahkan', 'danger');
                header('Location:' . BASEURL . '/transaksi');
                exit;        
            }
        }
    }
?>