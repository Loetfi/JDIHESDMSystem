<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thread extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('forum_model');
		$this->load->helper('backend');
		check_login('backend/dokumen/pilih');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$alldata = $this->forum_model->getall();

		$data = array(
			'contents'	=> 'forum/thread',
			'title'		=> 'Forum',
			'name'		=> empty($this->session->userdata('name')) ? 'Tanpa Login' : $this->session->userdata('name'),
			'message'	=> $this->session->flashdata('message'),
			'forum'		=> $alldata
		);
		$this->load->view('template/head', $data, FALSE);
	}

	public function new()
	{
		$data = array(
			'contents'	=> 'forum/new',
			'title'		=> 'Add Post Forum',
			'name'		=> empty($this->session->userdata('name')) ? 'Tanpa Login' : $this->session->userdata('name')
		);
		$this->load->view('template/head', $data, FALSE);
	}

	// 

	public function proses()
	{
		$insert = array(
			'judul_thread' => @$_POST['judul'], 
			'isi_thread' => @nl2br($_POST['isi']), 
			'kategori_thread' => @$_POST['kategori'], 
			'tanggal_thread' => date('Y-m-d H:i:s'),
			'login_id' => @$this->session->userdata('login_id'),
		);
		$this->db->insert('forum', $insert);

		$this->session->set_flashdata('message', '<div class="alert alert-info"> Selamat thread kamu telah terbit.</div>');
		redirect('backend/forum/','refresh');
	}


	public function detail($id_forum = null)
	{
		$det['detail'] = $this->forum_model->get($id_forum);
		$det['balasan'] = $this->forum_model->get_balasan($id_forum);

		$data = array(
			'message'	=> $this->session->flashdata('message'),
			'id_forum'	=> @$id_forum,
			'contents'	=> 'forum/detail',
			'title'		=> 'Detail Forum',
			'sub_title'		=> $det['detail']['judul_thread'],
			'name'		=> empty($this->session->userdata('name')) ? 'Tanpa Login' : $this->session->userdata('name')
		);
		$this->load->view('template/head', array_merge($data,$det), FALSE);
	}


	// balasan

	public function balasan_proses($id_forum = null)
	{
		$insert = array(
			'isi_balasan' 	=> @nl2br($_POST['isi_balasan']), 
			'id_thread' 	=> @$id_forum, 
			'tanggal_balasan' => date('Y-m-d H:i:s'),
			'login_id_balasan' => @$this->session->userdata('login_id'),
		);
		$this->db->insert('forum_balasan', $insert);

		$this->session->set_flashdata('message', '<div class="alert alert-info"> Tanggapan kamu berhasil dikirim.</div>');
		redirect('backend/forum/thread/detail/'.$id_forum,'refresh');
	}

}

/* End of file Thread.php */
/* Location: ./application/modules/backend/controllers/forum/Thread.php */
