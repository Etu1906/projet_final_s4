<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('AdminSession.php');
class Regime_back extends AdminSession {
    public function __construct(){
        parent::__construct();
        $this->load->model('RegimeModel');
        $this->load->model('ObjectifModel');
        $this->load->model('UtilsModel');
    }
    public function insert(){
        try {
            $data['nom_regime'] = $this->input->post('nom');
            $data['idobjectif'] = $this->input->post('objectif');
            $data['poids'] = $this->input->post('poids');
            $data['idimc'] = $this->input->post('imc');
            $data['kcalmin'] = $this->input->post('Kcal_min');
            $data['kcalmax'] = $this->input->post('Kcal_max');
            $data['idtype_sport'] = $this->input->post('type_sport');
            $data['duree'] = $this->input->post('duree');
            $data['prix'] = $this->input->post('prix');
            $data['image'] = 'regime_default.png';
            // echo $data['nom_regime'];
            $this->RegimeModel->insert($data);
            redirect("/Regime_back/liste_regime");
        } catch (\Throwable $th) {
            echo $e->getMessage();
        }
        
    }

    public function ajout_regime(){
        $data['list_objectif'] = $this->ObjectifModel->get_objectifs();
        $data['list_imc'] = $this->UtilsModel->getAll_imc();
        $data['list_type_sport'] = $this->UtilsModel->getAll_type_sport();
        // $data['page'] = 'ajout_regime.php.php';
        $this->load->view('ajout_regime.php' , $data);
    }

    public function liste_regime(){
        $data['page'] = 'liste_regime.php';
        $data['title'] = 'liste regime';
        $data['liste_regime'] = $this->RegimeModel->getAll_info_regime();
        $this->load->view('template_back.php' , $data);
    }

    public function delete_regime($id_regime){
        // $id_regime = $_GET['id_regime'];
        $this->RegimeModel->delete_regime($id_regime);
        redirect("/Regime_back/liste_regime");
        $this->liste_regime();
    }

    public function modifier_regime_page($id_regime){
        $data['regime'] = $this->RegimeModel->getRegime_by_id($id_regime);
        $data['list_objectif'] = $this->ObjectifModel->get_objectifs();
        $data['list_imc'] = $this->UtilsModel->getAll_imc();
        $data['list_type_sport'] = $this->UtilsModel->getAll_type_sport();
        $data['title'] = 'modifier regime';
        // echo $data['regime']['idregime'];
        $this->load->view('modifier_regime.php' , $data);
    }

    public function modifier_regime(){
        $idregime = $this->input->post('idregime');
        $nom_regime = $this->input->post('nom');
        $idobjectif = $this->input->post('objectif');
        $poids = $this->input->post('poids');
        $idimc = $this->input->post('imc');
        $kcalmin = $this->input->post('Kcal_min');
        $kcalmax = $this->input->post('Kcal_max');
        $idtype_sport = $this->input->post('type_sport');
        $duree = $this->input->post('duree');
        $prix = $this->input->post('prix');
        if($nom_regime != null){
            $data['nom_regime'] = $nom_regime;
        }
        if($idobjectif != null){
            $data['idobjectif'] = $idobjectif;
        }
        if($poids != null){
            $data['poids'] = $poids;
        }
        if($idimc != null){
            $data['idimc'] = $idimc;
        }
        if($kcalmin != null){
            $data['kcalmin'] = $kcalmin;
        }
        if($kcalmax != null){
            $data['kcalmax'] = $kcalmax;
        }
        if($idtype_sport != null){
            $data['idtype_sport'] = $idtype_sport;
        }
        if($duree != null){
            $data['duree'] = $duree;
        }
        $this->RegimeModel->modifier_regime($idregime , $data);
        redirect("/Regime_back/liste_regime");
    }
}