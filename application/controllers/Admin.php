<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

    public function index(){
        //$_SESSION['login_error']=0;
        if(isset($_SESSION['user'])){
        $this->load->view('admin/index');
        }else{
            redirect(base_url().'Admin_login');
        }
    }


}