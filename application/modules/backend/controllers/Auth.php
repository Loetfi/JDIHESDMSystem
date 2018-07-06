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
		$this->login();
	}

	public function login()
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
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run()==TRUE) {
			
			$parameter = array(
				'username'	=> $this->input->post('username'),
				'password'	=> $this->input->post('password')
			);
 			
 			($this->auth->login($parameter)) ? redirect('backend/dashboard/','refresh') : $this->login();

		} else { 

			$this->login(); 

		}

	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
