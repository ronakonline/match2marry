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

    public function emp_form(){

        $this->load->model('admin_employees_m');
        $data= $this->admin_employees_m->fetch_type();
        $this->load->view('admin/addEmployee',array('my_data'=>$data));
    }

    public function add(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Full Name', 'required|alpha');
        $this->form_validation->set_rules('email', 'Email id', 'required|valid_email');
        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('usertype', 'User type', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric');


        if ($this->form_validation->run()==false){
            $this->load->model('admin_employees_m');
            $data= $this->admin_employees_m->fetch_type();
            $this->load->view('admin/addEmployee',array('my_data'=>$data));
        }
        else{
            $data = $this->input->post();
            $this->load->model('admin_employees_m');
            $data = $this->admin_employees_m->addEmployee($data);
            redirect(base_url().'Admin_Employees');
        }

    }

}