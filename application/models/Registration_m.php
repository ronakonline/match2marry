<?php

class registration_m extends CI_Model {

    public function getcountry(){
        $this->load->database();

        $q = $this->db->query('select * from countries');

        $result = $q->result();
        //print_r($result['logo']);
        return $result;
    }
    function fetch_state()
	{
		$this->load->database();

		$q = $this->db->query('select * from states');

		$result = $q->result();
		//print_r($result['logo']);
		return $result;
    }
    function fetch_city($state_id,$type)
	{
        $this->load->database();
        $query = $this->db->query('select * from cities where state_id='.$state_id.' order by name ASC');
        if($type=='ns'){
		$output = '<option disabled="disabled" selected="selected" value="nci">Native City </option>';}
        else{
            $output = '<option disabled="disabled" selected="selected" value="cci">Residence City </option>';
        }
		foreach($query->result() as $row)
		{
		$output .= '<option value="'.$row->id.'">'.$row->name.'</option>';
		}
		return $output;
	}

	function fetch_citybyZipcode($zipcode)
	{
		$this->load->database();
		$query = $this->db->query('SELECT * from zipcodes where code='.$zipcode);
		foreach ($query->result() as $city){
			$city_id = $city->city_id;
		}
		$query1 = $this->db->query('SELECT * FROM cities where id='.$city_id);
		foreach($query1->result() as $row)
		{
			$output = $row->name;
		}
		return $output;
	}
	function fetch_ZipcodebyCity($city)
	{
		$this->load->database();
		$query = $this->db->query('SELECT * from cities where name="'.$city.'" limit 1');
		foreach ($query->result() as $row){
			$city_id = $row->id;
		}
		$query1 = $this->db->query('SELECT * FROM zipcodes where city_id='.$city_id);
		foreach($query1->result() as $row1)
		{
			$output = $row1->code;
		}
		return $output;
	}
	function register($data){
        $this->load->database();
        $pass = md5($data['password']);
        $lk = implode(',',$data['lk']);
        $query = $this->db->query('insert into users values(null,"'.$data['fullname'].'","'.$data['email'].'","'.$pass.'","'.$data['dob'].'","'.$data['gender'].'","'.$data['ncountry'].'","'.$data['nstate'].'","'.$data['ncity'].'","'.$data['rcountry'].'","'.$data['cstate'].'","'.$data['ccity'].'","'.$data['ms'].'","'.$data['child'].'","'.$data['height'].'","'.$data['inch'].'","'.$data['btype'].'","'.$data['health'].'","'.$data['wol'].'","'.$data['ft'].'","'.$data['rp'].'","'.$data['fiqhs'].'","'.$data['wywm'].'","'.$data['nationality'].'","'.$data['edu'].'","'.$data['wp'].'","'.$data['nl'].'","'.$lk.'","'.$data['ec'].'","'.$data['msa'].'","'.$data['gname'].'","'.$data['gphone'].'","'.$data['ip'].'","'.$data['profilephoto'].'","'.$data['biodata'].'","'.$data['facebook'].'",1)');
        return $query;
    }

    public function check($data){
        $this->load->database();
        $hashed = md5($data['password']);
        $q = $this->db->query('select * from users where email="'.$data['email'].'" and password="'.$hashed.'"');

        if($q->num_rows() > 0){
            $result = $q->result();
            return $result;
        } else {
            return 1;
        }
    }
 
}
