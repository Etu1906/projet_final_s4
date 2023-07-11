<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		redirect('/welcome/login');
	}		
	public function login(){

		
		$data = array();
		$data['title'] = 'Se connecter'; 
		if($this->input->get('erreur')!=null){
			$data['erreur']  = $this->input->get('erreur');
		}
		
		$this->load->view('login2.php',$data);
	}
	public function login_admin(){
		$data = array();
		$data['title'] = 'Se connecter en tant qu\'administrateur'; 
		if($this->input->get('erreur')!=null){
			$data['erreur']  = $this->input->get('erreur');
		}
		$this->load->view('login_admin.php',$data);
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
				redirect("welcome/login_admin?erreur= Nom ou mot de passe invalide ");
			}
			else{
				$this->session->set_userdata('admin',$user);
				redirect('statistique/statistique_page');
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
			$this->load->view('login2.php');
		}
		else{
			$this->load->model('UserModel');
			$nom = $this->input->post('nom');
			$mdp = $this -> input -> post('mdp');
			$user = $this->UserModel->check($nom,$mdp); 
			if($user==null){
				redirect('welcome/login?erreur= Nom ou mot de passe invalide');
			}
			else{
				$this->session->set_userdata('user',$user);
				redirect('acceuil/index');
			}
		}
	}

}
