<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        $this->load->model('Pegawai_model');
    }
    function index()
    {
        $data['judul'] = "Daftar Pegawai";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pegawai'] = $this->Pegawai_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("pegawai/vw_pegawai", $data);
        $this->load->view("layout/footer", $data);
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Pegawai";
        $data['pegawai'] = $this->Pegawai_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Pegawai', 'required', [
            'required' => 'Nama Pegawai Wajib diisi',
        ]);
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Wajib diisi',
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'Alamat Wajib diisi',
        ]);
        $this->form_validation->set_rules('nohp', 'No HP', 'required', [
            'required' => 'No HP Wajib diisi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("pegawai/vw_tambah_pegawai", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'jk' => $this->input->post('jk'),
                'alamat' => $this->input->post('alamat'),
                'nohp' => $this->input->post('nohp'),
                'BPF-TI' => 'bpftiabcde'
            ];
            $this->Pegawai_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success role="alert">
                                                        Data Pegawai Berhasil Ditambah!</div>');
            redirect('Pegawai');
        }
    }
    function hapus($id)
    {
        $this->Pegawai_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success role="alert">
                                                        Data Pegawai Berhasil Dihapus!</div>');
        redirect('Pegawai');
    }
    function edit($id)
    {
        $data['judul'] = "Halaman Edit Pegawai";
        $data['pegawai'] = $this->Pegawai_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Pegawai', 'required', [
            'required' => 'Nama Pegawai Wajib diisi',
        ]);
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required', [
            'required' => 'Jenis Kelamin Wajib diisi',
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Pegawai Wajib diisi',
        ]);
        $this->form_validation->set_rules('nohp', 'No HP', 'required', [
            'required' => 'No HP Pegawai Wajib diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("pegawai/vw_ubah_pegawai", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'jk' => $this->input->post('jk'),
                'alamat' => $this->input->post('alamat'),
                'nohp' => $this->input->post('nohp'),
                'id' => $this->input->post('id'),
                'BPF-TI' => 'bpftiabcde'
            ];
            $this->Pegawai_model->update($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success role="alert">
                                                        Data Pegawai Berhasil Diubah!</div>');
            redirect('Pegawai');
        }
    }
}