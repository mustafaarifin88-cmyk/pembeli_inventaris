<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_barang');
    }

    public function index()
    {
        $data['title'] = 'Data Barang';
        $data['barang'] = $this->M_barang->get_all();
        $data['content'] = 'v_barang';
        $this->load->view('v_template', $data);
    }

    public function tambah_aksi()
    {
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'lokasi'      => $this->input->post('lokasi'),
            'kondisi'     => $this->input->post('kondisi'),
            'jumlah'      => $this->input->post('jumlah'),
            'sumber_dana' => $this->input->post('sumber_dana'),
            'jenis'       => $this->input->post('jenis'),
            'keterangan'  => $this->input->post('keterangan')
        );

        $this->M_barang->insert($data);
        redirect('barang');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_barang');
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'spesifikasi' => $this->input->post('spesifikasi'),
            'lokasi'      => $this->input->post('lokasi'),
            'kondisi'     => $this->input->post('kondisi'),
            'jumlah'      => $this->input->post('jumlah'),
            'sumber_dana' => $this->input->post('sumber_dana'),
            'jenis'       => $this->input->post('jenis'),
            'keterangan'  => $this->input->post('keterangan')
        );

        $this->M_barang->update($id, $data);
        redirect('barang');
    }

    public function hapus($id)
    {
        $this->M_barang->delete($id);
        redirect('barang');
    }
}