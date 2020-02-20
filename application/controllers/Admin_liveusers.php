<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_liveusers extends CI_Controller{

    public function index(){

        if(isset($_SESSION['user'])){
            $this->load->model('admin_liveusers_m');
            $data = $this->admin_liveusers_m->getusers();
            $this->load->view('admin/liveusers',array('my_data'=>$data));
        }else{
            redirect(base_url().'Admin_login');
        }
    }
    public function profile($id){
        $_SESSION['id'] = $id;
        redirect(base_url()."Admin_Usersprofile");
    }


}