<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_game extends CI_Model {
	public function index()
	{
		$this->load->view('v_home');
	}

    public function getAllPembayaran() {
        $query = $this->db->query("select * from t_pembayaran");
        return $query->result();
    }

    public function getAllStruk() {
        $query = $this->db->query("select * from t_struk");
        return $query->result();
    }

    public function getAll(){
        $query = $this->db->query("select * from t_game");
        return $query->result();
    }   

    public function getSingle($id){
        return $this->db->get_where('t_game',array('id_game'=>$id))->row();
    }   

    public function getSingleBayar($id) {
        $query = $this->db->query("select * from t_pembayaran where id_pembayaran = $id");
        return $query->result();
    }
    
    public function getAllBayar() {
        $query = $this->db->query("select * from t_pembayaran");
        return $query->result();
    }

    public function editGame($data)
    {
        $id = $data["id"];
        $nama = $data["nama"];
        $foto = $data["foto"];
        
        $query = $this->db->query("SELECT id_game FROM t_game WHERE id_game = '$id'");
        $isExist = $query->result();
        if (!empty($isExist)) {
            $query = $this->db->query("UPDATE t_game SET nama_game = '$nama', foto_game = '$foto' WHERE id_game = '$id'");
        }
        return $this->db->affected_rows();
    }

    public function editVoucher($data)
    {
        $id = $data["id"];
        $nama = $data["nama"];
        $harga = $data["harga"];
        $id_game = $data["id_game"];
        
        $query = $this->db->query("SELECT id_voucher FROM t_voucher WHERE id_voucher = '$id'");
        $isExist = $query->result();
        if (!empty($isExist)) {
            $query = $this->db->query("UPDATE t_voucher SET nama_voucher = '$nama', harga_voucher = '$harga', id_game = '$id_game'  WHERE id_voucher = '$id'");
        }
        return $this->db->affected_rows();
    }
    
    public function deleteGame($id) {
        $query = $this->db->query("SELECT id_game FROM t_game WHERE id_game = '$id'");
        $isExist = $query->result();
        if (!empty($isExist)) {
            $query = $this->db->query("DELETE FROM t_game WHERE id_game = '$id'");
        }
        return $this->db->affected_rows();
    }

    public function deleteVoucher($id) {
        $query = $this->db->query("SELECT id_voucher FROM t_voucher WHERE id_voucher = '$id'");
        $isExist = $query->result();
        if (!empty($isExist)) {
            $query = $this->db->query("DELETE FROM t_voucher WHERE id_voucher = '$id'");
        }
        return $this->db->affected_rows();
    }

    public function deletePembayaran($id) {
        $query = $this->db->query("SELECT id_pembayaran FROM t_pembayaran WHERE id_pembayaran = '$id'");
        $isExist = $query->result();
        if (!empty($isExist)) {
            $query = $this->db->query("DELETE FROM t_pembayaran WHERE id_pembayaran = '$id'");
        }
        return $this->db->affected_rows();
    }
    
    public function createGame($data) {
        $nama = $data["nama"];
        $foto = $data["foto"];
        
        $query = $this->db->query("INSERT INTO t_game VALUES ('', '$nama', '$foto')"); 
        return $this->db->affected_rows();
    }

    public function createVoucher($data) {
        $nama = $data["nama"];
        $harga = $data["harga"];
        $id_game = $data["id_game"];
        
        $query = $this->db->query("INSERT INTO t_voucher VALUES ('', '$nama', '$harga', '$id_game')"); 
        return $this->db->affected_rows();
    }
}
