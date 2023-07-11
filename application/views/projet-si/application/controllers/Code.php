<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('UserSession.php');
class Code extends UserSession {
    public function __construct(){
        parent::__construct(); 
        $this->load->model('CodeModel');
        $this->load->model('PorteFeuilleModel');
    }
    public function index(){
        $codes = $this->CodeModel->get_all_code();
        $data = array(); 
        $data['page'] = 'code.php'; 
        $data['codes'] = $codes;
    }
    public function use(){
        $user = $this->session->user; 
        $iduser = $user['idutilisateur'];

        $numero = $this->input->post('numero');
        try {
            $code = $this->CodeModel->get_code_by_code($numero);
            $this->CodeModel->is_valid($code['idcode']);
            $this->CodeModel->use($iduser,$code['icode']);
        } catch (Exception $th) {
            echo £th->getMessage();
        }
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
    public function get_unvalidated_code_users() {
        $this->db->where('estValide', 0);
        $query = $this->db->get('v_code_utilisateur');
        return $query->result_array();
    }
    
    
}
