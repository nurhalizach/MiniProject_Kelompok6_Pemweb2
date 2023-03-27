<?php

class Admin extends Controller {
    public function index(){
        $this->view('template/header');
        $this->view('admin/index');
    }
}