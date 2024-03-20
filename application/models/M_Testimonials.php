<?php
class M_Testimonials extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	public function save($data = array()){
		return $this->db->insert('testimonials', $data);
	}

	public function getAll($order = 'id ASC'){
		return $this->db->order_by($order)->get('testimonials')->result();
	}

}
