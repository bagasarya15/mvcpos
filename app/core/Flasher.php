<?php

class Flasher {
    // Menentukan Pesan ALert
    public static function setFlash($tPage ,$pesan, $aksi, $tipe) {
        $_SESSION['flash'] = [
            'tPage' => $tPage,
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash() {
        if ( isset($_SESSION['flash']) ) {
            echo' <div class="alert alert-' . $_SESSION['flash']['tipe'] . '  alert-dismissible fade show" role="alert">
                    Data '. $_SESSION['flash']['tPage'] .' ' . $_SESSION['flash']['pesan'] . ' ' . $_SESSION['flash']['aksi'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div> ';
          unset ($_SESSION['flash']);
        }
    }
}