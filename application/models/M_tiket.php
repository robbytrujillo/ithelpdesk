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

    function no_tiket() {
        $q = $this->db->query("SELECT MAX(RIGHT(no_tiket,4)) AS no_tiket FROM tiket WHERE DATE(tgl_daftar)=CURDATE()");
        $kd = "";
            if ($q->num_rows() > 0) {
                foreach ($q->result() as $k) {
                    $tmp = ((int) $k->no_tiket) + 1;
                    $kd = sprintf("%04s", $tmp);
                } 
                } else {
                    $kd = "0001";
            }
            date_default_timezone_set("Asia/Jakarta");
            return date('dmy') .$kd;
    }

    function insert($data) {
        return $this->db->insert('tiket', $data);
    }
}