<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends CI_Controller {

	function __construct(){
		parent::__construct();		
		// $this->load->model('Model_home');
        $this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('template/view_header');
		$this->load->view('view_information');
		$this->load->view('template/view_footer');
	}

	
 
	// function index(){
	// 	$data['tb_sensor'] = $this->Model_home->view_data();
	// 	$this->load->view('view_home',$data);
	// }
}
