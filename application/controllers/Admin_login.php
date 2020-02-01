<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller{

    public function index(){
        $this->load->view('admin/login');
    }

    public function checklogin(){

       $data['username'] =  $this->input->post('username');
       $data['password'] =  $this->input->post('password');

       $this->load->model('admin_login_m');
       $result = $this->admin_login_m->check($data);
       if($result!=1) {
           $_SESSION['user'] = $result;
       }else {
           echo $result;
       }
    }
    public function logout(){
        session_destroy();
        redirect(base_url().'Admin_login');

    }
    public function Recover(){
        $this->load->view('admin/recover-pw');
    }
}