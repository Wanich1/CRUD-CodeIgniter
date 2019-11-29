<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

	
	public function index()
	{
		$this->load->model('m_penduduk');
		$data['data_penduduk']= $this->m_penduduk->get_data();

		$this->load->view('penduduk',$data);
	}

	public function tambah_penduduk()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$ttl = $this->input->post('tempat_lahir');
		$tgl = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');

		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'tempat_lahir' => $ttl,
			'tgl_lahir' => $tgl,
			'alamat' => $alamat
		);

		$this->m_penduduk->input_data($data, 'data_penduduk');
		redirect('penduduk/index');
	}
}
