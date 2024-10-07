<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Controller {
    public function index() {
        $data['tiket'] = $this->M_tiket->get_tiket();

        $this->template->load('back/template','back/tiket/tiket', $data);
    }

    function detail_tiket($no_tiket) {
        $data['tiket'] = $this->M_tiket->get_no_tiket($no_tiket);
        
        if ($data['tiket']) {
            $data['title'] = 'Detail Tiket'. $data['tiket']->no_tiket;
            $this->template->load('back/template', 'back/tiket/detail_tiket', $data);
        }
    }
}