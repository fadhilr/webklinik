<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_ahli extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_pelanggan');
		$this->load->model('m_ahli');
		$this->load->model('m_karyawan');
		$this->load->model('m_admin');
		$this->load->model('M_registrasi');
		$this->load->helper('url');
		$this->load->database();
	}
	
	public function index()
	{
		$this->load->model('M_login');
		$idAhli=$this->session->userdata('idAhli');
		$cek = $this->M_login->get_ahliById($idAhli)->result();	
		if (count($cek)==0){
			$gagal['gagal'] = "gagal";
			$this->load->view('Login', $gagal);
		}else{
			foreach ($cek as $c){
				
			};
			$data_session = array(
			'username' => $c->username,
			'idAhli' => $c->idAhli,
			);
		$this->session->set_userdata($data_session);
		$data["pelangganPendingPeriksa"]=$this->m_ahli->get_pelanggan_pendingPeriksa()->result_array();
		$data["pelangganHasilPeriksa"]=$this->m_ahli->get_pelanggan_hasilPeriksa($idAhli)->result_array();
		$data["pelangganHasilPerkembangan"]=$this->m_ahli->get_pelanggan_hasilPerkembangan($idAhli)->result_array();
		for ($i=0; $i <count($data["pelangganHasilPeriksa"]) ; $i++) { 
			$statusHasil=$data["pelangganHasilPeriksa"][$i]['statusHasil'];
			if ($statusHasil=="sudah diperiksa") {
						$data["pelangganHasilPeriksa"][$i]['tampilan']=
							"sudah diperiksa";
						// $this->m_karyawan->set_lanjutHasilPeriksa($idPelanggan,'statusPsikomotor','pelanggan');

					}else{
						$data["pelangganHasilPeriksa"][$i]['tampilan']=
							"belum diperiksa";
					}

		}
		for ($i=0; $i <count($data["pelangganHasilPerkembangan"]) ; $i++) { 
			$statusHasil=$data["pelangganHasilPerkembangan"][$i]['statusHasil'];
			if ($statusHasil=="sudah perkembangan") {
						$data["pelangganHasilPerkembangan"][$i]['tampilan']=
							"sudah diperiksa";
						// $this->m_karyawan->set_lanjutHasilPeriksa($idPelanggan,'statusPsikomotor','pelanggan');

					}else{
						$data["pelangganHasilPerkembangan"][$i]['tampilan']=
							"belum diperiksa";
					}

		}
		$this->load->view('v_ahliDashboard',$data);
		}
		
	}
	public function tampilanAhliNotifikasi($id='')
	{
		$this->load->model('M_notifikasi');
		$cek = $this->M_notifikasi->getPelanggan()->result();
		$data = array(
			'listPelanggan' => $cek,
			'idPelanggan' => $id,
			);
		$this->load->view('v_ahliNotifikasi',$data);
	}
	public function tampilanAhliNotifikasiAdmin()
	{
		$this->load->view('v_ahliNotifikasiAdmin');
	}
	public function tampilanAhliPeriksa()
	{
		$idAhli=$this->session->userdata('idAhli');
		$data["pelanggan"]=$this->m_ahli->get_pelanggan_hasilPeriksa($idAhli)->result_array();
		$this->load->view('v_ahliPeriksa',$data);
	}
	public function tampilanAhliPelangganDetail($id)
	{
		$data["pelanggan"]=$this->m_admin->get_pelangganById($id)->result_array();
		$data["adhd"]=$this->m_ahli->get_adhd()->result_array();
		$data["tunalaras"]=$this->m_ahli->get_tunalaras()->result_array();
		$data["ds"]=$this->m_ahli->get_ds()->result_array();
		$data["sl"]=$this->m_ahli->get_sl()->result_array();
		$data["rm"]=$this->m_ahli->get_rm()->result_array();
		$data["autis"]=$this->m_ahli->get_autis()->result_array();
		$data["nilai_adhd"]=$this->m_ahli->get_nilai_adhd($id)->result_array();
		$data["nilai_tunalaras"]=$this->m_ahli->get_nilai_tunalaras($id)->result_array();
		$data["nilai_ds"]=$this->m_ahli->get_nilai_ds($id)->result_array();
		$data["nilai_sl"]=$this->m_ahli->get_nilai_sl($id)->result_array();
		$data["nilai_rm"]=$this->m_ahli->get_nilai_rm($id)->result_array();
		$data["nilai_autis"]=$this->m_ahli->get_nilai_autis($id)->result_array();
		$data["psikomotor"]=$this->m_karyawan->get_psikomotor()->result_array();
		$data["nilai_psikomotor"]=$this->m_karyawan->get_psikomotorById($id)->result_array();
		$data["kognisi"]=$this->m_karyawan->get_kognisi()->result_array();
		$data["nilai_kognisi"]=$this->m_karyawan->get_kognisiById($id)->result_array();
		$data["afeksi"]=$this->m_karyawan->get_afeksi()->result_array();
		$data["nilai_afeksi"]=$this->m_karyawan->get_afeksiById($id)->result_array();
		$data["akademik"]=$this->m_karyawan->get_akademik()->result_array();
		$data["nilai_akademik"]=$this->m_karyawan->get_akademikById($id)->result_array();
		$data["sosial"]=$this->m_karyawan->get_sosial()->result_array();
		$data["nilai_sosial"]=$this->m_karyawan->get_sosialById($id)->result_array();
		$this->load->view('v_ahliPelangganDetail',$data);
	}
	public function tampilanAhliTerapi()
	{
		$idAhli=$this->session->userdata('idAhli');
		$data["pelanggan"]=$this->m_ahli->get_pelanggan_hasilPerkembangan($idAhli)->result_array();
		$this->load->view('v_ahliTerapi',$data);
	}
	public function tampilanAhliPilih($id='')
	{
		$this->load->model('M_notifikasi');
		$listKaryawan = $this->M_notifikasi->getKaryawan()->result();
		$data["karyawan1"]=$this->m_ahli->get_karyawan1($id)->result_array();
		$data["karyawan2"]=$this->m_ahli->get_karyawan2($id)->result_array();
		$data["karyawan3"]=$this->m_ahli->get_karyawan3($id)->result_array();
		$data["karyawan4"]=$this->m_ahli->get_karyawan4($id)->result_array();
		$data["karyawan5"]=$this->m_ahli->get_karyawan5($id)->result_array();
		$cek = $this->M_notifikasi->getPelanggan()->result();
		
		$karyawan1=$data["karyawan1"][0]["username"];
		$karyawan2=$data["karyawan2"][0]["username"];
		$karyawan3=$data["karyawan3"][0]["username"];
		$karyawan4=$data["karyawan4"][0]["username"];
		$karyawan5=$data["karyawan5"][0]["username"];
		
		foreach ($cek as $f ) {
			# code...
		}
		$data = array(
			'listKaryawan' => $listKaryawan,
			'listPelanggan' => $cek,
			'namaPelanggan' => $f->namaPelanggan,
			'namaKaryawan1' => $karyawan1,
			'namaKaryawan2' => $karyawan2,
			'namaKaryawan3' => $karyawan3,
			'namaKaryawan4' => $karyawan4,
			'namaKaryawan5' => $karyawan5,
			'idPelanggan' => $id,
			);
		$this->load->view('v_ahliPilih',$data);
	}
	public function tambahData(){
		$this->load->model('M_notifikasi');
		$this->load->model('M_registrasi');
		
		$idPelanggan= $this->input->post("idPelanggan");
		$idAhli= $this->input->post("idAhli");
 		$namaKolom= $this->input->post("namaKolom");
 		$nilai=$this->input->post("value");
		$data["pemeriksaan2"]=$this->m_ahli->get_pemeriksaan2($idPelanggan)->result_array();
		$idHasilMax=$this->m_ahli->get_idHasilMax($idPelanggan)->result_array();
		$idHasil=intval($idHasilMax[0]['idHasil'])+1;
		// print_r($idHasil);
			// if ($tambahan!="") {
				# code...
			
			$data7 = array(
			'idPelanggan' => $idPelanggan,
			'idAhli' => $idAhli,
			'idHasil' => $idHasil,
			'terapi' => $nilai,
			);
		$this->m_ahli->tambahDataHasil($data7,'hasil_pemeriksaan2');
		// }
		$this->tampilanAhliPeriksaDetail($id);
	}
	public function tambahData2(){
		$this->load->model('M_notifikasi');
		$this->load->model('M_registrasi');
		
		$idPelanggan= $this->input->post("idPelanggan");
		$idAhli= $this->input->post("idAhli");
 		$namaKolom= $this->input->post("namaKolom");
 		$nilai=$this->input->post("value");
		$data["perkembangan2"]=$this->m_ahli->get_perkembangan2($idPelanggan)->result_array();
		$idHasilMax=$this->m_ahli->get_idHasilMax2($idPelanggan)->result_array();
		$idHasil=intval($idHasilMax[0]['idHasil'])+1;
		// print_r($idHasil);
			// if ($tambahan!="") {
				# code...
			
			$data7 = array(
			'idPelanggan' => $idPelanggan,
			'idAhli' => $idAhli,
			'idHasil' => $idHasil,
			'terapi' => $nilai,
			);
		$this->m_ahli->tambahDataHasil($data7,'hasil_perkembangan2');
		// }
		$this->tampilanAhliPeriksaPerkembangan($id);
	}
	public function set_pilihKaryawan(){
		$this->load->model('M_notifikasi');
		$this->load->model('M_registrasi');
		$idAhli=$this->session->userdata('idAhli');	
		$idKaryawan1=$this->input->post("karyawan1");
		$idKaryawan2=$this->input->post("karyawan2");
		$idKaryawan3=$this->input->post("karyawan3");
		$idKaryawan4=$this->input->post("karyawan4");
		$idKaryawan5=$this->input->post("karyawan5");
		$idPelanggan=$this->input->post("idPelanggan");

		$this->m_ahli->setPsikomotor($idPelanggan,$idKaryawan1);
		$this->m_ahli->setKognisi($idPelanggan,$idKaryawan2);
		$this->m_ahli->setAfeksi($idPelanggan,$idKaryawan3);
		$this->m_ahli->setAkademik($idPelanggan,$idKaryawan4);
		$this->m_ahli->setSosial($idPelanggan,$idKaryawan5);

		$this->m_ahli->set_lanjutPeriksa($idPelanggan,$idKaryawan1,$idKaryawan2,$idKaryawan3,$idKaryawan4,$idKaryawan5,$idAhli);
		for ($i=1; $i <6 ; $i++) {
		if ($i==1) {
			$data6 = array(
			'idPelanggan' => $idPelanggan,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'aspek' => "Akademik",
			);
			$data7 = array(
			'idPelanggan' => $idPelanggan,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'terapi' => "Brain Gym",
			);
		}
		if ($i==2) {
			$data6 = array(
			'idPelanggan' => $idPelanggan,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'aspek' => "Kognitif",
			);
			$data7 = array(
			'idPelanggan' => $idPelanggan,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'terapi' => "EFT/SFT",
			);
		}
		if ($i==3) {
			$data6 = array(
			'idPelanggan' => $idPelanggan,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'aspek' => "Afektif",
			);
			$data7 = array(
			'idPelanggan' => $idPelanggan,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'terapi' => "ABA",
			);
		}
		if ($i==4) {
			$data6 = array(
			'idPelanggan' => $idPelanggan,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'aspek' => "Psikomotorik",
			);
			$data7 = array(
			'idPelanggan' => $idPelanggan,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'terapi' => "Hypnotherapy",
			);
		}
		if ($i==5) {
			$data6 = array(
			'idPelanggan' => $idPelanggan,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'aspek' => "Sosial",
			);
			$data7 = array(
			'idPelanggan' => $idPelanggan,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'terapi' => "Kinestetik dan Hydroterapy",
			);
		}
		
		$this->M_registrasi->set_dataPelanggan($data6,'hasil_pemeriksaan');
		$this->M_registrasi->set_dataPelanggan($data7,'hasil_pemeriksaan2');
		}
		$this->index();
	}
	public function set_notifikasi(){
		$this->load->model('M_notifikasi');
		$id=$this->input->post("pelanggan");
		$pesan=$this->input->post("pesan");
		$data = array(
			'idPelangganPenerima' => $id,
			'pesan' => $pesan,
			'idAhliPengirim' => 1,
			'statusNotifikasi' => 0,
			'namaPengirim' => 'ahli',
			);	
			$this->M_notifikasi->setNotifikasi($data);
		$this->notifikasi();
	}
	public function notifikasi($id=''){
		$this->load->model('M_notifikasi');
		$cek = $this->M_notifikasi->getPelanggan()->result();
		$data = array(
			'listPelanggan' => $cek,
			'idPelanggan' => $id,
			);
		$this->load->view('v_ahliNotifikasi',$data);
	}
	public function tampilanAhliPeriksaDetail($id='')
	{
		$data["adhd"]=$this->m_ahli->get_adhd()->result_array();
		$data["tunalaras"]=$this->m_ahli->get_tunalaras()->result_array();
		$data["ds"]=$this->m_ahli->get_ds()->result_array();
		$data["sl"]=$this->m_ahli->get_sl()->result_array();
		$data["rm"]=$this->m_ahli->get_rm()->result_array();
		$data["autis"]=$this->m_ahli->get_autis()->result_array();
		$data["nilai_adhd"]=$this->m_ahli->get_nilai_adhd($id)->result_array();
		$data["nilai_tunalaras"]=$this->m_ahli->get_nilai_tunalaras($id)->result_array();
		$data["nilai_ds"]=$this->m_ahli->get_nilai_ds($id)->result_array();
		$data["nilai_sl"]=$this->m_ahli->get_nilai_sl($id)->result_array();
		$data["nilai_rm"]=$this->m_ahli->get_nilai_rm($id)->result_array();
		$data["nilai_autis"]=$this->m_ahli->get_nilai_autis($id)->result_array();
		$data["psikomotor"]=$this->m_karyawan->get_psikomotor()->result_array();
		$data["nilai_psikomotor"]=$this->m_karyawan->get_psikomotorById($id)->result_array();
		$data["kognisi"]=$this->m_karyawan->get_kognisi()->result_array();
		$data["nilai_kognisi"]=$this->m_karyawan->get_kognisiById($id)->result_array();
		$data["afeksi"]=$this->m_karyawan->get_afeksi()->result_array();
		$data["nilai_afeksi"]=$this->m_karyawan->get_afeksiById($id)->result_array();
		$data["akademik"]=$this->m_karyawan->get_akademik()->result_array();
		$data["nilai_akademik"]=$this->m_karyawan->get_akademikById($id)->result_array();
		$data["sosial"]=$this->m_karyawan->get_sosial()->result_array();
		$data["nilai_sosial"]=$this->m_karyawan->get_sosialById($id)->result_array();
		$data["pemeriksaan1"]=$this->m_ahli->get_pemeriksaan1($id)->result_array();
		$data["pemeriksaan2"]=$this->m_ahli->get_pemeriksaan2($id)->result_array();
		$idAhli= $this->session->userdata('idAhli');
		$nilai_adhd = $this->m_pelanggan->get_nilaiAdhd($id)->result_array();
		$nilai_autis = $this->m_pelanggan->get_nilaiAutis($id)->result_array();
		$nilai_ds = $this->m_pelanggan->get_nilaiDs($id)->result_array();
		$nilai_sl = $this->m_pelanggan->get_nilaiSl($id)->result_array();
		$nilai_rm = $this->m_pelanggan->get_nilaiRm($id)->result_array();
		$nilai_tunalaras = $this->m_pelanggan->get_nilaiTunalaras($id)->result_array();
		$idHasilMax=$this->m_ahli->get_idHasilMax($id)->result_array();
		$idHasil=intval($idHasilMax[0]['idHasil'])+1;
		// print_r($nilai_adhd[0]['nilai']);
		$hasil_adhd="";
		$hasil_autis="";
		$hasil_ds="";
		$hasil_sl="";
		$hasil_rm="";
		$hasil_tunalaras="";
		if (intval($nilai_adhd[0]['nilai']) >10) {
			$hasil_adhd="ADHD ";
		}
		if (intval($nilai_autis[0]['nilai']) >6) {
			$hasil_autis="Autis ";
		}
		if (intval($nilai_ds[0]['nilai']) >19) {
			$hasil_ds="Down Sindrom ";
		}
		if (intval($nilai_sl[0]['nilai']) >13) {
			$hasil_sl="Slow Learner ";
		}
		if (intval($nilai_rm[0]['nilai']) >14) {
			$hasil_rm="Retardasi mental ";
		}
		if (intval($nilai_tunalaras[0]['nilai']) >23) {
			$hasil_tunalaras="tunalaras ";
		}
		$hasil=$hasil_adhd.$hasil_autis.$hasil_ds.$hasil_sl.$hasil_rm.$hasil_tunalaras;
			
		$cek = $this->m_pelanggan->get_pelangganId($id)->result();
		
			foreach ($cek as $c){
				
			};
			$data["isi"] = array(
			'idPelanggan' => $c->idPelanggan,
			'namaPelanggan' => $c->namaPelanggan,
			'namaPelangganPgl' => $c->namaPelangganPgl,
			'usia' => $c->usia,
			'jenisKelamin' => $c->jenisKelamin,
			'tempatLahir' => $c->tempatLahir,
			'tanggalLahir' => $c->tanggalLahir,
			'agama' => $c->agama,
			'kwn' => $c->kwn,
			'pendidikan' => $c->pendidikan,
			'anakKe' => $c->anakKe,
			'namaSekolah' => $c->namaSekolah,
			'kelas' => $c->kelas,
			'alamat' => $c->alamat,
			'perkHamil' => $c->perkHamil,
			'penyakitHamil' => $c->penyakitHamil,
			'usiaKandung' => $c->usiaKandung,
			'riwayatLhr' => $c->riwayatLhr,
			'tempatLhr' => $c->tempatLhr,
			'penolongLhr' => $c->penolongLhr,
			'gangguanLhr' => $c->gangguanLhr,
			'beratBy' => $c->beratBy,
			'panjangBy' => $c->panjangBy,
			'kelainanBy' => $c->kelainanBy,
			'netekUmr' => $c->netekUmr,
			'mnmKlgUmr' => $c->mnmKlgUmr,
			'imunisasi' => $c->imunisasi,
			'pemeriksaan' => $c->pemeriksaan,
			'kltsMkn' => $c->kltsMkn,
			'knttsMkn' => $c->knttsMkn,
			'ksltnMkn' => $c->ksltnMkn,
			'berdiriUsia' => $c->berdiriUsia,
			'jalanUsia' => $c->jalanUsia,
			'spdrdUsia' => $c->spdrdUsia,
			'spdrdduaUsia' => $c->spdrdduaUsia,
			'klmtLngkpUsia' => $c->klmtLngkp,
			'sulitGerak' => $c->sulitGerak,
			'giziBalita' => $c->giziBalita,
			'rwytKshtn' => $c->rwytKshtn,
			'tanganDominan' => $c->tanganDominan,
			'rabaUsia' => $c->rabaUsia,
			'kataBrmkn' => $c->kataBrmkn,
			'kataBrmknUsia' => $c->kataBrmknUsia,
			'klmtLngkp' => $c->klmtLngkp,
			'hubSaudara' => $c->hubSaudara,
			'hubTmn' => $c->hubTmn,
			'hubOrtu' => $c->hubOrtu,
			'hobi' => $c->hobi,
			'minat' => $c->minat,
			'tkUsia' => $c->tkUsia,
			'lamaTk' => $c->lamaTk,
			'sulitTk' => $c->sulitTk,
			'sdUsia' => $c->sdUsia,
			'sulitSd' => $c->sulitSd,
			'tdkNaikKls' => $c->tdkNaikKls,
			'layananSblm' => $c->layananSblm,
			'prestasi' => $c->prestasi,
			'matpelSulit' => $c->matpelSulit,
			'matpelSuka' => $c->matpelSuka,
			'ketLain' => $c->ketLain,
			'noTlp' => $c->noTlp,
			'noHp' => $c->noHp,
			'fotoPelanggan' => $c->fotoPelanggan,
			'ayah' => $c->ayah,
			'usiaAyh' => $c->usiaAyh,
			'agamaAyh' => $c->agamaAyh,
			'statusAyh' => $c->statusAyh,
			'pendidikanAyh' => $c->pendidikanAyh,
			'pekerjaanAyh' => $c->pekerjaanAyh,
			'almtAyh' => $c->almtAyh,
			'ibu' => $c->ibu,
			'usiaIbu' => $c->usiaIbu,
			'agamaIbu' => $c->agamaIbu,
			'statusIbu' => $c->statusIbu,
			'pendidikanIbu' => $c->pendidikanIbu,
			'pekerjaanIbu' => $c->pekerjaanIbu,
			'almtIbu' => $c->almtIbu,
			'wali' => $c->wali,
			'usiaWl' => $c->usiaWl,
			'agamaWl' => $c->agamaWl,
			'statusWl' => $c->statusWl,
			'pendidikanWl' => $c->pendidikanWl,
			'pekerjaanWl' => $c->pekerjaanWl,
			'almtWl' => $c->almtWl,
			'ortuSerumah' => $c->ortuSerumah,
			'anakOrtu' => $c->anakOrtu,
			'anakSatuOrtu' => $c->anakSatuOrtu,
			'anakWali' => $c->anakWali,
			'jabAyh' => $c->jabAyh,
			'jabIbu' => $c->jabIbu,
			'jabiAyh' => $c->jabiAyh,
			'jabiIbu' => $c->jabiIbu,
			'persepsiOrtu' => $c->persepsiOrtu,
			'kesulitanOrtu' => $c->kesulitanOrtu,
			'harapanOrtu' => $c->harapanOrtu,
			'bantuanOrtu' => $c->bantuanOrtu,
			'tambahan' => $c->tambahan,
			'hasil'=> $hasil,
			'idHasilMax'=> $idHasil,
			);	
		
		$this->load->view('v_ahliPeriksaDetail',$data);
	}
	public function tampilanAhliPeriksaPerkembangan($id='')
	{
		$data["adhd"]=$this->m_ahli->get_adhd()->result_array();
		$data["tunalaras"]=$this->m_ahli->get_tunalaras()->result_array();
		$data["ds"]=$this->m_ahli->get_ds()->result_array();
		$data["sl"]=$this->m_ahli->get_sl()->result_array();
		$data["rm"]=$this->m_ahli->get_rm()->result_array();
		$data["autis"]=$this->m_ahli->get_autis()->result_array();
		$data["nilai_adhd"]=$this->m_ahli->get_nilai_adhd($id)->result_array();
		$data["nilai_tunalaras"]=$this->m_ahli->get_nilai_tunalaras($id)->result_array();
		$data["nilai_ds"]=$this->m_ahli->get_nilai_ds($id)->result_array();
		$data["nilai_sl"]=$this->m_ahli->get_nilai_sl($id)->result_array();
		$data["nilai_rm"]=$this->m_ahli->get_nilai_rm($id)->result_array();
		$data["nilai_autis"]=$this->m_ahli->get_nilai_autis($id)->result_array();
		$data["nilai_adhdK"]=$this->m_pelanggan->get_nilai_adhdK($id)->result_array();
		$data["nilai_tunalarasK"]=$this->m_pelanggan->get_nilai_tunalarasK($id)->result_array();
		$data["nilai_dsK"]=$this->m_pelanggan->get_nilai_dsK($id)->result_array();
		$data["nilai_slK"]=$this->m_pelanggan->get_nilai_slK($id)->result_array();
		$data["nilai_rmK"]=$this->m_pelanggan->get_nilai_rmK($id)->result_array();
		$data["nilai_autisK"]=$this->m_pelanggan->get_nilai_autisK($id)->result_array();
		$data["psikomotor"]=$this->m_karyawan->get_psikomotor()->result_array();
		$data["nilai_psikomotor"]=$this->m_karyawan->get_psikomotorById($id)->result_array();
		$data["nilai_psikomotor2"]=$this->m_karyawan->get_psikomotorById2($id)->result_array();
		$data["kognisi"]=$this->m_karyawan->get_kognisi()->result_array();
		$data["nilai_kognisi"]=$this->m_karyawan->get_kognisiById($id)->result_array();
		$data["nilai_kognisi2"]=$this->m_karyawan->get_kognisiById2($id)->result_array();
		$data["afeksi"]=$this->m_karyawan->get_afeksi()->result_array();
		$data["nilai_afeksi"]=$this->m_karyawan->get_afeksiById($id)->result_array();
		$data["nilai_afeksi2"]=$this->m_karyawan->get_afeksiById2($id)->result_array();
		$data["akademik"]=$this->m_karyawan->get_akademik()->result_array();
		$data["nilai_akademik"]=$this->m_karyawan->get_akademikById($id)->result_array();
		$data["nilai_akademik2"]=$this->m_karyawan->get_akademikById2($id)->result_array();
		$data["sosial"]=$this->m_karyawan->get_sosial()->result_array();
		$data["nilai_sosial"]=$this->m_karyawan->get_sosialById($id)->result_array();
		$data["nilai_sosial2"]=$this->m_karyawan->get_sosialById2($id)->result_array();
		$data["pemeriksaan1"]=$this->m_ahli->get_pemeriksaan1($id)->result_array();
		$data["pemeriksaan2"]=$this->m_ahli->get_pemeriksaan2($id)->result_array();
		$data["perkembangan1"]=$this->m_ahli->get_perkembangan1($id)->result_array();
		$data["perkembangan2"]=$this->m_ahli->get_perkembangan2($id)->result_array();
		$idAhli= $this->session->userdata('idAhli');
		$nilai_adhd = $this->m_pelanggan->get_nilaiAdhd($id)->result_array();
		$nilai_autis = $this->m_pelanggan->get_nilaiAutis($id)->result_array();
		$nilai_ds = $this->m_pelanggan->get_nilaiDs($id)->result_array();
		$nilai_sl = $this->m_pelanggan->get_nilaiSl($id)->result_array();
		$nilai_rm = $this->m_pelanggan->get_nilaiRm($id)->result_array();
		$nilai_tunalaras = $this->m_pelanggan->get_nilaiTunalaras($id)->result_array();
		$idHasilMax=$this->m_ahli->get_idHasilMax($id)->result_array();
		$idHasil=intval($idHasilMax[0]['idHasil'])+1;
		$nilai_adhdK = $this->m_pelanggan->get_nilaiAdhdK($id)->result_array();
		$nilai_autisK = $this->m_pelanggan->get_nilaiAutisK($id)->result_array();
		$nilai_dsK = $this->m_pelanggan->get_nilaiDsK($id)->result_array();
		$nilai_slK = $this->m_pelanggan->get_nilaiSlK($id)->result_array();
		$nilai_rmK = $this->m_pelanggan->get_nilaiRmK($id)->result_array();
		$nilai_tunalarasK = $this->m_pelanggan->get_nilaiTunalarasK($id)->result_array();
		$idHasilMax2=$this->m_ahli->get_idHasilMax2($id)->result_array();
		$idHasil2=intval($idHasilMax2[0]['idHasil'])+1;

		$hasil_adhd="";
		$hasil_autis="";
		$hasil_ds="";
		$hasil_sl="";
		$hasil_rm="";
		$hasil_tunalaras="";
		$hasil_adhd2="";
		$hasil_autis2="";
		$hasil_ds2="";
		$hasil_sl2="";
		$hasil_rm2="";
		$hasil_tunalaras2="";
		if (intval($nilai_adhd[0]['nilai']) >10) {
			$hasil_adhd="ADHD ";
		}
		if (intval($nilai_autis[0]['nilai']) >6) {
			$hasil_autis="Autis ";
		}
		if (intval($nilai_ds[0]['nilai']) >19) {
			$hasil_ds="Down Sindrom ";
		}
		if (intval($nilai_sl[0]['nilai']) >13) {
			$hasil_sl="Slow Learner ";
		}
		if (intval($nilai_rm[0]['nilai']) >14) {
			$hasil_rm="Retardasi mental ";
		}
		if (intval($nilai_tunalaras[0]['nilai']) >23) {
			$hasil_tunalaras="tunalaras ";
		}
		$hasil=$hasil_adhd.$hasil_autis.$hasil_ds.$hasil_sl.$hasil_rm.$hasil_tunalaras;
		if (intval($nilai_adhdK[0]['nilai']) >10) {
			$hasil_adhd2="ADHD ";
		}
		if (intval($nilai_autisK[0]['nilai']) >6) {
			$hasil_autis2="Autis ";
		}
		if (intval($nilai_dsK[0]['nilai']) >19) {
			$hasil_ds2="Down Sindrom ";
		}
		if (intval($nilai_slK[0]['nilai']) >13) {
			$hasil_sl2="Slow Learner ";
		}
		if (intval($nilai_rmK[0]['nilai']) >14) {
			$hasil_rm2="Retardasi mental ";
		}
		if (intval($nilai_tunalarasK[0]['nilai']) >23) {
			$hasil_tunalaras2="tunalaras ";
		}
		$hasil2=$hasil_adhd2.$hasil_autis2.$hasil_ds2.$hasil_sl2.$hasil_rm2.$hasil_tunalaras2;
		// print_r(count($data["perkembangan1"]));
		if (count($data["perkembangan1"])==0) {
		
		for ($i=1; $i <6 ; $i++) {
		if ($i==1) {
			$data6 = array(
			'idPelanggan' => $id,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'aspek' => "Akademik",
			);
			$data7 = array(
			'idPelanggan' => $id,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'terapi' => "Brain Gym",
			);
		}
		if ($i==2) {
			$data6 = array(
			'idPelanggan' => $id,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'aspek' => "Kognitif",
			);
			$data7 = array(
			'idPelanggan' => $id,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'terapi' => "EFT/SFT",
			);
		}
		if ($i==3) {
			$data6 = array(
			'idPelanggan' => $id,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'aspek' => "Afektif",
			);
			$data7 = array(
			'idPelanggan' => $id,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'terapi' => "ABA",
			);
		}
		if ($i==4) {
			$data6 = array(
			'idPelanggan' => $id,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'aspek' => "Psikomotorik",
			);
			$data7 = array(
			'idPelanggan' => $id,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'terapi' => "Hypnotherapy",
			);
		}
		if ($i==5) {
			$data6 = array(
			'idPelanggan' => $id,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'aspek' => "Sosial",
			);
			$data7 = array(
			'idPelanggan' => $id,
			'idAhli' => $idAhli,
			'idHasil' => $i,
			'terapi' => "Kinestetik dan Hydroterapy",
			);
		}
		
		$this->M_registrasi->set_dataPelanggan($data6,'hasil_perkembangan');
		$this->M_registrasi->set_dataPelanggan($data7,'hasil_perkembangan2');
		}
		}
		$cek = $this->m_pelanggan->get_pelangganId($id)->result();
		
			foreach ($cek as $c){
				
			};
			$data["isi"] = array(
			'idPelanggan' => $c->idPelanggan,
			'namaPelanggan' => $c->namaPelanggan,
			'namaPelangganPgl' => $c->namaPelangganPgl,
			'usia' => $c->usia,
			'jenisKelamin' => $c->jenisKelamin,
			'tempatLahir' => $c->tempatLahir,
			'tanggalLahir' => $c->tanggalLahir,
			'agama' => $c->agama,
			'kwn' => $c->kwn,
			'pendidikan' => $c->pendidikan,
			'anakKe' => $c->anakKe,
			'namaSekolah' => $c->namaSekolah,
			'kelas' => $c->kelas,
			'alamat' => $c->alamat,
			'perkHamil' => $c->perkHamil,
			'penyakitHamil' => $c->penyakitHamil,
			'usiaKandung' => $c->usiaKandung,
			'riwayatLhr' => $c->riwayatLhr,
			'tempatLhr' => $c->tempatLhr,
			'penolongLhr' => $c->penolongLhr,
			'gangguanLhr' => $c->gangguanLhr,
			'beratBy' => $c->beratBy,
			'panjangBy' => $c->panjangBy,
			'kelainanBy' => $c->kelainanBy,
			'netekUmr' => $c->netekUmr,
			'mnmKlgUmr' => $c->mnmKlgUmr,
			'imunisasi' => $c->imunisasi,
			'pemeriksaan' => $c->pemeriksaan,
			'kltsMkn' => $c->kltsMkn,
			'knttsMkn' => $c->knttsMkn,
			'ksltnMkn' => $c->ksltnMkn,
			'berdiriUsia' => $c->berdiriUsia,
			'jalanUsia' => $c->jalanUsia,
			'spdrdUsia' => $c->spdrdUsia,
			'spdrdduaUsia' => $c->spdrdduaUsia,
			'klmtLngkpUsia' => $c->klmtLngkp,
			'sulitGerak' => $c->sulitGerak,
			'giziBalita' => $c->giziBalita,
			'rwytKshtn' => $c->rwytKshtn,
			'tanganDominan' => $c->tanganDominan,
			'rabaUsia' => $c->rabaUsia,
			'kataBrmkn' => $c->kataBrmkn,
			'kataBrmknUsia' => $c->kataBrmknUsia,
			'klmtLngkp' => $c->klmtLngkp,
			'hubSaudara' => $c->hubSaudara,
			'hubTmn' => $c->hubTmn,
			'hubOrtu' => $c->hubOrtu,
			'hobi' => $c->hobi,
			'minat' => $c->minat,
			'tkUsia' => $c->tkUsia,
			'lamaTk' => $c->lamaTk,
			'sulitTk' => $c->sulitTk,
			'sdUsia' => $c->sdUsia,
			'sulitSd' => $c->sulitSd,
			'tdkNaikKls' => $c->tdkNaikKls,
			'layananSblm' => $c->layananSblm,
			'prestasi' => $c->prestasi,
			'matpelSulit' => $c->matpelSulit,
			'matpelSuka' => $c->matpelSuka,
			'ketLain' => $c->ketLain,
			'noTlp' => $c->noTlp,
			'noHp' => $c->noHp,
			'fotoPelanggan' => $c->fotoPelanggan,
			'ayah' => $c->ayah,
			'usiaAyh' => $c->usiaAyh,
			'agamaAyh' => $c->agamaAyh,
			'statusAyh' => $c->statusAyh,
			'pendidikanAyh' => $c->pendidikanAyh,
			'pekerjaanAyh' => $c->pekerjaanAyh,
			'almtAyh' => $c->almtAyh,
			'ibu' => $c->ibu,
			'usiaIbu' => $c->usiaIbu,
			'agamaIbu' => $c->agamaIbu,
			'statusIbu' => $c->statusIbu,
			'pendidikanIbu' => $c->pendidikanIbu,
			'pekerjaanIbu' => $c->pekerjaanIbu,
			'almtIbu' => $c->almtIbu,
			'wali' => $c->wali,
			'usiaWl' => $c->usiaWl,
			'agamaWl' => $c->agamaWl,
			'statusWl' => $c->statusWl,
			'pendidikanWl' => $c->pendidikanWl,
			'pekerjaanWl' => $c->pekerjaanWl,
			'almtWl' => $c->almtWl,
			'ortuSerumah' => $c->ortuSerumah,
			'anakOrtu' => $c->anakOrtu,
			'anakSatuOrtu' => $c->anakSatuOrtu,
			'anakWali' => $c->anakWali,
			'jabAyh' => $c->jabAyh,
			'jabIbu' => $c->jabIbu,
			'jabiAyh' => $c->jabiAyh,
			'jabiIbu' => $c->jabiIbu,
			'persepsiOrtu' => $c->persepsiOrtu,
			'kesulitanOrtu' => $c->kesulitanOrtu,
			'harapanOrtu' => $c->harapanOrtu,
			'bantuanOrtu' => $c->bantuanOrtu,
			'tambahan' => $c->tambahan,
			'hasil'=> $hasil,
			'hasil2'=> $hasil2,
			'idHasilMax'=> $idHasil,
			'idHasilMax2'=> $idHasil2,
			);	
		
		$this->load->view('v_ahliPeriksaPerkembangan',$data);
	}
	public function setKesimpulan($id)
	{
		
 		$this->load->model('m_ahli');

 		$this->m_ahli->setKesimpulan($id);
 		$this->index();
		
	}
	public function setKesimpulan2($id)
	{
		
 		$this->load->model('m_ahli');

 		$this->m_ahli->setKesimpulan2($id);
 		$this->index();
		
	}
	public function set_data_pemeriksaan()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idAhli= $this->input->post("idAhli");
 		$idData= $this->input->post("idData");
 		$namaKolom= $this->input->post("namaKolom");
 		$nilai=$this->input->post("value");
 		$this->load->model('m_ahli');

 		$this->m_ahli->set_data_pemeriksaan($idPelanggan,$idAhli, $namaKolom,$idData,$nilai);
		
	}
	public function set_data_pemeriksaan2()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idAhli= $this->input->post("idAhli");
 		$idData= $this->input->post("idData");
 		$namaKolom= $this->input->post("namaKolom");
 		$nilai=$this->input->post("value");
 		$this->load->model('m_ahli');

 		$this->m_ahli->set_data_pemeriksaan2($idPelanggan,$idAhli, $namaKolom,$idData,$nilai);
 		$data=$this->m_ahli->get_hasil($idPelanggan,1)->result_array();
 		// print_r($data[0]['masalah']);
 		if ($data[0]['masalah']!="") {
 			$this->m_ahli->set_hasilPeriksa($idPelanggan,'statusHasil','pelanggan');
 		}
 		
		$this->tampilanAhliPeriksaDetail($idPelanggan);
	}
	public function set_data_perkembangan()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idAhli= $this->input->post("idAhli");
 		$idData= $this->input->post("idData");
 		$namaKolom= $this->input->post("namaKolom");
 		$nilai=$this->input->post("value");
 		$this->load->model('m_ahli');

 		$this->m_ahli->set_data_perkembangan($idPelanggan,$idAhli, $namaKolom,$idData,$nilai);
		
	}
	public function set_data_perkembangan2()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idAhli= $this->input->post("idAhli");
 		$idData= $this->input->post("idData");
 		$namaKolom= $this->input->post("namaKolom");
 		$nilai=$this->input->post("value");
 		$this->load->model('m_ahli');

 		$this->m_ahli->set_data_perkembangan2($idPelanggan,$idAhli, $namaKolom,$idData,$nilai);
 		$data=$this->m_ahli->get_hasil2($idPelanggan,1)->result_array();
 		// print_r($data[0]['masalah']);
 		if ($data[0]['masalah']!="") {
 			$this->m_ahli->set_hasilPerkembangan($idPelanggan,'statusHasil','pelanggan');
 		}
 		
		$this->tampilanAhliPeriksaPerkembangan($idPelanggan);
	}
	public function hapus(){
		$idPelanggan= $this->input->post("idPelanggan");
		$idAhli= $this->input->post("idAhli");
		$dataId= $this->input->post("dataId");
		$this->m_ahli->delete($idPelanggan,$idAhli,$dataId);
		echo "{}";
	}
	public function hapus2(){
		$idPelanggan= $this->input->post("idPelanggan");
		$idAhli= $this->input->post("idAhli");
		$dataId= $this->input->post("dataId");
		$this->m_ahli->delete2($idPelanggan,$idAhli,$dataId);
		echo "{}";
	}
	
	public function admin_dashboard(){
		$this->load->model('M_transaksi');
		$data["alumni"]=$this->M_transaksi->get_pending()->result_array();
		$data["pembayaran"]=$this->M_transaksi->get_pembayaran()->result_array();
		$data["jumlahMember"]=$this->M_biodata->jumlahMember();
		$data["jumlahMemberPending"]=$this->M_biodata->jumlahMemberPending();
		$data["jumlahMemberMembayar"]=$this->M_biodata->jumlahMemberMembayar();
		$data["jumlahMemberTerkirim"]=$this->M_biodata->jumlahMemberTerkirim();
		$this->load->view('admin_dashboard',$data);
	}
	
}
