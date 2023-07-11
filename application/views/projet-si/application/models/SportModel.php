<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SportModel extends CI_Model {
    public function get_sport($idregime, $objectif){
        $sql = 'select * from type_sport where idtype  = '.$idregime;
        $query = $this->db->query($sql);
        $result = $this->query->row_array();

        if($result['frequence'] == 0){
            return array();  
        }
        $sql = 'select * from v_sport_type where idtype_sport = '.$result['idtype_sport'].' and idobjectif = '.$objectif['idobjectif'];
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}