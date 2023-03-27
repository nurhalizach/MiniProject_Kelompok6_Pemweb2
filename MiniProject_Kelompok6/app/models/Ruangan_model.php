<?php

class Ruangan_model {
    private $table = 'ruangan';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllRuangan(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getRuanganById($id){
        $this->db->query('SELECT * FROM ruangan WHERE id_ruangan = :id_ruangan');
        $this->db->bind('id_ruangan', $id);
        return $this->db->single();
    }

    public function tambahRuangan($data){
        $query = "INSERT INTO ruangan VALUES ('', :nama_ruangan, :status, :fasilitas)";

        $this->db->query($query);
        $this->db->bind('nama_ruangan', $data['nama_ruangan']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('fasilitas', $data['fasilitas']);

        $this->db->execute();
        
        return $this->db->rowCount();

    }

    public function editRuangan($data){
        $query = "UPDATE ruangan SET nama_ruangan = :nama_ruangan, status = :status, fasilitas= :fasilitas WHERE id_ruangan = :id_ruangan";

        $this->db->query($query);
        $this->db->bind('nama_ruangan', $data['nama_ruangan']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('fasilitas', $data['fasilitas']);
        $this->db->bind('id_ruangan', $data['id_ruangan']);        

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusRuangan($id){
        $query = "DELETE FROM ruangan WHERE id_ruangan = :id_ruangan";
        $this->db->query($query);
        $this->db->bind('id_ruangan', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


}

?>