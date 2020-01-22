<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller{

    public function index(){

        $data['page'] = 'User Profile';
        $data['link']='Profile';
        $this->load->view('profile',$data);
    }
}