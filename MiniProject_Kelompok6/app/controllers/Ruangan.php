<?php

    class Ruangan extends Controller {
        public function index(){
            $data['ruangan'] = $this ->model('Ruangan_model')->getAllRuangan();
            $this->view('template/header');
            $this->view('ruangan/index', $data);
        }
        
        public function tambah(){
            if ($this->model('Ruangan_model')->tambahRuangan($_POST) > 0 ) {
                header ('Location: '. BASEURL . '/ruangan');
                exit;
            }
        }

        public function edit(){
            if ($this->model('Ruangan_Model')->editRuangan($_POST) > 0 ) {
                header ('Location: '. BASEURL . '/ruangan');
                exit;
            }        
        }

        public function hapus($id){
            if ($this->model('Ruangan_Model')->hapusRuangan($id) > 0 ) {
                header ('Location: '. BASEURL . '/ruangan');
                exit;
            }
        }
    }
?>