<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Petugas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('petugas_model');
        $this->load->model('user_model');
        $this->load->library('session');
        $this->load->library('form_validation');

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('template');
        $this->load->library('general');
        $this->load->library('form_validation');
        $this->data['priv'] = $this->session->userdata('level');
        $this->data['nama_ptgs'] = $this->session->userdata('username');
    }

    public function index() {
        if ($this->general->isPetugas() && $this->general->isLogin()) {
//        $this->general->checkAdmin();
//            $data['priv'] = $this->session->userdata('level');
//            $data['nama_ptgs'] = $this->session->userdata('username');
            $this->loadTheme('petugas/home');
        } else {
            $this->login();
        }
    }

    function loadTheme($view_file = 'petugas/home') {
        $this->template->set_theme('omenk');
        $this->template->set_layout('default')
                ->set_partial('mainnav', 'menu/mainnav', $this->data)
                //->set_partial('secnav', 'menu/secnav', $this->data)
                ->title('Petugas', 'Jobforcareer')
                ->build($view_file, $this->data);
    }

    public function register() {
        if ($this->general->isAdmin() && $this->general->isLogin()) {
            $this->loadTheme('petugas/create');
        } else {
            $this->login();
        }
    }

    public function login() {
        if ($this->general->isLogin() && $this->general->isPetugas()) {
            $this->loadTheme('petugas/home');
        } else if ($this->general->isLogin() && !$this->general->isPetugas()) {
            redirect("");
        } else {
            $this->load->view('petugas/login');
        }
    }

    function simpan() {
        //validate form input
        $this->form_validation->set_rules('username', 'Username', 'required|xss_clean|min_length[3]|max_length[12]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|xss_clean|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('hp', 'handphone', 'required');
        $this->form_validation->set_rules('level', 'level', 'required');

        if ($this->form_validation->run() == TRUE) {
            $this->user_model->save();
            $this->petugas_model->save();
            $this->data['message'] = 'Pembuatan Akun Petugas Berhasil';

            $this->loadTheme('petugas/home');
        } else {
            $this->data['error'] = "Gagal membuat account";
            $this->loadTheme('petugas/create');
        }
    }

    function proseslogin() {
        $username = $this->input->post('username'); //read the username that filled by the user
        $password = $this->input->post('password'); //read the password that filled by the user
        $passwordx = md5($password); //this is for change $password into MD5 form
        //the query is to matching the username+password user with username+password from database
        $query = $this->db->query("SELECT * FROM users WHERE username='$username' AND password='$passwordx'");

        $result = $query->row();

        if ($query->num_rows() == 1) {
            $ptgs = $query->row();

            $session_data = array(
                'id' => $result->id,
                'username' => $result->username,
                'level' => $result->level,
                'is_login' => TRUE
            );
            $this->session->set_userdata($session_data);
            $this->data['priv'] = $this->session->userdata('level');
            $this->data['nama_ptgs'] = $this->session->userdata('username');

            $this->loadTheme('petugas/home');
        } else {
            // query error
            $this->data['error'] = '!! Wrong Username or Password !!';
            $this->load->view('petugas/login', $this->data);
        }
    }

//to do logout process
    function logout() {
        $data = array
            (
            'id' => 0,
            'username' => 0,
            'type' => 0,
            'level' => 0,
            'is_login' => FALSE
        );

        $this->session->sess_destroy();
        $this->session->unset_userdata($data);
        $this->load->view('petugas/login');
    }

    function pintu_masuk() {
        if ($this->general->isPintuMasuk()) {
            $message = "";
            $barcode = $this->input->post('barcode');
            if (!empty($barcode)) {
                $query = $this->db->query("UPDATE member_card SET isactive = 'true' WHERE id_barcode = '$barcode'");

                if ($this->db->affected_rows() == 1) {
                    //ada yg terupdate
                    $message = "Update sukses";
                } else {
                    $message = "Update gagal";
                }
            } else {
                $message = "Silahkan masukkan barcode ID";
            }
//            $data['message'] = $message;
            $this->data['message'] = $message;
//            $this->load->view('petugas/pintu_msk', $data);
            $this->loadTheme('petugas/pintu_msk');
        } else {
            redirect("petugas");
        }
    }

    function pintu_keluar() {
        if ($this->general->isPintuKeluar()) {
            $message = "";
            $barcode = $this->input->post('barcode');
            if (!empty($barcode)) {
                $query = $this->db->query("UPDATE member_card SET isactive = 'false' WHERE id_barcode = '$barcode'");

                if ($this->db->affected_rows() == 1) {
                    //ada yg terupdate
                    $message = "Update sukses";
                } else {
                    $message = "Update gagal";
                }
            } else {
                $message = "Silahkan masukkan barcode ID";
            }
            $this->data['message'] = $message;
            $this->loadTheme('petugas/pintu_keluar');
        } else {
            redirect("petugas");
        }
    }

    function kasir() {
        if ($this->general->isKasir()) {
            //validate form input
            $this->form_validation->set_rules('id_jobseeker', 'ID Jobseeker', 'required|xss_clean|min_length[3]|max_length[15]');
            $this->form_validation->set_rules('barcode', 'Barcode', 'required|xss_clean');
//            $data['nama_ptgs'] = $this->session->userdata('username');
            $id_petugas = $this->session->userdata('id');

            if ($this->form_validation->run() == TRUE) {
                //validasi form success
                $id_jobseeker = $this->input->post('id_jobseeker');
                $barcode = $this->input->post('barcode');

                $query = $this->db->query("SELECT * FROM jobseeker WHERE id_jobseeker='$id_jobseeker'");
                if ($query->num_rows() == 1) {
                    //data jobseeker ditemukan
                    $query = $this->db->query("INSERT INTO member_card(id_barcode, id_jobseeker, id_petugas, isactive) VALUES ('$barcode', '$id_jobseeker', '$id_petugas', 'false')");
                    if ($this->db->affected_rows() == 1) {
                        //ada yg terupdate
                        $message = "Aktivasi Member Card berhasil";
                    } else {
                        $message = "Aktivasi Member Card Gagal";
                    }
                } else {
                    //data jobseeker tidak ditemukan
                    $message = "ID Jobseeker $id_jobseeker tidak ditemukan";
                }

                $this->data['message'] = $message;
            }
//            $this->load->view('petugas/kasir', $data);
            $this->loadTheme('petugas/kasir');
        } else {
            redirect("petugas");
        }
    }

}
