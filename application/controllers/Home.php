<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		//$data = array(
		//	'nama' => 'Ivan' ,
		//	'status' => 'Mahasiswa' 
		//);

		$data['nama'] = 'Ivan';
		$data['status'] = 'Mahasiswa';
		$data['jurusan'] = 'Teknik Informatika';

		$this->header();
		$this->load->view('index', $data);
		$this->footer();		
	}

	public function controllerprofil()
	{
		echo "Profil !";
	}

	public function controllercontact($value='')
	{
		echo "Contact !";
	}

	public function nama($value='', $value1='')
	{
		echo "Website owner ".$value." and the nickname is ".$value1;
	}

	//------------- views ---------------
	public function header()
	{
		$this->load->view('header');
	}

	public function footer()
	{
		$this->load->view('footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */