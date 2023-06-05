<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_voucher extends CI_Model {
	public function index()
	{
		$this->load->view('v_home');
	}

    public function getAll(){
        $query = $this->db->query("select * from t_voucher");
        return $query->result();
    }   

    public function getSingle($id){
        // return $this->db->get_where('t_voucher',array('id_game'=>$id))->row();
        $query = $this->db->query("select * from t_voucher where id_game = '$id'");
        return $query->result();
    }   
}
