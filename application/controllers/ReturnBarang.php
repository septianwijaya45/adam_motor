<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReturnBarang extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ReturnBarang_model', 'rbm');
        $this->load->model('User_model', 'um');
        $this->load->model('Pembeli_model', 'pm');
		$this->load->model('Main_model', 'mm');
		$this->load->model('Menu_model', 'memo');
	}

	public function index()
	{
		$this->mm->check_login();
		$data['dataUser'] = $this->mm->dataUser();
        $data['return'] = $this->db->query('SELECT tbr.*, tbp.nama_pembeli, tbm.nama_menu, tbu.nama_user 
        FROM tb_return tbr, tb_pembeli tbp, tb_menu tbm, tb_user tbu
        WHERE tbr.id_pembeli = tbp.id_pembeli
        AND tbr.id_menu = tbm.id_menu
        AND tbr.id_user = tbu.id_user
        ORDER BY tbr.id_return DESC')->result_array();
		$data['menu'] = $this->memo->getAllMenuByOutletUserLogin();
		$data['title'] = "Halaman Return Barang";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('return/index', $data);
		$this->load->view('templates/tutup_sidebar', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('return/js');
	}

	public function addReturnBarang()
	{
		$this->rbm->addReturnBarang();
	}

	public function editReturnBarang($id_return)
	{
		$this->rbm->editReturnBarang($id_return);
	}

	public function cetak($id_return)
	{
		$this->rbm->pdfReturnBarang($id_return);
	}

	public function deleteReturnBarang($id_return)
	{
		$this->rbm->deleteReturnBarang($id_return);
	}
}