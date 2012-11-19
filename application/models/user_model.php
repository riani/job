<?php

class User_model extends CI_Model
{
    var $username;
    var $password;
    var $level;
    var $registered;
    var $lastlogin;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->helper('date');
    }


    function save()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $level = $this->input->post('level');

        $data = array(
            'username' => $username,
            'password' => $password,
            'level' => $level,
            'registered' =>now()

        );
        $this->db->insert('users', $data);
    }
}
