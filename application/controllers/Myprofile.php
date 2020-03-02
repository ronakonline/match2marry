<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myprofile extends CI_Controller{

    public function index(){

        $data['page'] = 'User Profile';
        $data['link']='Myprofile';
        $this->load->view('myprofile',$data);
    }
}