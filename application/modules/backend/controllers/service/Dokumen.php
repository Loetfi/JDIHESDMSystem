<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {

	public function index()
	{
		$this->load->helper('backend');

		$this->load->model('service/datatable_model','lists');
		// $this->cabang_model->get_datatables();

		$table          = 'dokumen';
    	$column_order   = ['id_dokumen' , 'jenis_dokumen', 'nama_dokumen']; //set column field database for datatable orderable
    	$column_search  = ['id_dokumen' , 'jenis_dokumen', 'nama_dokumen'];
    	$orderin        = ['id_dokumen' => 'desc']; // default order  # 'id_website' => 'asc'



    	$list 	= $this->lists->get_datatables($table , $column_order , $column_search , $orderin);
 
		// CRUDS Action Role
		$detail 	= @urldecode($this->input->input_stream('detail'));
		$update 	= @urldecode($this->input->input_stream('update'));
		$delete 	= @urldecode($this->input->input_stream('delete'));  

		$data 	= array();
		$no 	= @$_POST['start'];
		foreach ($list as $d) {

			$no++;
			$row 	= array();  

			$ACTdetail 	 = $detail ? admsaction($detail  ,  @$d->CompanyId , 'info' , 'fa fa-eye' , 'Lihat') : false;
			$ACTupdate   = $update ? admsaction($update  ,  @$d->CompanyId , 'success' , 'fa fa-pencil' , 'Ubah') : false;
			$ACTdelete   = $delete ? anchor('#', '<i class="fa fa-trash"></i>', "class=\"btn btn-xs btn-danger ttipDatatables\" onclick=\"modal_delete('".$delete.'/'.@$d->CompanyId."');\" title=\"Hapus\"") : false; 
			
			$row[]	= $d->jenis_dokumen;
			$row[] 	= $d->nama_dokumen;
			$row[]	= $d->cdate; 
			$row[]	= btnStatus($d->status);
			$row[]	= "<div class='btn-group'>".$ACTdetail." ".$ACTupdate." ".$ACTdelete ."</div>"; 

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->lists->count_all($table),
			"recordsFiltered" => $this->lists->count_filtered($table , $column_order , $column_search , $orderin),
			"data" => $data,
			);
   		//output to json format 
		admsapi(200 , 1, 'sukses' , $output );  
		
	}

}

/* End of file Dokumen.php */
/* Location: ./application/modules/backend/controllers/service/Dokumen.php */
