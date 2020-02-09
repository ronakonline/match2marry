<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Contact extends CI_Controller{

    public function index(){

        if(isset($_SESSION['user'])){
            $this->load->view('admin/contact');
        }else{
            redirect(base_url().'Admin_login');
        }
    }


}