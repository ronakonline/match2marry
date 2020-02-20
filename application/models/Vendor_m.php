<?php
    class Vendor_m extends CI_Model{
        public function add($data){
            $this->load->database();
            $password = md5($data['password']);
            $q = $this->db->query('insert into vendors values(null,"'.$data['title'].'","'.$data['description'].'","'.$data['tagline'].'",'.$data['price'].',"'.$data['tags'].'","'.$data['category'].'","'.$data['address'].'",'.$data['telephone'].',"'.$data['email'].'","'.$password.'","'.$data['website'].'")');
            echo $q;
        }

        public function check($data){
            $this->load->database();
            $hashed = md5($data['password']);
            $q = $this->db->query('select * from vendors where email="'.$data['email'].'" and password="'.$hashed.'"');

            if($q->num_rows() > 0){
                $result = $q->result();
                return $result;
            } else {
                return 1;
            }
        }
    }