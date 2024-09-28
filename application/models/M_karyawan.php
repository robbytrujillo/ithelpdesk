<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model {
    function get_karyawan() {
        return $this->db->get('users')->result();
    }
}