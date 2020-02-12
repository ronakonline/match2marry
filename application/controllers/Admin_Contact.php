<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Contact extends CI_Controller{

    public function index(){
    	
        if(isset($_SESSION['user'])){
            $this->load->model('admin_site_setting_m');
            $data = $this->admin_site_setting_m->getdetails();
            $this->load->view('admin/contact',array('my_data'=>$data));
        }else{
            redirect(base_url().'Admin_login');
        }
    }

    public function update(){
    	$data = $this->input->post();
    	$this->load->model('admin_site_setting_m');
    	$result = $this->admin_site_setting_m->update_contact($data);
    	$_SESSION['output'] = $result;
    	redirect(base_url().'Admin_Contact');
    }

}