<?php 

class Gallery extends Controller {
    public function index()
    {
        $data['judul'] = 'Contact Us';
        $this->view('gallery/index');
    }
}