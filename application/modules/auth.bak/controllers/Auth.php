<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct(); 
        $this->load->model('User_account_model');
        
        $this->load->library('cart');
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        $this->load->library('breadcrumbs');
        $this->breadcrumbs->push('Home', 'api/mockup/depan');
    }
    
    function index(){
        $data = array();
        $this->load->view('login/login', $data, FALSE);
    } 
}
