<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_pelanggan extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_pelanggan');
		$this->load->model('m_karyawan');
		$this->load->model('m_ahli');
		$this->load->helper('url');
		$this->load->database();
	}
	
	public function index()
	{
		$this->load->view('v_pelanggan');	
	}
	public function tampilanBiodataPelanggan()
	{
		$idPelanggan= $this->session->userdata('idPelanggan');
		$data["adhd"]=$this->m_pelanggan->get_adhd()->result_array();
		$data["tunalaras"]=$this->m_pelanggan->get_tunalaras()->result_array();
		$data["ds"]=$this->m_pelanggan->get_ds()->result_array();
		$data["sl"]=$this->m_pelanggan->get_sl()->result_array();
		$data["rm"]=$this->m_pelanggan->get_rm()->result_array();
		$data["autis"]=$this->m_pelanggan->get_autis()->result_array();
		$data["nilai_adhd"]=$this->m_pelanggan->get_nilai_adhd($idPelanggan)->result_array();
		$data["nilai_tunalaras"]=$this->m_pelanggan->get_nilai_tunalaras($idPelanggan)->result_array();
		$data["nilai_ds"]=$this->m_pelanggan->get_nilai_ds($idPelanggan)->result_array();
		$data["nilai_sl"]=$this->m_pelanggan->get_nilai_sl($idPelanggan)->result_array();
		$data["nilai_rm"]=$this->m_pelanggan->get_nilai_rm($idPelanggan)->result_array();
		$data["nilai_autis"]=$this->m_pelanggan->get_nilai_autis($idPelanggan)->result_array();
		
			

		$cek = $this->m_pelanggan->get_pelangganId($idPelanggan)->result();
		if (count($cek)>0){
			foreach ($cek as $c){
				
			};
			$data["isi"] = array(
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

			);	
		
		}else{
			//$this->load->view('V_biodata');
		}

		$this->load->view('v_biodataPelanggan',$data);
	}
	public function set_biodata()
	{
		$idPelanggan=$this->session->userdata('idPelanggan');
		$fotoPelanggan =  $this->input->post('fotoPelanggan');
		$data = array(
			'fotoPelanggan' => $fotoPelanggan
			);

		$error="";
		$error2="";
		$config['upload_path']          = './assets/images/foto';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
 
		$this->load->library('upload', $config);
 $cek = $this->m_pelanggan->get_pelanggan($this->session->userdata('idPelanggan'))->result();
		if (count($cek)>0){
			foreach ($cek as $c){
				
			};
			$data2 = array(
			'fotoPelanggan' => $c->fotoPelanggan,
		);}	
		$data['fotoPelanggan']=$data2['fotoPelanggan'];
		if ( ! $this->upload->do_upload('fotoPelanggan')){
			
					$error = $this->upload->display_errors();
					$data['error']=$error;
					return $data;
				}else{;
					
					$upload_data = $this->upload->data();
					 $data['fotoPelanggan']= $upload_data['file_name'];
					 $berhasil = $this->m_pelanggan->updateBio($data,$idPelanggan,'pelanggan');
					 $data['error']="berhasil";
					 $this->load->reloadBiodata();
					 return $data;
				}
		 // $this->notifPending($id);
		
	}
	public function submit()
	{
		$fileArsip= realpath($_FILES["fileArsip"]["tmp_name"]);
		$type = $_FILES['fileArsip']['type'];
		$name = $_FILES['fileArsip']['name'];
		//print_r($fileArsip);
		//return $fileArsip;
		$config['upload_path']          = './assets/images/foto/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload($_FILES)){
			$error = array('error' => $this->upload->display_errors());
			// $this->tampilanTambahGuide($error);
		}else{
			
			$upload_data = $this->upload->data();
			$foto =  $upload_data['file_name'];
			
			$this->load->model('m_admin');
		
		$data['foto1'] = $foto;
			return $data;
	}
}
	public function reloadBiodata($data,$error,$error2)
	{
		$this->load->model('m_pelanggan');
		
		$data['edit']=$error;
		$this->load->view('v_biodataPelanggan',$data);
	}
	public function reloadBiodataP()
	{
		
		$this->load->view('v_pelanggan');
	}
	public function tampilanPemeriksaanPelanggan($id)
	{	
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
		$nilai_adhd = $this->m_pelanggan->get_nilaiAdhd($id)->result_array();
		$nilai_autis = $this->m_pelanggan->get_nilaiAutis($id)->result_array();
		$nilai_ds = $this->m_pelanggan->get_nilaiDs($id)->result_array();
		$nilai_sl = $this->m_pelanggan->get_nilaiSl($id)->result_array();
		$nilai_rm = $this->m_pelanggan->get_nilaiRm($id)->result_array();
		$nilai_tunalaras = $this->m_pelanggan->get_nilaiTunalaras($id)->result_array();
		$totalLayanan=count($data["pemeriksaan2"]);
		$totalPembayaran2=number_format(550000*$totalLayanan) ;
		$this->m_pelanggan->set_totalPembayaran2($id,$totalPembayaran2);
		// print_r(count($data["pemeriksaan2"]));
		
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
			'alamat' => $c->alamat,
			'noHp' => $c->noHp,
			'usia' => $c->usia,
			'jenisKelamin' => $c->jenisKelamin,
			'namaSekolah' => $c->namaSekolah,
			'kelas' => $c->kelas,
			'idPembayaran' => $c->idPembayaran,
			'namaPelanggan' => $c->namaPelanggan,
			'buktiPembayaran2' => $c->buktiPembayaran2,
			'totalLayanan' => $totalLayanan,
			'totalPembayaran2' => $totalPembayaran2,
			'pesan'=> '',
			'hasil'=> $hasil,
			);	
			
		$this->load->view('v_pemeriksaanPelanggan',$data);
		
	}
	public function tampilanTerapiPelanggan($id)
	{
		$data["psikomotor"]=$this->m_karyawan->get_psikomotor()->result_array();
		$data["nilai_psikomotor"]=$this->m_karyawan->get_psikomotorById2($id)->result_array();
		$data["kognisi"]=$this->m_karyawan->get_kognisi()->result_array();
		$data["nilai_kognisi"]=$this->m_karyawan->get_kognisiById2($id)->result_array();
		$data["afeksi"]=$this->m_karyawan->get_afeksi()->result_array();
		$data["nilai_afeksi"]=$this->m_karyawan->get_afeksiById2($id)->result_array();
		$data["akademik"]=$this->m_karyawan->get_akademik()->result_array();
		$data["nilai_akademik"]=$this->m_karyawan->get_akademikById2($id)->result_array();
		$data["sosial"]=$this->m_karyawan->get_sosial()->result_array();
		$data["nilai_sosial"]=$this->m_karyawan->get_sosialById2($id)->result_array();
		$data["perkembangan1"]=$this->m_ahli->get_perkembangan1($id)->result_array();
		$data["perkembangan2"]=$this->m_ahli->get_perkembangan2($id)->result_array();
		$nilai_adhd = $this->m_pelanggan->get_nilaiAdhdK($id)->result_array();
		$nilai_autis = $this->m_pelanggan->get_nilaiAutisK($id)->result_array();
		$nilai_ds = $this->m_pelanggan->get_nilaiDsK($id)->result_array();
		$nilai_sl = $this->m_pelanggan->get_nilaiSlK($id)->result_array();
		$nilai_rm = $this->m_pelanggan->get_nilaiRmK($id)->result_array();
		$nilai_tunalaras = $this->m_pelanggan->get_nilaiTunalarasK($id)->result_array();
		$totalLayanan=count($data["perkembangan2"]);
		$totalPembayaran2=number_format(550000*$totalLayanan) ;
		$this->m_pelanggan->set_totalPembayaran2($id,$totalPembayaran2);
		// print_r(count($data["pemeriksaan2"]));
		
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
			'alamat' => $c->alamat,
			'noHp' => $c->noHp,
			'usia' => $c->usia,
			'jenisKelamin' => $c->jenisKelamin,
			'namaSekolah' => $c->namaSekolah,
			'kelas' => $c->kelas,
			'idPembayaran' => $c->idPembayaran,
			'namaPelanggan' => $c->namaPelanggan,
			'buktiPembayaran2' => $c->buktiPembayaran2,
			'totalLayanan' => $totalLayanan,
			'totalPembayaran2' => $totalPembayaran2,
			'pesan'=> '',
			'hasil'=> $hasil,
			);	
			
		$this->load->view('v_perkembanganPelanggan',$data);
	}
	public function tampilanPembayaranPelanggan()
	{
		

		$cek = $this->m_pelanggan->get_dataPembayaran($this->session->userdata('idPelanggan'))->result();
		$harga=$this->m_pelanggan->get_harga()->result_array();
		$total=$harga[0]['hargaPendaftaran']+$harga[0]['hargaPemeriksaan'];
		// print_r(number_format($total));
		if (count($cek)>0){
			foreach ($cek as $c){
				
			};
			$data = array(
			'idPembayaran' => $c->idPembayaran,
			'namaPelanggan' => $c->namaPelanggan,
			'alamat' => $c->alamat,
			'noHp' => $c->noHp,
			'buktiPembayaran1' => $c->buktiPembayaran1,
			'hargaPendaftaran' => number_format($harga[0]['hargaPendaftaran']),
			'hargaPemeriksaan' => number_format($harga[0]['hargaPemeriksaan']),
			'total' => number_format($total),
			'pesan'=> ''
			);	
			
		$this->load->view('v_pembayaranPelanggan',$data);
		}

	}

	public function set_pembayaran(){
		$id= $this->session->userdata('idPelanggan');
		$foto= $this->input->post("foto");
		$nilai="bayar1";
		$cek=$this->m_pelanggan->get_dataPembayaran($id)->result();
		if (count($cek)>0){
			foreach ($cek as $c){
				
			};
			$data = array(
			'idPengirim' => $c->idPengirim,

			);
			
		$this->m_pelanggan->set_statusPembayaran($id,$nilai);
			
			$config['upload_path']          = './assets/images/pembayaran';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
 
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('foto')){
					$error = $this->upload->display_errors();
					$this->reload($error);
				}else{;
					
					$upload_data = $this->upload->data();
					 $data['buktiPembayaran1']= $upload_data['file_name'];
					 $this->m_pelanggan->updatePembayaran($data,'pembayaran');
					
					$this->reload("Berhasil");
				}
		}
	}public function set_pembayaran2(){
		$id= $this->session->userdata('idPelanggan');
		$foto= $this->input->post("foto");
		$nilai="bayar2";
		$cek=$this->m_pelanggan->get_dataPembayaran($id)->result();
		if (count($cek)>0){
			foreach ($cek as $c){
				
			};
			$data = array(
			'idPengirim' => $c->idPengirim,

			);
			
		$this->m_pelanggan->set_statusPembayaran($id,$nilai);
			
			$config['upload_path']          = './assets/images/pembayaran';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 3000;
 
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('foto')){
					$error = $this->upload->display_errors();
					$this->reload2($error);
				}else{;
					
					$upload_data = $this->upload->data();
					 $data['buktiPembayaran2']= $upload_data['file_name'];
					 $this->m_pelanggan->updatePembayaran($data,'pembayaran');
					
					$this->index();
				}
		}
	}
	public function reload($pesan)
	{
		$harga=$this->m_pelanggan->get_harga()->result_array();
		$total=$harga[0]['hargaPendaftaran']+$harga[0]['hargaPemeriksaan'];
		$cek = $this->m_pelanggan->get_dataPembayaran($this->session->userdata('idPelanggan'))->result();
		if (count($cek)>0){
			foreach ($cek as $c){
				
			};
			$data = array(
			'idPembayaran' => $c->idPembayaran,
			'namaPelanggan' => $c->namaPelanggan,
			'alamat' => $c->alamat,
			'noHp' => $c->noHp,
			'buktiPembayaran1' => $c->buktiPembayaran1,
			'buktiPembayaran2' => $c->buktiPembayaran2,
			'hargaPendaftaran' => number_format($harga[0]['hargaPendaftaran']),
			'hargaPemeriksaan' => number_format($harga[0]['hargaPemeriksaan']),
			'total' => number_format($total),
			'pesan'=> $pesan
			);	
			
			
		$this->load->view('v_pembayaranPelanggan',$data);
		}
	}
	public function reload2($pesan)
	{
		$cek = $this->m_pelanggan->get_dataPembayaran($this->session->userdata('idPelanggan'))->result();
		if (count($cek)>0){
			foreach ($cek as $c){
				
			};
			$data = array(
			'idPembayaran' => $c->idPembayaran,
			'namaPelanggan' => $c->namaPelanggan,
			'alamat' => $c->alamat,
			'noHp' => $c->noHp,
			'buktiPembayaran1' => $c->buktiPembayaran1,
			'buktiPembayaran2' => $c->buktiPembayaran2,
			'pesan'=> $pesan
			);	
			
			
		$this->load->view('v_pemeriksaanPelanggan',$data);
		}
	}
	public function set_adhd()
	{
		$idPelanggan= $this->input->post("id");
 		$idGejala= $this->input->post("idGejala");
 		$nilai=$this->input->post("strState");
 		$this->load->model('m_pelanggan');

 		$this->m_pelanggan->set_adhd($idPelanggan,$idGejala,$nilai);
 		$data["nilai_adhd"]=$this->m_pelanggan->get_nilai_adhd($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 17; $i++) { 
 			$jumlah+=intval($data["nilai_adhd"][$i]['nilai']);
 			echo $jumlah;
 		}
 		
 		$this->m_pelanggan->set_hasil_adhd($idPelanggan,19,$jumlah);
		
	}
	public function set_pelanggan()
	{
		$idPelanggan= $this->input->post("id");
 		$namaKolom= $this->input->post("namaKolom");
 		$nilai=$this->input->post("value");
 		$this->load->model('m_pelanggan');

 		$this->m_pelanggan->set_pelanggan($idPelanggan,$namaKolom,$nilai);
		
	}
	public function set_pelangganR()
	{
		$idPelanggan= $this->input->post("id");
 		$namaKolom= $this->input->post("namaKolom");
 		$nilai=$this->input->post("strState");
 		$this->load->model('m_pelanggan');

 		$this->m_pelanggan->set_pelangganR($idPelanggan,$namaKolom,$nilai);
		
	}
	public function set_tunalaras()
	{
		$idPelanggan= $this->input->post("id");
 		$idGejala= $this->input->post("idGejala");
 		$nilai=$this->input->post("strState");
 		$this->load->model('m_pelanggan');

 		$this->m_pelanggan->set_tunalaras($idPelanggan,$idGejala,$nilai);
 		$data["nilai_tunalaras"]=$this->m_pelanggan->get_nilai_tunalaras($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 38; $i++) { 
 			$jumlah+=intval($data["nilai_tunalaras"][$i]['nilai']);
 			echo $jumlah;
 		}
 		
 		$this->m_pelanggan->set_hasil_tunalaras($idPelanggan,40,$jumlah);
		
	}
	public function set_ds()
	{
		$idPelanggan= $this->input->post("id");
 		$idGejala= $this->input->post("idGejala");
 		$nilai=$this->input->post("strState");
 		$this->load->model('m_pelanggan');

 		$this->m_pelanggan->set_ds($idPelanggan,$idGejala,$nilai);
 		$data["nilai_ds"]=$this->m_pelanggan->get_nilai_ds($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 32; $i++) { 
 			$jumlah+=intval($data["nilai_ds"][$i]['nilai']);
 			echo $jumlah;
 		}
 		
 		$this->m_pelanggan->set_hasil_ds($idPelanggan,34,$jumlah);
		
	}
	public function set_sl()
	{
		$idPelanggan= $this->input->post("id");
 		$idGejala= $this->input->post("idGejala");
 		$nilai=$this->input->post("strState");
 		$this->load->model('m_pelanggan');

 		$this->m_pelanggan->set_sl($idPelanggan,$idGejala,$nilai);
 		$data["nilai_sl"]=$this->m_pelanggan->get_nilai_sl($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 21; $i++) { 
 			$jumlah+=intval($data["nilai_sl"][$i]['nilai']);
 			echo $jumlah;
 		}
 		
 		$this->m_pelanggan->set_hasil_sl($idPelanggan,23,$jumlah);
		
	}
	public function set_rm()
	{
		$idPelanggan= $this->input->post("id");
 		$idGejala= $this->input->post("idGejala");
 		$nilai=$this->input->post("strState");
 		$this->load->model('m_pelanggan');

 		$this->m_pelanggan->set_rm($idPelanggan,$idGejala,$nilai);
 		$data["nilai_rm"]=$this->m_pelanggan->get_nilai_rm($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 23; $i++) { 
 			$jumlah+=intval($data["nilai_rm"][$i]['nilai']);
 			echo $jumlah;
 		}
 		
 		$this->m_pelanggan->set_hasil_rm($idPelanggan,25,$jumlah);
		
	}
	public function set_autis()
	{
		$idPelanggan= $this->input->post("id");
 		$idGejala= $this->input->post("idGejala");
 		$nilai=$this->input->post("strState");
 		$this->load->model('m_pelanggan');

 		$this->m_pelanggan->set_autis($idPelanggan,$idGejala,$nilai);
 		$data["nilai_autis"]=$this->m_pelanggan->get_nilai_autis($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 8; $i++) { 
 			$jumlah+=intval($data["nilai_autis"][$i]['nilai']);
 			echo $jumlah;
 		}
 		
 		$this->m_pelanggan->set_hasil_autis($idPelanggan,10,$jumlah);
		
	}
	public function set_data(){
		
			$adhd = array('semangka','jeruk','apel','anggur');
			$adhd =  $this->input->post('idWisata');
			$namaGuide =  $this->input->post('namaGuide');
			$upload_data = $this->upload->data();
			$fotoGuide =  $upload_data['file_name'];
			$emailGuide =  $this->input->post('emailGuide');
			$notelpGuide =  $this->input->post('notelpGuide');
			$umurGuide =  $this->input->post('umurGuide');
			$alamatGuide =  $this->input->post('alamatGuide');
			
			
			$this->load->model('m_admin');
		
		$data = array(
			'idWisata' => $idWisata,
			'namaGuide' => $namaGuide,
			'fotoGuide' => $fotoGuide,
			'emailGuide' => $emailGuide,
			'notelpGuide' => $notelpGuide,
			'umurGuide' => $umurGuide,
			'alamatGuide' => $alamatGuide,
			);

			$this->m_admin->set_guide($data,'guide');
			$data = array('upload_data' => $this->upload->data());
			$this->adminGuide();
		
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
