<?php

    class Resepsionis extends Controller {
        public function index(){
            $data['resepsionis'] = $this ->model('Resepsionis_model')->getAllResepsionis();
            $this->view('template/header');
            $this->view('resepsionis/index', $data);
        }
        
        public function tambah(){
            if ($this->model('Resepsionis_model')->tambahResepsionis($_POST) > 0 ) {
                header ('Location: '. BASEURL . '/resepsionis');
                exit;
            }
        }

        public function edit(){
            if ($this->model('Resepsionis_model')->editResepsionis($_POST) > 0 ) {
                header ('Location: '. BASEURL . '/resepsionis');
                exit;
            }        
        }

        public function hapus($id){
            if ($this->model('Resepsionis_model')->hapusResepsionis($id) > 0 ) {
                header ('Location: '. BASEURL . '/resepsionis');
                exit;
            }
        }
    }
?>