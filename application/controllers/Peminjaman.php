<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_peminjaman');
        $this->load->model('M_barang');
    }

    public function index()
    {
        $data['title'] = 'Data Peminjaman';
        $data['peminjaman'] = $this->M_peminjaman->get_all();
        $data['barang_list'] = $this->M_barang->get_all();
        $data['content'] = 'v_peminjaman';
        $this->load->view('v_template', $data);
    }

    public function tambah_aksi()
    {
        $data = array(
            'nama_peminjam' => $this->input->post('nama_peminjam'),
            'instansi'      => $this->input->post('instansi'),
            'id_barang'     => $this->input->post('id_barang'),
            'jumlah'        => $this->input->post('jumlah'),
            'tgl_pinjam'    => $this->input->post('tgl_pinjam'),
            'tgl_kembali'   => $this->input->post('tgl_kembali'),
            'status_kembali'=> '0'
        );

        $this->M_peminjaman->insert($data);
        redirect('peminjaman');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_pinjam');
        $data = array(
            'nama_peminjam' => $this->input->post('nama_peminjam'),
            'instansi'      => $this->input->post('instansi'),
            'id_barang'     => $this->input->post('id_barang'),
            'jumlah'        => $this->input->post('jumlah'),
            'tgl_pinjam'    => $this->input->post('tgl_pinjam'),
            'tgl_kembali'   => $this->input->post('tgl_kembali'),
            'status_kembali'=> $this->input->post('status_kembali')
        );

        $this->M_peminjaman->update($id, $data);
        redirect('peminjaman');
    }

    public function hapus($id)
    {
        $this->M_peminjaman->delete($id);
        redirect('peminjaman');
    }
}