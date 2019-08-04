<?php
class M_login extends CI_Model{
    
    //ambil data mahasiswa dari database

    function get_pelanggan(){
        $query = $this->db->query("select * from pelanggan");
        return $query;
    }

    function get_authPelanggan($username,$password){
        $query = $this->db->query("select * from pelanggan where username = '$username' && password = '$password'");
        return $query;
    }
    function get_authAdmin($username,$password){
        $query = $this->db->query("select * from admin where username = '$username' && password = '$password'");
        return $query;
    }
    function get_authAhli($username,$password){
        $query = $this->db->query("select * from ahli where username = '$username' && password = '$password'");
        return $query;
    }
    function get_authKaryawan($username,$password){
        $query = $this->db->query("select * from karyawan where username = '$username' && password = '$password'");
        return $query;
    }

    function get_pelangganById($id){
        $query = $this->db->query("select * from pelanggan where idPelanggan = '$id'");
        return $query;
    }
    function get_adminById($id){
        $query = $this->db->query("select * from admin where idAdmin = '$id'");
        return $query;
    }
    function get_ahliById($id){
        $query = $this->db->query("select * from ahli where idAhli = '$id'");
        return $query;
    }
    function get_karyawanById($id){
        $query = $this->db->query("select * from karyawan where idKaryawan = '$id'");
        return $query;
    }
    function get_admin(){
        $query = $this->db->query("select * from admin");
        return $query;
    }
	function get_alumni(){
        $query = $this->db->query("select * from alumni");
        return $query;
    }
	function get_alumniById($id){
        $query = $this->db->query("select * from alumni where id_alumni = '$id'");
        return $query;
    }
	function get_nama($email){
        $query = $this->db->query("select namaAlumni from alumni where email = '$email'");
        return $query;
    }
	function get_id($email){
        $query = $this->db->query("select id_alumni from alumni where email = '$email'");
        return $query;
    }
		
} 