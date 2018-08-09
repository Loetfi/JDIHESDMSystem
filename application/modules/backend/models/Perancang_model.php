<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perancang_model extends CI_Model {

	function detail_perancang($id_perancang)
	{
		return $this->db->select('*')
		->from('login')
		->where('id_flow',1000)
		->where('login_id',$id_perancang)
		->get()
		->row_array();
	}

	function perancang($id_jabatan = '')
	{
		return $this->db->select('*')
		->from('login')
		->where('id_flow',1000)
		->like('jabatan',$id_jabatan)
		->get()
		->result_array();
		;

	}

	function jabatan_perancang()
	{ 

		return $this->db->select('jabatan')
		->from('login')
		->where('id_flow',1000)
		->GROUP_by('jabatan')
		->get()
		->result_array();
	}

}

/* End of file Perancang_model.php */
/* Location: ./application/modules/backend/models/Perancang_model.php */
