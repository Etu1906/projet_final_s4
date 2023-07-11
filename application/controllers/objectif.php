<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('UserSession.php');
class Objectif extends UserSession {
    public function __construct(){
        parent::__construct(); 
        $this->load->model('ObjectifModel');

    }
    public function insert(){
        $idobjectif = $this->input->post('idobjectif');
        $user = $this->session->user; 
        $iduser = $user['idutilisateur'];
        $poidsobjectif = $this->input->post('poidsobjectif');
        $this->ObjectifModel->insert_objectif_utilisateur($iduser, $poidsobjectif, $idobjectif) ;  
        redirect('profil/index');
    }
    
    public function index(){
        $data = array();
        $data['page'] = 'objectif.php';
        $data['objectifs'] =$this->ObjectifModel->get_objectifs(); 
        $data['title'] = 'Définir un objectif';
        $this->load->view('template',$data);
    }
}