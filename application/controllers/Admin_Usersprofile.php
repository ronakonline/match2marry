<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Usersprofile extends CI_Controller{

    public function index(){
           $this->load->model('admin_users_m');
           $mydata = $this->admin_users_m->getuserprofile($_SESSION['id']);
          // print_r($result);
           $this->load->view('admin/user-profile',array('mydata'=>$mydata));

    }
}