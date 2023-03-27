<?php

class EditReservasiKamar extends Controller {
    public function index($id_pesan){
        $data['reservasi'] = $this->model('ReservasiModel')->getReservasiKamarById($id_pesan);
        $this->view('edit_rsv_kamar/index', $data);
    }
}