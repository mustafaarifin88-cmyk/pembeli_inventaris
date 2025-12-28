<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_suplier extends CI_Model {

    public function get_all()
    {
        return $this->db->get('tb_suplier')->result();
    }

    public function insert($data)
    {
        $this->db->insert('tb_suplier', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_suplier', $id);
        $this->db->update('tb_suplier', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_suplier', $id);
        $this->db->delete('tb_suplier');
    }
}