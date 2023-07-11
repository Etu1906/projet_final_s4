<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmpModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Charge la bibliothèque de base de données CodeIgniter
        $this->load->database();
    }
    
    public function obtenirEmployesDepartements() {
        // Exécute une requête pour récupérer les données de la vue
        $query = $this->db->get('vue_employes_departements');

        // Vérifie si des résultats ont été obtenus
        if ($query->num_rows() > 0) {
            // Retourne les résultats sous forme de tableau associatif
            return $query->result_array();
        } else {
            // Aucun résultat trouvé
            return array();
        }
    }

}
