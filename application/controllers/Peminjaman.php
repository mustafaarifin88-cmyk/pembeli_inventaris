<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_peminjaman');
    }

    public function index()
    {
        $data['title'] = 'Data Peminjaman';
        $data['peminjaman'] = $this->M_peminjaman->get_all();
        $data['content'] = 'v_peminjaman';
        $this->load->view('v_template', $data);
    }
}