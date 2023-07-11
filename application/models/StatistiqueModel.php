<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatistiqueModel extends CI_Model {
    public function nbuser(){
        $sql = ' select * from v_nb_user_all ';

        $result = $this->db->query( $sql );
        $value = array();
        foreach( $result->result_array() as $r ){
            array_push($value ,  $r['coalesce']) ;
        }

        return $value;
    }

    public function vola(){
        $sql = ' select * from v_benefice_annee_actuelle_all ';

        $result = $this->db->query( $sql );
        $value = array();
        foreach( $result->result_array() as $r ){
            array_push($value ,  $r['coalesce']) ;
        }

        return $value;
    }
}