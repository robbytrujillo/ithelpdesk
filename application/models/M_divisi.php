<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_divisi extends CI_Model {
    public function get_divisi() {
        return $this->db->get('divisi')->result();
    }
}


?>