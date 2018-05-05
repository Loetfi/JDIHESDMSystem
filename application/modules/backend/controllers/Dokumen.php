<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {

	public function index()
	{
		$data = array(
			'contents'	=> 'dokumen/data',
			'title'		=> 'Master Dokumen'
		);
		$this->load->view('template/head', $data, FALSE);
		// $data = array();
		// $this->load->view('dokumen/data', $data, FALSE);
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
			'contents'	=> 'dokumen/pilih',
			'title'		=> 'Master Dokumen'
		);
		$this->load->view('template/head', $data, FALSE);
		// $this->load->view('dokumen/pilih', $data, FALSE);
	}

}

/* End of file Dokumen.php */
/* Location: ./application/modules/backend/controllers/Dokumen.php */
