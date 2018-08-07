<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perancang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('forum_model');
		$this->load->helper('backend');
		// check_login('backend/dokumen/pilih');	
		$this->load->model('perancang_model','pm');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function list()
	{
		$jabatan_perancang = @$_GET['id_jabatan'] ? $_GET['id_jabatan'] : '';
		$data = array(
			'perancang'	=> $this->pm->perancang($jabatan_perancang),
			'title'	=> 'test'
		);
		$this->load->view('perancang/list_perancang', $data, FALSE);
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
			'jabatan_perancang'		=> $this->pm->jabatan_perancang()
		);
		$this->load->view('template/head', $data, FALSE);
	}


	public function detail()
	{
		$id_perancang = @$_POST['phoneData'] ? $_POST['phoneData'] : 0;
		// exit();
		// $alldata = $this->forum_model->getall();
		$data_detail = $this->pm->detail_perancang($id_perancang);
		$data = array(
			'sidebar'	=> 'no',
			'contents'	=> 'perancang/detail',
			'title'		=> 'Perancang',
			'name'		=> empty($this->session->userdata('name')) ? 'Tanpa Login' : $this->session->userdata('name'),
			'message'	=> $this->session->flashdata('message'),
			'data_detail'		=> $data_detail
		);
		$this->load->view($data['contents'], $data, FALSE);
	}

}

/* End of file Perancang.php */
/* Location: ./application/modules/backend/controllers/Perancang.php */
