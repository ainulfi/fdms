<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tracking extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load database if not auto-loaded
        $this->load->database();
    }

    public function view_data() {
        return $this->db->get('tb_enduser')->result();
    }

    public function insert_data_tracking($track) {
        return $this->db->insert('tb_enduser', $track);
    }

    // for server
    public function insert_tracking_data($sensor) {
        return $this->db->insert('enduser_tb', $sensor);
    }
}