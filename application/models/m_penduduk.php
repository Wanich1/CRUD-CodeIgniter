<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penduduk extends CI_Model {

	public function get_data()
	{
		return $this->db->get('data_penduduk')->result_array();
	}
	public function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
}
