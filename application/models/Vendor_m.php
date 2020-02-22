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

        public function getvdetails($id){
            $this->load->database();

            $q = $this->db->query('select * from vendors where id='.$id.'');

            $result = $q->result();
            //print_r($result['logo']);
            return $result;
        }

        public function up($data){
            $this->load->database();
            $hashed = md5($data['password']);
            $q = $this->db->query('UPDATE vendors SET title="'.$data['title'].'", description="'.$data['description'].'", tagline="'.$data['tagline'].'", price='.$data['price'].', tags="'.$data['tags'].'", category="'.$data['category'].'", address="'.$data['address'].'", telephone='.$data['telephone'].', email="'.$data['email'].'", password="'.$hashed.'", website="'.$data['website'].'" where id='.$data['id'].'');
            if ($q){
                return 1;
            }else{
                return 0;
            }
        }

        public function getvendorprofile($id){
            $this->load->database();
            $q = $this->db->query('select * from vendors where id= '.$id);

            $result = $q->result();
            return $result;
        }
    }