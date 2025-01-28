<?php

    class Posts_model extends CI_Model {
        public function __construct() {
            $this->load->database();
            //date_default_timezone_set('Asia/Manila');
        }

        public function get_posts() {
            $query = this->db->get('userregistration');
            return $query->result_array();
        }
    }

?>