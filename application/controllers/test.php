<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$this->lang->load('header','lv');
		$data['lang']=$this->lang->line();
		print_r($data);
		$this->page->loadpage("testview");
		echo $this->session->userdata('lang',$data);	
	}
}
