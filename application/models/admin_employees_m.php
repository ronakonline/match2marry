<?php

class admin_employees_m extends CI_Model {

    public function getemp(){
        $this->load->database();

        $q = $this->db->query('select * from admin');

        $result = $q->result();
        //print_r($result['logo']);
        return $result;
    }

    public function addEmployee($data){
        $this->load->database();
        $password = md5($data['password']);
        $q = $this->db->query('insert into admin values(null,"'.$data['username'].'","'.$data['email'].'","'.$data['name'].'","'.$password.'","'.$data['usertype'].'",now(),now())');
        echo $q;
    }

    public function getuserprofile($id){
        $this->load->database();
        $q = $this->db->query('select * from users where id= '.$id);

        $result = $q->result();
        return $result;
    }
    public function fetch_type(){
        $this->load->database();
        $q = $this->db->query('select * from user_type');

        $result = $q->result();
        return $result;
    }

}
