<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Employees extends CI_Controller{

    public function index(){

        if(isset($_SESSION['user'])){
            $this->load->model('admin_employees_m');
            $data = $this->admin_employees_m->getemp();
            $this->load->view('admin/employees',array('my_data'=>$data));
        }else{
            redirect(base_url().'Admin_login');
        }
    }
    public function profile($id){
        $_SESSION['id'] = $id;
        redirect(base_url()."Admin_Usersprofile");
    }


}