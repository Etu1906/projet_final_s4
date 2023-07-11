<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProgrammeModel extends CI_Model {
    public function generate_plat($regime,$idprogramme){
        $seuil_min = $regime['kcalmin']; 
        $seuil_max =  $regime['kcalmax']; 

        $sql = 'select * from v_all_plat_journalier where energie_totale <= '.$seuil_max.' and energie_totale >='.$seuil_min;
        $query = $this->db->query($sql);

        $res = array();
        foreach($query->result_array() as $row){
            $res[] = array(
                'petit_dejeuner' => $row['petit_dejeuner'], 
                'dejeuner'=>$row['dejeuner'], 
                'diner'=>$row['diner']
            );
        }
        $len = count($res);
        for ($i=1; $i <= $regime['duree']  ; $i++) { 
            $index = rand(0,$len);
            $programme = $res[$index];
            $this->insert_details_programme($idprogramme,$i,$programme['petit_dejeuner'],$programme['dejeuner'],$programme['diner']);
        }
    }
    public function insert_details_programme($idprogramme_regime, $numero_jour, $matin, $midi, $soir)
    {
        $query = "INSERT INTO details_programme (idprogramme_regime, numero_jour, matin, midi, soir) VALUES ($idprogramme_regime, $numero_jour, $matin, $midi, $soir)";
        $this->db->query($query);
    }

    public function get_dernier_programme($iduser){
        $sql = 'select idprogramme_regime from v_dernier_programme where idutilisateur = '.$iduser;
        $query = $this->db->query($sql);  
        if($query->num_rows() == 0){
            return null;
        }  
        $row = $query->row_array(); 
        return $row['idprogramme_regime'];
    }


    public function get_details_nbjours($idprogramme , $nbjours ){
        $sql = '
        SELECT * 
            FROM v_planning 
            WHERE idprogramme_regime = '.$idprogramme.'
            ORDER BY numero_jour 
            OFFSET '.($nbjours - 1).' ROWS 
            FETCH NEXT 7 ROWS ONLY
        ';
        $query = $this->db->query($sql);
        return $query -> result_array();
    }

    public function get_details($idprogramme){
        $sql = 'select * from v_planning where idprogramme_regime = '.$idprogramme.' order by numero_jour'; 
        $query = $this->db->query($sql);
        return $query -> result_array();
    }

}