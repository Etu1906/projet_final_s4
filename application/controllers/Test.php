<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Charge le modèle MonModel
        $this->load->model('EmpModel');
    }

    public function afficherEmployesDepartements() {
        // Appelle la fonction obtenirEmployesDepartements du modèle
        $data['employes_departements'] = $this->EmpModel->obtenirEmployesDepartements();

        // Charge la vue employes_departements_view.php et passe les données
        $this->load->view('liste_emp', $data);
    }
    public function addSession(){
        $this->session->set_userdata('logged_in',true);
    }
    public function verifierSession() {
        // Vérifie si une session est active
        if ($this->session->userdata('logged_in')) {
            // La session est active
            echo 'La session est active.';
        } else {
            // La session n'est pas active
            echo 'La session n\'est pas active.';
        }
    }

}
