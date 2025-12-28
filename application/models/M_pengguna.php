<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengguna extends CI_Model {

    public function get_all()
    {
        return $this->db->get('tb_pengguna')->result();
    }

    public function insert($data)
    {
        $this->db->insert('tb_pengguna', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_pengguna', $id);
        $this->db->update('tb_pengguna', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_pengguna', $id);
        $this->db->delete('tb_pengguna');
    }
}