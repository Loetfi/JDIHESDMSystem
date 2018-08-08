<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {
	
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('backend');
		// check_login('backend/dokumen/pilih');
	}
	
	public function index()
	{ 	

		# cek apakah dokumen belum tersubmit / disposisi karena hal tsb masih versi A.
		# dan mengambil versi login id 
		$login_id = @$this->session->userdata('login_id') ? $this->session->userdata('login_id') : 0;
		$id_flow  = @$this->session->userdata('id_flow') ? $this->session->userdata('id_flow') : 0; 

		$data = array(
			// 'data' 		=>  $this->db->query("SELECT id_dokumen, jenis_dokumen, nama_dokumen from dokumen order by id_dokumen")->result_array(),
			'message'	=> $this->session->flashdata('message'),
			'detail'	=> site_url('backend/dokumen/detail'),
			// 'edit'	=> site_url('Keputusan_menteri_doc/edit'),
			'contents'	=> 'dokumen/data',
			'url'		=> site_url('backend/service/dokumen/index/'.$id_flow.'/'.$login_id),
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
			'name'		=> empty($this->session->userdata('name')) ? 'Tanpa Login' : $this->session->userdata('name'),
			'menu'		=> empty($this->session->userdata('name')) ? array() : $this->session->userdata('name')
		);
		$this->load->view('template/head', $data, FALSE);
	}

	public function bagian($key='')
	{
		if (count($key)>0) {
			for ($i=0; $i < count($key); $i++) { 

				$cari_flow = $this->db->query("SELECT nama_flow from flow where id_flow = '$key[$i]'")->row_array();
				$response[] = $cari_flow['nama_flow'];

			}
		} else {
			$response = array();
		}

		return $response; 
	}
	
	public function detail($id_dokumen = '')
	{
		$ambil_data_dokumen = $this->db->query("SELECT * from dokumen where id_dokumen = $id_dokumen ")->row_array();



		$ambil_data_dokumen_version = $this->db->query("SELECT c.name , a.*, b.jenis_dokumen, d.nama_flow,e.nama_flow as nama_flow_pengguna  from dokumen_revisi  a 
			inner join dokumen b on a.id_dokumen = b.id_dokumen
			left join login c on a.cuser = c.login_id
			left join flow d on a.appTo = d.id_flow
			left join flow e on c.id_flow = e.id_flow
			where a.id_dokumen = $id_dokumen ")->result_array();

		foreach ($ambil_data_dokumen_version as $ad) {
			$res['name'] = $ad['name']; 
			$res['nama_flow_pengguna'] = $ad['nama_flow_pengguna'];
			$res['id_revisi'] = $ad['id_revisi'];
			$res['id_dokumen'] = $ad['id_dokumen'];
			$res['status_revisi'] = $ad['status_revisi'];
			$res['cuser'] = $ad['cuser']; 
			$res['cdate'] = $ad['cdate']; 
			$res['rilis_doc'] = $ad['rilis_doc'];
			$res['namafile'] = $ad['namafile'];
			$res['catatan_submit'] = $ad['catatan_submit'];
			$res['jenis_dokumen'] = $ad['jenis_dokumen'];

			$res['disposisi'] = $this->bagian(explode(',', $ad['appTo']));
 
			$respon_disposi[] = $res;
		}
 		##cek publis
		$cek_publis = $this->db->query("SELECT id_dokumen from dokumen WHERE id_dokumen = $id_dokumen and submit_doc = 1")->row_array();
		if ($cek_publis) { $publis = true; } else { $publis = false; }
		##end 
		
		$data = array(
			'publish'		=> $publis,
			'detail_dok'	=> isset($ambil_data_dokumen) ? $ambil_data_dokumen : array(),
			'dok_versi'		=> isset($respon_disposi) ? $respon_disposi : array(),
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
