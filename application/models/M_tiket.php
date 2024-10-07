<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_tiket extends CI_Model {
    function get_tiket() {
        return $this->db->get('tiket')->result();
    }
}