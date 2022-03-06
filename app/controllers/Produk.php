<?php 
    class Produk extends Controller {
        public function index() {
            // var_dump($this->model('produkModel')->getAllProduk()); die;
            $data = [
                'title' => 'Produk',
                'produk' => $this->model('produkModel')->getAllProduk(),
                'kategori' => $this->model('kategoriModel')->getAllKategori()
            ];
                
            $this->view('template/header', $data);
            $this->view('template/sidebar');
            $this->view('template/topbar');
            $this->view('produk/index', $data);
            $this->view('template/footer');
        }

        public function print() {
            $data['title'] = 'Laporan Data Produk';
            $data['produk'] = $this->model('produkModel')->getAllProduk();
            $this->view('template/header', $data);
            $this->view('produk/print', $data);
        }

        public function detail($id_produk) {
            $data['title'] = 'Detail Produk';
            $data['produk'] = $this->model('produkModel')->getProdukById($id_produk);
            $this->view('template/header', $data);
            $this->view('template/sidebar');
            $this->view('template/topbar');
            $this->view('produk/detail', $data);
            $this->view('template/footer');
        }

        public function tambah() {
            // var_dump($_POST); die;
            //Validasi Inputan
            if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING, 'htmlspecialchars');

                $data = [
                    'namaBarang' => trim($_POST['namaBarang']),
                    'hargaBeli' => trim($_POST['hargaBeli']),
                    'hargaJual' => trim($_POST['hargaJual']),
                ];
            }
            
            if( $this->model('produkModel')->tambahDataProduk($_POST) > 0 ) {
                Flasher::setFlash('Produk','Berhasil', 'Ditambahkan', 'success');
                header('Location:' . BASEURL . '/produk');
                exit;                
            } else {
                Flasher::setFlash('Produk','Gagal', 'Ditambahkan', 'danger');
                header('Location:' . BASEURL . '/produk');
                exit;        
            }
            $this->view('produk/index', $data);
        }

        public function hapus($id_produk) {
            if( $this->model('produkModel')->hapusDataproduk($id_produk) > 0 ) {
                Flasher::setFlash('Produk','Berhasil', 'Dihapus', 'success');
                header('Location: ' . BASEURL . '/produk');
                exit;
            } else {
                Flasher::setFlash('Produk','Gagal', 'Dihapus', 'danger');
                header('Location: ' . BASEURL . '/produk');
                exit;
            }
        }

        public function getubah() {
            echo json_encode($this->model('produkModel')->getProdukById($_POST['id_produk']));
        }
        
        public function ubah() {
            //Validasi Inputan
            if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING, 'htmlspecialchars');
                
                $data = [
                    'namaBarang' => trim($_POST['namaBarang']),
                    'hargaBeli' => trim($_POST['hargaBeli']),
                    'hargaJual' => trim($_POST['hargaJual']),
                ];
            }
            
            if( $this->model('produkModel')->ubahDataProduk($_POST) > 0 ) {
                Flasher::setFlash('Produk','Berhasil', 'Diubah', 'success');
                header('Location: ' . BASEURL . '/produk');
                exit;
            } else {
                Flasher::setFlash('Produk','Gagal', 'Diubah', 'danger');
                header('Location: ' . BASEURL . '/produk');
                exit;
            }
            $this->view('produk/index', $data);
        }
    }
?>