<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Captcha extends CI_Controller
{
    function __construct() {
		parent::__construct();
		// Load the captcha helper
		$this->load->helper('captcha');
    }
    
    public function index(){
		// If captcha form is submitted
		if($this->input->post('submit')){
			$inputCaptcha = $this->input->post('captcha');
			$sessCaptcha = $this->session->userdata('captchaCode');
			$home = base_url();
			if($inputCaptcha === $sessCaptcha){
				redirect($home."registrasi/set_dataAlumni/");
			}else{
				echo 'Captcha code was not match, please try again.';
			}
		}
		
		// Captcha configuration
		$config = array(
			'img_path'      => 'captcha_images/',
			'img_url'       => base_url().'captcha_images/',
			'img_width'     => '150',
			'img_height'    => 50,
			'word_length'   => 3,
			'font_size'     => 30
		);
		$captcha = create_captcha($config);
		
		// Unset previous captcha and store new captcha word
		$this->session->unset_userdata('captchaCode');
		$this->session->set_userdata('captchaCode',$captcha['word']);
		
		// Send captcha image to view
		$data['captchaImg'] = $captcha['image'];
		
		// Load the view
		$this->load->view('captcha', $data);
    }
	
	public function refresh(){
		// Captcha configuration
		$config = array(
			'img_path'      => 'captcha_images/',
			'img_url'       => base_url().'captcha_images/',
			'img_width'     => '150',
			'img_height'    => 50,
			'word_length'   => 3,
			'font_size'     => 30
		);
		$captcha = create_captcha($config);
		
		// Unset previous captcha and store new captcha word
		$this->session->unset_userdata('captchaCode');
		$this->session->set_userdata('captchaCode',$captcha['word']);
		
		// Display captcha image
		echo $captcha['image'];
	}
}