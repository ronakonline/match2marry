<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_visitor extends CI_Controller{

    public function index(){

        if(isset($_SESSION['user'])){
            $this->load->model('visitors_m');
            $data = $this->visitors_m->getusers();
            $this->load->view('admin/visitor',array('my_data'=>$data));
        }else{
            redirect(base_url().'Admin_login');
        }
    }
    public function profile($id){
        $_SESSION['id'] = $id;
        redirect(base_url()."Admin_Usersprofile");
    }


}