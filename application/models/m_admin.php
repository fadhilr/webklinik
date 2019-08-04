<?php
class m_admin extends CI_Model{
    
    
    function get_pelanggan(){
        $query = $this->db->query("select * from pelanggan");
        return $query;
    }
    function get_karyawan(){
        $query = $this->db->query("select * from karyawan");
        return $query;
    }
    function get_ahli(){
        $query = $this->db->query("select * from ahli");
        return $query;
    }
    function get_harga(){
        $query = $this->db->query("select * from harga");
        return $query;
    }
    function get_karyawanById($id){
        $query = $this->db->query("select * from karyawan where idKaryawan='$id'");
        return $query;
    }
    function get_pelangganById($id){
        $query = $this->db->query("select * from pelanggan where idPelanggan='$id'");
        return $query;
    }
    function get_pelanggan_pending(){
        $query = $this->db->query("select * from pelanggan where status='pending' or status='pending1'");
        return $query;
    }
    function get_pelanggan_bayar1(){
        $query = $this->db->query("select * from pelanggan join pembayaran on idPelanggan=idPengirim where status='bayar1'");
        return $query;
    }
    function get_pelanggan_bayar2(){
        $query = $this->db->query("select * from pelanggan join pembayaran on idPelanggan=idPengirim where status='bayar2'");
        return $query;
    }
    function get_karyawanAdhd($id){
        $query = $this->db->query("SELECT * FROM karyawan_adhd where idPelanggan='$id'");
        return $query;
    }
    function get_karyawanPsikomotor($id){
        $query = $this->db->query("SELECT * FROM nilai_psikomotor where idPelanggan='$id'");
        return $query;
    }
    function get_karyawanAkademik($id){
        $query = $this->db->query("SELECT * FROM nilai_akademik where idPelanggan='$id'");
        return $query;
    }
    function get_karyawanKognisi($id){
        $query = $this->db->query("SELECT * FROM nilai_kognisi where idPelanggan='$id'");
        return $query;
    }
    function get_karyawanAfeksi($id){
        $query = $this->db->query("SELECT * FROM nilai_afeksi where idPelanggan='$id'");
        return $query;
    }
    function get_karyawanSosial($id){
        $query = $this->db->query("SELECT * FROM nilai_sosial where idPelanggan='$id'");
        return $query;
    }
    function jumlahPelanggan(){
		return $this->db->count_all('pelanggan');
	}
	function jumlahPelangganPending(){
		$this->db->where('status', 'pending');
		return $this->db->count_all_results('pelanggan');
	}
	function jumlahPelangganBayar(){
		$this->db->where('status', 'bayar1');
		return $this->db->count_all_results('pelanggan');
	}
	function jumlahPelangganPeriksa(){
		$this->db->where('status', 'periksa');
		return $this->db->count_all_results('pelanggan');
	}
	function jumlahPelangganBayar2(){
		$this->db->where('status', 'bayar2');
		return $this->db->count_all_results('pelanggan');
	}
	function jumlahPelangganSelesai(){
		$this->db->where('status', 'lunas');
		return $this->db->count_all_results('pelanggan');
	}
	function setHarga($idHarga,$namaKolom,$value){
		$this->db->set($namaKolom, $value);
		$this->db->where('idHarga', $idHarga);
		$this->db->update('harga');
	}
	function set_biodataValid($id){
		$this->db->set('status', 'valid1');
		$this->db->where('idPelanggan', $id);
		$this->db->update('pelanggan');
	}
	function set_pembayaranValid($id){
		$this->db->set('status', 'lunas1');
		$this->db->where('idPelanggan', $id);
		$this->db->update('pelanggan');
	}
	function set_pembayaranValid2($id){
		$this->db->set('status', 'lunas2');
		$this->db->where('idPelanggan', $id);
		$this->db->update('pelanggan');
	}
	public function pembayaranValid($data,  $table)
	{
	   $this->db->where('idPengirim', $data['idPengirim']);
	   $this->db->update($table,$data); 
	   return 1;
	}
	public function pembayaranValid2($data,  $table)
	{
	   $this->db->where('idPengirim', $data['idPengirim']);
	   $this->db->update($table,$data); 
	   return 1;
	}
} 