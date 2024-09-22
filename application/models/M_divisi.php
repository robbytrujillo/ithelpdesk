<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_divisi extends CI_Model {
    public function get_divisi() {
        return $this->db->get('divisi')->result();
    }

    function insert($data) {
        return $this->db->insert('divisi', $data);
    }

    function get_id_divisi($id) {
        $this->db->where('id_divisi', $id);
        return $this->db->get('divisi')->row();
    }
}


?>