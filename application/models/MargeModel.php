<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MargeModel extends CI_Model {

    
    public function get_dernier_marge()
    {
        $query = $this->db->query("SELECT valeur FROM v_dernier_marge");
        $row = $query->row();

        if ($row) {
            return $row->valeur;
        } else {
            return null;
        }
    }

}
