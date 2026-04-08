<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_monitoring extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load database if not auto-loaded
        $this->load->database();
    }

    // public function view_data() {
    //     return $this->db->get('tb_sensor')->result();
    // }

    public function view_data() {
        return $this->db->get('sensor_tb')->result();
    }

    // for testing in my local comp
    // public function insert_data_sensor($sensor) {
    //     return $this->db->insert('tb_sensor', $sensor);
    // }

    // for server
    public function insert_sensor_data($sensor) {
        return $this->db->insert('sensor_tb', $sensor);
    }
}