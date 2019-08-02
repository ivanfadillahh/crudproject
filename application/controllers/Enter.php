<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enter extends CI_Controller {

	public function index()
	{
		$this->load->view('hint/view_form1');		
	}

	public function submit_data()
	{
		$data = array(
			'user_name' => $this->input->get('u_name') ,
			'user_email_id' => $this->input->get('u_mail') 
		);

		echo "<h1>Success</h1>";

	}

}

/* End of file Enter.php */
/* Location: ./application/controllers/Enter.php */