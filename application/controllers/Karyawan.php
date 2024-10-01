<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
    public function index() {
        $data['karyawan'] = $this->M_karyawan->get_karyawan();

        $this->template->load('back/template', 'back/karyawan/data_karyawan', $data);
    }

    function add_karyawan() {
        $data['jabatan'] = $this->M_jabatan->get_jabatan();
        $data['divisi'] = $this->M_divisi->get_divisi();
        $this->template->load('back/template', 'back/karyawan/form_karyawan', $data);
    }

    function save_karyawan() {
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'valid_email|is_unique[users.email]|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[5]|required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|matches[password]|required');

        $this->form_validation->set_message('required','{field} Harus diisi');
        $this->form_validation->set_message('valid_email','{field} anda harus valid');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'username'=> $this->input->post('username'),
                'email'=> $this->input->post('email'),
                'password'=> password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'status_user' => 1,
                'level_user' => 1,
            );

            // var_dump($data);

            $this->M_auth->insert($data);

            $this->session->set_flashdata('message','<div class="alert alert-info">Data Berhasil Di Simpan</div>');

            redirect('auth/login','refresh');
        } else {
            $this->load->view('back/register');
        }
    }
}