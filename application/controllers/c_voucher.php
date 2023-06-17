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
	
	public function linkAdmin()
	{
		
		$this->load->model('m_game');
		$dt = $this->m_game->getAll();
		$dy = $this->m_voucher->getAll();
		$dz = $this->m_game->getAllPembayaran();
		$dp = $this->m_game->getAllStruk();
		$data = ["game" => $dt, "voucher" => $dy, "pembayaran" => $dz, "struk" => $dp];
		
		$this->load->view('v_admin',$data);
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

	public function bayar()
{
	
    $temp = $this->m_game->getAllBayar();
    
	$data['ko'] = $temp;
    $this->load->view('v_bayar', $data);
}

public function linkEdit($id_game) {
    // Ambil data game berdasarkan $id_game dari model atau sumber data lainnya
    $game = $this->m_game->getSingle($id_game); // Gantilah Model_game dengan model yang sesuai

    if ($game) {
        // Jika game ditemukan, ambil nilai nama dan foto
        $nama = $game->nama_game;
        $foto = $game->foto_game;

        $data = [
            "id" => $id_game,
            "nama" => $nama,
            "foto" => $foto
        ];
    } else {
        // Jika game tidak ditemukan, berikan nilai default
        $data = [
            "id" => $id_game,
            "nama" => "",
            "foto" => ""
        ];
    }

    $this->load->view('v_edit', $data);
}

	public function edit() {

	}
}
