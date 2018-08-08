<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatable_model extends CI_Model { 

    // _get_datatables_query
    public function datatable($table , $column_order = array() , $column_search = array() , $orderin = array(), $id_flow, $login_id)
    {  
        // $this->db->select('a.id_dokumen, a.jenis_dokumen , a.nama_dokumen, a.cuser, b.appTo,b.rilis_doc,b.cdate');
        // $this->db->from('dokumen a');
        // $this->db->join('dokumen_revisi b','a.id_dokumen = b.id_dokumen','left');
        // $this->db->where('a.cuser = '.$login_id.' or (FIND_IN_SET('.$login_id.', appTo) <> 0 and b.rilis_doc = 1)');
        // $this->db->group_by('a.id_dokumen');


        // #1 SubQueries no.1 -------------------------------------------

        $this->db->select('a.id_dokumen, a.jenis_dokumen , a.nama_dokumen, a.cuser, b.appTo,b.rilis_doc,b.cdate');
        $this->db->from('dokumen a');
        $this->db->join('dokumen_revisi b','a.id_dokumen = b.id_dokumen','left');
        $this->db->where('a.cuser = '.$id_flow.' or (FIND_IN_SET('.$id_flow.', appTo) <> 0 and b.rilis_doc = 1)');
        // $this->db->group_by('a.id_dokumen');
        // $this->db->select('title, content, date');
        // $this->db->from('mytable');
        $query = $this->db->get();
        $subQuery1 = $this->db->last_query(); //$this->db->_compile_select();

        // $this->db->_reset_select();

// #2 SubQueries no.2 -------------------------------------------
        $this->db->select('a.id_dokumen, a.jenis_dokumen , a.nama_dokumen, a.cuser, b.appTo,b.rilis_doc,b.cdate');
        $this->db->from('dokumen a');
        $this->db->join('dokumen_revisi b','a.id_dokumen = b.id_dokumen','left');
        $this->db->where('a.cuser = '.$login_id);
        // SELECT `a`.`id_dokumen`, `a`.`jenis_dokumen`, `a`.`nama_dokumen`, `a`.`cuser`, `b`.`appTo`, `b`.`rilis_doc`, `b`.`cdate`  from dokumen a 
        //    left join dokumen_revisi b on a.id_dokumen = b.id_dokumen
        //    where a.cuser = $login_id
        // $this->db->select('title, content, date');
        // $this->db->from('mytable2');
        $query = $this->db->get();
        $subQuery2 = $this->db->last_query();; //$this->db->_compile_select();

        // $this->db->_reset_select();

// #3 Union with Simple Manual Queries --------------------------

        // $this->db->query("select * from ($subQuery1 UNION $subQuery2) as unionTable");

// #3 (alternative) Union with another Active Record ------------

        $this->db->from("($subQuery1 UNION $subQuery2) a");
        $this->db->group_by('a.id_dokumen');
        // $this->db->get();

        // $this->db->query("SELECT * from (
        //    SELECT `a`.`id_dokumen`, `a`.`jenis_dokumen`, `a`.`nama_dokumen`, `a`.`cuser`, `b`.`appTo`, `b`.`rilis_doc`, `b`.`cdate` 
        //    FROM `dokumen` `a` LEFT JOIN `dokumen_revisi` `b` ON `a`.`id_dokumen` = `b`.`id_dokumen` 
        //    WHERE `a`.`cuser` = $id_flow or (FIND_IN_SET($id_flow, appTo) <>0 and `b`.`rilis_doc` = 1) 
        //    union all 
        //    SELECT `a`.`id_dokumen`, `a`.`jenis_dokumen`, `a`.`nama_dokumen`, `a`.`cuser`, `b`.`appTo`, `b`.`rilis_doc`, `b`.`cdate`  from dokumen a 
        //    left join dokumen_revisi b on a.id_dokumen = b.id_dokumen
        //    where a.cuser = $login_id
        //    ) a
        //    GROUP BY a.`id_dokumen`
        //    ");
        //  ORDER BY `tbl_dokumen`.`id_dokumen` DESC LIMIT 10
        
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
    
    function get_datatables($table , $column_order = array() , $column_search = array() , $orderin = array(),$id_flow , $login_id){
        $this->datatable($table , $column_order , $column_search  , $orderin ,$id_flow , $login_id );
        if($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
    function count_filtered($table , $column_order = array() , $column_search = array() , $orderin = array(), $id_flow , $login_id){
        $this->datatable($table , $column_order , $column_search  , $orderin , $id_flow , $login_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    function count_all($table,$login_id){
        $this->db->from($table);
        $this->db->where('cuser', $login_id);
        return $this->db->count_all_results();
    }	
    
} 
