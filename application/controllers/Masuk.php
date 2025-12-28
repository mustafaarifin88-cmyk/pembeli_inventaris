<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_masuk');
    }

    public function index()
    {
        $data['title'] = 'Barang Masuk';
        $data['masuk'] = $this->M_masuk->get_all();
        $data['content'] = 'v_masuk';
        $this->load->view('v_template', $data);
    }
}