<?php 

class Tipe_Kamar extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Tipe Kamar';
        $data['tipe'] = $this->model('TipeKamar_model')->getAlltipe_kamar();
        $this->view('templates/header', $data);
        $this->view('tipe_kamar/index', $data);
        $this->view('templates/footer');
    }

    // public function detail($id)
    // {
    //     $data['judul'] = 'Detail Mahasiswa';
    //     $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
    //     $this->view('templates/header', $data);
    //     $this->view('mahasiswa/detail', $data);
    //     $this->view('templates/footer');
    // }

    public function tambah(){
        if ($this->model('TipeKamar_model')->tambahDatatipe_kamar($_POST) > 0 ) {
            // $data['tipe'] = $this->model('TipeKamar_model')->getAlltipe_kamar();
            // $this->view('tipe_kamar/index', $data);
            header ('Location: '. BASEURL . '/tipe_kamar');
            // header ('Location:/tambah_tipekamar/index');
            exit;
        }
    }

    public function hapus($id){
        if ($this->model('TipeKamar_model')->hapusDatatipe_kamar($id) > 0 ) {
            // $data['tipe'] = $this->model('TipeKamar_model')->getAlltipe_kamar();
            // header ('Location:/tipe_kamar');
            header ('Location: '. BASEURL . '/tipe_kamar');
            exit;
        }
    }

    // public function ubah(){
    //     $this->model('TipeKamar_model')->ubahDatatipe_kamar($_POST['id_tipe']);
    // }

    public function ubah(){
        if ($this->model('TipeKamar_model')->ubahDatatipe_kamar($_POST) > 0 ) {
            header ('Location: '. BASEURL . '/tipe_kamar');
            exit;
        }        
    }

    // public function tambah()
    // {
    //     if( $this->model('TipeKamar_model')->tambahDatatipe_kamar($_POST) > 0 ) {
    //         // Flasher::setFlash('berhasil', 'ditambahkan', 'success');
    //         header('Location:/tipe_kamar');
    //         exit;
    //     } else {
    //         // Flasher::setFlash('gagal', 'ditambahkan', 'danger');
    //         header('Location:/tipe_kamar');
    //         exit;
    //     }
    // }

    // public function hapus($id)
    // {
    //     if( $this->model('TipeKamar_model')->hapusDatatipe_kamar($id) > 0 ) {
    //         Flasher::setFlash('berhasil', 'dihapus', 'success');
    //         header('Location: ' . BASEURL . '/tipe_kamar');
    //         exit;
    //     } else {
    //         Flasher::setFlash('gagal', 'dihapus', 'danger');
    //         header('Location: ' . BASEURL . '/tipe_kamar');
    //         exit;
    //     }
    // }

    // public function getubah()
    // {
    //     echo json_encode($this->model('TipeKamar_model')->gettipe_kamarById($_POST['id']));
    // }

    // public function ubah()
    // {
    //     if( $this->model('TipeKamar_model')->ubahDatatipe_kamar($_POST) > 0 ) {
    //         Flasher::setFlash('berhasil', 'diubah', 'success');
    //         header('Location: ' . BASEURL . '/tipe_kamar');
    //         exit;
    //     } else {
    //         Flasher::setFlash('gagal', 'diubah', 'danger');
    //         header('Location: ' . BASEURL . '/tipe_kamar');
    //         exit;
    //     } 
    // }

    public function cari()
    {
        $data['judul'] = 'Daftar Tipe Kamar';
        $data['tipe'] = $this->model('TipeKamar_model')->cariDatatipe_kamar();
        $this->view('templates/header', $data);
        $this->view('tipe_kamar/index', $data);
        $this->view('templates/footer');
    }

}