<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_pelanggan');
		$this->load->helper('url');
		$this->load->database();
	}
	public function index()
	{
		if($this->session->userdata('email')==null){
		$this->load->view('Login');
		}else{
			$this->cliant_dashboard();
		}
	}
	public function cliant_dashboard(){
		$this->load->model('M_login');
		$cek = $this->M_login->get_pelangganById($this->session->userdata('idPelanggan'))->result();	
		if (count($cek)==0){
			$gagal['gagal'] = "gagal";
			$this->load->view('Login', $gagal);
		}else{
			foreach ($cek as $c){
				
			};
			$data_session = array(
			'username' => $c->username,
			'idPelanggan' => $c->idPelanggan,
			'fotoProfil' => $c->fotoPelanggan,
			'status' => $c->status
			);
			$this->load->model('M_transaksi');
		// 	$pembayaran = $this->M_transaksi->get_dataPembayaran($c->idPelanggan)->result();
		// if (count($pembayaran)>0){
		// 	foreach ($pembayaran as $p){
				
		// 	};
		// 	$data_session['statusPengiriman'] = $p->statusPengiriman;
		// 	$data_session['statusPembayaran'] = $p->statusPembayaran;
			
		// }else{
		// 	$data_session['statusPengiriman'] = '';
		// 	$data_session['statusPembayaran'] = 'pending';
		// }
			$this->session->set_userdata($data_session);
		$this->load->view('v_pelanggan');
		}
	}
	public function captcha()
	{
		$this->load->view('Captcha');
	}
}
