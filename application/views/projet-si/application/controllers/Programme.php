<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('UserSession.php');
class Programme extends UserSession {
    public function __construct(){
        parent::__construct();
        $this->load->model('RegimeModel');
        $this->load->model('SportModel');
        $this->load->model('ProfilModel');
        $this->load->model('ObjectifModel');
        $this->load->model('ProgrammeModel');
    }
    public function index(){
        $user = $this->session->user; 
        $iduser = $user['idutilisateur'];

        $dernier_programme = $this->ProgrammeModel->get_dernier_programme($iduser); 
        if($dernier_programme==null){
            $page = 'choix_objectif';
            $planning = null;
        }
        else{
            $page = 'planning';
            $planning = $this->ProgrammeModel->get_details($dernier_programme);
            $dernier_objectif = $this->ObjectifModel->get_dernier_objectif($iduser);
            $sport = $this->SportModel->get_sport($planning['idregime'],$dernier_objectif);

            $this->session->set_userdata('sport',$sport);
            $this->session->set_userdata('planning',$planning);
        }
        $data =array(); 
        $data['page'] = $page;
        $data['planning'] = $planning;
        $this->load->view('template.php',$data);
    }
}