<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller{

    public function index(){

        $data['page'] = 'Add listing';
        $data['link']='Add Listing';
        $this->load->view('addlisting',$data);
    }

    public function addlist(){
        if(isset($_SESSION['vendor'])){

            $data = $this->input->post();
            print_r($data);
            $this->load->model('Vendor_m');
            $data = $this->Vendor_m->addlist($data);
            //redirect(base_url());
        }
    }

    public function logout(){
        session_destroy();
        redirect(base_url());
    }

}