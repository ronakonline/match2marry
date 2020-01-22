<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller{

    public function index(){

        $data['page'] = 'Contact Us';
        $data['link']='Contact';
        $this->load->view('contact',$data);
    }
}