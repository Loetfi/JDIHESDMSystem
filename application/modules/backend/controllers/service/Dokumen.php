<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {

	public function index($id_flow , $login_id)
	{
		$this->load->helper('backend');

		$this->load->model('service/datatable_model','lists');
		// $this->cabang_model->get_datatables();

		$table          = 'dokumen';
    	$column_order   = ['a.id_dokumen' , 'a.jenis_dokumen', 'a.nama_dokumen']; //set column field database for datatable orderable
    	$column_search  = ['a.id_dokumen' , 'a.jenis_dokumen', 'a.nama_dokumen'];
    	$orderin        = ['a.id_dokumen' => 'desc']; // default order  # 'id_website' => 'asc'



    	$list 	= $this->lists->get_datatables($table , $column_order , $column_search , $orderin, $id_flow , $login_id);
 
		// CRUDS Action Role
		$detail 	= @urldecode($this->input->input_stream('detail'));
		$update 	= @urldecode($this->input->input_stream('update'));
		$delete 	= @urldecode($this->input->input_stream('delete'));  

		$data 	= array();
		$no 	= @$_POST['start'];
		foreach ($list as $d) {

			$no++;
			$row 	= array();  

			$ACTdetail 	 = $detail ? admsaction($detail  ,  @$d->id_dokumen , 'info' , 'fa fa-eye' , 'Lihat') : false;
			$ACTupdate   = $update ? admsaction($update  ,  @$d->id_dokumen , 'success' , 'fa fa-pencil' , 'Ubah') : false;
			$ACTdelete   = $delete ? anchor('#', '<i class="fa fa-trash"></i>', "class=\"btn btn-xs btn-danger ttipDatatables\" onclick=\"modal_delete('".$delete.'/'.@$d->CompanyId."');\" title=\"Hapus\"") : false; 

			$row[]	= $d->id_dokumen;
			$row[]	= $d->jenis_dokumen;
			$row[] 	= $d->nama_dokumen;
			$row[]	= date('d F Y H:i:s',strtotime($d->cdate)); 
			$row[]	= btnStatus($this->status_dok($d->id_dokumen));
			$row[]	= "<div class='btn-group'>".$ACTdetail." ".$ACTupdate." ".$ACTdelete ."</div>"; 

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->lists->count_all($table, $id_flow , $login_id),
			"recordsFiltered" => $this->lists->count_filtered($table , $column_order , $column_search , $orderin, $id_flow , $login_id),
			"data" => $data,
			);
   		//output to json format 
		admsapi(200 , 1, 'sukses' , $output );  
		
	}

	function status_dok($id_dokumen)
	{
		$cek = $this->db->query("SELECT submit_doc from dokumen where id_dokumen = $id_dokumen ")->row_array();

		if(isset($cek['submit_doc']) and $cek['submit_doc'] > 0)
			{
				return 1;
			} else {
				return 0;
			}
		
	}

}

/* End of file Dokumen.php */
/* Location: ./application/modules/backend/controllers/service/Dokumen.php */
