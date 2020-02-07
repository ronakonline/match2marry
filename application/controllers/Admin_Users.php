<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Users extends CI_Controller{

    public function index(){

        if(isset($_SESSION['user'])){
            $this->load->model('admin_users_m');
            $data = $this->admin_users_m->getusers();
            $this->load->view('admin/users',array('my_data'=>$data));
        }else{
            redirect(base_url().'Admin_login');
        }
    }
    public function profile($id){
        $_SESSION['id'] = $id;
        redirect(base_url()."Admin_Usersprofile");
    }


}