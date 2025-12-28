<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_masuk');
        $this->load->model('M_barang');
        $this->load->model('M_suplier');
    }

    public function index()
    {
        $data['title'] = 'Barang Masuk';
        $data['masuk'] = $this->M_masuk->get_all();
        $data['barang_list'] = $this->M_barang->get_all();
        $data['suplier_list'] = $this->M_suplier->get_all();
        $data['content'] = 'v_masuk';
        $this->load->view('v_template', $data);
    }

    public function tambah_aksi()
    {
        $data = array(
            'id_barang'   => $this->input->post('id_barang'),
            'id_suplier'  => $this->input->post('id_suplier'),
            'jumlah'      => $this->input->post('jumlah'),
            'keterangan'  => $this->input->post('keterangan'),
            'tgl_masuk'   => $this->input->post('tgl_masuk')
        );

        // Update stok di tb_barang (Opsional: jika ingin otomatis nambah stok)
        $barang = $this->db->get_where('tb_barang', ['id_barang' => $data['id_barang']])->row();
        $stok_baru = $barang->jumlah + $data['jumlah'];
        $this->db->where('id_barang', $data['id_barang'])->update('tb_barang', ['jumlah' => $stok_baru]);

        $this->M_masuk->insert($data);
        redirect('masuk');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_masuk');
        $data = array(
            'id_barang'   => $this->input->post('id_barang'),
            'id_suplier'  => $this->input->post('id_suplier'),
            'jumlah'      => $this->input->post('jumlah'),
            'keterangan'  => $this->input->post('keterangan'),
            'tgl_masuk'   => $this->input->post('tgl_masuk')
        );

        $this->M_masuk->update($id, $data);
        redirect('masuk');
    }

    public function hapus($id)
    {
        $this->M_masuk->delete($id);
        redirect('masuk');
    }
}