<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller{

    public function index(){

        $data['page'] = 'About Us';
        $data['link']='About';
        $this->load->view('about',$data);
    }
}