<?php 	
defined('BASEPATH') OR exit('No direct script access allowed');

class ReturnBarang_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model', 'mm');
		$this->load->model('Menu_model', 'mem');
		$this->load->model('Log_model', 'lm');
        $this->load->model('Pembeli_model', 'pm');
	}

	public function getReturnById($id_return)
	{
		return $this->db->get_where('tb_return', ['id_return' => $id_return])->row_array();
	}

	public function getAllReturn()
	{
		$this->db->order_by('id_return', 'desc');
		return $this->db->get('tb_return')->result_array();
	}

	public function getReturnTgl($tanggal_awal, $tanggal_akhir)
	{
		$query = "SELECT tbr.*, tbp.nama_pembeli, tbm.nama_menu, tbu.nama_user 
            FROM tb_return tbr, tb_pembeli tbp, tb_menu tbm, tb_user tbu
			WHERE tbr.id_pembeli = tbp.id_pembeli
            AND tbr.id_menu = tbm.id_menu
            AND tbr.id_user = tbu.id_user
            AND tbr.tgl_return BETWEEN '$tanggal_awal' AND '$tanggal_akhir'
			ORDER BY tbr.id_return DESC
		";
		return $this->db->query($query)->result_array();
	}

    public function addReturnBarang()
    {
        $id_menu = $this->input->post('menu', true);
        $id_user = $this->mm->dataUser()['id_user'];
        $nama_pembeli = $this->input->post('nama_pembeli', true);
        $status_return = $this->input->post('status_return', true);
        $tgl_return = $this->input->post('tgl_return', true);
        $total_uang = $this->input->post('total_uang', true);
        $qty = $this->input->post('qty', true);


        $dt_pembeli = array(
            'nama_pembeli' => $nama_pembeli
        );

        $this->db->insert('tb_pembeli', $dt_pembeli);


        $id_pembeli = $this->pm->lastInsert();

        $this->db->insert('tb_return', [
            'id_pembeli'    => $id_pembeli,
            'id_menu'       => $id_menu,
            'id_user'       => $id_user,
            'status_return' => $status_return,
            'tgl_return'    => $tgl_return,
            'total_uang'    => $total_uang,
            'qty'           => $qty
        ]);
        if($qty > 0){
            $menu = $this->mem->getMenuById($id_menu);
            $this->db->where('id_menu', $id_menu);
            $this->db->update('tb_menu', ['stok' => $menu['stok'] + $qty]);
        }


        $this->session->set_flashdata('message-success', 'Return Barang berhasil ditambahkan');
		$this->lm->addLog('Return Barang berhasil ditambahkan', $this->mm->dataUser()['id_user']);
		redirect('returnbarang');
    }

    public function editReturnBarang($id_return)
    {
        $id_menu = $this->input->post('menu', true);
        $id_user = $this->mm->dataUser()['id_user'];
        $nama_pembeli = $this->input->post('nama_pembeli', true);
        $status_return = $this->input->post('status_return', true);
        $tgl_return = $this->input->post('tgl_return', true);
        $total_uang = $this->input->post('total_uang', true);
        $qty = $this->input->post('qty', true);

        
        $dt_return = $this->getReturnById($id_return);
        $dt_pembeli = $this->pm->pembeliById($dt_return['id_pembeli']);

        if($dt_pembeli != $nama_pembeli){
            $dt_pembeli = array(
                'nama_pembeli' => $nama_pembeli
            );
            
            $this->db->where('id_pembeli', $dt_return['id_pembeli']);
            $this->db->update('tb_pembeli', $dt_pembeli);
        }


        if($qty > 0){
            if($id_menu == $dt_return['id_menu']){
                if($qty != $dt_return['qty']){
                    $menu = $this->mem->getMenuById($id_menu);
                    $this->db->where('id_menu', $id_menu);
                    $this->db->update('tb_menu', ['stok' => $menu['stok'] - $dt_return['qty'] + $qty  ]);
                }
            }else{
                $menu = $this->mem->getMenuById($id_menu);
                $this->db->where('id_menu', $dt_return['id_menu']);
                $this->db->update('tb_menu', ['stok' => $menu['stok'] - $dt_return['qty']]);
                $this->db->where('id_menu', $id_menu);
                $this->db->update('tb_menu', ['stok' => $menu['stok'] + $qty  ]);
            }
        }

        $this->db->where('id_return', $id_return);
        $this->db->update('tb_return', [
            'id_menu'       => $id_menu,
            'id_user'       => $id_user,
            'status_return' => $status_return,
            'tgl_return'    => $tgl_return,
            'total_uang'    => $total_uang,
            'qty'           => $qty
        ]);


        $this->session->set_flashdata('message-success', 'Return Barang berhasil diedit');
		$this->lm->addLog('Return Barang berhasil diedit', $this->mm->dataUser()['id_user']);
		redirect('returnbarang');
    }

    public function pdfReturnBarang($id)
    {
        $this->load->library('dompdf_gen');

        $query = "SELECT tbr.*, tbp.nama_pembeli, tbm.nama_menu, tbu.nama_user 
            FROM tb_return tbr, tb_pembeli tbp, tb_menu tbm, tb_user tbu
			WHERE tbr.id_pembeli = tbp.id_pembeli
            AND tbr.id_menu = tbm.id_menu
            AND tbr.id_user = tbu.id_user
            AND tbr.id_return = $id
		";
        $dt['data'] = $this->db->query($query)->row_array();
        $this->load->view('return/laporan', $dt);
        
        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('laporan return '.$dt['data']['nama_pembeli'].'_'.$dt['data']['id_return'].'_'.$dt['data']['tgl_return'].'.pdf');
    }

    public function deleteReturnBarang($id)
    {
        $dt_return = $this->getReturnById($id);
        $menu = $this->mem->getMenuById($dt_return['id_menu']);
        $this->db->where('id_menu', $dt_return['id_menu']);
        $this->db->update('tb_menu', ['stok' => $menu['stok'] - $dt_return['qty']]);
        $this->db->delete('tb_pembeli', ['id_pembeli' => $dt_return['id_pembeli']]);
        $this->db->delete('tb_return', ['id_return' => $id]);
        redirect('returnbarang');
    }
}