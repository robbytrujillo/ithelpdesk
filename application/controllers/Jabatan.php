<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {
    public function index() {
        // $this->load->model('M_jabatan');
        $data['jabatan'] = $this->M_jabatan->get_jabatan();

        $this->template->load('back/template', 'back/jabatan/jabatan', $data);
    }

    function save_jabatan() {
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
        
        $this->form_validation->set_message('required','{field} Harus diisi');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'jabatan' => $this->input->post('jabatan'),
            ];

            $this->M_jabatan->insert($data);
            $this->session->set_flashdata('message','<div class="alert alert-info">Data Berhasil Di Simpan</div>');

            redirect('jabatan','refresh');
        } else {
            $this->index();
        }
    }

    function edit_jabatan($id) {
        $data['jbt'] = $this->M_jabatan->get_id_jabatan($id);

        if ($data['jbt']) {
            $data['jabatan'] = $this->M_jabatan->get_jabatan();
            
            $this->template->load('back/template', 'back/jabatan/edit_jabatan', $data);
        } else {
            $this->session->set_flashdata('message','<div class="alert alert-danger">Data Tidak Ada!</div>');

            redirect('jabatan','refresh');
        }
    }
}

?>