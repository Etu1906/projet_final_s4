<?php
<?php
class CodeModel extends CI_Model {
    public function get_all_code() {
        $query = $this->db->get('code');
        return $query->result_array();
    }

    public function get_code_by_code($code) {
        $this->db->where('numero', $code);
        $query = $this->db->get('code');
        $result = $query->row_array();

        if (empty($result)) {
            throw new Exception('Code inexistant');
        }

        return $result;
    }

    public function get_code_by_id($idcode_user) {
        $this->db->where('idcode_utilisateur', $idcode_user);
        $query = $this->db->get('v_code_utilisateur');
        $result = $query->row_array();
        if (empty($result)) {
            throw new Exception('Code inexistant');
        }
        return $result;
    }
    public function get_unvalidated_code_users() {
        $this->db->where('estValide', 0);
        $query = $this->db->get('v_code_utilisateur');
        return $query->result_array();
    }
    
    public function is_valid($idcode) {
        $this->db->where('idcode', $idcode);
        $query = $this->db->get('v_liste_code_valide');
        
        if($query->num_rows()==0){
            throw new Exception('Code invalide');
        }        
    }
    public function use($user, $idcode) {
        $data = array(
            'idutilisateur' => $user,
            'idcode' => $idcode,
            'estValide' => 0
        );
        $this->db->insert('code_utilisateur', $data);
    }
    public function refuser($idcode_utilisateur) {
        $data = array(
            'estValide' => 2
        );
    
        $this->db->where('idcode_utilisateur', $idcode_utilisateur);
        $this->db->update('code_utilisateur', $data);
    }
    public function valider($idcode_utilisateur) {
        $data = array(
            'estValide' => 1
        );
    
        $this->db->where('idcode_utilisateur', $idcode_utilisateur);
        $this->db->update('code_utilisateur', $data);
    }
}
