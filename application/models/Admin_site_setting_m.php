<?php

class admin_site_setting_m extends CI_Model {

    public function getdetails(){
        $this->load->database();

        $q = $this->db->query('select * from site_setting');

        $result = $q->result();
        //print_r($result['logo']);
        return $result;
    }

    public function update_contact($data){
        $this->load->database();
        $q = $this->db->query('UPDATE site_setting SET email="'.$data['email'].'", telephone="'.$data['telephone'].'",address = "'.$data['address'].'"');
        if ($q) {
            return 1;
        }else{
            return 0;
        }
    }

    public function update_logo($data){
        $this->load->database();
        $q  = $this->db->query('update site_setting SET logo="'.$data['logo'].'"');
        if ($q) {
            return 1;
        }else{
            return 0;
        }
    }

    public function getuserprofile($id){
        $this->load->database();
        $q = $this->db->query('select * from users where id= '.$id);

        $result = $q->result();
        return $result;
    }


}
