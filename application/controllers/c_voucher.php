<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Voucher extends CI_Controller {

	public function index()
	{
		$this->load->model('m_game');
		//memuat model
		$dt = $this->m_game->getAll();

		//bungkus
		$temp['data'] = $dt;

		$this->load->view('v_home', $temp);
	}


	public function tampilBayar($id)  {

	//memuat model
	$dt = $this->m_game->getSingle($id);
	$dv = $this->m_voucher->getSingle($id);

    $dp = $this->m_game->getAllBayar();
    
	
	//bungkus
	$temp['ko'] = $dp;
	$temp['data'] = $dt;
	$temp['voucher'] = $dv;
	
	
	$this->load->view('v_bayar', $temp);
	}

	public function tampilTransaksi()
{
    $temp = $this->m_game->getAllBayar();
    
	$data['ko'] = $temp;
    $this->load->view('v_bayar', $data);
}
}
