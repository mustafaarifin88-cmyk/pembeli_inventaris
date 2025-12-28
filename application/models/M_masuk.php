<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_masuk extends CI_Model {

    public function get_all()
    {
        $this->db->select('tb_barang_masuk.*, tb_barang.nama_barang, tb_suplier.nama_suplier');
        $this->db->from('tb_barang_masuk');
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_barang_masuk.id_barang');
        $this->db->join('tb_suplier', 'tb_suplier.id_suplier = tb_barang_masuk.id_suplier');
        $this->db->order_by('id_masuk', 'DESC');
        return $this->db->get()->result();
    }

    public function insert($data)
    {
        $this->db->insert('tb_barang_masuk', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_masuk', $id);
        $this->db->update('tb_barang_masuk', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_masuk', $id);
        $this->db->delete('tb_barang_masuk');
    }
}