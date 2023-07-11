<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('AdminSession.php');
class Statistique extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->Model('StatistiqueModel' , 's');
        
    }
    public function statistique_page(){
        $data['nb_utilisateur'] = $this->s->nbuser();
        $data['vola_azo'] = $this->s->vola();
        $data['regime'] = [ 12, 45 , 67 ];
        $data['page'] = 'statistique.php';
        $data['title'] = 'statistique';
        $this->load->view('template_back.php',$data);
    }
}