<?php

class EditKamar extends Controller {
    public function index($id_kamar){
        $data['kamar'] = $this->model('KamarModel')->getKamarById($id_kamar);
        $this->view('edit_kamar/index', $data);
    }
}
