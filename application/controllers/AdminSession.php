<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminSession extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->has_userdata('admin')==false){
            redirect('welcome/login_admin');
        }
    }
}