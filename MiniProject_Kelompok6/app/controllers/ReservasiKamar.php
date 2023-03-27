<?php

class ReservasiKamar extends Controller {
    public function index(){
        $data['reservasi'] = $this->model('ReservasiModel')->getAllReservasiKamar();
        $this->view('template/header_reservasi', $data);
        $this->view('reservasi_kamar/index', $data);
    }

    public function tambah(){
        if ($this->model('ReservasiModel')->tambahReservasiKamar($_POST) > 0 ) {
            header ('Location: '. BASEURL . '/ReservasiKamar');
            exit;
        }
    }

    public function hapus($id){
        if ($this->model('ReservasiModel')->hapusReservasiKamar($id) > 0 ) {
            header ('Location: '. BASEURL . '/ReservasiKamar');
            exit;
        }
    }

    public function edit(){
        if ($this->model('ReservasiModel')->editReservasiKamar($_POST) > 0 ) {
            header ('Location: '. BASEURL . '/ReservasiKamar');
            exit;
        }
    }
}