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
    }
}