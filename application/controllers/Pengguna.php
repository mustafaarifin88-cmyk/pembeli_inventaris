<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pengguna');
    }

    public function index()
    {
        $data['title'] = 'Data Pengguna';
        $data['pengguna'] = $this->M_pengguna->get_all();
        $data['content'] = 'v_pengguna';
        $this->load->view('v_template', $data);
    }

    public function tambah_aksi()
    {
        $data = array(
            'nama_pengguna' => $this->input->post('nama_pengguna'),
            'level'         => $this->input->post('level')
        );

        $this->M_pengguna->insert($data);
        redirect('pengguna');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_pengguna');
        $data = array(
            'nama_pengguna' => $this->input->post('nama_pengguna'),
            'level'         => $this->input->post('level')
        );

        $this->M_pengguna->update($id, $data);
        redirect('pengguna');
    }

    public function hapus($id)
    {
        $this->M_pengguna->delete($id);
        redirect('pengguna');
    }
}