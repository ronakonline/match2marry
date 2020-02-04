<?php

class admin_users_m extends CI_Model {

    public function getusers(){
        $this->load->database();

        $q = $this->db->query('select * from users');

        $result = $q->result();
        //print_r($result['logo']);
        return $result;
    }


}
