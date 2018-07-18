<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {
	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('backend');
		check_login('backend/dokumen/pilih');
	}
	
	public function index()
	{ 
		$data = array(
			// 'data' 		=>  $this->db->query("SELECT id_dokumen, jenis_dokumen, nama_dokumen from dokumen order by id_dokumen")->result_array(),
			'message'	=> $this->session->flashdata('message'),
			'detail'	=> site_url('backend/dokumen/detail'),
			// 'edit'	=> site_url('Keputusan_menteri_doc/edit'),
			'contents'	=> 'dokumen/data',
			'url'		=> site_url('backend/service/dokumen/index/'.$this->session->userdata('login_id')),
			'title'		=> 'Daftar Rancangan ',
			'name'		=> empty($this->session->userdata('name')) ? 'Tanpa Login' : $this->session->userdata('name')
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
		$data =  $this->db->query("SELECT id_dokumen, jenis_dokumen, nama_dokumen from dokumen order by id_dokumen")->result_array();
		
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
			'title'		=> 'Pilih Dokumen',
			'name'		=> empty($this->session->userdata('name')) ? 'Tanpa Login' : $this->session->userdata('name')
		);
		$this->load->view('template/head', $data, FALSE);
		// $this->load->view('dokumen/pilih', $data, FALSE);
	}
	
	public function detail($id_dokumen = '')
	{
		$ambil_data_dokumen = $this->db->query("SELECT * from dokumen where id_dokumen = $id_dokumen ")->row_array();
		$ambil_data_dokumen_version = $this->db->query("SELECT c.name , a.*, b.jenis_dokumen, d.name as nama_atasan from dokumen_revisi  a 
			inner join dokumen b on a.id_dokumen = b.id_dokumen
			left join login c on a.cuser = c.login_id
			left join login d on a.appTo = d.login_id
			where a.id_dokumen = $id_dokumen ")->result_array();

		##cek publis
		$cek_publis = $this->db->query("SELECT id_dokumen from dokumen WHERE id_dokumen = $id_dokumen and submit_doc = 1")->row_array();
		if ($cek_publis) { $publis = true; } else { $publis = false; }
		##end 
		
		$data = array(
			'publish'		=> $publis,
			'detail_dok'	=> isset($ambil_data_dokumen) ? $ambil_data_dokumen : array(),
			'dok_versi'		=> isset($ambil_data_dokumen_version) ? $ambil_data_dokumen_version : array(),
			'contents'		=> 'dokumen/detail',
			'title'			=> 'Detail Dokumen ',
			'name'			=> empty($this->session->userdata('name')) ? 'Tanpa Login' : $this->session->userdata('name')
		);
		$this->load->view('template/head', $data, FALSE);
		// $this->load->view('dokumen/pilih', $data, FALSE);
	}


	public function publis()
	{	
		 // print_r($_GET);
		#submit dok
		$update = array(
			'submit_doc' => 1, 
		);
		$this->db->where('id_dokumen', $_GET['id_dokumen']);
		$this->db->update('dokumen', $update);
		####

		$this->session->set_flashdata('message', '<div class="alert alert-info"> Rancangan berhasil di PUBLISH.</div>');
		redirect('backend/dokumen','refresh');
	}
	
	// telaah
	public function telaah()
	{
		$data = array(
			'data' 		=>  $this->db->query("SELECT id_dokumen, jenis_dokumen, nama_dokumen from dokumen order by id_dokumen")->result_array(),
			'contents'	=> 'dokumen/data',
			'url'		=> site_url('backend/service/dokumen/index/'.$this->session->userdata('login_id')),
			'title'		=> 'Daftar Dokumen yang bisa ditelaah',
			'name'		=> empty($this->session->userdata('name')) ? 'Tanpa Login' : $this->session->userdata('name')
		);
		$this->load->view('template/head', $data, FALSE);
		// $data = array();
		// $this->load->view('dokumen/data', $data, FALSE);
	}
	
}

/* End of file Dokumen.php */
/* Location: ./application/modules/backend/controllers/Dokumen.php */
