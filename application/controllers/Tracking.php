<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking extends CI_Controller {

	// public function index()
	// {
	// 	$this->load->view('view_tracking');
	// }

	function __construct(){
		parent::__construct();		
		$this->load->model('Model_tracking');
        $this->load->helper('url');
	}

	//for local
	// function index(){
	// 	$data['tb_enduser'] = $this->Model_tracking->view_data();

	// 	$this->load->view('template/view_header');
	// 	$this->load->view('view_tracking',$data);
	// 	$this->load->view('template/view_footer');
	// }

	//for server
	function index(){
		$data['enduser_tb'] = $this->Model_tracking->view_data();

		$this->load->view('template/view_header');
		$this->load->view('view_tracking',$data);
		$this->load->view('template/view_footer');
	}

	// ============= for testing in server ================ //
	public function read_sensor(){
			$id = $this->input->get('id'); //retrieve id
			$hop = $this->input->get('hop'); //retrieve hop
			$msgId = $this->input->get('msgId'); //retrieve wake
			$dest = $this->input->get('dest'); //retrieve water level
			$type = $this->input->get('type'); //retrieve humidity
			$msg = $this->input->get('msg'); //retrieve temperature
			$lat = $this->input->get('lat'); //retrieve temperature
			$lon = $this->input->get('lon'); //retrieve temperature
			$time = $this->input->get('time'); //retrieve temperature

			echo $id;
			echo $hop;
			echo $msgId;
			echo $dest;
			echo $type;
			echo $msg;
			echo $lat;
			echo $lon;
			echo $time;
			
			$tracking = array(
				'id' => $id,
				'hop' => $hop,
				'msgId' => $msgId,
				'dest' => $dest,
				'type' => $type,
				'msg' => $msg,
				'lat' => $lat,
				'lon' => $lon,
				'time' => $time,
			);
			$this->Model_tracking->insert_traking_data($Model_tracking);
	}
	// ============= end ================ //
}
