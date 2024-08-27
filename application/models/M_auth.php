<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {
    function insert($data) {
        $this->db->insert('users', $data);
    }
}

?>