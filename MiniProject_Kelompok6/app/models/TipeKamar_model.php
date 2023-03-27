<!-- Tempat tidur, televisi, meja, kamar mandi, dapur, lemari es, ruang tamu, ruang keluarga, kolam renang, mini bar

Presidential Suite -->

<?php 

class TipeKamar_model {
    private $table = 'tipe_kamar';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAlltipe_kamar()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function gettipe_kamarById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_tipe=:id_tipe');
        $this->db->bind('id_tipe', $id);
        return $this->db->single();
    }

    public function tambahDatatipe_kamar($data)
    {
        $query = "INSERT INTO tipe_kamar
                    VALUES
                  (' ', :nama_tipe, :fasilitas)";
        
        $this->db->query($query);
        $this->db->bind('nama_tipe', $data['nama_tipe']);
        $this->db->bind('fasilitas', $data['fasilitas']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDatatipe_kamar($id_tipe)
    {
        $query = "DELETE FROM tipe_kamar WHERE id_tipe = :id_tipe";
        
        $this->db->query($query);
        $this->db->bind('id_tipe', $id_tipe);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDatatipe_kamar($data)
    {
        $query = "UPDATE tipe_kamar SET 
                    id_tipe = :id_tipe,
                    nama_tipe = :nama_tipe,
                    fasilitas = :fasilitas
                  WHERE id_tipe = :id_tipe";
        
        $this->db->query($query);
        $this->db->bind('nama_tipe', $data['nama_tipe']);
        $this->db->bind('fasilitas', $data['fasilitas']);
        $this->db->bind('id_tipe', $data['id_tipe']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDatatipe_kamar()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM tipe_kamar WHERE nama_tipe LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}