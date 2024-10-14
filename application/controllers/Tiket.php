<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Controller {
    public function index() {
        $data['tiket'] = $this->M_tiket->get_tiket();
        $data['no_tiket'] = $this->M_tiket->no_tiket();

        $this->template->load('back/template','back/tiket/tiket', $data);
    }

    function add_tiket() {
        $data['tiket'] = $this->M_tiket->get_tiket();
        // $data['divisi'] = $this->M_divisi->get_divisi();
        $this->template->load('back/template', 'back/tiket/form_tiket', $data);
    }
    
    function save_tiket() {
        $this->form_validation->set_rules('judul_tiket', 'Judul Tiket', 'trim|required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Tiket', 'trim|required');

        $this->form_validation->set_message('required','{field} Harus diisi');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            if ($_FILES['gambar_tiket']['error'] <> 4) {
                $config['upload_path'] = './assets/images/tiket/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $nama_file = $this->input->post('no_tiket') . date('YmdHis');
                $config['file_name'] = $nama_file;
                // $config['max_width'] = '1024'; 
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar_tiket')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">'. $error['error'] . '</div>');
                    $this->index();
                } else {
                    $gambar_tiket = $this->upload->data();

                    $data = array(
                        'no_tiket'      => $this->input->post('no_tiket'),
                        'judul_tiket'   => $this->input->post('judul_tiket'),
                        'deskripsi'     => $this->input->post('deskripsi'),
                        'status_tiket'  => 0,
                        // 'user_id'       => $this->session->userdata('id_users'),
                        'user_id'       => $this->session->userdata('id_users'),
                        'gambar_tiket'  => $this->upload->data('file_name'),
                        'tgl_daftar'    => date('Y-m-d'),
                    );


                    $this->M_tiket->insert($data);
                    $this->session->set_flashdata('message','<div class="alert alert-info">Data Berhasil di Simpan</div>');
                    redirect('tiket','refresh');
                }
            } else {
                $data = array(
                    'no_tiket'      => $this->input->post('no_tiket'),
                    'judul_tiket'   => $this->input->post('judul_tiket'),
                    'deskripsi'     => $this->input->post('deskripsi'),
                    'status_tiket'  => 0,
                    'user_id'       => $this->session->userdata('id_users'),
                    // 'gambar_tiket'  => $this->upload->data('file_name'),
                    'tgl_daftar'    => date('Y-m-d'),
                );

                $this->M_tiket->insert($data);
                $this->session->set_flashdata('message','<div class="alert alert-info">Data Berhasil di Simpan</div>');
                redirect('tiket','refresh');
        } 
        }
    }

    function detail_tiket($no_tiket) {
        $data['tiket'] = $this->M_tiket->get_no_tiket($no_tiket);
        
        if ($data['tiket']) {
            $data['title'] = 'Detail Tiket'. $data['tiket']->no_tiket;
            $this->template->load('back/template', 'back/tiket/detail_tiket', $data);
        }
    }

    function delete_tiket($id) {
        $delete = $this->M_tiket->get_id_tiket($id);

        if ($delete) {
            $this->M_tiket->delete($id);
            $this->session->set_flashdata('message','<div class="alert alert-info">Data berhasil dihapus</div>');
            redirect('tiket','refresh');
        } else {
            $this->session->set_flashdata('message','<div class="alert alert-danger">Data tidak ada!</div>');
            redirect('tiket','refresh');
        }
    }   
}