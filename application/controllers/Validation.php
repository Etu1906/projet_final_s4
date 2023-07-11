<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('AdminSession.php');
class Validation extends UserSession {
    public function __construct(){
        parent::__construct(); 
        $this->load->model('CodeModel');
        $this->load->model('PorteFeuilleModel');
    }
    public function valide(){
        try {
            $idcode_user = $this->input->get('numero');
            $user = $this->session->user; 
            $iduser = $user['idutilisateur'];
            $code = $this->CodeModel->get_code_by_id($idcode_user);
            $this->CodeModel->valider($idcode_user);
            $this->PorteFeuilleModel->insert(1,$iduser,$code['montant']);
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
    public function index(){
        $data =array();
        $data['page'] = 'demande.php'; 
        $data['demande'] =  $this->CodeModel->get_unvalidated_code_users(); 
        $this->load->view('template.php',$data);
    }
}
