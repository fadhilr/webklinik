<?php
class M_registrasi extends CI_Model{
    
    //ambil data mahasiswa dari database
	
    
	function tampil_data(){
		return $this->db->get('user');
	}
	
	function get_usernameP(){
		return $this->db->query('select username from pelanggan');
	}
	function get_usernameK(){
		return $this->db->query('select username from karyawan');
	}
	function get_usernameAd(){
		return $this->db->query('select username from admin');
	}
	function get_usernameAh(){
		return $this->db->query('select username from ahli');
	}
	function get_idPelanggan(){
		return $this->db->query('select max(idPelanggan) as idPelanggan from pelanggan');
	}
 	function getHarga(){
        $query = $this->db->query("SELECT * FROM harga");
        return $query;
    }
	function set_dataPelanggan($data,$table){
		$query = $this->db->insert($table,$data);
		return $query;
	}
	function set_dataPeriksa($data,$table){
		$query = $this->db->insert($table,$data);
		return $query;
	}
} 