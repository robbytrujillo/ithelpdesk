<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function index() {

    }

    function login() {
        $this->load->view('back/login');
    }

    function register() {
        $this->load->view('back/register');
    }

    function proses_register() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('confirm_password', 'Confirm password', 'trim|required');

        $this->form_validation->set_message('required','{field} Harus diisi');

        $this->form_validation->set_error_delimeters('<div class="alert alert-danger">','</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'username'=> $this->input->post('username'),
                'email'=> $this->input->post('email'),
                'password'=> $this->input->post('password'),
                'status_user' => 1,
                'level_user' => 1,
            );

            var_dump($data);

            // $this->M_auth->insert($data);

            // $this->session->set_flashdata('message','<div class="alert alert-info">Data Berhasil Di Simpan</div>');

            // redirect('auth/login','refresh');
        } else {
            $this->load->view('back/register');
        }
    }
}