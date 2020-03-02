<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller{

    public function index(){

        $data['page'] = 'Add listing';
        $data['link']='Add Listing';
        $this->load->view('addlisting',$data);
    }

//    public function addlisting(){
//        if(isset($_SESSION['vendor'])){
//            $data['page'] = 'Vendor registration';
//            $data['link'] = 'VendorRegistration';
//            $this->load->view('addlisting',$data);
//        }else{
//            redirect(base_url());
//        }
//    }

    public function logout(){
        session_destroy();
        redirect(base_url());
    }

}