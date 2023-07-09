<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
        parent::__construct();
        // Charge le modèle MonModel
        $this->load->model('EmpModel' , 'e');
    }


	public function index()
	{
		$this->load->view('welcome_message');
		
	}	
	
	public function test(){
		$_SESSION["huhu"] = "haha";
		$this->load->view("test.php");
	}

	public function test2(){
		$data["fufu"] = $_SESSION["huhu"];
		$this->load->view("test2.php" , $data);

	}
	public function test3(){
		$data['list'] = $this->e->getAll();
		$this->load->view("test3.php" , $data);

	}
}
