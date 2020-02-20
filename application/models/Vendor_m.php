<?php
    class Vendor_m extends CI_Model{
        public function add($data){
            $this->load->database();
            $password = md5($data['password']);
            $q = $this->db->query('insert into vendors values(null,"'.$data['title'].'","'.$data['description'].'","'.$data['tagline'].'",'.$data['price'].',"'.$data['tags'].'","'.$data['category'].'","'.$data['address'].'",'.$data['telephone'].',"'.$data['email'].'","'.$password.'","'.$data['website'].'")');
            echo $q;
        }
    }