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
        $id = $data["id_game"];
        $nama = $data["nama_game"];
        $foto = $data["foto_game"];

        $query = $this->db->query("SELECT id_game FROM t_game WHERE id_game = '$id'");
        $isExist = $query->result();
        if (!empty($isExist)) {
            $query = $this->db->query("UPDATE t_game SET nama_game = '$nama', foto = '$foto' WHERE id_game = '$id'");
        }
        return $this->db->affected_rows();
    }
}
