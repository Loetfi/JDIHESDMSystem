<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('auth_model','auth');
	}

	public function index()
	{ 
		$data = array(
			'contents'	=> 'auth/login',
			'title'		=> 'Login Sistem',
			'message'	=> $this->session->flashdata('message')
		);
		$this->load->view('template/kepala', $data, FALSE);
		$this->load->view('template/auth', $data, FALSE);
		$this->load->view('template/footer', $data, FALSE);
	}
 
	public function proses()
	{
		// 
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run()==TRUE) {
			
			$parameter = array(
				'username'	=> !empty($this->input->post('username')) ? $this->input->post('username') : 0,
				'password'	=> !empty($this->input->post('password')) ? $this->input->post('password') : 0
			);

			($this->auth->login($parameter)) ? redirect($this->session->userdata('referrer_url'),'refresh') : $this->index();

		} else { 

			$this->index(); 

		}

	}

	/*
	* for logout user
	*/

	public function logout()
	{ 
		$this->session->set_flashdata('message', 'Berhasil keluar dari sistem');
		$this->session->sess_destroy();
		redirect('backend/auth/login','refresh');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
