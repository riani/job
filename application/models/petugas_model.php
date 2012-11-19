<?php
/**
 * Created by JetBrains PhpStorm.
 * User: omenkzz
 * Date: 3/16/12
 * Time: 9:05 AM
 * To change this template use File | Settings | File Templates.
 */
class Petugas_model extends CI_Model
{

    var $nama;
    var $alamat;
    var $hp;
    var $posisi;
    var $user_id;
    var $id;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
        $this->load->helper('cookie');
        $this->load->helper('date');
        $this->load->library('session');
    }


    function save()
    {
        $user_id = $this->db->insert_id();
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $hp = $this->input->post('hp');


        $data = array(
            'user_id' => $user_id,
            'nama' => $nama,
            'alamat' => $alamat,
            'hp' => $hp

        );
        $this->db->insert('petugas', $data);
    }
}