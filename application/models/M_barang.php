<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

    public function get_all()
    {
        return $this->db->get('tb_barang')->result();
    }

    public function insert($data)
    {
        $this->db->insert('tb_barang', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_barang', $id);
        $this->db->update('tb_barang', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_barang', $id);
        $this->db->delete('tb_barang');
    }
}