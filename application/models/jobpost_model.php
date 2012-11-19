<?php

class Jobpost_model extends CI_Model
{

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();


    }

//simpan jobpost
    function save()
    {
        $title = $this->input->post('title');
        $deskripsi = $this->input->post('deskripsi');

        $jenkel = $this->input->post('jenkel');
        $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
        $umur_min = $this->input->post('umur_min');
        $umur_max = $this->input->post('umur_max');
        $min_pengalaman = $this->input->post('min_pengalaman');


        $data = array(
            'title' => $title,
            'deskripsi' => $deskripsi,

            'jenkel' => $jenkel,
            'pendidikan_terakhir' => $pendidikan_terakhir,
            'umur_min' => $umur_min,
            'umur_max' => $umur_max,
            'min_pengalaman' => $min_pengalaman,
            'id_company' => $this->session->userdata('id')

        );
        $this->db->insert('jobpost', $data);
    }

    function simpan_jobpost_jurusan()
    {
//        $jurusan = array('jurusan'=>$this->input->post('jurusan'));
//        echo $jurusan;
//        $jurusan = array(this->input->post('jurusan'));
//        $id_jobpost = $this->db->insert_id();
//
//        for ($i = 0; $i < count($jurusan); $i++) {
//            $data = array(
//                'jurusan' => $jurusan,
//                'id_jobpost' => $id_jobpost
//            );
//
//            $this->db->insert_batch('jobpost_jurusan', $data);
//
//        }
        $id_jobpost = $this->db->insert_id();
        foreach($this->input->post('jurusan') as $r)
        {
            $data['jurusan']=$r;
            $data['id_jobpost']=$id_jobpost;
            $this->db->insert('jobpost_jurusan',$data);
        }



    }


    function getAll()
    {
        $id_company = $this->session->userdata('id_company');
        $this->db->where('id_company', $id_company);
        $query = $this->db->get('jobpost');

        return $query->result();
    }

//mendapatkan id jobpost
    function getJobpost($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('jobpost');
        return $query->row_array();
    }


//update jobpost
    function update()
    {
        $this->title = $_POST['title'];
        $this->deskripsi = $_POST['deskripsi'];

        $this->jenkel = $_POST['jenkel'];
        $this->pendidikan_terakhir = $_POST['pendidikan_terakhir'];
        $this->umur_min = $_POST['umur_min'];
        $this->umur_max = $_POST['umur_max'];
        $this->min_pengalaman = $_POST['min_pengalaman'];
        $this->pendidikan_terakhir = $_POST['pendidikan_terakhir'];
        $this->db->update('jobpost', $this, array('id' => $_POST['id']));


    }
}
