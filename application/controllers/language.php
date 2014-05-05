<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Language extends CI_Controller {
	public function index(){
		$this->load->view('test');
	}
	public function changeLng($lang=false){
		$this->languagelib->setLang($lang);
		redirect(base_url());
	}


}