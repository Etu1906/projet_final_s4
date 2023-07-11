<?php
class GenreModel extends CI_Model
{
    public function getAll()
    {
        $query = $this->db->get('genre');
        return $query->result_array();
    }
}
