<?php 

class ContactUs extends Controller {
    public function index()
    {
        $data['judul'] = 'Contact Us';
        $this->view('contactus/index');
    }
}