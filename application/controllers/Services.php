<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller{

    public function index(){
        $data['page'] = 'Services';
        $data['link']='Services';
        $this->load->view('services',$data);
    }
}