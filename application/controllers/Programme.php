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
        $this->data['title'] = 'planning';
        $this->data['debut'] = 1;
    }

    public function jour(){
        $data = $this->data;
        $user = $this->session->user; 
        $iduser = $user['idutilisateur'];
        $debut = $this->input->post('jours');
        $dernier_programme = $this->input->post('programme'); 
        $planning = $this->ProgrammeModel->get_details_nbjours($dernier_programme , $debut);
        $page = 'planning';
        $data['programme'] = $dernier_programme;
        $data['page'] = $page;
        $data['planning'] = $planning;
        $data['debut'] = $debut;

        $this->load->view('template.php',$data);
    }

    public function index(){
        $user = $this->session->user; 
        $iduser = $user['idutilisateur'];
        $dernier_programme = $this->ProgrammeModel->get_dernier_programme($iduser); 
        if($dernier_programme==null){
            $page = 'objectif';
            $planning = null;
            redirect( 'objectif' );
        }
        else{
            $page = 'planning';
            $planning = $this->ProgrammeModel->get_details($dernier_programme);
            $dernier_objectif = $this->ObjectifModel->get_dernier_objectif($iduser);
            $sport = $this->SportModel->get_sport($dernier_programme['idregime'],$dernier_objectif);

            $this->session->set_userdata('sport',$sport);
            $this->session->set_userdata('planning',$planning);
        }
        $data =$this->data; 
        $data['programme'] = $dernier_programme;
        $data['page'] = $page;
        $data['planning'] = $planning;
        $this->load->view('template.php',$data);
    }
}