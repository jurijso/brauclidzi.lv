<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function login(){
		if (!$this->input->post()){
			$this->lang->load('login', $this->languagelib->getLang());
			$this->page->loadpage('login_view');
		} else {		
			$this->load->library('form_validation');
			$config = array(
				array(
					'field'   => 'email', 
					'label'   => 'Email', 
					'rules'   => 'required'
					),
				array(
					'field'   => 'password', 
					'label'   => 'Password', 
					'rules'   => 'required'
					)
				);
			$this->form_validation->set_rules($config);
			if ($this->form_validation->run() == FALSE)
			{
				$this->lang->load('login', $this->languagelib->getLang());
				$this->page->loadpage('login_view');
			} else {
				$this->load->model("users_model");
				$login=$this->users_model->login($this->input->post());
				$this->users_model->login($this->input->post());
				if (!$login){
					$this->lang->load('login', $this->languagelib->getLang());
					$data['login_error']=$this->lang->line('login_loginerror'); 
					$this->page->loadpage('login_view',$data);
				} else {
					$userdata=array(
						'name'=>$login["name"],
						'surname'=>$login["surname"],
						'email'=>$login["email"]
						);
					$this->session->set_userdata($userdata);

					redirect(base_url());
				}
			}

		}

	}
	public function register(){
		if (!$this->input->post()){
			$this->lang->load('register', $this->languagelib->getLang());
			$this->page->loadpage('register_view');
		}else{
			$this->load->library('form_validation');
			$config = array(
				array(
					'field'   => 'sex', 
					'label'   => 'Sex', 
					'rules'   => 'required'
					),
				array(
					'field'   => 'name', 
					'label'   => 'Name', 
					'rules'   => 'required'
					),
				array(
					'field'   => 'surname', 
					'label'   => 'Surname', 
					'rules'   => 'required'
					),
				array(
					'field'   => 'email', 
					'label'   => 'Email', 
					'rules'   => 'required|valid_email|is_unique[users.email]'
					),
				array(
					'field'   => 'password', 
					'label'   => 'Password', 
					'rules'   => 'required|min_length[5]'
					),
				array(
					'field'   => 'password_conf', 
					'label'   => 'Password confirmation', 
					'rules'   => 'required|matches[password]'
					),
				array(
					'field'   => 'year_of_birth', 
					'label'   => 'Year of birth', 
					'rules'   => 'required'
					)
				);
			$this->form_validation->set_rules($config);

			if ($this->form_validation->run()==FALSE){
				$this->lang->load('register', $this->languagelib->getLang());
				$this->page->loadpage('register_view');												
			} else {
				$this->load->model("users_model");
				$this->users_model->add_user($this->input->post());
				$this->lang->load('register_success', $this->languagelib->getLang());
				$this->page->loadpage('register_view_success');
			}
		}
	}
	public function logout(){
		
	}

}
