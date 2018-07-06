<?php

class Auth_model extends CI_Model{
    //put your code here
    function loginPengguna($dataLogin) {
        $query = $this->db->get_where('pengguna', $dataLogin);
        if ($query->num_rows() == 1) {
            foreach ($query->result() as $row) {
                if ($row->status == 'Aktif'){
                    $sessionData = array(
                        'ses_ppid_user_id' => $row->user_id,
                        'ses_ppid_user_nama' => $row->nama,
                        'ses_ppid_user_username' => $row->username,
                        'ses_ppid_user_level' => $row->role, // pemohon, admin, unit
                        'ses_ppid_user_unit' => $row->bagian_unit,
                        'ses_ppid_user_code' => $row->no_identitas,
                        'ses_ppid_user_foto' => $row->foto,
                        'ses_ppid_user_status' => true
                    );
                    $return = "sukses";
                } else {
                    $return = "nonAktif";
                }
            }
            if ($return == "sukses") $this->session->set_userdata($sessionData);
            return $return;
        
        } else {
            return "gagal";
        }
    }
    function detailPenggnua($userId){
        $sql = "SELECT * from pengguna where user_id = '$userId' ";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    function detailPenggnuaKode($kode_aktifasi){
        $sql = "SELECT * from pengguna where activation_code = '$kode_aktifasi' ";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    
    function cekUsername($username){
        $sql = "SELECT count(*) terhitung from pengguna where username='$username'";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    function cekEmail($email){
        $sql = "SELECT count(*) terhitung from pengguna where email='$email'";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    function getLastId(){
        $sql = "SELECT max(user_id) as user_id from pengguna";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
    
    function registrasi($dataInsert){
        return $this->db->insert('pengguna', $dataInsert);
    }
    
    function penggunaUpdate($dataUpdate, $whereUpdate){
        $this->db->where($whereUpdate);
        return $this->db->update('pengguna', $dataUpdate);
    }
    function bagianUnit(){
        $sql = "SELECT DISTINCT `bagian_unit` FROM `pengguna` WHERE bagian_unit <> ''";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function adminList(){
        $sql = "SELECT * FROM pengguna WHERE role <> 'pemohon' ORDER BY user_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}

?>
