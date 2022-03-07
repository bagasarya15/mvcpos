<?php 
    class Transaksi extends Controller {
        public function index() {
            $data = [
                'title' => 'Transaksi Penjualan',
                'produk' => $this->model('produkModel')->getAllProduk(),
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
            // 'riwayatTransaksi'=> $this->model('transaksiModel')->getAllTransaksiById()
            // 'transaksi' => $this->model('transaksiModel')->getAllTransaksi(),
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
            ]; 
            
            $this->view('template/header', $data);
            $this->view('template/sidebar');
            $this->view('template/topbar');
            $this->view('transaksi/index', $data);
            $this->view('template/footer');
        }
    }
?>