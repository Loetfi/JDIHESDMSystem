<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum_model extends CI_Model {

	public function getall()
	{
		$res = $this->db->select('*')
		->from('forum a ')
		->join('login b ','a.login_id = b.login_id')
		->order_by('tanggal_thread','DESC')
		->get()
		->result_array();

		return $res;
	}

	public function get($id_thread)
	{
		$res = $this->db->select('*')
		->from('forum a ')
		->join('login b ','a.login_id = b.login_id')
		->where('id_thread' , $id_thread)
		->get()
		->row_array();

		return $res;
	}

	public function get_balasan($id_thread)
	{
		$res = $this->db->select('*')
		->from('forum_balasan a ')
		->join('login b ','a.login_id_balasan = b.login_id')
		->where('id_thread' , $id_thread) 
		->order_by('tanggal_balasan','ASC')
		->get()
		->result_array();

		return $res;
	}

}

/* End of file Forum_model.php */
/* Location: ./application/modules/backend/models/Forum_model.php */
