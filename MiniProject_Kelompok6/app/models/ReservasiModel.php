<?php

class ReservasiModel {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    // menampilkan semua reservasi kamar
    public function getAllReservasiKamar(){
        $this->db->query('SELECT * FROM reservasi_kamar');
        return $this->db->resultSet();
    }

    // mengambil data salah satu kamar
    public function getReservasiKamarById($id){
        $this->db->query('SELECT * FROM reservasi_kamar WHERE id_pesan = :id_pesan');
        $this->db->bind('id_pesan', $id);
        return $this->db->single();
    }

    // menambah data reservasi kamar
    public function tambahReservasiKamar($data){
        $query = "INSERT INTO reservasi_kamar VALUES(' ', :tgl_checkin, :tgl_checkout, :jumlah_orang, :id_tamu, :id_kamar, :id_karyawan)";
        $this->db->query($query);
        $this->db->bind('tgl_checkin', $data['tgl_checkin']);
        $this->db->bind('tgl_checkout', $data['tgl_checkout']);
        $this->db->bind('jumlah_orang', $data['jumlah_orang']);
        $this->db->bind('id_tamu', $data['id_tamu']);
        $this->db->bind('id_kamar', $data['id_kamar']);
        $this->db->bind('id_karyawan', $data['id_karyawan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // menghapus data reservasi kamar
    public function hapusReservasiKamar($id){
        $query = "DELETE FROM reservasi_kamar WHERE id_pesan = :id_pesan";
        $this->db->query($query);
        $this->db->bind('id_pesan', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // mengedit data kamar
    public function editReservasiKamar($data){
        $query = "UPDATE reservasi_kamar SET tgl_checkin = :tgl_checkin, tgl_checkout = :tgl_checkout, jumlah_orang = :jumlah_orang, id_tamu = :id_tamu, id_kamar = :id_kamar, id_karyawan = :id_karyawan WHERE id_pesan = :id_pesan";

        $this->db->query($query);
        $this->db->bind('id_pesan', $data['id_pesan']);
        $this->db->bind('tgl_checkin', $data['tgl_checkin']);
        $this->db->bind('tgl_checkout', $data['tgl_checkout']);
        $this->db->bind('jumlah_orang', $data['jumlah_orang']);
        $this->db->bind('id_tamu', $data['id_tamu']);
        $this->db->bind('id_kamar', $data['id_kamar']);
        $this->db->bind('id_karyawan', $data['id_karyawan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // ---------------------------------------------------------------------------------------------------


    // menampilkan semua reservasi ruangan
    public function getAllReservasiRuangan(){
        $this->db->query('SELECT id_pesan, tgl_pesan, id_tamu, ruangan.nama_ruangan, id_karyawan FROM reservasi_ruangan INNER JOIN ruangan ON reservasi_ruangan.id_ruangan = ruangan.id_ruangan');
        return $this->db->resultSet();
    }

    // mengambil data salah satu ruangan
    public function getReservasiRuanganById($id){
        $this->db->query('SELECT * FROM reservasi_ruangan WHERE id_pesan = :id_pesan');
        $this->db->bind('id_pesan', $id);
        return $this->db->single();
    }

    // menambah data reservasi ruangan
    public function tambahReservasiRuangan($data){
        $query = "INSERT INTO reservasi_ruangan VALUES(' ', :tgl_pesan, :id_tamu, :id_ruangan, :id_karyawan)";

        $this->db->query($query);
        $this->db->bind('tgl_pesan', $data['tgl_pesan']);
        $this->db->bind('id_tamu', $data['id_tamu']);
        $this->db->bind('id_ruangan', $data['id_ruangan']);
        $this->db->bind('id_karyawan', $data['id_karyawan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // menghapus data reservasi kamar
    public function hapusReservasiRuangan($id){
        $query = "DELETE FROM reservasi_ruangan WHERE id_pesan = :id_pesan";
        $this->db->query($query);
        $this->db->bind('id_pesan', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // mengedit data kamar
    public function editReservasiRuangan($data){
        $query = "UPDATE reservasi_ruangan SET tgl_pesan = :tgl_pesan, id_tamu = :id_tamu, id_ruangan = :id_ruangan, id_karyawan = :id_karyawan WHERE id_pesan = :id_pesan";

        $this->db->query($query);
        $this->db->bind('id_pesan', $data['id_pesan']);
        $this->db->bind('tgl_pesan', $data['tgl_pesan']);
        $this->db->bind('id_tamu', $data['id_tamu']);
        $this->db->bind('id_ruangan', $data['id_ruangan']);
        $this->db->bind('id_karyawan', $data['id_karyawan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}