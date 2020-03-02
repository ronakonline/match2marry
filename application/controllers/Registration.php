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


		// load codeigniter helpers
		$this->load->helper(array('form','url'));
		// set path to store uploaded files
		$config['upload_path'] = './assets/pdf';
		// set allowed file types
		$config['allowed_types'] = 'pdf|jpg|png|jpeg';
		// set upload limit, set 0 for no limit
		$config['max_size']    = 0;
		$config['file_name'] = $data['fullname'].'-IP'.time();

		// load upload library with custom config settings
		$this->load->library('upload', $config);

		// if upload failed , display errors
		if (!$this->upload->do_upload('ip'))
		{
			print_r($this->upload->display_errors());

		}
		$data['ip'] = $this->upload->data('file_name');
		$config['file_name'] = $data['fullname'].'-DP'.time();

		// load upload library with custom config settings
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('profilephoto'))
		{
			print_r($this->upload->display_errors());

		}
		$data['profilephoto'] = $this->upload->data('file_name');
		$config['file_name'] = $data['fullname'].'-BIO'.time();

		// load upload library with custom config settings
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('biodata'))
		{
			print_r($this->upload->display_errors());

		}
		$data['biodata'] = $this->upload->data('file_name');

		$this->load->model('registration_m');
		$result = $this->registration_m->register($data);
		if($result==1){
			$_SESSION['register']=1;
		}else{
			$_SESSION['error']=1;
		}
		redirect(base_url().'Matrimonial');

	}
	function convertpdf()
	{

		$this->load->view('PDFDownload');

		// Get output html
		$html = $this->output->get_output();

		// Load pdf library
		$this->load->library('pdf');

		// Load HTML content
		$this->dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		$this->dompdf->setPaper('A4', 'landscape');

		// Render the HTML as PDF
		$this->dompdf->render();

		// Output the generated PDF (1 = download and 0 = preview)
		$this->dompdf->stream("welcome.pdf", array("Attachment"=>1));
		redirect(base_url());
	}

	public function checklogin(){

		$data =  $this->input->post();
		if ($data['ltype'] == 'Services'){
			$_SESSION['user_type'] = 1;
			$this->load->model('Vendor_m');
			$result = $this->Vendor_m->check($data);
			if($result!=1) {
				$_SESSION['vendor'] = $result;
				redirect(base_url());
			}else {
				$_SESSION['error']=1;
				redirect(base_url());
			}
		}
		else if($data['ltype']=='Matrimonial'){
			$_SESSION['user_type'] = 2;
			$this->load->model('Registration_m');
			$result = $this->Registration_m->check($data);
			if($result!=1) {
				$_SESSION['matrimonial'] = $result;
				redirect(base_url());
			}else {
				$_SESSION['error']=1;
				redirect(base_url());
			}
		}
	}
	public function  logout(){
			unset($_SESSION['matrimonial']);
			unset($_SESSION['vendor']);

			redirect(base_url());
	}
}
?>
