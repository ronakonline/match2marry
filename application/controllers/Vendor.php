<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller{

    public function index(){

        if(isset($_SESSION['vendor'])){
            $this->load->view('vendor/index');
        }else{
            redirect(base_url());
        }
    }

    public function logout(){
        session_destroy();
        redirect(base_url());
    }

}