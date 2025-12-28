<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_keluar');
    }

    public function index()
    {
        $data['title'] = 'Barang Keluar';
        $data['keluar'] = $this->M_keluar->get_all();
        $data['content'] = 'v_keluar';
        $this->load->view('v_template', $data);
    }
}