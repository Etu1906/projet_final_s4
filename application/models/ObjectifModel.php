<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ObjectifModel extends CI_Model {
    public function get_dernier_objectif($idutilisateur)
    {
        $query = $this->db->query("SELECT * FROM v_dernier_objectif_utilisateur WHERE idutilisateur = ?", array($idutilisateur));
        if($query->num_rows()==0){
            return null;
        }
        $row = $query->row_array();
        return $row;
    }
    public function insert_objectif_utilisateur($idutilisateur, $poidsobjectif, $idobjectif)
    {
        $data = array(
            'idutilisateur' => $idutilisateur,
            'poidsobjectif' => $poidsobjectif,
            'idobjectif' => $idobjectif
        );
        $this->db->insert('objectif_utilisateur', $data);
    }
    public function get_objectifs()
    {
        $query = $this->db->get('objectif');
        $result = $query->result_array();
        return $result;
    }


}
