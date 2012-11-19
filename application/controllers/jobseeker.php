<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jobseeker extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->library('template');
        $this->load->model('jobseeker_model');
        $this->load->model('pengalaman_kerja_model');
    }

    function index() {
        $this->loadTheme();
    }

    function loadTheme($view = null,$data = null) {
        if(empty ($view) || $view == null) {
            $view = 'jobseeker/index';
        }
        if(empty ($data) || $data == null) {
            $this->template->set_theme('omenk');
            $this->template->set_layout('default')
                    ->set_partial('mainnav', 'menu/mainnav')
                    //->set_partial('secnav', 'menu/secnav', $this->data)
                    ->title('Registration for Jobseeker', 'Jobforcareer')
                    ->build($view);
        }else {
            $this->template->set_theme('omenk');
            $this->template->set_layout('default')
                    ->set_partial('mainnav', 'menu/mainnav')
                    //->set_partial('secnav', 'menu/secnav', $this->data)
                    ->title('Registration for Jobseeker', 'Jobforcareer')
                    ->build($view,$data);
        }
    }


    function create() {
        $config['upload_path'] = 'images/uploaded/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('jobseeker/error', $error);
        } else {

            //$data = array('upload_data' => $this->upload->data());

            $images_data = $this->upload->data();
            //$this->load->view('jobseeker/index', $data);
            $jenis_identitas = $this->input->post('jenis_identitas');
            $no_identitas = $this->input->post('no_identitas');
            $nama = $this->input->post('nama');
            $hp = $this->input->post('hp');
            $jenkel = $this->input->post('jenkel');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');

            $universitas = $this->input->post('universitas');
            $jenjang = $this->input->post('jenjang');
            $jurusan = $this->input->post('jurusan');
            $nilai = $this->input->post('nilai');
            $tahun_masuk = $this->input->post('tahun_masuk');
            $tahun_lulus = $this->input->post('tahun_lulus');

            $jabatan = $this->input->post('jabatan');
            $tempat_bekerja = $this->input->post('tempat_bekerja');
            $date_start = $this->input->post('date_start');
            $date_end = $this->input->post('date_end');
            $keterangan = $this->input->post('keterangan');
//          $jobseeker_id = $this->db->insert_id();

            $tgl_timestamp = date("dymhsm");
            $jobseeker_id = strtoupper(hash('crc32b', $no_identitas . $tgl_timestamp));


            $data = array(
                    'id_jobseeker' => $jobseeker_id,
                    'jenis_identitas' => $jenis_identitas,
                    'no_identitas' => $no_identitas,
                    'nama' => $nama,
                    'hp' => $hp,
                    'jenkel' => $jenkel,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir,
                    'foto' => $images_data['file_name'],
                    'universitas' => $universitas,
                    'jenjang' => $jenjang,
                    'jurusan' => $jurusan,
                    'nilai' => $nilai,
                    'tahun_masuk' => $tahun_masuk,
                    'tahun_lulus' => $tahun_lulus,
            );

            $data_tampil = array(
                    'jobseeker_id' => $jobseeker_id,
                    'jabatan' => $jabatan,
                    'tempat_bekerja' => $tempat_bekerja,
                    'date_start' => $date_start,
                    'date_end' => $date_end,
                    'keterangan' => $keterangan,
                    'jenis_identitas' => $jenis_identitas,
                    'no_identitas' => $no_identitas,
                    'nama' => $nama,
                    'hp' => $hp,
                    'jenkel' => $jenkel,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir,
                    'foto' => $images_data['file_name'],
                    'universitas' => $universitas,
                    'jenjang' => $jenjang,
                    'jurusan' => $jurusan,
                    'nilai' => $nilai,
                    'tahun_masuk' => $tahun_masuk,
                    'tahun_lulus' => $tahun_lulus,
            );
            $this->db->insert('jobseeker', $data);
            $this->pengalaman_kerja_model->save();

            $this->load->view('jobseeker/sukses', $data_tampil);
//            $this->template->set_theme('omenk');
//            $this->template->set_layout('default')
//                ->set_partial('mainnav', 'menu/mainnav')
//            //->set_partial('secnav', 'menu/secnav', $this->data)
//                ->title('Jobseeker', 'Rockstar Studio')
//                ->build('jobseeker/sukses',$data_tampil);
        }
    }

    function save_jobseeker() {
	
		$this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_identitas', 'Jenis Identitas', 'required');
        $this->form_validation->set_rules('no_identitas', 'No Identitas', 'required');
        $this->form_validation->set_rules('hp', 'handphone', 'required');
        $this->form_validation->set_rules('jenkel', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
         if ($this->form_validation->run() == TRUE) {
		  if (isset($_POST['register'])) {
            // Load the library - no config specified here
            $this->load->library('upload');

            // Check if there was a file uploaded - there are other ways to
            // check this such as checking the 'error' for the file - if error
            // is 0, you are good to code
            if (!empty($_FILES['userfile']['name'])) {
                // Specify configuration for File 1
                $config['upload_path'] = 'images/uploaded/';
                $config['allowed_types'] = 'gif|jpg|png|pdf';
                $config['max_size']	= '100';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';

                // Initialize config for File 1
                $this->upload->initialize($config);

                // Upload file 1
                if ($this->upload->do_upload('userfile')) {

                    $images_data = $this->upload->data();
                    //$this->load->view('jobseeker/index', $data);
                }
                else {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('jobseeker/error', $error);
                }

            }

            // Do we have a second file?
            if (!empty($_FILES['userfile1']['name'])) {
                // Config for File 2 - can be completely different to file 1's config
                // or if you want to stick with config for file 1, do nothing!
                $config['upload_path'] = 'images/uploaded/';
                $config['allowed_types'] = 'gif|jpg|png|pdf';
                $config['max_size']	= '100';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';

                // Initialize the new config
                $this->upload->initialize($config);

                // Upload the second file
                if ($this->upload->do_upload('userfile1')) {
                    $cv_data = $this->upload->data();
                }
                else {
                    //                    echo $this->upload->display_errors();
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('upload_form', $error);

                }

            }
        }
//        else
//        {
//            $this->load->view("upload_form");
//        }

        $jenis_identitas = $this->input->post('jenis_identitas');
        $no_identitas = $this->input->post('no_identitas');
        $nama = $this->input->post('nama');
        $hp = $this->input->post('hp');
        $jenkel = $this->input->post('jenkel');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');

        $universitas = $this->input->post('universitas');
        $jenjang = $this->input->post('jenjang');
        $jurusan = $this->input->post('jurusan');
        $nilai = $this->input->post('nilai');
        $tahun_masuk = $this->input->post('tahun_masuk');
        $tahun_lulus = $this->input->post('tahun_lulus');

        $jabatan = $this->input->post('jabatan');
        $tempat_bekerja = $this->input->post('tempat_bekerja');
        $date_start = $this->input->post('date_start');
        $date_end = $this->input->post('date_end');
        $keterangan = $this->input->post('keterangan');
        //            $jobseeker_id = $this->db->insert_id();

        $tgl_timestamp = date("dymhsm");
        $jobseeker_id = strtoupper(hash('crc32b', $no_identitas . $tgl_timestamp));


        $data = array(
                'id_jobseeker' => $jobseeker_id,
                'jenis_identitas' => $jenis_identitas,
                'no_identitas' => $no_identitas,
                'nama' => $nama,
                'hp' => $hp,
                'jenkel' => $jenkel,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'foto' => $images_data['file_name'],
                'cv' => $cv_data['file_name'],
                'universitas' => $universitas,
                'jenjang' => $jenjang,
                'jurusan' => $jurusan,
                'nilai' => $nilai,
                'tahun_masuk' => $tahun_masuk,
                'tahun_lulus' => $tahun_lulus,
        );

        $data_tampil = array(
                'jobseeker_id' => $jobseeker_id,
                'jabatan' => $jabatan,
                'tempat_bekerja' => $tempat_bekerja,
                'date_start' => $date_start,
                'date_end' => $date_end,
                'keterangan' => $keterangan,
                'jenis_identitas' => $jenis_identitas,
                'no_identitas' => $no_identitas,
                'nama' => $nama,
                'hp' => $hp,
                'jenkel' => $jenkel,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'foto' => $images_data['file_name'],
                'universitas' => $universitas,
                'jenjang' => $jenjang,
                'jurusan' => $jurusan,
                'nilai' => $nilai,
                'tahun_masuk' => $tahun_masuk,
                'tahun_lulus' => $tahun_lulus,
        );

        $this->db->insert('jobseeker', $data);
        $this->pengalaman_kerja_model->save();

//        $this->load->view('jobseeker/sukses', $data_tampil);
        $this->loadTheme('jobseeker/sukses', $data_tampil);
    }else{
	$this->loadTheme('jobseeker/index');
	
	}
		 
} 
        // Has the form been posted?
       
}
