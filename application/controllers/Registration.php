<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function index()
	{   
		$data['result'] = $this->getdata();
		//print_r($data);
		$this->load->view('registration',$data);
	}
	protected function getdata(){
		$this->load->model('registration_m');
		$result = $this->registration_m->fetch_state();
		return $result;
	}

	function fetch_city()
	{	
		
		if($this->input->post('state_id'))
		{
			$this->load->model('registration_m');
		echo $this->registration_m->fetch_city($this->input->post('state_id'),$this->input->post('type'));
		}
	}
	function register(){
		$data = $this->input->post();
		print_r($data);
	}
}
?>
