<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_suplier');
    }

    public function index()
    {
        $data['title'] = 'Data Suplier';
        $data['suplier'] = $this->M_suplier->get_all();
        $data['content'] = 'v_suplier';
        $this->load->view('v_template', $data);
    }

    public function tambah_aksi()
    {
        $data = array(
            'nama_suplier' => $this->input->post('nama_suplier'),
            'alamat'       => $this->input->post('alamat')
        );

        $this->M_suplier->insert($data);
        redirect('suplier');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_suplier');
        $data = array(
            'nama_suplier' => $this->input->post('nama_suplier'),
            'alamat'       => $this->input->post('alamat')
        );

        $this->M_suplier->update($id, $data);
        redirect('suplier');
    }

    public function hapus($id)
    {
        $this->M_suplier->delete($id);
        redirect('suplier');
    }
}