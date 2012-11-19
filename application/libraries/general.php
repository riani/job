<?php

class General {

//put your code here
    var $ci;

    function __construct() {
        $this->ci = &get_instance();
    }

    function isLogin() {
        if ($this->ci->session->userdata('is_login') == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function isCompany() {
        if ($this->ci->session->userdata('level') == '5') {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function isPetugas() {
        if ($this->ci->session->userdata('level') == '1' ||
                $this->ci->session->userdata('level') == '2' ||
                $this->ci->session->userdata('level') == '3' ||
                $this->ci->session->userdata('level') == '4') {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function isKasir() {
        if ($this->ci->session->userdata('level') == '1' || $this->ci->session->userdata('level') == '2') {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function isPintuMasuk() {
        if ($this->ci->session->userdata('level') == '1' || $this->ci->session->userdata('level') == '3') {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function isPintuKeluar() {
        if ($this->ci->session->userdata('level') == '1' || $this->ci->session->userdata('level') == '4') {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    function isAdmin() {
        if ($this->ci->session->userdata('level') == '1') {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function checkAdmin() {
        if (($this->isLogin() && $this->isAdmin()) != TRUE) {
            $this->ci->session->set_flashdata('error', 'Maaf, Anda tidak memiliki hak akses sebagai admin');
            redirect('petugas/login');
        }
    }

    function checkCompany() {
        if (($this->isLogin() && $this->isCompany()) != TRUE) {
            $this->ci->session->set_flashdata('error', 'Maaf, Anda tidak memiliki hak akses sebagai Company');
            redirect('users/login');
        }
    }

    function checkPetugas() {
        if (($this->isLogin() && $this->isPetugas()) != TRUE) {
            $this->ci->session->set_flashdata('error', 'Maaf, Anda tidak memiliki hak akses sebagai siswa');
            redirect('users/login');
        }
    }

}

