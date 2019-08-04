<?php
class m_pelanggan extends CI_Model{
    
    //ambil data mahasiswa dari database
    function get_pelanggan(){
        $query = $this->db->query("select * from pelanggan");
        return $query;
    }
    function get_pelangganId($id){
        $query = $this->db->query("select * from pelanggan JOIN pembayaran on idPelanggan=idPengirim where idPelanggan='$id'");
        return $query;
    }
    function get_adhd(){
        $query = $this->db->query("select * from gejala_adhd");
        return $query;
    }
    function get_tunalaras(){
        $query = $this->db->query("select * from gejala_tunalaras");
        return $query;
    }
    function get_ds(){
        $query = $this->db->query("select * from gejala_ds");
        return $query;
    }
    function get_sl(){
        $query = $this->db->query("select * from gejala_sl");
        return $query;
    }
    function get_rm(){
        $query = $this->db->query("select * from gejala_rm");
        return $query;
    }
    function get_autis(){
        $query = $this->db->query("select * from gejala_autis");
        return $query;
    }
    function get_nilai_adhd($id){
        $query = $this->db->query("select * from pelanggan_adhd where idPelanggan='$id'");
        return $query;
    }
    function get_nilai_tunalaras($id){
        $query = $this->db->query("select * from pelanggan_tunalaras where idPelanggan='$id'");
        return $query;
    }
    function get_nilai_ds($id){
        $query = $this->db->query("select * from pelanggan_ds where idPelanggan='$id'");
        return $query;
    }
    function get_nilai_sl($id){
        $query = $this->db->query("select * from pelanggan_sl where idPelanggan='$id'");
        return $query;
    }
    function get_nilai_rm($id){
        $query = $this->db->query("select * from pelanggan_rm where idPelanggan='$id'");
        return $query;
    }
    function get_nilai_autis($id){
        $query = $this->db->query("select * from pelanggan_autis where idPelanggan='$id'");
        return $query;
    }
    function get_nilai_adhdK($id){
        $query = $this->db->query("select * from karyawan_adhd where idPelanggan='$id'");
        return $query;
    }
    function get_nilai_tunalarasK($id){
        $query = $this->db->query("select * from karyawan_tunalaras where idPelanggan='$id'");
        return $query;
    }
    function get_nilai_dsK($id){
        $query = $this->db->query("select * from karyawan_ds where idPelanggan='$id'");
        return $query;
    }
    function get_nilai_slK($id){
        $query = $this->db->query("select * from karyawan_sl where idPelanggan='$id'");
        return $query;
    }
    function get_nilai_rmK($id){
        $query = $this->db->query("select * from karyawan_rm where idPelanggan='$id'");
        return $query;
    }
    function get_nilai_autisK($id){
        $query = $this->db->query("select * from karyawan_autis where idPelanggan='$id'");
        return $query;
    }
    function get_nilaiAdhd($id){
        $query = $this->db->query("SELECT nilai FROM pelanggan_adhd where idGejala=19 and idPelanggan='$id'");
        return $query;
    }
    function get_nilaiAutis($id){
        $query = $this->db->query("SELECT nilai FROM pelanggan_autis where idGejala=10 and idPelanggan='$id'");
        return $query;
    }
    function get_nilaiDs($id){
        $query = $this->db->query("SELECT nilai FROM pelanggan_ds where idGejala=34 and idPelanggan='$id'");
        return $query;
    }
    function get_nilaiSl($id){
        $query = $this->db->query("SELECT nilai FROM pelanggan_sl where idGejala=23 and idPelanggan='$id'");
        return $query;
    }
    function get_nilaiRm($id){
        $query = $this->db->query("SELECT nilai FROM pelanggan_rm where idGejala=25 and idPelanggan='$id'");
        return $query;
    }
    function get_nilaiTunalaras($id){
        $query = $this->db->query("SELECT nilai FROM pelanggan_tunalaras where idGejala=40 and idPelanggan='$id'");
        return $query;
    }
    function get_nilaiAdhdK($id){
        $query = $this->db->query("SELECT nilai FROM karyawan_adhd where idGejala=19 and idPelanggan='$id'");
        return $query;
    }
    function get_nilaiAutisK($id){
        $query = $this->db->query("SELECT nilai FROM karyawan_autis where idGejala=10 and idPelanggan='$id'");
        return $query;
    }
    function get_nilaiDsK($id){
        $query = $this->db->query("SELECT nilai FROM karyawan_ds where idGejala=34 and idPelanggan='$id'");
        return $query;
    }
    function get_nilaiSlK($id){
        $query = $this->db->query("SELECT nilai FROM karyawan_sl where idGejala=23 and idPelanggan='$id'");
        return $query;
    }
    function get_nilaiRmK($id){
        $query = $this->db->query("SELECT nilai FROM karyawan_rm where idGejala=25 and idPelanggan='$id'");
        return $query;
    }
    function get_nilaiTunalarasK($id){
        $query = $this->db->query("SELECT nilai FROM karyawan_tunalaras where idGejala=40 and idPelanggan='$id'");
        return $query;
    }
    public function set_pelanggan($id,$value,$nilai){
		  $this->db->set($value, $nilai);
		  $this->db->where('idPelanggan', $id);
		  $this->db->update('pelanggan');
 	}
 	public function set_pelangganR($id,$value,$strState){
		  $this->db->set($value, $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->update('pelanggan');
 	}
    public function set_adhd($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_adhd');
 	}
 	public function set_adhdK($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('karyawan_adhd');
 	}
 	public function set_hasil_adhd($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_adhd');
 	}
 	public function set_hasil_adhdK($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('karyawan_adhd');
 	}
 	public function set_tunalaras($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_tunalaras');
 	}
 	public function set_tunalarasK($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('karyawan_tunalaras');
 	}
 	public function set_hasil_tunalaras($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_tunalaras');
 	}
 	public function set_hasil_tunalarasK($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('karyawan_tunalaras');
 	}
 	public function set_ds($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_ds');
 	}
 	public function set_dsK($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('karyawan_ds');
 	}
 	public function set_hasil_ds($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_ds');
 	}
 	public function set_hasil_dsK($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('karyawan_ds');
 	}
 	public function set_sl($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_sl');
 	}
 	public function set_slK($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('karyawan_sl');
 	}
 	public function set_hasil_sl($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_sl');
 	}
 	public function set_hasil_slK($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('karyawan_sl');
 	}
 	public function set_rm($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_rm');
 	}
 	public function set_rmK($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('karyawan_rm');
 	}
 	public function set_hasil_rm($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_rm');
 	}
 	public function set_hasil_rmK($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('karyawan_rm');
 	}
 	public function set_autis($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_autis');
 	}
 	public function set_autisK($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('karyawan_autis');
 	}
 	public function set_hasil_autis($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_autis');
 	}
 	public function set_hasil_autisK($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('karyawan_autis');
 	}
 	public function updateBio($data, $id, $table)
	{
	   $this->db->where('idPelanggan', $id);
	   $this->db->update($table,$data); 
	}
	public function set_statusPembayaran($id,$strState){
		  $this->db->set('status', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->update('pelanggan');
 	}
 	public function set_totalPembayaran2($id,$nilai){
		  $this->db->set('totalPembayaran2', $nilai);
		  $this->db->where('idPengirim', $id);
		  $this->db->update('pembayaran');
 	}

 	function get_harga(){
        $query = $this->db->query("SELECT * FROM harga");
        return $query;
    }
 	function get_dataPembayaran($id){
        $query = $this->db->query("SELECT * FROM pembayaran JOIN pelanggan ON idPengirim=idPelanggan where idPelanggan='$id'");
        return $query;
    }
    function get_dataPemeriksaan($id){
        $query = $this->db->query("SELECT * FROM pelanggan p JOIN pelanggan_adhd pa ON p.idPelanggan=pa.idPelanggan JOIN pelanggan_autis pu ON p.idPelanggan=pu.idPelanggan JOIN pelanggan_ds pd ON p.idPelanggan=pd.idPelanggan where p.idPelanggan='$id'");
        return $query;
    }
    public function updatePembayaran($data,  $table)
	{
	   $this->db->where('idPengirim', $data['idPengirim']);
	   $this->db->update($table,$data); 
	   return 1;
	}
	
} 