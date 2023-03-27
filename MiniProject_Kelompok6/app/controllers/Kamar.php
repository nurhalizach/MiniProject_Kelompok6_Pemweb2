<?php

class Kamar extends Controller {
    public function index(){
        $data['kamar'] = $this->model('KamarModel')->getAllRoom();
        $this->view('template/header', $data);
        $this->view('kamar/index', $data);
        $this->view('template/footer', $data);
    }

    public function tambah(){
        if ($this->model('KamarModel')->tambahKamar($_POST) > 0 ) {
            header ('Location: '. BASEURL . '/kamar');
            exit;
        }
    }

    public function hapus($id){
        if ($this->model('KamarModel')->hapusKamar($id) > 0 ) {
            header ('Location: '. BASEURL . '/kamar');
            exit;
        }
    }

    public function edit(){
        if ($this->model('KamarModel')->editKamar($_POST) > 0 ) {
            header ('Location: '. BASEURL . '/kamar');
            exit;
        }
    }
}