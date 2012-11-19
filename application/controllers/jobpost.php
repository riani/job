<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jobpost extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('jobpost_model');
        $this->load->library('session');
        $this->load->library('form_validation');

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('template');
        $this->load->library('general');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->data['priv'] = $this->session->userdata('level');
    }


    public function index() {
        $this->loadTheme('jobpost/index');
    }

    function loadTheme($view_file = 'jobpost/show') {
        $this->template->set_theme('omenk');
        $this->template->set_layout('default')
                ->set_partial('mainnav', 'menu/mainnav', $this->data)
                //->set_partial('secnav', 'menu/secnav', $this->data)
                ->title('Company', 'Jobforcareer')
                ->build($view_file, $this->data);
    }

    public function show() {
        if ($this->general->isCompany()) {
            $this->data['querys'] = $this->jobpost_model->getAll();

            $this->loadTheme('jobpost/list');
        } else {
            redirect('company/index');
        }

    }

    function create() {
        if ($this->general->isCompany()) {
            $this->loadTheme('jobpost/create');
        } else {
            redirect('company/index');
        }
    }


    function simpan() {
        $this->jobpost_model->save();
        $this->jobpost_model->simpan_jobpost_jurusan();

        redirect('jobpost/show');
    }


    public function update() {
        $this->jobpost_model->update();
        redirect('jobpost/show');
    }


    function delete($id) {
        $this->db->delete('jobpost', array('id' => $id));
        redirect('jobpost/show');
    }

    //untuk edit data
    function edit() {
        $id = $this->uri->segment(3);
        $data['result'] = $this->jobpost_model->getJobpost($id);

        if (empty($id) or count($data['result']) == 0) {
            redirect('jobpost/index');
        } else {
            $result = $this->jobpost_model->getJobpost($id);
            $this->data['id'] = $result['id'];
            $this->data['title'] = $result['title'];
            $this->data['deskripsi'] = $result['deskripsi'];
            $this->data['jenkel'] = $result['jenkel'];

            $this->data['pendidikan_terakhir'] = $result['pendidikan_terakhir'];
            $this->data['umur_min'] = $result['umur_min'];
            $this->data['umur_max'] = $result['umur_max'];
            $this->data['min_pengalaman'] = $result['min_pengalaman'];
            
            $this->loadTheme('jobpost/edit');
        }
    }


}

