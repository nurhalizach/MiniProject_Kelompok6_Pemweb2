<?php

class EditRuangan extends Controller {
    public function index($id_ruangan){
        $data['ruangan'] = $this->model('Ruangan_model')->getRuanganById($id_ruangan);
        $this->view('edit_ruangan/index', $data);
    }
}
