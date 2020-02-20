<?php

class visitors_m extends CI_Model {

    public function storevisitor($ip,$country){
        $this->load->database();

        $q = $this->db->query('insert into live_users values (null,"'.$ip.'","'.$country.'",now())');


        //print_r($result['logo']);
        return;
    }

    public function getusers(){
        $this->load->database();
        $q = $this->db->query('SELECT * FROM live_users where last_activity >= DATE_SUB(NOW(),INTERVAL 1 HOUR)');
        $result = $q->result();
        return $result;
    }

    public function getuserprofile($id){
        $this->load->database();
        $q = $this->db->query('select * from users where id= '.$id);

        $result = $q->result();
        return $result;
    }


}
