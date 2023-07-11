<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('AdminSession.php');
class Validation extends CI_Controller {
    public function __construct(){
        parent::__construct(); 
        $this->load->model('CodeModel');
        $this->load->model('PorteFeuilleModel');
    }
    public function valide(){
        try {
            $idcode_user = $this->input->get('idcode_utilisateur');
            
            $code = $this->CodeModel->get_code_by_id($idcode_user);
            $this->CodeModel->valider($idcode_user);
            $this->PorteFeuilleModel->insert(1,$code['idutilisateur'],$code['montant']);
            redirect("Validation/index");
        } catch (Exception $th) {
            echo $th->getMessage();
        }
    }
    public function index(){
        $data =array();
        $data['title'] = 'Valider des codes';
        $data['page'] = 'validation_code.php'; 
        $data['demande'] =  $this->CodeModel->get_unvalidated_code_users(); 
        $this->load->view('template_back.php',$data);
    }
}
