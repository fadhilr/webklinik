<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_karyawan extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->model('m_ahli');
		$this->load->model('m_karyawan');
		$this->load->model('m_pelanggan');
		$this->load->model('M_registrasi');
		$this->load->helper('url');
		$this->load->database();
	}
	
	public function index()
	{
		$this->load->model('M_login');
		$id=$this->session->userdata('idKaryawan');
		$cek = $this->M_login->get_karyawanById($id)->result();	
		if (count($cek)==0){
			$gagal['gagal'] = "gagal";
			$this->load->view('Login', $gagal);
		}else{
			foreach ($cek as $c){
				
			};
			$data_session = array(
			'username' => $c->username,
			'idKaryawan' => $c->idKaryawan,
			);
		$this->session->set_userdata($data_session);
		
		$data["pelangganPeriksa"]=$this->m_karyawan->get_periksaPasien($id)->result_array();
		$data["pelangganPerkembangan"]=$this->m_karyawan->get_perkembanganPasien($id)->result_array();
		
		
			for ($i=0; $i <count($data["pelangganPeriksa"]) ; $i++) { 
				 $psikomotor=$data["pelangganPeriksa"][$i]['statusPsikomotor'];
				 $kognisi=$data["pelangganPeriksa"][$i]['statusKognisi'];
				 $afeksi=$data["pelangganPeriksa"][$i]['statusAfeksi'];
				 $akademik=$data["pelangganPeriksa"][$i]['statusAkademik'];
				 $sosial=$data["pelangganPeriksa"][$i]['statusSosial'];

					if ($psikomotor=="sudah diperiksa" && $kognisi=="sudah diperiksa" && $afeksi=="sudah diperiksa" && $akademik=="sudah diperiksa" && $sosial=="sudah diperiksa") {
						$data["pelangganPeriksa"][$i]['tampilan']=
							"sudah diperiksa";
						// $this->m_karyawan->set_lanjutHasilPeriksa($idPelanggan,'statusPsikomotor','pelanggan');

					}else if ($psikomotor=="sudah diperiksa" || $kognisi=="sudah diperiksa" || $afeksi=="sudah diperiksa" || $akademik=="sudah diperiksa" || $sosial=="sudah diperiksa") {
						$data["pelangganPeriksa"][$i]['tampilan']=
							"belum lengkap";
					} else {
						$data["pelangganPeriksa"][$i]['tampilan']=
							"belum diperiksa";
					}
					
					
				
			}
			for ($i=0; $i <count($data["pelangganPerkembangan"]) ; $i++) { 
				 
				$perkPsikomotor=$data["pelangganPerkembangan"][$i]['perkPsikomotor'];
				 $perkKognisi=$data["pelangganPerkembangan"][$i]['perkKognisi'];
				 $perkAfeksi=$data["pelangganPerkembangan"][$i]['perkAfeksi'];
				 $perkAkademik=$data["pelangganPerkembangan"][$i]['perkAkademik'];
				$perkSosial=$data["pelangganPerkembangan"][$i]['perkSosial'];

					
					
					if ($perkPsikomotor=="sudah diperiksa" && $perkKognisi=="sudah diperiksa" && $perkAfeksi=="sudah diperiksa" && $perkAkademik=="sudah diperiksa" && $perkSosial=="sudah diperiksa") {
						$data["pelangganPerkembangan"][$i]['tampilan']=
							"sudah diperiksa";
						// $this->m_karyawan->set_lanjutHasilPeriksa($idPelanggan,'statusPsikomotor','pelanggan');

					}else if ($perkPsikomotor=="sudah diperiksa" || $perkKognisi=="sudah diperiksa" || $perkAfeksi=="sudah diperiksa" || $perkAkademik=="sudah diperiksa" || $perkSosial=="sudah diperiksa") {
						$data["pelangganPerkembangan"][$i]['tampilan']=
							"belum lengkap";
					} else {
						$data["pelangganPerkembangan"][$i]['tampilan']=
							"belum diperiksa";
					}
				
			}
			// $dataNilaiPsikomotor=$this->m_karyawan->get_psikomotorById(5)->result_array();
			// print_r($dataNilaiPsikomotor[4]['nilai']);
		
		
		// $status=$data["pelangganPeriksa"][0]['status'];
		// $kognisi=$data["pelangganPeriksa"][0]['statusKognisi'];
		// $afeksi=$data["pelangganPeriksa"][0]['statusKognisi'];
		// $psikomotor=$data["pelangganPeriksa"][0]['statusKognisi'];
		// $akademik=$data["pelangganPeriksa"][0]['statusKognisi'];
		// $sosial=$data["pelangganPeriksa"][0]['statusKognisi'];
		// print_r($status);
		// if ($kognisi=="periksa" || $afeksi=="periksa" || $psikomotor=="periksa" || $akademik=="periksa" || $sosial=="periksa" && $status=="periksa") {
		// 	$data["isi"]=array(
		// 	'status' => "belum diperiksa",
		// 	);	
		// }else{
		// 	$data["isi"]=array(
		// 	'status' => "sudah diperiksa",
		// 	);	
		// }

		$this->load->view('v_karyawanDashboard',$data);
		}
		
	}
	public function tampilanKaryawanNotifikasi()
	{
		$this->load->view('v_karyawanNotifikasi');
	}
	public function tampilanKaryawanPeriksa()
	{
		$idKaryawan=$this->session->userdata('idKaryawan');
		$data["pelanggan"]=$this->m_karyawan->get_periksaPasien($idKaryawan)->result_array();
		$this->load->view('v_karyawanPeriksa',$data);
	}
	public function tampilanKaryawanTerapi()
	{
		$idKaryawan=$this->session->userdata('idKaryawan');
		$data["pelanggan"]=$this->m_karyawan->get_perkembanganPasien($idKaryawan)->result_array();
		$this->load->view('v_karyawanTerapi',$data);
	}
	public function tampilanKaryawanPelangganDetail($id)
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
		$this->load->view('v_karyawanPelangganDetail',$data);
	}
	public function jenisPeriksa($id)
	{
		$idKaryawan=$this->session->userdata('idKaryawan');

		$data["psikomotorById"]=$this->m_karyawan->get_psikomotorById($id)->result_array();
		$data["kognisiById"]=$this->m_karyawan->get_kognisiById($id)->result_array();
		$data["afeksiById"]=$this->m_karyawan->get_afeksiById($id)->result_array();
		$data["akademikById"]=$this->m_karyawan->get_akademikById($id)->result_array();
		$data["sosialById"]=$this->m_karyawan->get_sosialById($id)->result_array();
		if ($data["psikomotorById"][0]['idKaryawan']==$idKaryawan) {
			$this->periksaPsikomotor($id);
		}
		if ($data["kognisiById"][0]['idKaryawan']==$idKaryawan) {
			$this->periksaKognisi($id);
		}
		if ($data["afeksiById"][0]['idKaryawan']==$idKaryawan) {
			$this->periksaAfeksi($id);
		}
		if ($data["akademikById"][0]['idKaryawan']==$idKaryawan) {
			$this->periksaAkademik($id);
		}
		if ($data["sosialById"][0]['idKaryawan']==$idKaryawan) {
			$this->periksaSosial($id);
		}
		
	}
	public function jenisPeriksa2($id)
	{
		$idKaryawan=$this->session->userdata('idKaryawan');

		$data["psikomotorById"]=$this->m_karyawan->get_psikomotorById($id)->result_array();
		$data["kognisiById"]=$this->m_karyawan->get_kognisiById($id)->result_array();
		$data["afeksiById"]=$this->m_karyawan->get_afeksiById($id)->result_array();
		$data["akademikById"]=$this->m_karyawan->get_akademikById($id)->result_array();
		$data["sosialById"]=$this->m_karyawan->get_sosialById($id)->result_array();
		if ($data["psikomotorById"][0]['idKaryawan']==$idKaryawan) {
			$this->perkembanganPsikomotor($id);
		}
		if ($data["kognisiById"][0]['idKaryawan']==$idKaryawan) {
			$this->perkembanganKognisi($id);
		}
		if ($data["afeksiById"][0]['idKaryawan']==$idKaryawan) {
			$this->perkembanganAfeksi($id);
		}
		if ($data["akademikById"][0]['idKaryawan']==$idKaryawan) {
			$this->perkembanganAkademik($id);
		}
		if ($data["sosialById"][0]['idKaryawan']==$idKaryawan) {
			$this->perkembanganSosial($id);
		}
		
	}
	public function periksaPsikomotor($id)
	{
		$data["psikomotor"]=$this->m_karyawan->get_psikomotor()->result_array();
		$data["nilai_psikomotor"]=$this->m_karyawan->get_psikomotorById($id)->result_array();
		$data["idPelanggan"]=$data["nilai_psikomotor"][0]['idPelanggan'];
		$this->load->view('v_periksaPsikomotor',$data);
	}
	public function periksaKognisi($id)
	{
		$data["kognisi"]=$this->m_karyawan->get_kognisi()->result_array();
		$data["nilai_kognisi"]=$this->m_karyawan->get_kognisiById($id)->result_array();
		$data["idPelanggan"]=$data["nilai_kognisi"][0]['idPelanggan'];
		// print_r($data["idPelanggan"]);
		$this->load->view('v_periksaKognisi',$data);
	}
	public function periksaAfeksi($id)
	{
		$data["afeksi"]=$this->m_karyawan->get_afeksi()->result_array();
		$data["nilai_afeksi"]=$this->m_karyawan->get_afeksiById($id)->result_array();
		$data["idPelanggan"]=$data["nilai_afeksi"][0]['idPelanggan'];
		$this->load->view('v_periksaAfeksi',$data);
	}
	public function periksaAkademik($id)
	{
		$data["akademik"]=$this->m_karyawan->get_akademik()->result_array();
		$data["nilai_akademik"]=$this->m_karyawan->get_akademikById($id)->result_array();
		$data["idPelanggan"]=$data["nilai_akademik"][0]['idPelanggan'];
		$this->load->view('v_periksaAkademik',$data);
	}
	public function periksaSosial($id)
	{
		$data["sosial"]=$this->m_karyawan->get_sosial()->result_array();
		$data["nilai_sosial"]=$this->m_karyawan->get_sosialById($id)->result_array();
		$data["idPelanggan"]=$data["nilai_sosial"][0]['idPelanggan'];
		$this->load->view('v_periksaSosial',$data);
	}
	
	public function perkembanganPsikomotor($id)
	{
		$data["psikomotor"]=$this->m_karyawan->get_psikomotor()->result_array();
		$data["rm"]=$this->m_pelanggan->get_rm()->result_array();
		$data["nilai_psikomotor"]=$this->m_karyawan->get_psikomotorById2($id)->result_array();
		$data["nilai_rm"]=$this->m_pelanggan->get_nilai_rmK($id)->result_array();
		$data["idPelanggan"]=$data["nilai_psikomotor"][0]['idPelanggan'];
		$this->load->view('v_periksaPsikomotorRm',$data);
	}
	public function perkembanganKognisi($id)
	{
		$data["kognisi"]=$this->m_karyawan->get_kognisi()->result_array();
		$data["ds"]=$this->m_pelanggan->get_ds()->result_array();
		$data["nilai_kognisi"]=$this->m_karyawan->get_kognisiById2($id)->result_array();
		$data["nilai_ds"]=$this->m_pelanggan->get_nilai_dsK($id)->result_array();
		$data["idPelanggan"]=$data["nilai_kognisi"][0]['idPelanggan'];
		// print_r($data["idPelanggan"]);
		$this->load->view('v_periksaKognisiDs',$data);
	}
	public function perkembanganAfeksi($id)
	{
		$data["afeksi"]=$this->m_karyawan->get_afeksi()->result_array();
		$data["tunalaras"]=$this->m_pelanggan->get_tunalaras()->result_array();
		$data["nilai_afeksi"]=$this->m_karyawan->get_afeksiById2($id)->result_array();
		$data["nilai_tunalaras"]=$this->m_pelanggan->get_nilai_tunalarasK($id)->result_array();
		$data["idPelanggan"]=$data["nilai_afeksi"][0]['idPelanggan'];
		$this->load->view('v_periksaAfeksiTunalaras',$data);
	}
	public function perkembanganAkademik($id)
	{
		$data["akademik"]=$this->m_karyawan->get_akademik()->result_array();
		$data["sl"]=$this->m_pelanggan->get_sl()->result_array();
		$data["nilai_akademik"]=$this->m_karyawan->get_akademikById2($id)->result_array();
		$data["nilai_sl"]=$this->m_pelanggan->get_nilai_slK($id)->result_array();
		$data["idPelanggan"]=$data["nilai_akademik"][0]['idPelanggan'];
		$this->load->view('v_periksaAkademikSl',$data);
	}
	public function perkembanganSosial($id)
	{
		$data["sosial"]=$this->m_karyawan->get_sosial()->result_array();
		$data["adhd"]=$this->m_pelanggan->get_adhd()->result_array();
		$data["autis"]=$this->m_pelanggan->get_autis()->result_array();
		$data["nilai_sosial"]=$this->m_karyawan->get_sosialById2($id)->result_array();
		$data["nilai_adhd"]=$this->m_pelanggan->get_nilai_adhdK($id)->result_array();
		$data["nilai_autis"]=$this->m_pelanggan->get_nilai_autisK($id)->result_array();
		$data["idPelanggan"]=$data["nilai_sosial"][0]['idPelanggan'];
		$this->load->view('v_periksaSosialAdhd',$data);
	}
	public function set_psikomotor()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idKaryawan= $this->input->post("idKaryawan");
 		$idData= $this->input->post("idData");
 		$nilai=$this->input->post("strState");
 		$tahap=1;
 		$this->load->model('m_karyawan');

 		$this->m_karyawan->set_psikomotor($idPelanggan,$idKaryawan,$idData,$tahap,$nilai);
 		$data["nilai_psikomotor"]=$this->m_karyawan->get_psikomotorById($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		$cek=0;
 		for ($i=0; $i <= 16; $i++) { 
 			
 			$jumlah+=intval($data["nilai_psikomotor"][$i]['nilai']);
 			//node2
 			if (intval($data["nilai_psikomotor"][$i]['nilai'])==0) {
 				$cek=1;
 			}
 		}
 		$jumlah=$jumlah/17;
 		$hasil="";
 		if ($jumlah>20) {
 			//node 3
 			$hasil= "B";
 			//node 4
 		} else if ($jumlah>10) {
 			$hasil= "C";
 		} else if ($jumlah>0){
 			$hasil= "K";
 		}else{
 			$hasil= "Belum diperiksa";
 		}
 		
		// print_r($data["pelanggan"][0]['statusPsikomotor']);
 		$this->m_karyawan->set_hasil_psikomotor($idPelanggan,$idKaryawan,18,$tahap,$hasil);
 		if ($cek==0) {
 			$this->m_karyawan->set_sudahPeriksa($idPelanggan,'statusPsikomotor','pelanggan');
 		}
 		$this->periksaPsikomotor($idPelanggan);
	}
	public function set_psikomotor2()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idKaryawan= $this->input->post("idKaryawan");
 		$idData= $this->input->post("idData");
 		$nilai=$this->input->post("strState");
 		$tahap=2;
 		$this->load->model('m_karyawan');

 		$this->m_karyawan->set_psikomotor($idPelanggan,$idKaryawan,$idData,$tahap,$nilai);
 		$data["nilai_psikomotor"]=$this->m_karyawan->get_psikomotorById2($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 16; $i++) { 
 			$jumlah+=intval($data["nilai_psikomotor"][$i]['nilai']);
 			
 		}
 		$jumlah=$jumlah/17;
 		$hasil="";
 		if ($jumlah>20) {
 			$hasil= "B";
 		} else if ($jumlah>10) {
 			$hasil= "C";
 		} else {
 			$hasil= "K";
 		}
 		
		// print_r($data["pelanggan"][0]['statusPsikomotor']);
 		$this->m_karyawan->set_hasil_psikomotor($idPelanggan,$idKaryawan,18,$tahap,$hasil);
		$this->m_karyawan->set_sudahPeriksa($idPelanggan,'perkPsikomotor','pelanggan');
		$data["pelanggan"]=$this->m_karyawan->get_pelanggan($idPelanggan)->result_array();
 		$perkPsikomotor=$data["pelanggan"][0]['perkPsikomotor'];
		$perkKognisi=$data["pelanggan"][0]['perkKognisi'];
		$perkAfeksi=$data["pelanggan"][0]['perkAfeksi'];
		$perkAkademik=$data["pelanggan"][0]['perkAkademik'];
		$perkSosial=$data["pelanggan"][0]['perkSosial'];

		if ($perkPsikomotor=="sudah diperiksa" && $perkKognisi=="sudah diperiksa" && $perkAfeksi=="sudah diperiksa" && $perkAkademik=="sudah diperiksa" && $perkSosial=="sudah diperiksa") {
						$this->m_karyawan->set_lanjutHasilPerkembangan($idPelanggan,'status','pelanggan');
		}
 		$this->perkembanganPsikomotor($idPelanggan);
	}
	public function set_data_psikomotor()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idKaryawan= $this->input->post("idKaryawan");
 		$idData= $this->input->post("idData");
 		$namaKolom= $this->input->post("namaKolom");
 		$tahap= $this->input->post("tahap");
 		$nilai=$this->input->post("value");
 		$this->load->model('m_karyawan');

 		$this->m_karyawan->set_data_psikomotor($idPelanggan,$idKaryawan, $namaKolom,$tahap,$idData,$nilai);
		
	}
	public function set_rm()
	{
		$idPelanggan= $this->input->post("id");
 		$idGejala= $this->input->post("idGejala");
 		$nilai=$this->input->post("strState");
 		$this->load->model('m_pelanggan');

 		$this->m_pelanggan->set_rmK($idPelanggan,$idGejala,$nilai);
 		$data["nilai_rm"]=$this->m_pelanggan->get_nilai_rmK($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 23; $i++) { 
 			$jumlah+=intval($data["nilai_rm"][$i]['nilai']);
 			echo $jumlah;
 		}
 		
 		$this->m_pelanggan->set_hasil_rmK($idPelanggan,25,$jumlah);
		
	}
	
	public function set_afeksi()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idKaryawan= $this->input->post("idKaryawan");
 		$idData= $this->input->post("idData");
 		$tahap=1;
 		$nilai=$this->input->post("strState");
 		$this->load->model('m_karyawan');

 		$this->m_karyawan->set_afeksi($idPelanggan,$idKaryawan,$idData,$tahap,$nilai);
 		$data["nilai_afeksi"]=$this->m_karyawan->get_afeksiById($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 13; $i++) { 
 			$jumlah+=intval($data["nilai_afeksi"][$i]['nilai']);
 			
 		}
 		$jumlah=$jumlah/14;
 		$hasil="";
 		if ($jumlah>20) {
 			$hasil= "B";
 		} else if ($jumlah>10) {
 			$hasil= "C";
 		} else {
 			$hasil= "K";
 		}
 		$this->m_karyawan->set_hasil_afeksi($idPelanggan,$idKaryawan,15,$tahap,$hasil);
		$this->m_karyawan->set_sudahPeriksa($idPelanggan,'statusAfeksi','pelanggan');
		$data["pelanggan"]=$this->m_karyawan->get_pelanggan($idPelanggan)->result_array();
 		$psikomotor=$data["pelanggan"][0]['statusPsikomotor'];
		$kognisi=$data["pelanggan"][0]['statusKognisi'];
		$afeksi=$data["pelanggan"][0]['statusAfeksi'];
		$akademik=$data["pelanggan"][0]['statusAkademik'];
		$sosial=$data["pelanggan"][0]['statusSosial'];
		if ($psikomotor=="sudah diperiksa" && $kognisi=="sudah diperiksa" && $afeksi=="sudah diperiksa" && $akademik=="sudah diperiksa" && $sosial=="sudah diperiksa") {
						$this->m_karyawan->set_lanjutHasilPeriksa($idPelanggan,'status','pelanggan');
						
		}
 		$this->periksaAfeksi($idPelanggan);
	}
	public function set_afeksi2()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idKaryawan= $this->input->post("idKaryawan");
 		$idData= $this->input->post("idData");
 		$nilai=$this->input->post("strState");
 		$tahap=2;
 		$this->load->model('m_karyawan');

 		$this->m_karyawan->set_afeksi($idPelanggan,$idKaryawan,$idData,$tahap,$nilai);
 		$data["nilai_afeksi"]=$this->m_karyawan->get_afeksiById2($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 13; $i++) { 
 			$jumlah+=intval($data["nilai_afeksi"][$i]['nilai']);
 			
 		}
 		$jumlah=$jumlah/14;
 		$hasil="";
 		if ($jumlah>20) {
 			$hasil= "B";
 		} else if ($jumlah>10) {
 			$hasil= "C";
 		} else {
 			$hasil= "K";
 		}
 		$this->m_karyawan->set_hasil_afeksi($idPelanggan,$idKaryawan,15,$tahap,$hasil);
		$this->m_karyawan->set_sudahPeriksa($idPelanggan,'perkAfeksi','pelanggan');
		$data["pelanggan"]=$this->m_karyawan->get_pelanggan($idPelanggan)->result_array();
		$perkPsikomotor=$data["pelanggan"][0]['perkPsikomotor'];
		$perkKognisi=$data["pelanggan"][0]['perkKognisi'];
		$perkAfeksi=$data["pelanggan"][0]['perkAfeksi'];
		$perkAkademik=$data["pelanggan"][0]['perkAkademik'];
		$perkSosial=$data["pelanggan"][0]['perkSosial'];

		if ($perkPsikomotor=="sudah diperiksa" && $perkKognisi=="sudah diperiksa" && $perkAfeksi=="sudah diperiksa" && $perkAkademik=="sudah diperiksa" && $perkSosial=="sudah diperiksa") {
						$this->m_karyawan->set_lanjutHasilPerkembangan($idPelanggan,'status','pelanggan');
		}
 		$this->perkembanganAfeksi($idPelanggan);
	}
	public function set_data_afeksi()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idKaryawan= $this->input->post("idKaryawan");
 		$idData= $this->input->post("idData");
 		$namaKolom= $this->input->post("namaKolom");
 		$tahap= $this->input->post("tahap");
 		$nilai=$this->input->post("value");
 		$this->load->model('m_karyawan');

 		$this->m_karyawan->set_data_afeksi($idPelanggan,$idKaryawan, $namaKolom,$tahap,$idData,$nilai);
		
	}
	public function set_tunalaras()
	{
		$idPelanggan= $this->input->post("id");
 		$idGejala= $this->input->post("idGejala");
 		$nilai=$this->input->post("strState");
 		$this->load->model('m_pelanggan');

 		$this->m_pelanggan->set_tunalarasK($idPelanggan,$idGejala,$nilai);
 		$data["nilai_tunalaras"]=$this->m_pelanggan->get_nilai_tunalarasK($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 38; $i++) { 
 			$jumlah+=intval($data["nilai_tunalaras"][$i]['nilai']);
 			echo $jumlah;
 		}
 		
 		$this->m_pelanggan->set_hasil_tunalarasK($idPelanggan,40,$jumlah);
		
	}
	public function set_akademik()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idKaryawan= $this->input->post("idKaryawan");
 		$idData= $this->input->post("idData");
 		$nilai=$this->input->post("strState");
 		$tahap=1;
 		$this->load->model('m_karyawan');

 		$this->m_karyawan->set_akademik($idPelanggan,$idKaryawan,$idData,$tahap,$nilai);
 		$data["nilai_akademik"]=$this->m_karyawan->get_akademikById($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 20; $i++) { 
 			$jumlah+=intval($data["nilai_akademik"][$i]['nilai']);
 			
 		}
 		$jumlah=$jumlah/21;
 		$hasil="";
 		if ($jumlah>20) {
 			$hasil= "B";
 		} else if ($jumlah>10) {
 			$hasil= "C";
 		} else {
 			$hasil= "K";
 		}
 		$this->m_karyawan->set_hasil_akademik($idPelanggan,$idKaryawan,22,$tahap,$hasil);
		$this->m_karyawan->set_sudahPeriksa($idPelanggan,'statusAkademik','pelanggan');
		$data["pelanggan"]=$this->m_karyawan->get_pelanggan($idPelanggan)->result_array();
 		$psikomotor=$data["pelanggan"][0]['statusPsikomotor'];
		$kognisi=$data["pelanggan"][0]['statusKognisi'];
		$afeksi=$data["pelanggan"][0]['statusAfeksi'];
		$akademik=$data["pelanggan"][0]['statusAkademik'];
		$sosial=$data["pelanggan"][0]['statusSosial'];
		if ($psikomotor=="sudah diperiksa" && $kognisi=="sudah diperiksa" && $afeksi=="sudah diperiksa" && $akademik=="sudah diperiksa" && $sosial=="sudah diperiksa") {
						$this->m_karyawan->set_lanjutHasilPeriksa($idPelanggan,'status','pelanggan');
						
						
		}
 		$this->periksaAkademik($idPelanggan);
	}
	public function set_akademik2()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idKaryawan= $this->input->post("idKaryawan");
 		$idData= $this->input->post("idData");
 		$nilai=$this->input->post("strState");
 		$tahap=2;
 		$this->load->model('m_karyawan');

 		$this->m_karyawan->set_akademik($idPelanggan,$idKaryawan,$idData,$tahap,$nilai);
 		$data["nilai_akademik"]=$this->m_karyawan->get_akademikById2($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 20; $i++) { 
 			$jumlah+=intval($data["nilai_akademik"][$i]['nilai']);
 			
 		}
 		$jumlah=$jumlah/21;
 		$hasil="";
 		if ($jumlah>20) {
 			$hasil= "B";
 		} else if ($jumlah>10) {
 			$hasil= "C";
 		} else {
 			$hasil= "K";
 		}
 		$this->m_karyawan->set_hasil_akademik($idPelanggan,$idKaryawan,22,$tahap,$hasil);
		$this->m_karyawan->set_sudahPeriksa($idPelanggan,'perkAkademik','pelanggan');
		$data["pelanggan"]=$this->m_karyawan->get_pelanggan($idPelanggan)->result_array();
		$perkPsikomotor=$data["pelanggan"][0]['perkPsikomotor'];
		$perkKognisi=$data["pelanggan"][0]['perkKognisi'];
		$perkAfeksi=$data["pelanggan"][0]['perkAfeksi'];
		$perkAkademik=$data["pelanggan"][0]['perkAkademik'];
		$perkSosial=$data["pelanggan"][0]['perkSosial'];

		if ($perkPsikomotor=="sudah diperiksa" && $perkKognisi=="sudah diperiksa" && $perkAfeksi=="sudah diperiksa" && $perkAkademik=="sudah diperiksa" && $perkSosial=="sudah diperiksa") {
						$this->m_karyawan->set_lanjutHasilPerkembangan($idPelanggan,'status','pelanggan');
		}
 		$this->perkembanganAkademik($idPelanggan);
	}
	public function set_data_akademik()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idKaryawan= $this->input->post("idKaryawan");
 		$idData= $this->input->post("idData");
 		$namaKolom= $this->input->post("namaKolom");
 		$nilai=$this->input->post("value");
 		$tahap= $this->input->post("tahap");
 		$this->load->model('m_karyawan');

 		$this->m_karyawan->set_data_akademik($idPelanggan,$idKaryawan, $namaKolom,$tahap,$idData,$nilai);
		
	}
	public function set_sl()
	{
		$idPelanggan= $this->input->post("id");
 		$idGejala= $this->input->post("idGejala");
 		$nilai=$this->input->post("strState");
 		$this->load->model('m_pelanggan');

 		$this->m_pelanggan->set_slK($idPelanggan,$idGejala,$nilai);
 		$data["nilai_sl"]=$this->m_pelanggan->get_nilai_slK($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 21; $i++) { 
 			$jumlah+=intval($data["nilai_sl"][$i]['nilai']);
 			echo $jumlah;
 		}
 		
 		$this->m_pelanggan->set_hasil_slK($idPelanggan,23,$jumlah);
		
	}

	public function set_kognisi()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idKaryawan= $this->input->post("idKaryawan");
 		$idData= $this->input->post("idData");
 		$nilai=$this->input->post("strState");
 		$tahap=1;
 		$this->load->model('m_karyawan');

 		$this->m_karyawan->set_kognisi($idPelanggan,$idKaryawan,$idData,$tahap,$nilai);
 		$data["nilai_kognisi"]=$this->m_karyawan->get_kognisiById($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 13; $i++) { 
 			$jumlah+=intval($data["nilai_kognisi"][$i]['nilai']);
 			
 		}
 		$jumlah=$jumlah/14;
 		$hasil="";
 		if ($jumlah>20) {
 			$hasil= "B";
 		} else if ($jumlah>10) {
 			$hasil= "C";
 		} else {
 			$hasil= "K";
 		}

 		$this->m_karyawan->set_hasil_kognisi($idPelanggan,$idKaryawan,15,$tahap,$hasil);
 		$this->m_karyawan->set_sudahPeriksa($idPelanggan,'statusKognisi','pelanggan');
 		$data["pelanggan"]=$this->m_karyawan->get_pelanggan($idPelanggan)->result_array();
 		$psikomotor=$data["pelanggan"][0]['statusPsikomotor'];
		$kognisi=$data["pelanggan"][0]['statusKognisi'];
		$afeksi=$data["pelanggan"][0]['statusAfeksi'];
		$akademik=$data["pelanggan"][0]['statusAkademik'];
		$sosial=$data["pelanggan"][0]['statusSosial'];
		if ($psikomotor=="sudah diperiksa" && $kognisi=="sudah diperiksa" && $afeksi=="sudah diperiksa" && $akademik=="sudah diperiksa" && $sosial=="sudah diperiksa") {
						$this->m_karyawan->set_lanjutHasilPeriksa($idPelanggan,'status','pelanggan');
						
						
		}
 		$this->periksaKognisi($idPelanggan);
		
	}
	public function set_kognisi2()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idKaryawan= $this->input->post("idKaryawan");
 		$idData= $this->input->post("idData");
 		$nilai=$this->input->post("strState");
 		$tahap=2;
 		$this->load->model('m_karyawan');

 		$this->m_karyawan->set_kognisi($idPelanggan,$idKaryawan,$idData,$tahap,$nilai);
 		$data["nilai_kognisi"]=$this->m_karyawan->get_kognisiById2($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 13; $i++) { 
 			$jumlah+=intval($data["nilai_kognisi"][$i]['nilai']);
 			
 		}
 		$jumlah=$jumlah/14;
 		$hasil="";
 		if ($jumlah>20) {
 			$hasil= "B";
 		} else if ($jumlah>10) {
 			$hasil= "C";
 		} else {
 			$hasil= "K";
 		}

 		$this->m_karyawan->set_hasil_kognisi($idPelanggan,$idKaryawan,15,$tahap,$hasil);
 		$this->m_karyawan->set_sudahPeriksa($idPelanggan,'perkKognisi','pelanggan');
 		$data["pelanggan"]=$this->m_karyawan->get_pelanggan($idPelanggan)->result_array();
 		$perkPsikomotor=$data["pelanggan"][0]['perkPsikomotor'];
		$perkKognisi=$data["pelanggan"][0]['perkKognisi'];
		$perkAfeksi=$data["pelanggan"][0]['perkAfeksi'];
		$perkAkademik=$data["pelanggan"][0]['perkAkademik'];
		$perkSosial=$data["pelanggan"][0]['perkSosial'];

		if ($perkPsikomotor=="sudah diperiksa" && $perkKognisi=="sudah diperiksa" && $perkAfeksi=="sudah diperiksa" && $perkAkademik=="sudah diperiksa" && $perkSosial=="sudah diperiksa") {
						$this->m_karyawan->set_lanjutHasilPerkembangan($idPelanggan,'status','pelanggan');
		}
 		$this->perkembanganKognisi($idPelanggan);
		
	}
	public function set_data_kognisi()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idKaryawan= $this->input->post("idKaryawan");
 		$idData= $this->input->post("idData");
 		$namaKolom= $this->input->post("namaKolom");
 		$nilai=$this->input->post("value");
 		$tahap= $this->input->post("tahap");
 		$this->load->model('m_karyawan');

 		$this->m_karyawan->set_data_kognisi($idPelanggan,$idKaryawan, $namaKolom,$tahap,$idData,$nilai);
		
	}
	public function set_ds()
	{
		$idPelanggan= $this->input->post("id");
 		$idGejala= $this->input->post("idGejala");
 		$nilai=$this->input->post("strState");
 		$this->load->model('m_pelanggan');

 		$this->m_pelanggan->set_dsK($idPelanggan,$idGejala,$nilai);
 		$data["nilai_ds"]=$this->m_pelanggan->get_nilai_dsK($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 32; $i++) { 
 			$jumlah+=intval($data["nilai_ds"][$i]['nilai']);
 			echo $jumlah;
 		}
 		
 		$this->m_pelanggan->set_hasil_dsK($idPelanggan,34,$jumlah);
		
	}

	public function set_sosial()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idKaryawan= $this->input->post("idKaryawan");
 		$idData= $this->input->post("idData");
 		$nilai=$this->input->post("strState");
 		$tahap=1;
 		$this->load->model('m_karyawan');

 		$this->m_karyawan->set_sosial($idPelanggan,$idKaryawan,$idData,$tahap,$nilai);
 		$data["nilai_sosial"]=$this->m_karyawan->get_sosialById($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 10; $i++) { 
 			$jumlah+=intval($data["nilai_sosial"][$i]['nilai']);
 			
 		}
 		$jumlah=$jumlah/11;
 		$hasil="";
 		if ($jumlah>20) {
 			$hasil= "B";
 		} else if ($jumlah>10) {
 			$hasil= "C";
 		} else {
 			$hasil= "K";
 		}
 		$this->m_karyawan->set_hasil_sosial($idPelanggan,$idKaryawan,12,$tahap,$hasil);
		$this->m_karyawan->set_sudahPeriksa($idPelanggan,'statusSosial','pelanggan');
		
 		$this->periksaSosial($idPelanggan);
	}
	public function set_sosial2()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idKaryawan= $this->input->post("idKaryawan");
 		$idData= $this->input->post("idData");
 		$nilai=$this->input->post("strState");
 		$tahap=2;
 		$this->load->model('m_karyawan');

 		$this->m_karyawan->set_sosial($idPelanggan,$idKaryawan,$idData,$tahap,$nilai);
 		$data["nilai_sosial"]=$this->m_karyawan->get_sosialById($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 10; $i++) { 
 			$jumlah+=intval($data["nilai_sosial"][$i]['nilai']);
 			
 		}
 		$jumlah=$jumlah/11;
 		$hasil="";
 		if ($jumlah>20) {
 			$hasil= "B";
 		} else if ($jumlah>10) {
 			$hasil= "C";
 		} else {
 			$hasil= "K";
 		}
 		$this->m_karyawan->set_hasil_sosial($idPelanggan,$idKaryawan,12,$tahap,$hasil);
		$this->m_karyawan->set_sudahPeriksa($idPelanggan,'perkSosial','pelanggan');
		$data["pelanggan"]=$this->m_karyawan->get_pelanggan($idPelanggan)->result_array();
 		$perkPsikomotor=$data["pelanggan"][0]['perkPsikomotor'];
		$perkKognisi=$data["pelanggan"][0]['perkKognisi'];
		$perkAfeksi=$data["pelanggan"][0]['perkAfeksi'];
		$perkAkademik=$data["pelanggan"][0]['perkAkademik'];
		$perkSosial=$data["pelanggan"][0]['perkSosial'];

		if ($perkPsikomotor=="sudah diperiksa" && $perkKognisi=="sudah diperiksa" && $perkAfeksi=="sudah diperiksa" && $perkAkademik=="sudah diperiksa" && $perkSosial=="sudah diperiksa") {
						$this->m_karyawan->set_lanjutHasilPerkembangan($idPelanggan,'status','pelanggan');
		}
		

 		$this->perkembanganSosial($idPelanggan);
	}
	public function set_data_sosial()
	{
		$idPelanggan= $this->input->post("idPelanggan");
		$idKaryawan= $this->input->post("idKaryawan");
 		$idData= $this->input->post("idData");
 		$namaKolom= $this->input->post("namaKolom");
 		$nilai=$this->input->post("value");
 		$tahap= $this->input->post("tahap");
 		$this->load->model('m_karyawan');

 		$this->m_karyawan->set_data_sosial($idPelanggan,$idKaryawan, $namaKolom,$tahap,$idData,$nilai);
		
	}
	public function set_adhd()
	{
		$idPelanggan= $this->input->post("id");
 		$idGejala= $this->input->post("idGejala");
 		$nilai=$this->input->post("strState");
 		$this->load->model('m_pelanggan');

 		$this->m_pelanggan->set_adhdK($idPelanggan,$idGejala,$nilai);
 		$data["nilai_adhd"]=$this->m_pelanggan->get_nilai_adhdK($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 17; $i++) { 
 			$jumlah+=intval($data["nilai_adhd"][$i]['nilai']);
 			echo $jumlah;
 		}
 		
 		$this->m_pelanggan->set_hasil_adhdK($idPelanggan,19,$jumlah);
		
	}
	public function set_autis()
	{
		$idPelanggan= $this->input->post("id");
 		$idGejala= $this->input->post("idGejala");
 		$nilai=$this->input->post("strState");
 		$this->load->model('m_pelanggan');

 		$this->m_pelanggan->set_autisK($idPelanggan,$idGejala,$nilai);
 		$data["nilai_autis"]=$this->m_pelanggan->get_nilai_autisK($idPelanggan)->result_array();
 		// print_r($data["nilai_adhd"]);
 		$jumlah=0;
 		for ($i=0; $i <= 8; $i++) { 
 			$jumlah+=intval($data["nilai_autis"][$i]['nilai']);
 			echo $jumlah;
 		}
 		
 		$this->m_pelanggan->set_hasil_autisK($idPelanggan,10,$jumlah);
		
	}

	public function set_lanjutHasilPeriksa($id)
	{
 		$data["pelanggan"]=$this->m_karyawan->get_pelanggan($id)->result_array();
 		$psikomotor=$data["pelanggan"][0]['statusPsikomotor'];
		$kognisi=$data["pelanggan"][0]['statusKognisi'];
		$afeksi=$data["pelanggan"][0]['statusAfeksi'];
		$akademik=$data["pelanggan"][0]['statusAkademik'];
		$sosial=$data["pelanggan"][0]['statusSosial'];
		if ($psikomotor=="sudah diperiksa" && $kognisi=="sudah diperiksa" && $afeksi=="sudah diperiksa" && $akademik=="sudah diperiksa" && $sosial=="sudah diperiksa") {
						$this->m_karyawan->set_lanjutHasilPeriksa($id,'status','pelanggan');
						
		}
		$this->index();
	}
	public function set_lanjutHasilPerkembangan($id)
	{
 		$data["pelanggan"]=$this->m_karyawan->get_pelanggan($id)->result_array();
 		$perkPsikomotor=$data["pelanggan"][0]['perkPsikomotor'];
		$perkKognisi=$data["pelanggan"][0]['perkKognisi'];
		$perkAfeksi=$data["pelanggan"][0]['perkAfeksi'];
		$perkAkademik=$data["pelanggan"][0]['perkAkademik'];
		$perkSosial=$data["pelanggan"][0]['perkSosial'];
 		
		if ($perkPsikomotor=="sudah diperiksa" && $perkKognisi=="sudah diperiksa" && $perkAfeksi=="sudah diperiksa" && $perkAkademik=="sudah diperiksa" && $perkSosial=="sudah diperiksa") {
						$this->m_karyawan->set_lanjutHasilPerkembangan($id,'status','pelanggan');
						
		}
		$this->index();
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
