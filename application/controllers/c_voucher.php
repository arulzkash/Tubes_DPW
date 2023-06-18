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

	public function linkCreateGame() {
		$this->load->view('v_create');
	}

	public function linkCreateVoucher() {
		$dy = $this->m_game->getAll();
		$data = ["game" => $dy];
		$this->load->view('v_createVoucher',$data);
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

	public function linkEditGame($id_game) {
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
		}

		$this->load->view('v_editGame', $data);
	}

	public function editConfirmGame()
	{
		$id = $this->input->post("id");
		$nama = $this->input->post("nama");
		$foto = $_FILES['foto']['name'];
		$foto_tmp = $_FILES['foto']['tmp_name'];
		
		$data = [
			"id" => $id,
			"nama" => $nama,
			"foto" => $foto
		];
		$direktori = 'asset/img/' . $foto;
		$success = $this->m_game->editGame($data);
		if ($success > 0) {
			move_uploaded_file($foto_tmp, $direktori);
			redirect(site_url('c_voucher/linkAdmin'));
		} 
		else {
			echo "Edit Failed";
		}
	}
	
	public function delete($id) {
		$result = $this->m_game->deleteGame($id); // Gantilah Model_game dengan model yang sesuai
		$result2 = $this->m_game->deleteVoucher($id);
		$result3 = $this->m_game->deletePembayaran($id);

		if ($result) {
			// Jika delete berhasil
			redirect('c_voucher/linkAdmin'); // Redirect ke halaman admin atau halaman lain yang sesuai
		}
		else if ($result2) {
			redirect('c_voucher/linkAdmin'); // Redirect ke halaman admin atau halaman lain yang sesuai
		} 
		else if ($result3) {
			redirect('c_voucher/linkAdmin'); // Redirect ke halaman admin atau halaman lain yang sesuai
		}
		else {
			// Jika delete gagal
			echo "Delete gagal"; // Tampilkan pesan error atau ambil tindakan lain yang sesuai
		}
	}
	
	public function createGame() {
		$id = $this->input->post('id');
        $nama = $this->input->post('nama');
		$foto = $_FILES['foto']['name'];
		$foto_tmp = $_FILES['foto']['tmp_name'];
		$data = [
			"id" => $id,
			"nama" => $nama,
			"foto" => $foto
		];
		$direktori = 'asset/img/' . $foto;
		$success = $this->m_game->createGame($data);
		if ($success > 0) {
			move_uploaded_file($foto_tmp, $direktori);
			redirect(site_url('c_voucher/linkAdmin'));
		} 
		else {
			echo "Create Failed";
		}
	}

	public function createVoucher() {
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$id_game = $this->input->post('id_game');
		$data = [
			"id" => $id,
			"nama" => $nama,
			"harga" => $harga,
			"id_game" => $id_game
		];
		$success = $this->m_game->createVoucher($data);
		if ($success > 0) {
			redirect(site_url('c_voucher/linkAdmin'));
		} 
		else {
			echo "Create Failed";
		}
	}
}