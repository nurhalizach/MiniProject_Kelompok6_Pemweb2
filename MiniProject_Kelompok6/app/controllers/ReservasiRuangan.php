<?php

class ReservasiRuangan extends Controller {
    public function index(){
        $data['reservasi'] = $this->model('ReservasiModel')->getAllReservasiRuangan();
        $this->view('template/header_reservasi', $data);
        $this->view('reservasi_ruangan/index', $data);
    }

    public function tambah(){
        if ($this->model('ReservasiModel')->tambahReservasiRuangan($_POST) > 0 ) {
            header ('Location: '. BASEURL . '/ReservasiRuangan');
            exit;
        }
    }

    public function hapus($id){
        if ($this->model('ReservasiModel')->hapusReservasiRuangan($id) > 0 ) {
            header ('Location: '. BASEURL . '/ReservasiRuangan');
            exit;
        }
    }

    public function edit(){
        if ($this->model('ReservasiModel')->editReservasiRuangan($_POST) > 0 ) {
            header ('Location: '. BASEURL . '/ReservasiRuangan');
            exit;
        }
    }
}