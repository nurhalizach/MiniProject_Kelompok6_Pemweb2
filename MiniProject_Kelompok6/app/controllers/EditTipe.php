<?php 

class EditTipe extends Controller {
    public function index($id_tipe){
        $data['tipe'] = $this->model('TipeKamar_model')->gettipe_kamarById($id_tipe);
        $this->view('edit_tipekamar/index', $data);
    }
}