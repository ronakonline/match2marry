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
    function fetch_city($state_id)
	{
        $this->load->database();
        $query = $this->db->query('select * from cities where state_id='.$state_id.' order by name ASC');
		$output = '<option disabled="disabled" selected="selected">Native City <sup>*</sup></option>';
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
 
}
