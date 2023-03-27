<?php

class KamarModel {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    // menampilkan semua kamar
    public function getAllRoom(){
        $this->db->query('SELECT kamar.id_kamar, tipe_kamar.nama_tipe, keterangan FROM kamar INNER JOIN tipe_kamar ON kamar.id_tipe = tipe_kamar.id_tipe');
        return $this->db->resultSet();
    }

    // mengambil data salah satu kamar
    public function getKamarById($id){
        $this->db->query('SELECT * FROM kamar WHERE id_kamar = :id_kamar');
        $this->db->bind('id_kamar', $id);
        return $this->db->single();
    }

    // menambah data kamar
    public function tambahKamar($data){
        $query = "INSERT INTO kamar VALUES(' ', :id_tipe, :keterangan)";

        $this->db->query($query);
        $this->db->bind('id_tipe', $data['id_tipe']);
        $this->db->bind('keterangan', $data['keterangan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // menghapus data kamar
    public function hapusKamar($id){
        $query = "DELETE FROM kamar WHERE id_kamar = :id_kamar";
        $this->db->query($query);
        $this->db->bind('id_kamar', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // mengedit data kamar
    public function editKamar($data){
        $query = "UPDATE kamar SET id_tipe = :id_tipe, keterangan = :keterangan WHERE id_kamar = :id_kamar";

        $this->db->query($query);
        $this->db->bind('id_kamar', $data['id_kamar']);
        $this->db->bind('id_tipe', $data['id_tipe']);
        $this->db->bind('keterangan', $data['keterangan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}