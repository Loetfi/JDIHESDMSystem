<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        
    }

    public function index()
    {
        $data = array(
            'title'     => 'test',
            'slider'    => $this->Home_model->getMenuDetail(1,'ID',5),
            'link'    => $this->Home_model->getMenuDetail(2,'ID',8),
            'news'      => $this->Home_model->getNewsperKat(20, 'ID'),
            'gallery'    => $this->Home_model->getMenuDetail(3,'ID',4),
            'footer'    => $this->Home_model->getMenuDetail(4,'ID',1),
        );
        // $this->load->view('api/front', $data, FALSE); 
        $this->load->view('mockup/buatdepan', $data, FALSE);
    }   


    public function landing()
    {  
        $data['title'] = 'Beranda Rannah'; 
        $this->load->view('front/afterlogin', $data, FALSE);
    }

    public function format()
    {  
        $data['slider'] = $this->Home_model->getMenuDetail(1,'ID',3);
        $data['news'] = $this->Home_model->getNewsperKat(20, 'ID' , 3);
        $data['link'] = $this->Home_model->getMenuDetail(2,'ID',8);
        $data['title'] = 'Beranda';
        $data['page'] = 'front/format'; 
        $this->load->view('template/tema', $data, FALSE);
    }



    public function content()
    { 
        $data['slider'] = $this->Home_model->getMenuDetail(1,'ID',3);
        $data['news'] = $this->Home_model->getNewsperKat(20, 'ID' , 3);
        $data['link'] = $this->Home_model->getMenuDetail(2,'ID',8);
        $data['title'] = 'Beranda';
        $data['page'] = 'front/home'; 
        $this->load->view('template/tema', $data, FALSE);
    }


    public function page($slugpage)
    { 

        if (isset($slugpage)) {

            $data['content']    = $this->Home_model->gerperpage($slugpage);
            $data['title']      = 'List Unit';
            $data['page']       = 'front/page'; 
            $this->load->view('template/tema', $data);
        } else {
            redirect('','refresh');
        }
    } 

	public function sanusi()
    {  
        $data['title'] = 'Beranda'; 
        $this->load->view('front/sanusi', $data, FALSE);
    }

    public function landingnew()
    {  
        
        if (!empty($this->session->userdata('login_id'))) {
            redirect('front/landing','refresh');
            exit();
        }


        $data['title'] = 'Selamat Datang di Rannah Hukum - Kementerian Energi dan Sumber Daya Mineral'; 
        $this->load->view('front/landingnew', $data, FALSE);
    }

}



/* End of file Front.php */
/* Location: ./application/controllers/Front.php */
