<?php

class admin_login_m extends CI_Model {

    public function check($data){
        $this->load->database();
        $hashed = md5($data['password']);
        $q = $this->db->query('select * from admin where username="'.$data['username'].'" and password="'.$hashed.'"');

        if($q->num_rows() > 0){
                $result = $q->result();
                return $result;
        } else {
                return 1;
        }
    }

}
