<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page{
	private $ci;
	private $curLang;
	public function __construct(){
		$this->ci =& get_instance();
		$this->ci->load->library('languagelib');
		$this->curLang=$this->ci->languagelib->getLang();
	}
	public function loadpage($pagename,$data=false){
		$this->ci->lang->load('header', $this->curLang);
		$data['session']=array(
			'name'=>$this->ci->session->userdata('name'),
			'surname'=>$this->ci->session->userdata('surname'),
			'email'=>$this->ci->session->userdata('email')
		);
		$data['curLang']=$this->curLang;
		$this->ci->load->view('header',$data);
		$this->ci->load->view($pagename,$data);
		$this->ci->lang->load('footer', $this->curLang);
		$this->ci->load->view('footer');
	}
}