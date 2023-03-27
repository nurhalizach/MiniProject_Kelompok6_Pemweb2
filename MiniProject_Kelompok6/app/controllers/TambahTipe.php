<?php 

class TambahTipe extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Tipe Kamar';
        $this->view('tambah_tipekamar/index', $data);
    }
}