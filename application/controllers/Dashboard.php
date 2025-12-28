<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_dashboard');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';

        $data['total_barang'] = $this->M_dashboard->hitung_barang();
        $data['total_suplier'] = $this->M_dashboard->hitung_suplier();
        $data['total_pengguna'] = $this->M_dashboard->hitung_pengguna();
        $data['total_pinjam'] = $this->M_dashboard->hitung_peminjaman();
        $data['total_masuk'] = $this->M_dashboard->hitung_masuk();
        $data['total_keluar'] = $this->M_dashboard->hitung_keluar();
        
        $data['total_kembali'] = $this->M_dashboard->hitung_kembali();
        $data['total_belum'] = $this->M_dashboard->hitung_belum();

        $data['content'] = 'v_dashboard'; 
        $this->load->view('v_template', $data);
    }
}