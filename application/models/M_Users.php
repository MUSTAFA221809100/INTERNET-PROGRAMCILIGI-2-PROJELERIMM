<?php
class M_Users extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	public function save($data = array()){
		return $this->db->insert('users', $data);
	}

	public function getAll($order = 'id ASC'){
		return $this->db->order_by($order)->get('users')->result();
	}

}
