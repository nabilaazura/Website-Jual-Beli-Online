<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sportstuff extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sportstuff_model');
		$this->load->model('User_model');
    }
	public function index()
	{
        $data['judul'] = "Halaman Sportstuff";
		$data['user'] = $this->User_model->getBy();
        $data['sportstuff'] = $this->Sportstuff_model->get();
		$this->load->view('layout/header', $data);
        $this->load->view('sportstuff/vw_sportstuff', $data);
        $this->load->view('layout/footer', $data);
	}
    function tambah()
	{
		$data['judul'] = "Halaman Tambah Sportstuff";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('merk', 'merk Spoststuff', 'required', [
			'required' => 'Merk Spoststuff Wajib di isi'
		]);
		$this->form_validation->set_rules('jenis', 'jenis', 'required', [
			'required' => 'jenis Wajib di isi'
		]);
		$this->form_validation->set_rules('harga', 'harga', 'required', [
			'required' => 'harga Wajib di isi'
		]);
		$this->form_validation->set_rules('stok', 'Prodi', 'required', [
			'required' => 'Prodi Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("sportstuff/vw_tambah_sportstuff", $data);
			$this->load->view("layout/footer", $data);
		} else {

			$data = [
				'merk' => $this->input->post('merk'),
				'jenis' => $this->input->post('jenis'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'),

			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/sportstuff/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->Sportstuff_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Sportstuff Berhasil Ditambah!</div>');
			redirect('Sportstuff');
		}
	}
    function edit($id)
	{
		$data['judul'] = "Halaman Edit Sportstuff";
		$data['sportstuff'] = $this->Sportstuff_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('merk', 'merk Spoststuff', 'required', [
			'required' => 'Merk Spoststuff Wajib di isi'
		]);
		$this->form_validation->set_rules('jenis', 'jenis', 'required', [
			'required' => 'jenis Wajib di isi'
		]);
		$this->form_validation->set_rules('harga', 'harga', 'required', [
			'required' => 'harga Wajib di isi'
		]);
		$this->form_validation->set_rules('stok', 'Prodi', 'required', [
			'required' => 'Prodi Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("sportstuff/vw_ubah_sportstuff", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'merk' => $this->input->post('merk'),
				'jenis' => $this->input->post('jenis'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/sportstuff/';
				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {

					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
					$query = $this->db->set('gambar', $new_image);
					if ($query) {
						$old_image = $this->db->get_where('sportstuff', ['id' => $id])->row();
						unlink(FCPATH . 'assets/img/sportstuff/' . $old_image->gambar);
					}
				} else {
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id');
			$this->Sportstuff_model->update(['id' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Sportstuff Berhasil Diubah!</div>');
			redirect('Sportstuff');
		}
	}
    function hapus($id)
	{
		$this->Sportstuff_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Sportstuff tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Sportstuff Berhasil Dihapus!</div>');
		}
		redirect('Sportstuff');
	}
}
