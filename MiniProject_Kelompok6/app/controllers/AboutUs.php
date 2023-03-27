<?php 

class AboutUs extends Controller {
    public function index()
    {
        $data['judul'] = 'About Us';
        $this->view('aboutus/index');
    }
}