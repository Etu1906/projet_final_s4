<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('UserSession.php');
class Profil extends UserSession {
    public function __construct(){
        parent::__construct(); 
        $this->load->model('ProfilModel');
    }
    public function insert(){
        $taille = $this->input->post('taille');
        $user = $this->session->user; 
        $iduser = $user['idutilisateur'];
        $poids = $this->input->post('poids');
        $this-> ProfilModel->insert_completion_utilisateur($iduser, $taille, $poids) ;    
        redirect('regime/suggestion');
    }
    
    public function index(){
        $data = array(); 
        $data['title'] = 'À propos de vous...';
        $data['page'] = 'completion.php';
        //$data['genres'] =$this->GenreModel->getAll(); 
        $this->load->view('template',$data);
    }
}