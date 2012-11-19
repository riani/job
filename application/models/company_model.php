<?php
/**
 * Created by JetBrains PhpStorm.
 * User: omenkzz
 * Date: 3/16/12
 * Time: 9:05 AM
 * To change this template use File | Settings | File Templates.
 */
class Company_model extends CI_Model
{

    var $nama;
    var $alamat;
    var $no_telp;
    var $no_fax;
    var $email_cp;
    var $email_event;
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
        $no_telp = $this->input->post('no_telp');
        $no_fax = $this->input->post('no_fax');
        $email_cp = $this->input->post('email_cp');
        $email_event = $this->input->post('email_event');

        $data = array(
            'user_id' => $user_id,
            'nama' => $nama,
            'alamat' => $alamat,
            'email_cp' => $email_cp,
            'email_event' => $email_event,
            'no_telp'=>$no_telp,
            'no_fax'=>$no_fax
        );
        $this->db->insert('company', $data);
    }
}