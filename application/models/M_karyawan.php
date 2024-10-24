<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model {
    function get_karyawan() {
        return $this->db->get('users')->result();
    }

    function insert($data) {
        $this->db->insert('users', $data);
    }

    function get_id_users($id) {
        $this->db->where('id_users', $id);
        return $this->db->get('users')->row();
    }

    function update($id, $data) {
        $this->db->where('id_users', $id);
        $this->db->update('users', $data);
    }

    function delete($id) {
        $this->db->where('id_users', $id);
        $this->db->delete('users');
    }

    function jumlah_user() {
        $this->db->select('*');
        $this->db->from('users');
        // $this->db->where('status_tiket', 3);

        return $this->db->get()->num_rows();
    }

    function get_id_karyawan($id) {
        $this->db->where('id_users', $id);
        return $this->db->get('users')->row();
    }
}