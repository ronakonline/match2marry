<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VendorRegistration extends CI_Controller{
    public function index(){
        $data['page'] = 'Vendor registration';
        $data['link']='VendorRegistration';
        $this->load->view('VendorRegistration',$data);
    }

    public function checklogin(){

        $data =  $this->input->post();
        if ($data['ltype'] == 'Services'){
            $this->load->model('Vendor_m');
            $result = $this->Vendor_m->check($data);
            if($result!=1) {
                $_SESSION['user'] = $result;
            }else {
                redirect(base_url().'Admin_login');
            }
        }

    }
    public function logout(){
        session_destroy();
        redirect(base_url());

    }
    public function Recover(){
        $this->load->view('admin/recover-pw');
    }

    public function add(){
//        $this->load->library('form_validation');
//        $this->form_validation->set_rules('name', 'Full Name', 'required|alpha');
//        $this->form_validation->set_rules('email', 'Email id', 'required|valid_email');
//        $this->form_validation->set_rules('username', 'User Name', 'required');
//        $this->form_validation->set_rules('usertype', 'User type', 'required');
//        $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric');


//        if ($this->form_validation->run()==false){

        //}
        //else{
            $data = $this->input->post();
            $this->load->model('Vendor_m');
            $data = $this->Vendor_m->add($data);
            redirect(base_url());
        //}

    }
}

?>