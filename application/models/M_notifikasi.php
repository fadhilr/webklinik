<?php
class M_notifikasi extends CI_Model{
    
    
	public function updateNotif($data)
	{
	   $this->db->where('statusNotifikasi', 0);
	   $this->db->where('idPelangganPenerima', $data['idPelangganPenerima']);
	   $this->db->update('notifikasi',$data); 
	   return 1;
	}
	public function updateNotifAdmin($data)
	{
	   $this->db->where('statusNotifikasi', 0);
	   $this->db->where('idAdminPenerima', $data['idAdminPenerima']);
	   $this->db->update('notifikasi',$data); 
	   return 1;
	}
	public function updateNotifAhli($data)
	{
	   $this->db->where('statusNotifikasi', 0);
	   $this->db->where('idAhliPenerima', $data['idAhliPenerima']);
	   $this->db->update('notifikasi',$data); 
	   return 1;
	}
	public function updateNotifKaryawan($data)
	{
	   $this->db->where('statusNotifikasi', 0);
	   $this->db->where('idKaryawanPenerima', $data['idKaryawanPenerima']);
	   $this->db->update('notifikasi',$data); 
	   return 1;
	}
	
	function get_notif($id){
        $query = $this->db->query("SELECT * FROM notifikasi where idPelangganPenerima='$id' ORDER BY idAdminPengirim and idAhliPengirim DESC LIMIT 5 ");
        return $query;
    }
    function get_notifAdmin($id){
        $query = $this->db->query("SELECT * FROM notifikasi where idAdminPenerima='$id' ORDER BY idAhliPengirim DESC LIMIT 5 ");
        return $query;
    }
    function get_notifAhli($id){
        $query = $this->db->query("SELECT * FROM notifikasi where idAhliPenerima='$id' ORDER BY idAdminPengirim and idKaryawanPengirim DESC LIMIT 5 ");
        return $query;
    }
    function get_notifKaryawan($id){
        $query = $this->db->query("SELECT * FROM notifikasi where idKaryawanPenerima='$id' ORDER BY idAhliPengirim DESC LIMIT 5 ");
        return $query;
    }
	
	function jumlahNotifPelanggan($id){
		$this->db->where('statusNotifikasi', '0');
		$this->db->where('idPelangganPenerima', $id);
		return $this->db->count_all_results('notifikasi');
	}
	function jumlahNotifAdmin($id){
		$this->db->where('statusNotifikasi', '0');
		$this->db->where('idAdminPenerima', $id);
		return $this->db->count_all_results('notifikasi');
	}
	function jumlahNotifAhli($id){
		$this->db->where('statusNotifikasi', '0');
		$this->db->where('idAhliPenerima', $id);
		return $this->db->count_all_results('notifikasi');
	}
	function jumlahNotifKaryawan($id){
		$this->db->where('statusNotifikasi', '0');
		$this->db->where('idKaryawanPenerima', $id);
		return $this->db->count_all_results('notifikasi');
	}
	function getPelanggan(){
		return $this->db->get('pelanggan');
	}
	function getAhli(){
		return $this->db->get('ahli');
	}
	function getAdmin(){
		return $this->db->get('admin');
	}
	function getKaryawan(){
		return $this->db->get('karyawan');
	}
	function setNotifikasi($data){
		return $this->db->insert('notifikasi', $data);
	}
	function getNotifikasiPending($id,$idAdminPengirim){
		$this->db->where('idPelangganPenerima', $id);
		$this->db->where('idAdminPengirim', $idAdminPengirim);
		return $this->db->get('notifikasi');
	}
} 