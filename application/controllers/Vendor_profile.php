<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_profile extends CI_Controller{

    public function index(){
        if (isset($_SESSION['vendor'])){
            $this->load->view('vendor/vendor_profile');
        }else{
            redirect(base_url());
        }

    }
}