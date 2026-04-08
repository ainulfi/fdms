<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring extends CI_Controller {

	// public function index()
	// {
	// 	$this->load->view('view_home');
	// }

	public function __construct(){
		parent::__construct();		
		$this->load->model('Model_monitoring');
        $this->load->helper('url');
		// redirect($this->uri->uri_string(), 'refresh');
	}

	// for localhost
	// public function index(){
	// 	$data['tb_sensor'] = $this->Model_monitoring->view_data();

	// 	$this->load->view('template/view_header');
	// 	$this->load->view('view_monitoring',$data);
	// 	$this->load->view('template/view_footer');
	// }

	// for server
	public function index(){
		$data['sensor_tb'] = $this->Model_monitoring->view_data();

		$this->load->view('template/view_header');
		$this->load->view('view_monitoring',$data);
		$this->load->view('template/view_footer');
	}

	// ============= for testing in local ================ //
	// public function read_sensor(){
	// 		$wl = $this->input->get('w');
	// 		$tr = $this->input->get('t');
	// 		$hm = $this->input->get('h');

	// 		echo $wl;
	// 		echo $tr;
	// 		echo $hm;
			
	// 		$sensor = array(
	// 			'waterlevel' => $wl,
	// 			'temperature' => $tr,
	// 			'humidity' => $hm
	// 		);
	// 		$this->Model_monitoring->insert_data_sensor($sensor);
	// }
	// ============= end ================ //

	// ============= for testing in server ================ //
	public function read_sensor(){
			$id = $this->input->get('id'); //retrieve id
			$hop = $this->input->get('hop'); //retrieve hop
			$wake = $this->input->get('wake'); //retrieve wake
			$sen_w = $this->input->get('sen_w'); //retrieve water level
			$sen_h = $this->input->get('sen_h'); //retrieve humidity
			$sen_t = $this->input->get('sen_t'); //retrieve temperature

			echo $id;
			echo $hop;
			echo $wake;
			echo $sen_w;
			echo $sen_w;
			echo $sen_w;
			
			$sensor = array(
				'id' => $id,
				'hop' => $hop,
				'wake' => $wake,
				'sen_w' => $sen_w,
				'sen_h' => $sen_h,
				'sen_t' => $sen_t,
			);
			$this->Model_monitoring->insert_sensor_data($sensor);
	}
	// ============= end ================ //



	public function monitoring_chart() {
        $data_points = $this->Model_monitoring->view_data();

        // Format data for Highcharts: needs separate arrays for labels and values
        $labels = array();
        $values = array();

        foreach ($data_points as $point) {
            $labels[] = $point->label;
            $values[] = (int)$point->value; // Cast to integer
        }

        // Pass data to the view as JSON strings
        $view_data['chart_labels_json'] = json_encode($labels);
        $view_data['chart_values_json'] = json_encode($values, JSON_NUMERIC_CHECK);

        $this->load->view('view_monitoring', $view_data);
    }
}
