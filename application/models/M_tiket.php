<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_tiket extends CI_Model {
    function get_tiket() {
        return $this->db->get('tiket')->result();
    }

    function get_no_tiket($no_tiket) {
        // $this->db->where('id_users', $no_tiket);
        $this->db->join('users', 'tiket.user_id = users.id_users', 'left');
        $this->db->join('divisi', 'users.divisi_id = divisi.id_divisi', 'left');
        $this->db->join('jabatan', 'users.jabatan_id = jabatan.id_jabatan', 'left');
        $this->db->where('no_tiket', $no_tiket);

        return $this->db->get('tiket')->row();
    }
}