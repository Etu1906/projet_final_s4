<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('PorteFeuilleModel.php');
class RegimeModel extends CI_Model {
    public function get_suggestions($profil,$objectif,$marge){
        $poids_min = abs($profil['poids'] - $objectif['poidsobjectif']) - $marge;
        $poids_max = abs($profil['poids'] - $objectif['poidsobjectif']) + $marge;
        $sql = 'select * from v_regime_liste where (valeur_min <= '.$profil['imc'].' and valeur_sup >= '.$profil['imc'].') and (poids >= '.$poids_min.'  and poids <=  '.$poids_max.') and idobjectif = '.$objectif['idobjectif'];
        $results = array();
        $query = $this->db->query($sql);
        $rows = $query->result_array();
        return $rows;
    }
    public function get_regime_by_id($idregime)
    {
        $query = "SELECT * FROM regime WHERE idregime = $idregime";
        $result = $this->db->query($query);
        return $result->row_array();
    }


    public function achat($iduser, $regime)
{
    try {
        $this->db->trans_start(); // Début de la transaction
        
        $sql = "INSERT INTO programme_regime (idregime, idutilisateur) VALUES (".$regime['idregime'].", ".$iduser.") returning idprogramme_regime";
        $query = $this->db->query($sql);
        $row = $query->row_array();

        $this->load->model('PorteFeuilleModel');
        $portefeuillemodel = new PorteFeuilleModel();
        $solde = $portefeuillemodel->get_solde($iduser);

        if ($solde >= $regime['prix']) {
            $this->PorteFeuilleModel->insert(-1, $iduser, $regime['prix']);
        } else {
            throw new Exception('Solde insuffisant');
        }

        $this->db->trans_complete(); // Fin de la transaction

        if ($this->db->trans_status() === FALSE) {
            throw new Exception('Erreur lors de la transaction');
        }

        return $row['idprogramme_regime'];
    } catch (Exception $e) {
        throw $e;
    }
}



}