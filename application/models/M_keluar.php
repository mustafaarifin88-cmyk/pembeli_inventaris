<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_keluar extends CI_Model {

    public function get_all()
    {
        return $this->db->get('tb_barang_keluar')->result();
    }

    public function insert($data)
    {
        $this->db->insert('tb_barang_keluar', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_keluar', $id);
        $this->db->update('tb_barang_keluar', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_keluar', $id);
        $this->db->delete('tb_barang_keluar');
    }
}