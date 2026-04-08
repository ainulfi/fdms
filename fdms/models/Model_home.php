<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load database if not auto-loaded
        $this->load->database();
    }

    public function view_data() {
        return $this->db->get('tb_sensor')->result();
    }

    public function total_data_sensor()
    {
        // $query = "SELECT tahun AS TAHUN, COUNT(*) AS total_smk FROM rp_all GROUP BY tahun";
        $query = "SELECT COUNT(*) FROM tb_sensor";
        $result = $this->db->query($query)->result();
        return $result;
    }

    public function total_temperature()
    {
        // $query = "SELECT tahun AS TAHUN, COUNT(*) AS total_smk FROM rp_all GROUP BY tahun";
        $query = "SELECT temperature AS TEMP COUNT(*) AS total_temp FROM tb_sensor";
        $result = $this->db->query($query)->result();
        return $result;
    }
}