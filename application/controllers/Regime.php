<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('UserSession.php');
class Regime extends UserSession {

    public function __construct(){
        parent::__construct();
        $this->load->model('RegimeModel');
        $this->load->model('MargeModel');
        $this->load->model('ProfilModel');
        $this->load->model('ObjectifModel');
        $this->load->model('ProgrammeModel');
    }
    public function suggestion(){
        $user = $this->session->user; 
        $iduser = $user['idutilisateur'];
        $marge = $this->MargeModel->get_dernier_marge();
        $profil = $this->ProfilModel->get_dernier_profil($iduser);
        $data=array();
        $objectif = $this->ObjectifModel->get_dernier_objectif($iduser);
        $regimes = $this->RegimeModel->get_suggestions($profil,$objectif,$marge); 
        
        $data['regimes'] = $regimes; 
        $data['page'] = 'suggestion.php';
        $this->load->view('template.php',$data);
    }

    public function acheter(){
        try {
            $idregime = $this->input->get('idregime');
            $user = $this->session->user; 
            $iduser = $user['idutilisateur'];
            $regime = $this->get_regime_by_id($idregime);
            $idprogramme = $this->RegimeModel->achat($regime,$iduser);
            $this->ProgrammeModel->generate_plat($regime,$idprogramme);
            redirect('programme/index');
        } catch (\Exception $th) {
            echo $e->getMessage();
        }
    }
}