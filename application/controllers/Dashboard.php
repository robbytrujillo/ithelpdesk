<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function index() {
        $data ['tiket_wait']    = $this->M_tiket->tiket_wait();
        $data ['tiket_proses']  = $this->M_tiket->tiket_proses();
        $data ['tiket_close']   = $this->M_tiket->tiket_close();
        $data ['users']         = $this->M_karyawan->jumlah_user();
        $this->template->load('back/template', 'back/dashboard', $data);
    }

}