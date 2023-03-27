<?php

class Login extends Controller{
    public function index(){
        $data['login'] = $this->model('LoginModel')->getALlLogin();
        $this->view('login/index', $data);
    }
    
    public function confirm(){
        $data['input'] = $this->model('LoginModel')->confirmLogin($_POST);
        $db['login'] = $this->model('LoginModel')->getAllLogin($_POST);
        $dbDua['login'] = $this->model('LoginModel')->getAllLoginDua($_POST);
        var_dump($data['input']['username']);
        var_dump($db['login']['username']);
        if($data['input']['username'] == $db['login']['username']){
            header('Location: '. BASEURL . '/Admin');
        } else if ($data['input']['username'] == $dbDua['login']['username']){
            header('Location: '. BASEURL . '/Admin');
        } 
    }
}