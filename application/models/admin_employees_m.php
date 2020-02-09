<?php

class admin_employees_m extends CI_Model {

    public function getemp(){
        $this->load->database();

        $q = $this->db->query('select * from users');

        $result = $q->result();
        //print_r($result['logo']);
        return $result;
    }

    public function getuserprofile($id){
        $this->load->database();
        $q = $this->db->query('select * from users where id= '.$id);

        $result = $q->result();
        return $result;
    }


}
