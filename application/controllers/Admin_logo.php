<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_logo extends CI_Controller{

    public function index(){
    	
        $this->load->view('admin/logo');
    }

    public function do_upload(){
        $data = $this->input->post();
        
        // set path to store uploaded files
        $config['upload_path'] = './assets/images/logo';
        // set allowed file types
        $config['allowed_types'] = 'jpg|png|jpeg';
        

        // load upload library with custom config settings
        $this->load->library('upload', $config);

        // if upload failed , display errors
        if (!$this->upload->do_upload('logo'))
        {
            print_r($this->upload->display_errors());

        }
        $data['logo'] = $this->upload->data('file_name');

        $this->load->model('admin_site_setting_m');
        $result = $this->admin_site_setting_m->update_logo($data);
        $_SESSION['output'] = $result;
        redirect(base_url().'Admin_logo');
    }


}