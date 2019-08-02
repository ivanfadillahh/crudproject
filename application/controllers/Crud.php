<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index()
	{
		//$data['content'] = $this->db->get('identitas');
		$data['content'] = $this->identitas_m->get_all();
		$this->load->view('crud/index', $data);
	}

	// Add a new item
	public function add()
	{
		$this->load->view('crud/add');	
	}

	public function action_add()
	{
		$data = array(
			'nama' => $this->input->post('nama') ,
			'status' => $this->input->post('status') ,
			'jurusan' => $this->input->post('jurusan') ,
			'informasi' => $this->input->post('informasi') ,
			'alamat' => $this->input->post('alamat') ,
			'lokasi_img' => $this->input->post('userfile')
		);	

		$this->db->insert('identitas', $data);

		redirect('crud','refresh');
	}

	/**/
	/*$config['upload_path'] = './uploads/';
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size']  = '100';
	$config['max_width']  = '1024';
	$config['max_height']  = '768';
	
	$this->load->library('upload', $config);
	
	if ( ! $this->upload->do_upload()){
		$error = array('error' => $this->upload->display_errors());
	}
	else{
		$data = array('upload_data' => $this->upload->data());
		echo "success";
	}*/
	/**/
	
	public function do_upload(){
			$config = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
				'max_height' => "768",
				'max_width' => "1024"
			);

			$this->load->library('upload', $config);
	
			if($this->upload->do_upload())
			{
				$data = array('upload_data' => $this->upload->data());
				$this->load->view('crud/index',$data);
			}
			else
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('crud/add', $error);
			}
		}

	//Update one item
	public function update( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['content'] = $this->db->get('identitas');
		$this->load->view('crud/update', $data);		
	}

	public function action_update($id = '')
	{
		$data = array(
			'nama' => $this->input->post('nama') ,
			'status' => $this->input->post('status') ,
			'jurusan' => $this->input->post('jurusan') ,
			'informasi' => $this->input->post('informasi') ,
			'alamat' => $this->input->post('alamat') ,
			'lokasi_img' => $this->input->post('userfile')
		);	

		$this->db->where('id', $id);
		$this->db->update('identitas', $data);

		redirect('crud','refresh');	
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$this->db->where('id', $id);
		$this->db->delete('identitas');

		redirect('crud','refresh');
	}

	public function read( $id = NULL )
	{
		$this->db->where('id', $id);
		$data['content'] = $this->db->get('identitas');

		$this->load->view('crud/index_view', $data);
	}

	public function cari(){
 		
 		$keyword = $this->input->post('keyword');
 		$data['content'] = $this->identitas_m->get_content_keyword($keyword);
 		$this->load->view('crud/index_cari', $data);
			//if(isset($_GET['cari']))
			//{
			//	$cari = $_GET['cari'];
			//	echo "<b>Hasil pencarian Anda : ".$cari."</b>";
			//}
 
		/*if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			$data = mysqli_query("select * from identitas where nama like '%".$cari."%'");				
		}
		else
		{
			$data = mysqli_query("select * from identitas");		
		}*/

		

		//$this->load->view('crud/index_cari', $data);		
	}

	
}

/* End of file Crud.php */
/* Location: ./application/controllers/Crud.php */
