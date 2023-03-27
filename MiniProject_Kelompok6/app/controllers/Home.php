<?php 

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('home/index', $data);
    }
    // public function keluar(){
    //     session_start();
    //     session_destroy();
 
    //     // header("Location: index.php");
    //     // unset($_SESSION['']);
	//     // redirect('index.php');
    // }

    // public function detail($id)
    // {
    //     $data['judul'] = 'Detail Reservasi';
    //     $data['rsv'] = $this->model('Home_model')->getreservasiById($id);
    //     $this->view('pencarian/cari', $data);
    // }

    public function cari(){
        $data['judul'] = 'Cek Reservasi';
        $data['rsv'] = $this->model('Home_model')->cariDatareservasi();
        $this->view('pencarian/cari',$data);
        // header ('Location: '. BASEURL . '/pencarian/cari');
        // exit;
    }

    // public function cari()
    // {
    //     $data['judul'] = 'Daftar Reservasi';
    //     $data['tipe'] = $this->model('Home_model')->cariDatareservasi();
    //     $this->view('templates/header', $data);
    //     $this->view('home/index', $data);
    //     $this->view('templates/footer');
    // }
}