<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Languagelib{
	private $langs = array('latvian'=>'Latviešu','russian'=>'Русский');
	private $default = 'latvian';
	private $ci;
	public function __construct(){
		$this -> ci =& get_instance(); 
		if(!$this->ci->session->userdata('lang'));
		$this->ci->session->set_userdata('lang',$this->default);
		
	}
	public function setLang($lang=false){ 
		$this->ci->session->set_userdata('lang',$lang);
	}
	public function getLang(){
		if (!$this->ci->session->userdata('lang')){
			return $this->default;
		} else {
			return $this->ci->session->userdata('lang');}
		}
		public function get_all_langs(){ 
			return $this ->langs;
		}

	}