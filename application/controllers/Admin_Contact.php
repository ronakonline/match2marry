<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Contact extends CI_Controller{

    public function index(){
    	
        if(isset($_SESSION['user'])){
            $this->load->model('admin_contact_m');
            $data = $this->admin_contact_m->getdetails();
            $this->load->view('admin/contact',array('my_data'=>$data));
        }else{
            redirect(base_url().'Admin_login');
        }
    }


}