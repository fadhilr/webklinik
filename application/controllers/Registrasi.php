<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {
	
	
	public function index()
	{
 
        $this->load->view('Registrasi');
	}
	public function cek()
	{
		$nama =  $this->input->post('nama');
		$nomorHp =  $this->input->post('nomorHp');
		$password =  $this->input->post('password');
		$this->load->model('M_registrasi');
		$datas = $this->M_registrasi->get_nomorHp()->result();
		$set=0;
		$home = base_url();
		foreach($datas as $d){
			if($d->nomorHp == $nomorHp){
				$set++;
			}
		}
		if($set==0){
			$this->session->set_userdata('nama',$nama);
			$this->session->set_userdata('email',$email);
			$this->session->set_userdata('password',$password);
			//redirect($home."captcha/");
			//$this->set_dataAlumni();
		}else{
			$gagal['gagal'] = "gagal";
			$this->load->view('registrasi', $gagal);
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
	
}
?>