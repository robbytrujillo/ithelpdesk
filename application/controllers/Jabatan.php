<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {
    public function index() {
        $data['jabatan'] = $this->M_jabatan->get_jabatan();
        $this->template->load('back/template', 'back/jabatan/jabatan');
    }
}

?>