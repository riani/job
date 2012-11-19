<?php

class Jobseeker_model extends CI_Model {

    var $jenis_identitas = '';
    var $no_identitas = '';
    var $nama = '';
    var $hp = '';
    var $jenkel = '';
    var $tempat_lahir = '';
    var $tanggal_lahir = '';
    var $foto = '';
    var $pendidikan_terakhir = '';


    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    //simpan artikel
    function save() {
        $jenis_identitas = $this->input->post('jenis_identitas');
        $no_identitas = $this->input->post('no_identitas');
        $nama = $this->input->post('nama');
        $hp = $this->input->post('hp');
        $jenkel = $this->input->post('jenkel');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $foto = $this->input->post('foto');



        $data = array(
                'jenis_identitas' => $jenis_identitas,
                'no_identitas' => $no_identitas,
                'nama' => $nama,
                'hp' => $hp,
                'jenkel' => $jenkel,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'foto' => $foto,

        );
        $this->db->insert('jobseeker', $data);
    }


    function simpan() {
        $jenis_identitas = $this->input->post('jenis_identitas');
        $no_identitas = $this->input->post('no_identitas');
        $nama = $this->input->post('nama');
        $hp = $this->input->post('hp');
        $jenkel = $this->input->post('jenkel');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $foto = $this->input->post('foto');



        $data = array(
                'jenis_identitas' => $jenis_identitas,
                'no_identitas' => $no_identitas,
                'nama' => $nama,
                'hp' => $hp,
                'jenkel' => $jenkel,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'foto' => $foto,

        );
        $this->db->insert('jobseeker', $data);
    }


    function getAll() {
        $this->db->select('*');
        $this->db->from('jobseeker');
        $this->db->limit(10);
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();

        return $query->result();
    }


    function getJobseeker($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('jobseeker');
        return $query->row_array();
    }
    function getJobseekerByBarcode($id) {
        $this->db->where('id_barcode', $id);
        $query = $this->db->get('member_card');
        $membercard = $query->first_row();
        if(empty ($membercard->id_jobseeker)){
            return $membercard;
        }
        $this->db->where('id_jobseeker',$membercard->id_jobseeker);
        $query = $this->db->get('jobseeker');
        return $query->row_array();
    }
}

?>