<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dashboard');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';

        // Mengambil data angka dari Model
        $data['total_barang']   = $this->m_dashboard->hitung_barang();
        $data['total_suplier']  = $this->m_dashboard->hitung_suplier();
        $data['total_pengguna'] = $this->m_dashboard->hitung_pengguna();
        $data['total_pinjam']   = $this->m_dashboard->hitung_peminjaman();
        $data['total_masuk']    = $this->m_dashboard->hitung_masuk();
        $data['total_keluar']   = $this->m_dashboard->hitung_keluar();
        
        // Dummy data jika model belum ada
        $data['total_kembali'] = 0; 
        $data['total_belum'] = 0; 

        // Load view v_dashboard yang baru dibuat
        $data['content'] = 'v_dashboard'; 
        
        // Pass $data ke template agar bisa dibaca oleh v_dashboard di dalamnya
        $this->load->view('v_template', $data);
    }
}