<?php

class Resepsionis_model {
    private $table = 'resepsionis';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllResepsionis(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getResepsionisById($id){
        $this->db->query('SELECT * FROM resepsionis WHERE id_karyawan = :id_karyawan');
        $this->db->bind('id_karyawan', $id);
        return $this->db->single();
    }

    public function tambahResepsionis($data){
        $query = "INSERT INTO resepsionis VALUES ('', :username, :password, :nama)";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('nama', $data['nama']);

        $this->db->execute();
        
        return $this->db->rowCount();

    }

    public function editResepsionis($data){
        $query = "UPDATE resepsionis SET username = :username, password = :password, nama= :nama WHERE id_karyawan = :id_karyawan";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id_karyawan', $data['id_karyawan']);        

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusResepsionis($id){
        $query = "DELETE FROM resepsionis WHERE id_karyawan = :id_karyawan";
        $this->db->query($query);
        $this->db->bind('id_karyawan', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


}

?>