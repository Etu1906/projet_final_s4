<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function check($nom,$mdp){
        $sql = "select * from utilisateur where nom_utilisateur = %s and mdp = %s"; 
        $sql = sprintf($sql, $this->db->escape($nom),$this->db->escape($mdp));
        $query = $this->db->query($sql);

        if($query->num_rows()==0){
            return null; 
        }
        $row = $query->row_array(); 
        return $row;
    }
}