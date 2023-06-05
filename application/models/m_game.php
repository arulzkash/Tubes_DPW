<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_game extends CI_Model {
	public function index()
	{
		$this->load->view('v_home');
	}

    public function getAll(){
        $query = $this->db->query("select * from t_game");
        return $query->result();
    }   

    public function getSingle($id){
        return $this->db->get_where('t_game',array('id_game'=>$id))->row();
    }   
}
