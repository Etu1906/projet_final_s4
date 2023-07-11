<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('UserSession.php');
class Acceuil extends UserSession {
    public function __construct(){
        parent::__construct(); 
        $this->load->model('ObjectifModel');
        $this->load->model('ProfilModel');

    }
    public function index(){
        $user = $this->session->user; 
        $iduser = $user['idutilisateur'];
        
        
        if($this->ObjectifModel->get_dernier_objectif($iduser)==null){
            redirect('objectif/index');
        }
        else if($this->ProfilModel->get_dernier_profil($iduser)==null){
            redirect('profil/index');
        }
        else{
             redirect('programme/index');
        }
    }
}