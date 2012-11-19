<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Company extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('company_model');
        $this->load->model('jobpost_model');
        $this->load->model('user_model');
        $this->load->library('session');
        $this->load->library('general');
        $this->load->library('form_validation');
        $this->load->model('jobseeker_model');
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('template');
        $this->load->helper('form');
        $this->load->helper('date');
        $this->load->helper('html');
        $this->load->model('jobpost_jurusan_model');
        $this->data['priv'] = $this->session->userdata('level');
    }

    public function index() {
        if (!$this->general->isLogin() && !$this->general->isCompany()) {
            $this->load->view('company/login');
        } else {
            $this->loadTheme('company/home');
        }
    }

    function loadTheme($view_file = 'company/home') {
        $this->template->set_theme('omenk');
        $this->template->set_layout('default')
                ->set_partial('mainnav', 'menu/mainnav', $this->data)
                //->set_partial('secnav', 'menu/secnav', $this->data)
                ->title('Company', 'Jobforcareer')
                ->build($view_file, $this->data);
    }
//
//    function load_jobjur() {
//        //        $data['querys'] = $this->db->query('SELECT id_jobpost, jurusan FROM jobpost_jurusan');
//        $data['querys']= $this->jobpost_jurusan_model->getAll();
//        $this->load->view('company/posjur',$data);
//    }


    function register() {
        // $this->load->view('company/index');
        $this->loadTheme('company/create');
    }

    function simpan() {

        //validate form input
        $this->form_validation->set_rules('username', 'Username', 'required|xss_clean|min_length[3]|max_length[12]|is_unique[company.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|xss_clean|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'telepon', 'required');
        $this->form_validation->set_rules('no_fax', 'faksimile', 'required');
        $this->form_validation->set_rules('email_cp', 'email contact person', 'required|valid_email');
        $this->form_validation->set_rules('email_event', 'Email event', 'required|valid_email');


        if ($this->form_validation->run() == TRUE) {
            $this->user_model->save();
            $this->company_model->save();
            $data['register'] = 'Selamat anda sukses register';

            //            $this->template->set_theme('omenk');
            //            $this->template->set_layout('default')
            //                ->set_partial('mainnav', 'menu/mainnav')
            //            //->set_partial('secnav', 'menu/secnav', $this->data)
            //                ->title('Company', 'Rockstar Studio')
            //                ->build('company/index', $data);
            echo 'Registrasi Sukses!<br/>';
            echo "<a href='".base_url()."index.php/company'>Login Here</a>";
        } else {
            $this->loadTheme('company/create');
        }
    }

    //this function will do the login process
    //function proseslogin($result)
    function proseslogin() {
        $username = $this->input->post('username'); //read the username that filled by the user
        $password = $this->input->post('password'); //read the password that filled by the user
        $passwordx = md5($password); //this is for change $password into MD5 form
        //$passwordx = substr(md5($password), 0, 25);
        //the query is to matching the username+password user with username+password from database
        $query = $this->db->query("SELECT * FROM users WHERE username='$username' AND password='$passwordx'");


        $result = $query->row();

        if ($query->num_rows() == 1) {
            $session_data = array(
                    'id' => $result->id,
                    'username' => $result->username,
                    'level' => $result->level,
                    'id_company' => $result->id,
                    'is_login' => TRUE
            );
            $this->session->set_userdata($session_data);
            $this->data['priv'] = $this->session->userdata('level');
            $this->loadTheme('company/home');
        } else {
            // query error
            $this->data['error'] = '!! Wrong Username or Password !!';
            $this->load->view('company/login', $this->data);
        }
    }

//to do logout process
    function logout() {
        $data = array
                (
                'id' => 0,
                'username' => 0,
                'level' => 0,
                'is_login' => FALSE
        );

        $this->session->sess_destroy();
        $this->session->unset_userdata($data);
        $this->load->view('company/login');

        //        $this->session->sess_destroy();
        //        $data['logout'] = 'You have been logged out.';
        //        $this->load->view('company/index', $data);
    }

    function proses_jobseeker() {

        $id = $this->input->post('id');
        if(empty ($id)) {
            $this->data['error'] = "Silahkan inputkan barcode id terlebih dahulu";
            $this->loadTheme('company/home');
        }else {
            $this->data['result'] = $this->jobseeker_model->getJobseekerByBarcode($id);
            $this->data['querys'] = $this->jobpost_model->getAll();
            $this->data['namaCompany'] = $this->session->userdata('username');


            if (count($this->data['result']) == 0) {
                $this->data['error'] = "Data Jobseeker tidak ditemukan";
//            redirect('company/index', $this->data);
                $this->loadTheme('company/home');
            } else {
//            $result = $this->jobseeker_model->getJobseeker($id);
                $result = $this->data['result'];
                $this->data['id'] = $result['id'];
                $this->data['nama'] = $result['nama'];
                $this->data['foto'] = $result['foto'];
                $this->data['no_identitas'] = $result['no_identitas'];
                $this->data['jenkel'] = $result['jenkel'];
                $this->data['tempat_lahir'] = $result['tempat_lahir'];
                $this->data['tanggal_lahir'] = $result['tanggal_lahir'];
                $this->data['universitas'] = $result['universitas'];
                $this->data['jenjang'] = $result['jenjang'];
                $this->data['jurusan'] = $result['jurusan'];
                $this->data['nilai'] = $result['nilai'];
                $this->data['tahun_masuk'] = $result['tahun_masuk'];
                $this->data['tahun_lulus'] = $result['tahun_lulus'];

                $datasession['nama'] = $result['nama'];
                $datasession['no_identitas'] = $result['no_identitas'];
                $datasession['jenkel'] = $result['jenkel'];
                $datasession['jenjang'] = $result['jenjang'];
                $datasession['jurusan'] = $result['jurusan'];
                $datasession['nilai'] = $result['nilai'];

                $this->session->set_userdata($datasession);
                $this->loadTheme('company/show');
            }
        }
    }

    function apply_lamaran($job_id) {

        $jid = $job_id;
        $this->data['jobpost'] = $this->jobpost_model->getJobpost($jid);

        $allJobJur= $this->jobpost_jurusan_model->getAll($jid);
        $this->data['allJobJur'] = $allJobJur;
//        $this->data['postjur'] = $this->db->query('SELECT id_jobpost, jurusan FROM jobpost_jurusan');

        $this->data['nama'] = $this->session->userdata('nama');
        $this->data['jenkel'] = $this->session->userdata('jenkel');
        $this->data['jenjang'] = $this->session->userdata('jenjang');
        $this->data['jurusan'] = $this->session->userdata('jurusan');
        $this->data['nilai'] = $this->session->userdata('nilai');

        $this->data['namaCompany'] = $this->session->userdata('username');
        //if (empty($jid) or count($data['jobpost']) == 0) {
        if (empty($jid) or count($this->data['jobpost']) == 0) {
            redirect('company/home');
        } else {
            $jobposts = $this->jobpost_model->getJobpost($jid);
            $this->data['jid'] = $jobposts['id'];
            $this->data['jtitle'] = $jobposts['title'];
            $this->data['jdeskripsi'] = $jobposts['deskripsi'];
            $this->data['jjenkel'] = $jobposts['jenkel'];
            $this->data['jpendidikan_terakhir'] = $jobposts['pendidikan_terakhir'];
            $this->data['jumur_min'] = $jobposts['umur_min'];
            $this->data['jumur_max'] = $jobposts['umur_max'];
//            $this->load->view('company/apply', $data);
            $this->loadTheme('company/apply');
        }
    }
}