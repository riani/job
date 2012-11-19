<?php

class Jobpost_jurusan_model extends CI_Model {


    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->helper('date');
    }

    function getAll($jid) {
        $this->db->where('id_jobpost', $jid);
        $query = $this->db->get('jobpost_jurusan');
        return $query->result();


    }


}
