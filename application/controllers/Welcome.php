<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		//echo 'haha';
		redirect('/welcome/login');
	}		
	public function login(){
		$this->load->view('login.php');
	}
	public function login_admin(){
		$this->load->view('login_admin.php');
	}
	public function verify_admin(){
		$this->form_validation->set_rules('nom','Nom','required');
		$this->form_validation->set_rules('mdp','Mot de passe','required');

		if($this->form_validation->run()==FALSE){
			$this->load->view('login_admin.php');
		}
		else{
			$this->load->model('AdminModel');
			$nom = $this->input->post('nom');
			$mdp = $this -> input -> post('mdp');
			$user = $this->AdminModel->check($nom,$mdp); 
			if($user==null){
				redirect('welcome/login_admin');
			}
			else{
				$this->session->set_userdata('user',$user);
				redirect('accueilAdmin/index');
			}
		}
	}
	public function inscription(){
		$this->load->view('inscription.php');
	}
	public function verify(){

		$this->form_validation->set_rules('nom','Nom','required');
		$this->form_validation->set_rules('mdp','Mot de passe','required');

		if($this->form_validation->run()==FALSE){
			$this->load->view('login.php');
		}
		else{
			$this->load->model('UserModel');
			$nom = $this->input->post('nom');
			$mdp = $this -> input -> post('mdp');
			$user = $this->UserModel->check($nom,$mdp); 
			if($user==null){
				redirect('welcome/login');
			}
			else{
				$this->session->set_userdata('user',$user);
				redirect('accueil/index');
			}
		}
	}

}
