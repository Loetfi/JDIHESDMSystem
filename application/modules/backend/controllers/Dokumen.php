<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {

	public function index()
	{
		$data = array(
			'data' 		=>  $this->db->query("select id_dokumen, jenis_dokumen, nama_dokumen from dokumen order by id_dokumen")->result_array(),
			'contents'	=> 'dokumen/data',
			'title'		=> 'Master Dokumen'
		);
		$this->load->view('template/head', $data, FALSE);
		// $data = array();
		// $this->load->view('dokumen/data', $data, FALSE);
	}

	public function data()
	{
		$this->output->set_header('Access-Control-Allow-Origin: *');
		$this->output->set_header('Access-Control-Allow-Methods: POST, GET'); 
		$this->output->set_header('Access-Control-Allow-Headers: Origin');
		$this->output->set_content_type('application/json');
		$data =  $this->db->query("select id_dokumen, jenis_dokumen, nama_dokumen from dokumen order by id_dokumen")->result_array();

		foreach ($data as $row) {
			$rows['id_dokumen'] = $row['id_dokumen'];
			$rows['jenis_dokumen'] = $row['jenis_dokumen'];
			$rows['nama_dokumen'] = str_replace(' ', ' ', $row['nama_dokumen']);
			// result
			$datas[] = $rows;
		}

		$this->output->set_output(json_encode(array('aaData' =>$datas)));
		$this->output->_display();
		// print_r($q);
	}

	public function pilih()
	{
		$data = array(
			'contents'	=> 'dokumen/pilih',
			'title'		=> 'Master Dokumen'
		);
		$this->load->view('template/head', $data, FALSE);
		// $this->load->view('dokumen/pilih', $data, FALSE);
	}

	public function detail()
	{
		$data = array(
			'contents'	=> 'dokumen/detail',
			'title'		=> 'Detail Dokumen '
		);
		$this->load->view('template/head', $data, FALSE);
		// $this->load->view('dokumen/pilih', $data, FALSE);
	}

}

/* End of file Dokumen.php */
/* Location: ./application/modules/backend/controllers/Dokumen.php */
