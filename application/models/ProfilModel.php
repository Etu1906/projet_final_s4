<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_dernier_profil($idutilisateur)
    {
        $query = $this->db->query("SELECT * FROM v_dernier_profil WHERE idutilisateur = ?", array($idutilisateur));
       
        if($query->num_rows()==0){
            return null;
        }
        $row = $query->row_array();
        return $row;
    }
    public function insert_completion_utilisateur($idutilisateur, $taille, $poids)
    {
        $data = array(
            'idutilisateur' => $idutilisateur,
            'taille' => $taille,
            'poids' => $poids
        );

        $this->db->insert('completion_utilisateur', $data);
    }

}
