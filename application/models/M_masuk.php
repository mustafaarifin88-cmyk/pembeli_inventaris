<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_masuk extends CI_Model {

    public function get_all()
    {
        return $this->db->get('tb_barang_masuk')->result();
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