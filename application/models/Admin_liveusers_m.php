<?php

class admin_liveusers_m extends CI_Model {

    public function getusers(){
        $this->load->database();

        $q = $this->db->query('select * from users where live = 1');

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
