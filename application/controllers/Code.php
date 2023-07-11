<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('UserSession.php');
class Code extends UserSession {
    public function __construct(){
        parent::__construct(); 
        $this->load->model('CodeModel');
        $this->load->model('PorteFeuilleModel');
        $this->data['title'] = 'code';
        $this->data['page'] = 'code.php'; 

    }

    public function index(){
        $codes = $this->CodeModel->get_all_code();
        $data = array(); 
        $data = $this->data;
        $data['codes'] = $codes;
        $this->load->view( 'template.php' , $data );
    }
    
    public function usecode(){
        $user = $this->session->user; 
        $iduser = $user['idutilisateur'];
        $data = $this->data;
        $numero = $this->input->post('numero');
        $this->form_validation->set_rules('numero', 'Numero', 'required|trim|callback_error');
        if ($this->form_validation->run() == FALSE) {
            $codes = $this->CodeModel->get_all_code();
            $data['codes'] = $codes;
            $this->load->view( 'template.php' , $data );
        }else{
            $code = $this->CodeModel->get_code_by_code($numero);
            $this->CodeModel->usecode($iduser,$code['idcode']);

            redirect( 'code' );
        }
    }

    public function error( $numero ){
        try{
            $code = $this->CodeModel->get_code_by_code($numero);
            $this->CodeModel->is_valid($code['idcode']);
            return true;
        }catch( Exception $e ){
            $this->form_validation->set_message('error',  $e->getMessage() );
            return false;
        }
    }

    public function valide(){
        try {
            $idcode_user = $this->input->get('numero');
            $user = $this->session->user; 
            $iduser = $user['idutilisateur'];
            $code = $this->CodeModel->get_code_by_id($idcode_user);
            $this->CodeModel->valider($idcode_user);
            
            
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
