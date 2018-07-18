<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('backend');
		check_login('backend/dokumen/pilih');
	}

	public function index()
	{
		$data = array(
			'contents'	=> 'database/list',
			'title'		=> 'List Database',
			'name'		=> empty($this->session->userdata('name')) ? 'Tanpa Login' : $this->session->userdata('name')
		);
		$this->load->view('template/head', $data, FALSE);
	}


	public function rancangan($id_sektor = null)
	{
		$data = array(
			'contents'	=> 'database/pilih',
			'title'		=> 'List Database Surat dari Sub Sektor <i class="fa fa-chevron-right"></i> '.$id_sektor,
			'name'		=> empty($this->session->userdata('name')) ? 'Tanpa Login' : $this->session->userdata('name')
		);
		$this->load->view('template/head', $data, FALSE);
	}


	public function list_surat()
	{
		$id_sektor 	= $_GET['sektor'];
		$id_surat 	= $_GET['surat'];

		$data = array(
			'contents'	=> 'database/listsurat',
			'title'		=> 'List Database Surat dari Sub Sektor <i class="fa fa-chevron-right"></i> '.$id_sektor,
			'detail'	=> site_url('backend/database/master/detail'), 
			'url'		=> site_url('backend/service/database/index/'.$this->session->userdata('login_id')),
			'name'		=> empty($this->session->userdata('name')) ? 'Tanpa Login' : $this->session->userdata('name'),
			'param'		=> '?sektor='.$id_sektor.'&surat='.$id_surat
		);
		$this->load->view('template/head', $data, FALSE);
	}

	public function detail()
	{
		echo ' detail sedang dalam pengembangan, kedepan akan bisa tau kronologi dan upload daftar hadir';
		exit;
		$id_sektor 	= $_GET['sektor'];
		$id_surat 	= $_GET['surat'];

		$data = array(
			'contents'	=> 'database/listsurat',
			'title'		=> 'List Database Surat dari Sub Sektor <i class="fa fa-chevron-right"></i> '.$id_sektor,
			'detail'	=> site_url('backend/database/master/detail?sektor='.$id_sektor.'&surat='.$id_surat), 
			'url'		=> site_url('backend/service/dokumen/index/'.$this->session->userdata('login_id')),
			'name'		=> empty($this->session->userdata('name')) ? 'Tanpa Login' : $this->session->userdata('name')
		);
		$this->load->view('template/head', $data, FALSE);
	}

}

/* End of file Master.php */
/* Location: ./application/modules/backend/controllers/database/Master.php */
