<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class How_it_works extends CI_Controller {
	public function index()
	{	
		$this->lang->load('how_it_works', $this->languagelib->getLang());
		$this->page->loadpage('how_it_works_view');
		
	}

}
