<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{	
		$this->lang->load('home', $this->languagelib->getLang());
		$this->page->loadpage('home_view');
		
	}

}
