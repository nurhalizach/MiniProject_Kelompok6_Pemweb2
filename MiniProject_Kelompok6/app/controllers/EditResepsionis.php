<?php

class EditResepsionis extends Controller {
    public function index($id_karyawan){
        $data['resepsionis'] = $this->model('Resepsionis_model')->getResepsionisById($id_karyawan);
        $this->view('edit_resepsionis/index', $data);
    }
}
