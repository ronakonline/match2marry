<?php

class visitors_m extends CI_Model {

    public function storevisitor($ip,$country){
        $this->load->database();

        $q = $this->db->query('insert into live_users values (null,"'.$ip.'","'.$country.'",now())');


        //print_r($result['logo']);
        return;
    }

    public function getuserprofile($id){
        $this->load->database();
        $q = $this->db->query('select * from users where id= '.$id);

        $result = $q->result();
        return $result;
    }


}
