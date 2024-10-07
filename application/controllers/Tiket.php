<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Controller {
    public function index() {
        $data['tiket'] = $this->M_tiket->get_tiket();

        $this->template->load('back/template','back/tiket/tiket', $data);
    }
}