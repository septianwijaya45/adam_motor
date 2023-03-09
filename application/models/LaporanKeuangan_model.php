<?php 	
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanKeuangan_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model', 'mm');
		$this->load->model('Menu_model', 'mem');
		$this->load->model('Log_model', 'lm');
        $this->load->model('Pembeli_model', 'pm');
	}

	public function getLaporanToday($date_before, $date_after)
	{
		$query = $this->db->query('
             
        ');
        return $query->row_array();
	}

}