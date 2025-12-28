<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

    public function hitung_barang() { return $this->db->count_all('tb_barang'); }
    public function hitung_suplier() { return $this->db->count_all('tb_suplier'); }
    public function hitung_pengguna() { return $this->db->count_all('tb_pengguna'); }
    public function hitung_peminjaman() { return $this->db->count_all('tb_peminjaman'); }
    public function hitung_masuk() { return $this->db->count_all('tb_barang_masuk'); }
    public function hitung_keluar() { return $this->db->count_all('tb_barang_keluar'); }
    
    public function hitung_kembali() 
    { 
        return $this->db->where('status_kembali', '1')->count_all_results('tb_peminjaman'); 
    }

    public function hitung_belum() 
    { 
        return $this->db->where('status_kembali', '0')->count_all_results('tb_peminjaman'); 
    }
}