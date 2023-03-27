<?php

class Tamu extends Controller {
    public function index(){
        $data['tamu'] = $this->model('TamuModel')->getAllTamu();
        $this->view('template/header', $data);
        $this->view('tamu/index', $data);
    }

    public function tambah(){
        if ($this->model('TamuModel')->tambahTamu($_POST) > 0 ) {
            $data['tamu'] = $this->model('TamuModel')->getAllTamu();
            header ('Location: '. BASEURL . '/tamu');
            exit;
        }
    }

    public function hapus($id){
        if ($this->model('TamuModel')->hapusTamu($id) > 0 ) {

            header ('Location: '. BASEURL . '/tamu');
        }
    }

    public function edit(){
        if ($this->model('TamuModel')->editTamu($_POST) > 0 ) {
            header ('Location: '. BASEURL . '/tamu');
            exit;
        }
    }
}