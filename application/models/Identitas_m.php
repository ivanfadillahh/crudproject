<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Identitas_m extends CI_Model {

		public function get_all()
		{
			return $this->db->get('identitas')->result();
		}	

		public function get_content_keyword($keyword)
		{
			$this->db->select('*');
			$this->db->from('identitas');
			$this->db->like('nama',$keyword);
			$this->db->or_like('status',$keyword);
			$this->db->or_like('jurusan',$keyword);
			$this->db->or_like('informasi',$keyword);
			$this->db->or_like('alamat', $keyword);
			return $this->db->get()->result();
		}

}

/* End of file identitas_m.php */
/* Location: ./application/models/identitas_m.php */