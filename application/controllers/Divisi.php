<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {

    public function index() {
        $data['divisi'] = $this->M_divisi->get_divisi();

        $this->template->load('back/template', 'back/divisi/divisi', $data);
    }

    function save_divisi() {
        $this->form_validation->set_rules('divisi', 'Divisi', 'trim|required');

        $this->form_validation->set_message('required','{field} Harus diisi');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'divisi' => $this->input->post('divisi'),
            ];

            $this->M_divisi->insert($data);
            $this->session->set_flashdata('message','<div class="alert alert-info">Data Berhasil di Simpan</div>');

            redirect('divisi','refresh');
        } else {
            $this->index();
        }
    }

}
?>