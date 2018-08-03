<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perancang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('forum_model');
		$this->load->helper('backend');
		// check_login('backend/dokumen/pilih');	
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$alldata = $this->forum_model->getall();

		$data = array(
			'sidebar'	=> 'no',
			'contents'	=> 'perancang/list',
			'title'		=> 'Perancang',
			'name'		=> empty($this->session->userdata('name')) ? 'Tanpa Login' : $this->session->userdata('name'),
			'message'	=> $this->session->flashdata('message'),
			'forum'		=> $alldata
		);
		$this->load->view('template/head', $data, FALSE);
	}


	public function detail()
	{
		$alldata = $this->forum_model->getall();

		$data = array(
			'sidebar'	=> 'no',
			'contents'	=> 'perancang/detail',
			'title'		=> 'Perancang',
			'name'		=> empty($this->session->userdata('name')) ? 'Tanpa Login' : $this->session->userdata('name'),
			'message'	=> $this->session->flashdata('message'),
			'forum'		=> $alldata
		);
		$this->load->view($data['contents'], $data, FALSE);
	}

}

/* End of file Perancang.php */
/* Location: ./application/modules/backend/controllers/Perancang.php */
