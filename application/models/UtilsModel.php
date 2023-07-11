<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UtilsModel extends CI_Model {
    public function getAll_imc(){
        $query = $this->db->get('imc');
        $result = $query->result_array();
        return $result;
    }
    public function getAll_type_sport(){
        $query = $this->db->get('type_sport');
        $result = $query->result_array();
        return $result;
    }
}