<?php

class TamuModel {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    // mengambil semua data tamu
    public function getAllTamu(){
        $this->db->query('SELECT * FROM tamu');
        return $this->db->resultSet();
    }

    // mengambil data salah satu tamu
    public function getTamuById($id){
        $this->db->query('SELECT * FROM tamu WHERE id_tamu = :id_tamu');
        $this->db->bind('id_tamu', $id);
        return $this->db->single();
    }

    // menambah data tamu
    public function tambahTamu($data){
        $query = "INSERT INTO tamu VALUES(' ', :noktp, :nama, :alamat, :notelp)";

        $this->db->query($query);
        $this->db->bind('noktp', $data['noktp']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('notelp', $data['notelp']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // menghapus data tamu
    public function hapusTamu($id){
        $query = "DELETE FROM tamu WHERE id_tamu = :id_tamu";
        $this->db->query($query);
        $this->db->bind('id_tamu', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // mengedit data tamu
    public function editTamu($data){
        $query = "UPDATE tamu SET no_ktp = :no_ktp, nama = :nama, alamat = :alamat, no_telp = :no_telp WHERE id_tamu = :id_tamu";

        $this->db->query($query);
        $this->db->bind('id_tamu', $data['id_tamu']);
        $this->db->bind('no_ktp', $data['no_ktp']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_telp', $data['no_telp']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}