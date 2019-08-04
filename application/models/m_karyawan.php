<?php
class m_karyawan extends CI_Model{
    
    //ambil data mahasiswa dari database
    function get_periksaPasien($id){
        $query = $this->db->query("select * from pelanggan where status='periksa' ");
        return $query;
    }
    function get_perkembanganPasien($id){
        $query = $this->db->query("select * from pelanggan where status='lunas2' ");
        return $query;
    }
    function get_periksaPasien1($id){
        $query = $this->db->query("select * from pelanggan where status='periksa' and kPsikomotor='$id' or kKognisi='$id' or kAfeksi='$id' or kAkademik='$id' or kSosial='$id'");
        return $query;
    }
    function get_periksaKognisi($id){
        $query = $this->db->query("select * from nilai_kognisi where status='periksa' or status ='sudah diperiksa'and idKaryawan='$id'");
        return $query;
    }
    function get_periksaAfeksi($id){
        $query = $this->db->query("select * from pelanggan p JOIN nilai_afeksi na on p.idPelanggan=na.idPelanggan where p.status='periksa' and na.status='periksa' and idData='1' and idKaryawan='$id'");
        return $query;
    }
    function get_periksaPsikomotor($id){
        $query = $this->db->query("select * from pelanggan p JOIN nilai_psikomotor na on p.idPelanggan=na.idPelanggan where p.status='periksa' and na.status='periksa' and idData='1' and idKaryawan='$id'");
        return $query;
    }
    function get_periksaAkademik($id){
        $query = $this->db->query("select * from pelanggan p JOIN nilai_akademik na on p.idPelanggan=na.idPelanggan where p.status='periksa' and na.status='periksa' and idData='1' and idKaryawan='$id'");
        return $query;
    }
    function get_periksaSosial($id){
        $query = $this->db->query("select * from pelanggan p JOIN nilai_sosial na on p.idPelanggan=na.idPelanggan where p.status='periksa' and na.status='periksa' and idData='1' and idKaryawan='$id'");
        return $query;
    }
    function get_pelanggan($id){
        $query = $this->db->query("select * from pelanggan where idPelanggan='$id'");
        return $query;
    }
    function get_psikomotor(){
        $query = $this->db->query("select * from data_psikomotor");
        return $query;
    }
    function get_kognisi(){
        $query = $this->db->query("select * from data_kognisi");
        return $query;
    }
    function get_afeksi(){
        $query = $this->db->query("select * from data_afeksi");
        return $query;
    }
    function get_akademik(){
        $query = $this->db->query("select * from data_akademik");
        return $query;
    }
    function get_sosial(){
        $query = $this->db->query("select * from data_sosial");
        return $query;
    }
    function get_kognisiByIdK($id){
        $query = $this->db->query("select * from nilai_kognisi where idKaryawan='$id'");
        return $query;
    }
    function get_psikomotorByIdK($id){
        $query = $this->db->query("select * from nilai_psikomotor where idKaryawan='$id'");
        return $query;
    }
    function get_afeksiByIdK($id){
        $query = $this->db->query("select * from nilai_afeksi where idKaryawan='$id'");
        return $query;
    }
    function get_akademikByIdK($id){
        $query = $this->db->query("select * from nilai_akademik where idKaryawan='$id'");
        return $query;
    }
    function get_sosialByIdK($id){
        $query = $this->db->query("select * from nilai_sosial where idKaryawan='$id'");
        return $query;
    }
    function get_psikomotorById($id){
        $query = $this->db->query("select * from nilai_psikomotor where idPelanggan='$id' and tahap='1'");
        return $query;
    }
    function get_psikomotorById2($id){
        $query = $this->db->query("select * from nilai_psikomotor where idPelanggan='$id' and tahap='2'");
        return $query;
    }
    function get_kognisiById($id){
        $query = $this->db->query("select * from nilai_kognisi where idPelanggan='$id' and tahap='1'");
        return $query;
    }
    function get_kognisiById2($id){
        $query = $this->db->query("select * from nilai_kognisi where idPelanggan='$id' and tahap='2'");
        return $query;
    }
    function get_afeksiById($id){
        $query = $this->db->query("select * from nilai_afeksi where idPelanggan='$id' and tahap='1'");
        return $query;
    }
    function get_afeksiById2($id){
        $query = $this->db->query("select * from nilai_afeksi where idPelanggan='$id' and tahap='2'");
        return $query;
    }
    function get_akademikById($id){
        $query = $this->db->query("select * from nilai_akademik where idPelanggan='$id' and tahap='1'");
        return $query;
    }
    function get_akademikById2($id){
        $query = $this->db->query("select * from nilai_akademik where idPelanggan='$id' and tahap='2'");
        return $query;
    }
    function get_sosialById($id){
        $query = $this->db->query("select * from nilai_sosial where idPelanggan='$id' and tahap='1'");
        return $query;
    }
    function get_sosialById2($id){
        $query = $this->db->query("select * from nilai_sosial where idPelanggan='$id' and tahap='2'");
        return $query;
    }
    function get_nilai_psikomotor(){
        $query = $this->db->query("select * from nilai_psikomotor");
        return $query;
    }
    function get_nilai_kognisi(){
        $query = $this->db->query("select * from nilai_kognisi");
        return $query;
    }
    function get_nilai_afeksi(){
        $query = $this->db->query("select * from nilai_afeksi");
        return $query;
    }
    function get_nilai_akademik(){
        $query = $this->db->query("select * from nilai_akademik");
        return $query;
    }
    function get_nilai_sosial(){
        $query = $this->db->query("select * from nilai_sosial");
        return $query;
    }
    function set_sudahPeriksa($id,$kolom,$table){
		$this->db->set($kolom, 'sudah diperiksa');
		$this->db->where('idPelanggan', $id);
		$this->db->update($table);
	}
	function set_lanjutHasilPeriksa($id,$kolom,$table){
		$this->db->set($kolom, 'hasil');
		$this->db->where('idPelanggan', $id);
		$this->db->update($table);
	}
	function set_lanjutHasilPerkembangan($id,$kolom,$table){
		$this->db->set($kolom, 'hasil perkembangan');
		$this->db->where('idPelanggan', $id);
		$this->db->update($table);
	}
    public function set_psikomotor($idPelanggan,$idKaryawan,$value,$tahap,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idKaryawan', $idKaryawan);
		  $this->db->where('tahap', $tahap);
		  $this->db->where('idData', $value);
		  $this->db->update('nilai_psikomotor');
 	}
 	public function set_data_psikomotor($idPelanggan,$idKaryawan,$value,$tahap,$idData,$strState){
		  $this->db->set($value, $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idKaryawan', $idKaryawan);
		  $this->db->where('idData', $idData);
		  $this->db->where('tahap', $tahap);
		  $this->db->update('nilai_psikomotor');
 	}
 	public function set_hasil_psikomotor($idPelanggan,$idKaryawan,$value,$tahap,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idKaryawan', $idKaryawan);
		  $this->db->where('tahap', $tahap);
		  $this->db->where('idData', $value);
		  $this->db->update('nilai_psikomotor');
 	}
 	public function set_afeksi($idPelanggan,$idKaryawan,$value,$tahap,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idKaryawan', $idKaryawan);
		  $this->db->where('tahap', $tahap);
		  $this->db->where('idData', $value);
		  $this->db->update('nilai_afeksi');
 	}
 	public function set_data_afeksi($idPelanggan,$idKaryawan,$value,$tahap,$idData,$strState){
		  $this->db->set($value, $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idKaryawan', $idKaryawan);
		  $this->db->where('idData', $idData);
		  $this->db->where('tahap', $tahap);
		  $this->db->update('nilai_afeksi');
 	}
 	public function set_hasil_afeksi($idPelanggan,$idKaryawan,$value,$tahap,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idKaryawan', $idKaryawan);
		  $this->db->where('tahap', $tahap);
		  $this->db->where('idData', $value);
		  $this->db->update('nilai_afeksi');
 	}
 	public function set_akademik($idPelanggan,$idKaryawan,$value,$tahap,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idKaryawan', $idKaryawan);
		  $this->db->where('idData', $value);
		  $this->db->where('tahap', $tahap);
		  $this->db->update('nilai_akademik');
 	}
 	public function set_data_akademik($idPelanggan,$idKaryawan,$value,$tahap,$idData,$strState){
		  $this->db->set($value, $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idKaryawan', $idKaryawan);
		  $this->db->where('idData', $idData);
		  $this->db->where('tahap', $tahap);
		  $this->db->update('nilai_akademik');
 	}
 	public function set_hasil_akademik($idPelanggan,$idKaryawan,$value,$tahap,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idKaryawan', $idKaryawan);
		  $this->db->where('idData', $value);
		  $this->db->where('tahap', $tahap);
		  $this->db->update('nilai_akademik');
 	}
 	public function set_kognisi($idPelanggan,$idKaryawan,$value,$tahap,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idKaryawan', $idKaryawan);
		  $this->db->where('idData', $value);
		  $this->db->where('tahap', $tahap);
		  $this->db->update('nilai_kognisi');
 	}
 	public function set_data_kognisi($idPelanggan,$idKaryawan,$value,$tahap,$idData,$strState){
		  $this->db->set($value, $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idKaryawan', $idKaryawan);
		  $this->db->where('idData', $idData);
		  $this->db->where('tahap', $tahap);
		  $this->db->update('nilai_kognisi');
 	}
 	public function set_hasil_kognisi($idPelanggan,$idKaryawan,$value,$tahap,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idKaryawan', $idKaryawan);
		  $this->db->where('idData', $value);
		  $this->db->where('tahap', $tahap);
		  $this->db->update('nilai_kognisi');
 	}
 	public function set_sosial($idPelanggan,$idKaryawan,$value,$tahap,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idKaryawan', $idKaryawan);
		  $this->db->where('idData', $value);
		  $this->db->where('tahap', $tahap);
		  $this->db->update('nilai_sosial');
 	}
 	public function set_data_sosial($idPelanggan,$idKaryawan,$value,$tahap,$idData,$strState){
		  $this->db->set($value, $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idKaryawan', $idKaryawan);
		  $this->db->where('idData', $idData);
		  $this->db->where('tahap', $tahap);
		  $this->db->update('nilai_sosial');
 	}
 	public function set_hasil_sosial($idPelanggan,$idKaryawan,$value,$tahap,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idKaryawan', $idKaryawan);
		  $this->db->where('idData', $value);
		  $this->db->where('tahap', $tahap);
		  $this->db->update('nilai_sosial');
 	}
 	public function set_tunalaras($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_tunalaras');
 	}
 	public function set_ds($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_ds');
 	}
 	public function set_sl($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_sl');
 	}
 	public function set_rm($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_rm');
 	}
 	public function set_autis($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_autis');
 	}
	
	
} 