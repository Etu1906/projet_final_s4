<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PorteFeuilleModel extends CI_Model {
    public function insert($mult, $iduser,$montant){
        $query = "INSERT INTO mouvement_argent (idutilisateur, montant) VALUES (".$iduser.", ".($montant*$mult).")";
        $this->db->query($query);
    }
    public function get_solde($iduser)
{
    $sql = "SELECT * FROM v_solde WHERE idutilisateur = ".$iduser;
    $query=$this->db->query($sql);
    if($query->num_rows()==0){
        return 0; 
    }
    $row =  $query->row_array();
    return $row['solde'];
}


}