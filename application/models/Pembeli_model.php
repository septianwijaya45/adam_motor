<?php 	
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembeli_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model', 'mm');
	}

	public function lastInsert()
	{
		$id_pembeli = $this->db->query('SELECT id_pembeli FROM tb_pembeli ORDER BY id_pembeli DESC')->row();
		return $id_pembeli->id_pembeli;
	}

	public function pembeliById($id)
	{
		$pembeli = $this->db->query('SELECT nama_pembeli FROM tb_pembeli WHERE id_pembeli = '.$id)->row();
		return $pembeli->nama_pembeli;
	}
}