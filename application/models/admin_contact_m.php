<?php

class admin_contact_m extends CI_Model {

    public function getdetails(){
        $this->load->database();

        $q = $this->db->query('select * from site_setting');

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
