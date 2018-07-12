<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatable_model extends CI_Model { 
    
    // _get_datatables_query
    public function datatable($table , $column_order = array() , $column_search = array() , $orderin = array(), $login_id)
    { 
        // setting lutfi database schema lain 
        // menggunakan tambahan settingan di database.php  
        /*
        * SELECT a.id_dokumen, a.jenis_dokumen , a.nama_dokumen, a.cuser, b.appTo,
        b.rilis_doc
        from dokumen a 
        left join dokumen_revisi b on a.id_dokumen = b.id_dokumen
        where a.cuser = 7 or ( appTo = 7 and rilis_doc = 1 )
        GROUP BY a.id_dokumen
        */

        $this->db->select('a.id_dokumen, a.jenis_dokumen , a.nama_dokumen, a.cuser, b.appTo,b.rilis_doc,b.cdate');
        $this->db->from('dokumen a');
        $this->db->join('dokumen_revisi b','a.id_dokumen = b.id_dokumen','left');
        $this->db->where('a.cuser = '.$login_id.' or (appTo = '.$login_id.' and b.rilis_doc = 1)');
        $this->db->group_by('a.id_dokumen');
        
        // $this->db->distinct("d.id_dokumen ,
        //     d.jenis_dokumen , 
        //     d.nama_dokumen , 
        //     d.cdate ,
        //     d.status , 
        //     d.submit_doc , 
        //     d.relasi_doc , 
        //     l.direct_boss");
        // $this->db->select("d.id_dokumen ,
        //     d.jenis_dokumen , 
        //     d.nama_dokumen , 
        //     d.cdate ,
        //     d.status , 
        //     d.submit_doc , 
        //     d.relasi_doc , 
        //     l.direct_boss");
        // $this->db->from("dokumen d");
        // $this->db->join("login l ","d.cuser = l.login_id","left");
        // $this->db->join("dokumen_revisi dr ","dr.id_dokumen = d.id_dokumen","left");
        // $this->db->where("d.cuser = $login_id  or dr.appTo = $login_id ");
        // $this->db->group_by("d.id_dokumen ,
        //     d.jenis_dokumen , 
        //     d.nama_dokumen , 
        //     d.cdate ,
        //     d.status , 
        //     d.submit_doc , 
        //     d.relasi_doc , 
        //     l.direct_boss");
        // a.cuser = $login_id or (a.submit_doc = 1 and b.direct_boss = $login_id )
        /*
        select distinct d.*, l.direct_boss 
        from dokumen d
        left join login l on d.cuser = l.login_id
        left join dokumen_revisi dr
        on dr.id_dokumen = d.id_dokumen
        where
        d.cuser = 6
        or dr.appTo = 6
        order by d.id_dokumen, status_revisi
        *
        */
        // $this->db->query("SELECT a.*,b.direct_boss from dokumen a 
        //     left join login b on a.cuser = b.login_id 
        //     where a.cuser = $login_id or (a.submit_doc = 1 and b.direct_boss = $login_id ) ");   
        // $this->db->where('cuser' , $login_id);
        // $this->db->order_by('d.id_dokumen, status_revisi' , 'DESC');
        
        $i = 0;
        foreach ($column_search as $item) // loop column
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                
                if(count($column_search) - 1 == $i) //last loop
                $this->db->group_end(); //close bracket
            }
            $i++;
        }
        
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']); 
        }
        else if(isset($orderin))
        {
            $order = $orderin;
            $this->db->order_by(key($order), $order[key($order)]);
            // $this->db->order_by($orderin);
        }
    }
    
    function get_datatables($table , $column_order = array() , $column_search = array() , $orderin = array(),$login_id){
        $this->datatable($table , $column_order , $column_search  , $orderin ,$login_id );
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
    function count_filtered($table , $column_order = array() , $column_search = array() , $orderin = array(), $login_id){
        $this->datatable($table , $column_order , $column_search  , $orderin , $login_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    function count_all($table,$login_id){
        $this->db->from($table);
        $this->db->where('cuser', $login_id);
        return $this->db->count_all_results();
    }	
    
} 
