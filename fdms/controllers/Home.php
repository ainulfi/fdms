<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// public function index()
	// {
	// 	$this->load->view('view_home');
	// }

	function __construct(){
		parent::__construct();		
		$this->load->model('Model_home');
        $this->load->helper('url');
	}
 
	function index(){
		$data['tb_sensor'] = $this->Model_home->view_data();

		$this->load->view('template/view_header');
		$this->load->view('view_home',$data);
		$this->load->view('template/view_footer');
	}
}
