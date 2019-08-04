<?php
class m_ahli extends CI_Model{
    
    //ambil data mahasiswa dari database

    function get_pelanggan_pendingPeriksa(){
        $query = $this->db->query("select * from pelanggan where status='lunas' or status='lunas1'");
        return $query;
    }
    function get_pelanggan_hasilPeriksa($id){
        $query = $this->db->query("select * from pelanggan where ahliHasil='$id' and status='hasil'");
        return $query;
    }
    function get_pelanggan_hasilPerkembangan($id){
        $query = $this->db->query("select * from pelanggan where ahliHasil='$id' and status='hasil perkembangan'");
        return $query;
    }
    function get_hasil($id,$idHasil){
        $query = $this->db->query("select * from hasil_pemeriksaan2 where idPelanggan='$id' and idHasil='$idHasil'");
        return $query;
    }
    function get_hasil2($id,$idHasil){
        $query = $this->db->query("select * from hasil_perkembangan2 where idPelanggan='$id' and idHasil='$idHasil'");
        return $query;
    }
    function get_pelanggan(){
        $query = $this->db->query("select * from pelanggan");
        return $query;
    }
    function get_pelangganId($id){
        $query = $this->db->query("select * from pelanggan where idPelanggan='$id'");
        return $query;
    }
    function get_karyawan1($id){
        $query = $this->db->query("SELECT * FROM nilai_psikomotor np JOIN karyawan k ON np.idKaryawan=k.idKaryawan where idPelanggan='$id'");
        return $query;
    }
    function get_karyawan2($id){
        $query = $this->db->query("SELECT * FROM nilai_kognisi np JOIN karyawan k ON np.idKaryawan=k.idKaryawan where idPelanggan='$id'");
        return $query;
    }
    function get_karyawan3($id){
        $query = $this->db->query("SELECT * FROM nilai_afeksi np JOIN karyawan k ON np.idKaryawan=k.idKaryawan where idPelanggan='$id'");
        return $query;
    }
    function get_karyawan4($id){
        $query = $this->db->query("SELECT * FROM nilai_akademik np JOIN karyawan k ON np.idKaryawan=k.idKaryawan where idPelanggan='$id'");
        return $query;
    }
    function get_karyawan5($id){
        $query = $this->db->query("SELECT * FROM nilai_sosial np JOIN karyawan k ON np.idKaryawan=k.idKaryawan where idPelanggan='$id'");
        return $query;
    }
    public function setKesimpulan($id){
		  $this->db->set('status', "kesimpulan");
		  $this->db->where('idPelanggan', $id);
		  $this->db->update('pelanggan');
 	}
 	public function setKesimpulan2($id){
		  $this->db->set('status', "kesimpulan2");
		  $this->db->where('idPelanggan', $id);
		  $this->db->update('pelanggan');
 	}
    public function setPsikomotor($id,$idKaryawan){
		  $this->db->set('idKaryawan', $idKaryawan);
		  $this->db->where('idPelanggan', $id);
		  $this->db->update('nilai_psikomotor');
 	}
 	public function setKognisi($id,$idKaryawan){
		  $this->db->set('idKaryawan', $idKaryawan);
		  $this->db->where('idPelanggan', $id);
		  $this->db->update('nilai_kognisi');
 	}
 	public function setAfeksi($id,$idKaryawan){
		  $this->db->set('idKaryawan', $idKaryawan);
		  $this->db->where('idPelanggan', $id);
		  $this->db->update('nilai_afeksi');
 	}
 	public function setAkademik($id,$idKaryawan){
		  $this->db->set('idKaryawan', $idKaryawan);
		  $this->db->where('idPelanggan', $id);
		  $this->db->update('nilai_akademik');
 	}
 	public function setSosial($id,$idKaryawan){
		  $this->db->set('idKaryawan', $idKaryawan);
		  $this->db->where('idPelanggan', $id);
		  $this->db->update('nilai_sosial');
 	}
 	function set_lanjutPeriksa($id,$idK1,$idK2,$idK3,$idK4,$idK5,$idAhli){
		$this->db->set('status', 'periksa');
		$this->db->set('statusPsikomotor', 'periksa');
		$this->db->set('statusKognisi', 'periksa');
		$this->db->set('statusAfeksi', 'periksa');
		$this->db->set('statusAkademik', 'periksa');
		$this->db->set('statusSosial', 'periksa');
		$this->db->set('perkPsikomotor', 'periksa');
		$this->db->set('perkKognisi', 'periksa');
		$this->db->set('perkAfeksi', 'periksa');
		$this->db->set('perkAkademik', 'periksa');
		$this->db->set('perkSosial', 'periksa');
		$this->db->set('kPsikomotor', $idK1);
		$this->db->set('kKognisi', $idK2);
		$this->db->set('kAfeksi', $idK3);
		$this->db->set('kAkademik', $idK4);
		$this->db->set('kSosial', $idK5);
		$this->db->set('ahliHasil', $idAhli);
		$this->db->where('idPelanggan', $id);
		$this->db->update('pelanggan');
	}
	function set_hasilPeriksa($id,$kolom,$table){
		$this->db->set($kolom, 'sudah diperiksa');
		$this->db->where('idPelanggan', $id);
		$this->db->update($table);
	}
	function set_hasilPerkembangan($id,$kolom,$table){
		$this->db->set($kolom, 'sudah perkembangan');
		$this->db->where('idPelanggan', $id);
		$this->db->update($table);
	}
	function get_idHasilMax($id){
		return $this->db->query("select max(idHasil) as idHasil from hasil_pemeriksaan2 where idPelanggan='$id'");
	}
	function get_idHasilMax2($id){
		return $this->db->query("select max(idHasil) as idHasil from hasil_perkembangan2 where idPelanggan='$id'");
	}
	function tambahDataHasil($data,$table){
		$query = $this->db->insert($table,$data);
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
    function get_nilaiAdhd($id){
        $query = $this->db->query("SELECT nilai FROM pelanggan_adhd where idGejala=19 and idPelanggan='$id' ");
        return $query;
    }
    function get_pemeriksaan1($id){
        $query = $this->db->query("select * from hasil_pemeriksaan where idPelanggan='$id'");
        return $query;
    }
    function get_pemeriksaan2($id){
        $query = $this->db->query("select * from hasil_pemeriksaan2 where idPelanggan='$id'");
        return $query;
    }
    function get_perkembangan1($id){
        $query = $this->db->query("select * from hasil_perkembangan where idPelanggan='$id'");
        return $query;
    }
    function get_perkembangan2($id){
        $query = $this->db->query("select * from hasil_perkembangan2 where idPelanggan='$id'");
        return $query;
    }
    function get_dataHasilPemeriksaan($id){
        $query = $this->db->query("SELECT * FROM hasil_pemeriksaan hp JOIN hasil_pemeriksaan2 hp2 ON hp.idPelanggan=hp2.idPelanggan where hp.idPelanggan='$id'");
        return $query;
    }
    public function set_data_pemeriksaan($idPelanggan,$idAhli,$value,$idData,$strState){
		  $this->db->set($value, $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idAhli', $idAhli);
		  $this->db->where('idHasil', $idData);
		  $this->db->update('hasil_pemeriksaan');
 	}
 	public function set_data_pemeriksaan2($idPelanggan,$idAhli,$value,$idData,$strState){
		  $this->db->set($value, $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idAhli', $idAhli);
		  $this->db->where('idHasil', $idData);
		  $this->db->update('hasil_pemeriksaan2');
 	}
 	public function set_data_perkembangan($idPelanggan,$idAhli,$value,$idData,$strState){
		  $this->db->set($value, $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idAhli', $idAhli);
		  $this->db->where('idHasil', $idData);
		  $this->db->update('hasil_perkembangan');
 	}
 	public function set_data_perkembangan2($idPelanggan,$idAhli,$value,$idData,$strState){
		  $this->db->set($value, $strState);
		  $this->db->where('idPelanggan', $idPelanggan);
		  $this->db->where('idAhli', $idAhli);
		  $this->db->where('idHasil', $idData);
		  $this->db->update('hasil_perkembangan2');
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
 	public function set_hasil_adhd($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_adhd');
 	}
 	public function set_tunalaras($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_tunalaras');
 	}
 	public function set_hasil_tunalaras($id,$value,$strState){
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
 	public function set_hasil_ds($id,$value,$strState){
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
 	public function set_hasil_sl($id,$value,$strState){
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
 	public function set_hasil_rm($id,$value,$strState){
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
 	public function set_hasil_autis($id,$value,$strState){
		  $this->db->set('nilai', $strState);
		  $this->db->where('idPelanggan', $id);
		  $this->db->where('idGejala', $value);
		  $this->db->update('pelanggan_autis');
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
	
	/*function get_jurusan($fakultas_id){
        $query = $this->db->query("select * from jurusan where fakultas_id='$fakultas_id'");
        return $query;
    }*/
	
	function delete($idPelanggan,$idAhli,$dataId){
		$this->db->where("idPelanggan",$idPelanggan);
		$this->db->where("idAhli",$idAhli);
		$this->db->where("idHasil",$dataId);
		$this->db->delete("hasil_pemeriksaan2");
	}
	function delete2($idPelanggan,$idAhli,$dataId){
		$this->db->where("idPelanggan",$idPelanggan);
		$this->db->where("idAhli",$idAhli);
		$this->db->where("idHasil",$dataId);
		$this->db->delete("hasil_perkembangan2");
	}
	
} 