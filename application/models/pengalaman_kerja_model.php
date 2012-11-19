<?php

class Pengalaman_kerja_model extends CI_Model
{
    var $jabatan;
    var $tempat_bekerja;
    var $date_start;
    var $date_end;
    var $keterangan;
    var $jobseeker_id;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }


    function save()
    {
        $jabatan = $this->input->post('jabatan');
        $tempat_bekerja = $this->input->post('tempat_bekerja');
        $date_start = $this->input->post('date_start');
        $date_end = $this->input->post('date_end');
        $keterangan = $this->input->post('keterangan');
        $jobseeker_id = $this->db->insert_id();


        $data = array(
            'jobseeker_id' => $jobseeker_id,
            'jabatan' => $jabatan,
            'tempat_bekerja' => $tempat_bekerja,
            'date_start' => $date_start,
            'date_end' => $date_end,
            'keterangan' => $keterangan


        );
        $this->db->insert('pengalaman_kerja', $data);
    }
}
