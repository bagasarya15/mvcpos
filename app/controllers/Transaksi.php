<?php 
    class Transaksi extends Controller {
        public function index() {
            $data = [
                'title' => 'Transaksi Penjualan',
                'produk' => $this->model('produkModel')->getAllProduk(),
                'customer' => $this->model('customerModel')->getAllCustomer(),
                'keranjang' => $this->model('transaksiModel')->getAllTransaksi(),
                // 'transaksi' => $this->model('transaksiModel')->getAllTransaksi(),
            ];
           
            $this->view('template/header', $data);
            $this->view('template/sidebar');
            $this->view('template/topbar');
            $this->view('transaksi/index', $data);
            $this->view('template/footer');
        }

        public function riwayatTransaksi() {
            $data = [
            'title' => 'Riwayat Transaksi',
            'produk' => $this->model('produkModel')->getAllProduk(),
            'customer' => $this->model('customerModel')->getAllCustomer(),
            ];
           
            $this->view('template/header', $data);
            $this->view('template/sidebar');
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

        public function tambah() {
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