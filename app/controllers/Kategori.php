<?php 
    class Kategori extends Controller{

        public function index() {
            $data = [
                'title' => 'Kategori'
            ];
            $data['kategori'] = $this->model('kategoriModel')->getAllKategori();
            $this->view('template/header', $data);
            $this->view('template/sidebar');
            $this->view('template/topbar');
            $this->view('kategori/index', $data);
            $this->view('template/footer');
        }

        public function tambah() {
            //Validasi Inputan
            if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING, 'htmlspecialchars');

                $data = [
                    'kategori' => trim($_POST['kategori']),
                    
                ];
            }
            
            if( $this->model('kategoriModel')-> tambahDataKategori($_POST) > 0 ) {
                Flasher::setFlash('Kategori','Berhasil', 'Ditambahkan', 'success');
                header('Location:' . BASEURL . '/kategori');
                exit;                
            } else {
                Flasher::setFlash('Kategori','Gagal', 'Ditambahkan', 'danger');
                header('Location:' . BASEURL . '/kategori');
                exit;        
            }
            $this->view('kategori/index', $data);
        }

        public function hapus($id_kategori) {
            if( $this->model('kategoriModel')->hapusDataKategori($id_kategori) > 0 ) {
                Flasher::setFlash('Kategori','Berhasil', 'Dihapus', 'success');
                header('Location: ' . BASEURL . '/kategori');
                exit;
            } else {
                Flasher::setFlash('Kategori','Gagal', 'Dihapus', 'danger');
                header('Location: ' . BASEURL . '/kategori');
                exit;
            }
        }

        public function getubah() {
            echo json_encode($this->model('kategoriModel')->getKategoriById($_POST['id_kategori']));
        }

        public function ubah() {
            //Validasi Inputan
            if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING, 'htmlspecialchars');
                
                $data = [
                    'kategori' => trim($_POST['kategori']),
                ];
            }
            
            if( $this->model('kategoriModel')->ubahDataKategori($_POST) > 0 ) {
                Flasher::setFlash('Kategori','Berhasil', 'Diubah', 'success');
                header('Location: ' . BASEURL . '/kategori');
                exit;
            } else {
                Flasher::setFlash('Kategori','Gagal', 'Diubah', 'danger');
                header('Location: ' . BASEURL . '/kategori');
                exit;
            }
            $this->view('kategori/index', $data);
        }
    }
    
?>