<?php

class EditTamu extends Controller {
    public function index($id_tamu){
        $data['tamu'] = $this->model('TamuModel')->getTamuById($id_tamu);
        $this->view('edit_tamu/index', $data);
    }
}