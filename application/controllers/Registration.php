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
		ini_set("display_errors",1);
		error_reporting(E_ALL);
		$data = $this->input->post();
		print_r($_FILES);

		// load codeigniter helpers
		$this->load->helper(array('form','url'));
		// set path to store uploaded files
		$config['upload_path'] = './assets/pdf';
		// set allowed file types
		$config['allowed_types'] = 'pdf';
		// set upload limit, set 0 for no limit
		$config['max_size']    = 0;

		// load upload library with custom config settings
		$this->load->library('upload', $config);

		// if upload failed , display errors
		if (!$this->upload->do_upload('ip'))
		{
			print_r($this->upload->display_errors());

		}
		else
		{
			print_r($this->upload->data());
			// print uploaded file data
		}

	}
}
?>
