<?php

class LoginModel {

    private $db;
    private $dbDua;

    public function __construct(){
        $this->db = new Database;
        $this->dbDua = new Database;
    }

    public function getAllLogin() {
        $this->db->query('SELECT * FROM resepsionis WHERE username = "iifalifah"');
        return $this->db->single();
    }

    public function getAllLoginDua() {
        $this->dbDua->query('SELECT * FROM resepsionis WHERE username = "adymutalib"');
        return $this->dbDua->single();
    }

    public function confirmLogin($data){
        $input = array("username"=>$data['username'], "password"=>$data['password']);
        return $input;
    }
}