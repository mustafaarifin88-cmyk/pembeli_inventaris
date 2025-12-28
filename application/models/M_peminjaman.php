<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peminjaman extends CI_Model {

    public function get_all()
    {
        return $this->db->get('tb_peminjaman')->result();
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