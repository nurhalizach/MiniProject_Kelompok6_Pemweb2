<?php

class EditReservasiRuangan extends Controller {
    public function index($id_pesan){
        $data['reservasi'] = $this->model('ReservasiModel')->getReservasiRuanganById($id_pesan);
        $this->view('edit_rsv_ruangan/index', $data);
    }
}