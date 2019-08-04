<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_pelanggan');
		$this->load->model('m_ahli');
		$this->load->model('m_admin');
		$this->load->model('m_karyawan');
		$this->load->model('M_registrasi');
		$this->load->helper('url');
		$this->load->database();
	}
	
	public function index()
	{
		$this->load->model('M_login');
		$cek = $this->M_login->get_adminById($this->session->userdata('idAdmin'))->result();	
		if (count($cek)==0){
			$gagal['gagal'] = "gagal";
			$this->load->view('Login', $gagal);
		}else{
			foreach ($cek as $c){
				
			};
			$data_session = array(
			'username' => $c->username,
			'idAdmin' => $c->idAdmin,
			);
			
		
			$data["jumlahPelanggan"]=$this->m_admin->jumlahPelanggan();
		$data["jumlahPelangganPending"]=$this->m_admin->jumlahPelangganPending();
		$data["jumlahPelangganBayar"]=$this->m_admin->jumlahPelangganBayar();
		$data["jumlahPelangganPeriksa"]=$this->m_admin->jumlahPelangganPeriksa();
		$data["jumlahPelangganBayar2"]=$this->m_admin->jumlahPelangganBayar2();
		$data["jumlahPelangganSelesai"]=$this->m_admin->jumlahPelangganSelesai();
		$data["pelangganPending"]=$this->m_admin->get_pelanggan_pending()->result_array();
		$data["pelangganBayar1"]=$this->m_admin->get_pelanggan_bayar1()->result_array();
		$data["pelangganBayar2"]=$this->m_admin->get_pelanggan_bayar2()->result_array();
		$this->session->set_userdata($data_session);
		$this->load->view('v_adminDashboard',$data);
		}
		
	}
	public function tampilanAdminNotifikasi($id='')
	{	
		$this->load->model('M_notifikasi');
		$cek = $this->M_notifikasi->getPelanggan()->result();
		$data = array(
			'listPelanggan' => $cek,
			'idPelanggan' => $id,
			);
		$this->load->view('v_adminNotifikasi',$data);
	}
	public function tampilanAdminNotifikasiAhli($id='')
	{
		$this->load->model('M_notifikasi');
		$cek = $this->M_notifikasi->getAhli()->result();
		$data = array(
			'listAhli' => $cek,
			'idAhli' => $id,
			);
		$this->load->view('v_adminNotifikasiAhli',$data);
	}
	public function tampilanAdminKaryawan()
	{
		$data["karyawan"]=$this->m_admin->get_karyawan()->result_array();
		$this->load->view('v_adminKaryawan',$data);
	}
	public function tampilanAdminKaryawanDetail($id)
	{
		$data["karyawan"]=$this->m_admin->get_karyawanById($id)->result_array();
		$this->load->view('v_adminKaryawanDetail',$data);
	}
	public function tampilanAdminAhli()
	{
		$data["ahli"]=$this->m_admin->get_ahli()->result_array();
		$this->load->view('v_adminAhli',$data);
	}
	public function tampilanAdminPasien()
	{
		$data["pelanggan"]=$this->m_admin->get_pelanggan()->result_array();
		$this->load->view('v_adminPasien',$data);
	}
	public function tampilanAdminHarga()
	{
		$data["harga"]=$this->m_admin->get_harga()->result_array();
		$this->load->view('v_adminHarga',$data);
	}
	public function tampilanAdminPasienDetail($id)
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
		$data["nilai_adhdK"]=$this->m_pelanggan->get_nilai_adhdK($id)->result_array();
		$data["nilai_tunalarasK"]=$this->m_pelanggan->get_nilai_tunalarasK($id)->result_array();
		$data["nilai_dsK"]=$this->m_pelanggan->get_nilai_dsK($id)->result_array();
		$data["nilai_slK"]=$this->m_pelanggan->get_nilai_slK($id)->result_array();
		$data["nilai_rmK"]=$this->m_pelanggan->get_nilai_rmK($id)->result_array();
		$data["nilai_autisK"]=$this->m_pelanggan->get_nilai_autisK($id)->result_array();
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
		$data["nilai_psikomotor2"]=$this->m_karyawan->get_psikomotorById2($id)->result_array();
		$data["nilai_kognisi2"]=$this->m_karyawan->get_kognisiById2($id)->result_array();
		$data["nilai_afeksi2"]=$this->m_karyawan->get_afeksiById2($id)->result_array();
		$data["nilai_akademik2"]=$this->m_karyawan->get_akademikById2($id)->result_array();
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
		// print_r($nilai_adhd[0]['nilai']);
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
		$this->load->view('v_adminPasienDetail',$data);
	}
	public function tampilanAdminKaryawanTambah()
	{
		$this->load->view('v_adminKaryawanTambah');
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
	public function biodataValid(){
		$id= $this->input->post("id");
		$this->m_admin->set_biodataValid($id);
		// $this->set_pengiriman($id);
		echo "{}";
	}
	public function pembayaranValid(){
		$id= $this->input->post("id");
		$data = array(
			'idPengirim' => $id,
			'statusPembayaran' => 'terbayar'
			);	
		$this->m_admin->pembayaranValid($data,'pembayaran');
		for ($i=1; $i <19 ; $i++) { 
			# code...
		
		$data1 = array(
			'idPelanggan' => $id,
			'idKaryawan' => "1",
			'idData' => $i,
			'nilai' => "0",
			'tahap' => "1",
			);
		$this->M_registrasi->set_dataPelanggan($data1,'nilai_psikomotor');
		}
		for ($i=1; $i <16 ; $i++) { 
			# code...
		
		$data2 = array(
			'idPelanggan' => $id,
			'idKaryawan' => "1",
			'idData' => $i,
			'nilai' => "0",
			'tahap' => "1",
			);
		$this->M_registrasi->set_dataPelanggan($data2,'nilai_kognisi');
		}
		for ($i=1; $i <16 ; $i++) { 
			# code...
		
		$data3 = array(
			'idPelanggan' => $id,
			'idKaryawan' => "1",
			'idData' => $i,
			'nilai' => "0",
			'tahap' => "1",
			);
		$this->M_registrasi->set_dataPelanggan($data3,'nilai_afeksi');
		}
		for ($i=1; $i <23 ; $i++) { 
			# code...
		
		$data4 = array(
			'idPelanggan' => $id,
			'idKaryawan' => "1",
			'idData' => $i,
			'nilai' => "0",
			'tahap' => "1",
			);
		$this->M_registrasi->set_dataPelanggan($data4,'nilai_akademik');
		}
		for ($i=1; $i <13 ; $i++) { 
			# code...
		
		$data5 = array(
			'idPelanggan' => $id,
			'idKaryawan' => "1",
			'idData' => $i,
			'nilai' => "0",
			'tahap' => "1",
			);
		$this->M_registrasi->set_dataPelanggan($data5,'nilai_sosial');
		}
		
		$this->m_admin->set_pembayaranValid($id);
		echo "{}";
	}
	public function pembayaranValid2(){
		$id= $this->input->post("id");
		$data = array(
			'idPengirim' => $id,
			'statusPembayaran' => 'terbayar'
			);	
		$this->m_admin->pembayaranValid2($data,'pembayaran');
		$idAdhd=$this->m_admin->get_karyawanSosial($id)->result_array();
		$idAutis=$this->m_admin->get_karyawanSosial($id)->result_array();
		$idDs=$this->m_admin->get_karyawanKognisi($id)->result_array();
		$idRm=$this->m_admin->get_karyawanPsikomotor($id)->result_array();
		$idSl=$this->m_admin->get_karyawanAkademik($id)->result_array();
		$idTunalaras=$this->m_admin->get_karyawanAfeksi($id)->result_array();
		$dataAdhd=$this->m_admin->get_karyawanAdhd($id)->result_array();
		print_r($dataAdhd);
		if (count($dataAdhd)==0) {
			# code...
		
		for ($i=1; $i <20 ; $i++) { 
			# code...
		
		$data1 = array(
			'idPelanggan' => $id,
			'idGejala' => $i,
			'idKaryawan' => $idAdhd[0]['idKaryawan'],
			'nilai' => "0",
			);
		$this->M_registrasi->set_dataPelanggan($data1,'karyawan_adhd');
		}
		for ($i=1; $i <11 ; $i++) { 
			# code...
		
		$data2 = array(
			'idPelanggan' => $id,
			'idGejala' => $i,
			'idKaryawan' => $idAutis[0]['idKaryawan'],
			'nilai' => "0",
			);
		$this->M_registrasi->set_dataPelanggan($data2,'karyawan_autis');
		}
		for ($i=1; $i <35 ; $i++) { 
			# code...
		
		$data3 = array(
			'idPelanggan' => $id,
			'idGejala' => $i,
			'idKaryawan' => $idDs[0]['idKaryawan'],
			'nilai' => "0",
			);
		$this->M_registrasi->set_dataPelanggan($data3,'karyawan_ds');
		}
		for ($i=1; $i <26 ; $i++) { 
			# code...
		
		$data4 = array(
			'idPelanggan' => $id,
			'idGejala' => $i,
			'idKaryawan' => $idRm[0]['idKaryawan'],
			'nilai' => "0",
			);
		$this->M_registrasi->set_dataPelanggan($data4,'karyawan_rm');
		}
		for ($i=1; $i <24 ; $i++) { 
			# code...
		
		$data5 = array(
			'idPelanggan' => $id,
			'idGejala' => $i,
			'idKaryawan' => $idSl[0]['idKaryawan'],
			'nilai' => "0",
			);
		$this->M_registrasi->set_dataPelanggan($data5,'karyawan_sl');
		}
		for ($i=1; $i <41 ; $i++) { 
			# code...
		
		$data6 = array(
			'idPelanggan' => $id,
			'idGejala' => $i,
			'idKaryawan' => $idTunalaras[0]['idKaryawan'],
			'nilai' => "0",
			);
		$this->M_registrasi->set_dataPelanggan($data6,'karyawan_tunalaras');
		}
		
		for ($i=1; $i <19 ; $i++) { 
			# code...
		
		$data7 = array(
			'idPelanggan' => $id,
			'idKaryawan' => $idRm[0]['idKaryawan'],
			'idData' => $i,
			'nilai' => "0",
			'tahap' => "2",
			);
		$this->M_registrasi->set_dataPelanggan($data7,'nilai_psikomotor');
		}
		for ($i=1; $i <16 ; $i++) { 
			# code...
		
		$data8 = array(
			'idPelanggan' => $id,
			'idKaryawan' => $idDs[0]['idKaryawan'],
			'idData' => $i,
			'nilai' => "0",
			'tahap' => "2",
			);
		$this->M_registrasi->set_dataPelanggan($data8,'nilai_kognisi');
		}
		for ($i=1; $i <16 ; $i++) { 
			# code...
		
		$data9 = array(
			'idPelanggan' => $id,
			'idKaryawan' => $idTunalaras[0]['idKaryawan'],
			'idData' => $i,
			'nilai' => "0",
			'tahap' => "2",
			);
		$this->M_registrasi->set_dataPelanggan($data9,'nilai_afeksi');
		}
		for ($i=1; $i <23 ; $i++) { 
			# code...
		
		$data10 = array(
			'idPelanggan' => $id,
			'idKaryawan' => $idSl[0]['idKaryawan'],
			'idData' => $i,
			'nilai' => "0",
			'tahap' => "2",
			);
		$this->M_registrasi->set_dataPelanggan($data10,'nilai_akademik');
		}
		for ($i=1; $i <13 ; $i++) { 
			# code...
		
		$data11 = array(
			'idPelanggan' => $id,
			'idKaryawan' => $idAdhd[0]['idKaryawan'],
			'idData' => $i,
			'nilai' => "0",
			'tahap' => "2",
			);
		$this->M_registrasi->set_dataPelanggan($data11,'nilai_sosial');
		}
		}
		$this->m_admin->set_pembayaranValid2($id);
		echo "{}";
	}
	
	public function sendMessage(){
		$curl = curl_init();
			$token = "4PDawOpOxIrv8yj4Ba643ZoRhh9tZW6EGA24ccI0zvDkgZDY6NKZM8ZUB9BXNUX7";
		curl_setopt($curl, CURLOPT_HTTPHEADER,
		    array(
		        "Authorization: $token",
		    )
		);
		for($i=1 ; $i <=25; $i++){
		$data = [
		    'phone' => '081233785197',
		    'message' => "*$i SELAMAT MALAM TEMANKU* \n\nSEBERAPA DIAMKAH DIRIMU!? SEE YOU!!!WKWKWKW \n\n *BY : AANG MUAMMAR ZEIN*",
		];
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($curl, CURLOPT_URL, "https://wablas.com//api/send-message");
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
		$result = curl_exec($curl);
		echo "<pre>";
		print_r($result);
		}
		curl_close($curl);
	}
	public function set_notifikasi(){
		$this->load->model('M_notifikasi');
		$id=$this->input->post("pelanggan");
		$pesan=$this->input->post("pesan");
		$data = array(
			'idPelangganPenerima' => $id,
			'pesan' => $pesan,
			'idAdminPengirim' => 1,
			'statusNotifikasi' => 0,
			'namaPengirim' => 'admin',
			);	
			$this->M_notifikasi->setNotifikasi($data);
		$this->notifikasi();
	}
	public function set_notifikasiAhli(){
		$this->load->model('M_notifikasi');
		$id=$this->input->post("pelanggan");
		$pesan=$this->input->post("pesan");
		$data = array(
			'idAhliPenerima' => $id,
			'pesan' => $pesan,
			'idAdminPengirim' => 1,
			'statusNotifikasi' => 0,
			'namaPengirim' => 'admin',
			);	
			$this->M_notifikasi->setNotifikasi($data);
		$this->notifikasiAhli();
	}
	public function notifikasi($id=''){
		$this->load->model('M_notifikasi');
		$cek = $this->M_notifikasi->getPelanggan()->result();
		$data = array(
			'listPelanggan' => $cek,
			'idPelanggan' => $id,
			);
		$this->load->view('v_adminNotifikasi',$data);
	}
	public function notifikasiAhli($id=''){
		$this->load->model('M_notifikasi');
		$cek = $this->M_notifikasi->getAhli()->result();
		$data = array(
			'listAhli' => $cek,
			'idAhli' => $id,
			);
		$this->load->view('v_adminNotifikasiAhli',$data);
	}
	public function tambahKaryawan(){
		$username=$this->input->post("username");
		$password=$this->input->post("password");
		$namaKaryawan=$this->input->post("nama");
		$jenisKelamin=$this->input->post("jenisKelamin");
		$datap = $this->M_registrasi->get_usernameP()->result();
		$datak = $this->M_registrasi->get_usernameK()->result();
		$dataad = $this->M_registrasi->get_usernameAd()->result();
		$dataah = $this->M_registrasi->get_usernameAh()->result();
		$set=0;
		$home = base_url();
		foreach($datap as $d){
			if($d->username == $username){
				$set++;
			}
		}
		foreach($datak as $d){
			if($d->username == $username){
				$set++;
			}
		}
		foreach($dataad as $d){
			if($d->username == $username){
				$set++;
			}
		}
		foreach($dataah as $d){
			if($d->username == $username){
				$set++;
			}
		}

		if ($set==0) {
			$data = array(
			'username' => $username,
			'password' => $namaKaryawan,
			'jenisKelamin' => $jenisKelamin,
			);	
		$berhasil = $this->M_registrasi->set_dataPelanggan($data,'karyawan');
			if($set==0){
				if($berhasil==1){
					$sukses['sukses'] = "sukses";
					$this->load->tampilanAdminKaryawan();
				}
			}
		} else {
			$gagal['gagal'] = "gagal";
			$this->load->view('v_adminKaryawanTambah', $gagal);
		}
		
	}
	public function set_dataPelanggan()
	{
		
		$username =  $this->session->userdata("username");
		$noHp =  $this->session->userdata("nomorHp");
		$password =  $this->session->userdata("password");
		$this->load->model('M_registrasi');
		$datap = $this->M_registrasi->get_usernameP()->result();
		$datak = $this->M_registrasi->get_usernameK()->result();
		$dataad = $this->M_registrasi->get_usernameAd()->result();
		$dataah = $this->M_registrasi->get_usernameAh()->result();
		$set=0;
		$home = base_url();
		foreach($datap as $d){
			if($d->username == $username){
				$set++;
			}
		}
		foreach($datak as $d){
			if($d->username == $username){
				$set++;
			}
		}
		foreach($dataad as $d){
			if($d->username == $username){
				$set++;
			}
		}
		foreach($dataah as $d){
			if($d->username == $username){
				$set++;
			}
		}
		if ($set==0) {
			# code...
		
			$data = array(
				

				'username' => $username,
				'noHp' => $noHp,
				'status' => "pending",
				'fotoPelanggan' => "default.png",
				'password' => $password
				);
			$berhasil = $this->M_registrasi->set_dataPelanggan($data,'pelanggan');
			$id=$this->M_registrasi->get_idPelanggan()->result_array();
			// print_r($id[0]['idPelanggan']);
			for ($i=1; $i <20 ; $i++) { 
				# code...
			
			$data1 = array(
				'idPelanggan' => $id[0]['idPelanggan'],
				'idGejala' => $i,
				'nilai' => "0",
				);
			$this->M_registrasi->set_dataPelanggan($data1,'pelanggan_adhd');
			}
			for ($i=1; $i <11 ; $i++) { 
				# code...
			
			$data2 = array(
				'idPelanggan' => $id[0]['idPelanggan'],
				'idGejala' => $i,
				'nilai' => "0",
				);
			$this->M_registrasi->set_dataPelanggan($data2,'pelanggan_autis');
			}
			for ($i=1; $i <35 ; $i++) { 
				# code...
			
			$data3 = array(
				'idPelanggan' => $id[0]['idPelanggan'],
				'idGejala' => $i,
				'nilai' => "0",
				);
			$this->M_registrasi->set_dataPelanggan($data3,'pelanggan_ds');
			}
			for ($i=1; $i <26 ; $i++) { 
				# code...
			
			$data4 = array(
				'idPelanggan' => $id[0]['idPelanggan'],
				'idGejala' => $i,
				'nilai' => "0",
				);
			$this->M_registrasi->set_dataPelanggan($data4,'pelanggan_rm');
			}
			for ($i=1; $i <24 ; $i++) { 
				# code...
			
			$data5 = array(
				'idPelanggan' => $id[0]['idPelanggan'],
				'idGejala' => $i,
				'nilai' => "0",
				);
			$this->M_registrasi->set_dataPelanggan($data5,'pelanggan_sl');
			}
			for ($i=1; $i <41 ; $i++) { 
				# code...
			
			$data6 = array(
				'idPelanggan' => $id[0]['idPelanggan'],
				'idGejala' => $i,
				'nilai' => "0",
				);
			$this->M_registrasi->set_dataPelanggan($data6,'pelanggan_tunalaras');
			}
			$dataHarga=$this->M_registrasi->getHarga();
			$data7 = array(
				'idPengirim' => $id[0]['idPelanggan'],
				'buktiPembayaran1' => "default3.png",
				'buktiPembayaran2' => "default3.png",
				'totalPembayaran1' => "100.000",
				);
			$this->M_registrasi->set_dataPelanggan($data7,'pembayaran');
			}
			if($set==0){
				if($berhasil==1){
					$sukses['sukses'] = "sukses";
					$this->load->view('Login', $sukses);
				}
			}
		
		else{
			$gagal['gagal'] = "gagal";
			$this->load->view('Registrasi', $gagal);
		}
	}
	public function set_harga(){
		$idHarga=$this->input->post("idHarga");
		$namaKolom=$this->input->post("namaKolom");
		$value=$this->input->post("value");
		// print_r($hargaPemeriksaan);
		if (count($namaKolom)>0) {
			$this->m_admin->setHarga($idHarga,$namaKolom,$value);
		}
		
		$this->tampilanAdminHarga();
	}
	public function info($id){
		$fakultas = $this->M_biodata->get_fakultas()->result();	
		$cek = $this->M_biodata->get_biodata($id)->result();
		if (count($cek)>0){
			foreach ($cek as $c){
				
			};
			$data = array(
			'namaAlumni' => $c->namaAlumni,
			'nim' => $c->nim,
			'tempatLahir' => $c->tempatLahir,
			'tanggalLahir' => $c->tanggalLahir,
			'jenisKelamin' => $c->jenisKelamin,
			'golonganDarah' => $c->golonganDarah,
			'strataPendidikan' => $c->strataPendidikan,
			'alamat' => $c->alamat,
			'noTelepon' => $c->noTelepon,
			'noHp' => $c->noHp,
			'password' => $c->password,
			'id_alumni' => $c->id_alumni,
			'email' => $c->email,
			'listFakultas' => $fakultas,
			'error' => ' ',
			'error2' => ' ',
			'fakultas_id' => $c->fakultas_id,
			'programStudi_id' => $c->prodi_id,
			'jurusan_id' => $c->jurusan_id,
			'fakultas' => $c->fakultas_nama,
			'programStudi' => $c->prodi_nama,
			'jurusan' => $c->jurusan_nama,
			'fotoProfil' => $c->fotoProfil,
			'fotoIjazah' => $c->fotoIjazah
			);	
		$this->load->view('V_infoMember',$data);
		}
	}
	public function lihat(){
		$data["alumni"]=$this->M_biodata->read();
		$this->load->view("LihatMember",$data);
	}
	public function memberMembayar(){
		$data["alumni"]=$this->M_biodata->get_memberMembayar()->result_array();
		$this->load->view("V_memberMembayar",$data);
	}
	public function memberTerkirim(){
		$data["alumni"]=$this->M_biodata->get_memberTerkirim()->result_array();
		$this->load->view("V_memberTerkirim",$data);
	}
	public function edit($id){
		$fakultas = $this->M_biodata->get_fakultas()->result();	
		$cek = $this->M_biodata->get_biodata($id)->result();
		if (count($cek)>0){
			foreach ($cek as $c){
				
			};
			$data = array(
			'namaAlumni' => $c->namaAlumni,
			'nim' => $c->nim,
			'tempatLahir' => $c->tempatLahir,
			'tanggalLahir' => $c->tanggalLahir,
			'jenisKelamin' => $c->jenisKelamin,
			'golonganDarah' => $c->golonganDarah,
			'strataPendidikan' => $c->strataPendidikan,
			'alamat' => $c->alamat,
			'noTelepon' => $c->noTelepon,
			'noHp' => $c->noHp,
			'password' => $c->password,
			'id_alumni' => $c->id_alumni,
			'email' => $c->email,
			'listFakultas' => $fakultas,
			'error' => ' ',
			'error2' => ' ',
			'fakultas_id' => $c->fakultas_id,
			'programStudi_id' => $c->prodi_id,
			'jurusan_id' => $c->jurusan_id,
			'fakultas' => $c->fakultas_nama,
			'programStudi' => $c->prodi_nama,
			'jurusan' => $c->jurusan_nama,
			'fotoProfil' => $c->fotoProfil,
			'fotoIjazah' => $c->fotoIjazah
			);	
		$this->load->view('V_editMember',$data);
		}
	}
	public function hapus(){
		$id= $this->input->post("id");
		$this->M_biodata->delete($id);
		echo "{}";
	}
	
	
	
	public function kirim(){
		$this->load->model('M_transaksi');
		$id= $this->input->post("id");
		$data = array(
			'id_pembayaran' => $id,
			'statusPembayaran' => 'Terkirim'
			);	
			$this->M_transaksi->pembayaranValid($data,'pembayaran');
		echo "{}";
	}
	//--------------------------------------------------------untuk membuat database langkah pengiriman
	public function set_pengiriman($id){ // untuk membuat database langkah pengiriman
		$cek = $this->M_biodata->get_biodata($id)->result();
		$this->load->model('M_transaksi');
		if (count($cek)>0){
			foreach ($cek as $c){
				
			};
			$data = array(
			'nama' => $c->namaAlumni,
			'alamat' => $c->alamat,
			'noHp' => $c->noHp,
			'id_pemesan' => $c->id_alumni
			);	
			$this->M_transaksi->set_pengiriman($data,'pengiriman');
		$this->set_pembayaran($id);
		}
	}
	public function set_pembayaran($id){ 
			$this->load->model('M_transaksi');
			$cek=$this->M_transaksi->get_dataPengiriman($id)->result();
		if (count($cek)>0){
			foreach ($cek as $c){
				
			};
			$data = array(
			'id_pengirim' => $c->id_pengiriman,
			'buktiPembayaran' => 'default3.png',
			'totalPembayaran' => 100000,
			'statusPembayaran' => 'pending'
			);	
			$this->M_transaksi->set_pembayaran($data,'pembayaran');
		}
	}
}
