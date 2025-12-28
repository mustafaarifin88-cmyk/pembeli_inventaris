<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peminjaman extends CI_Model {

    public function get_all()
    {
        $this->db->select('tb_peminjaman.*, tb_barang.nama_barang');
        $this->db->from('tb_peminjaman');
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_peminjaman.id_barang');
        $this->db->order_by('id_pinjam', 'DESC');
        return $this->db->get()->result();
    }

    public function insert($data)
    {
        $this->db->insert('tb_peminjaman', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_pinjam', $id);
        $this->db->update('tb_peminjaman', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_pinjam', $id);
        $this->db->delete('tb_peminjaman');
    }
}