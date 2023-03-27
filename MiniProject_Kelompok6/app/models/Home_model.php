<?php 

class Home_model {
    private $table = 'reservasi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // public function getAllreservasi()
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table);
    //     return $this->db->resultSet();
    // }

    // public function getreservasiById($id)
    // {
    //     $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    //     $this->db->bind('id', $id);
    //     return $this->db->single();
    // }

    // public function tambahDatareservasi($data)
    // {
    //     $query = "INSERT INTO reservasi
    //                 VALUES
    //               ('', :id_tamu, :fasilitas)";
        
    //     $this->db->query($query);
    //     $this->db->bind('id_tamu', $data['id_tamu']);
    //     $this->db->bind('fasilitas', $data['fasilitas']);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }

    // public function hapusDatareservasi($id)
    // {
    //     $query = "DELETE FROM reservasi WHERE id = :id";
        
    //     $this->db->query($query);
    //     $this->db->bind('id', $id);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }


    // public function ubahDatareservasi($data)
    // {
    //     $query = "UPDATE reservasi SET
    //                 id_tamu = :id_tamu,
    //                 fasilitas = :fasilitas,
    //               WHERE id = :id";
        
    //     $this->db->query($query);
    //     $this->db->bind('id_tamu', $data['id_tamu']);
    //     $this->db->bind('fasilitas', $data['fasilitas']);
    //     $this->db->bind('id', $data['id']);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }


    public function cariDatareservasi()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM reservasi WHERE id_tamu LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}