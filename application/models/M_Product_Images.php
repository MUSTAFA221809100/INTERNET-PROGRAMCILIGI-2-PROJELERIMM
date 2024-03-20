<?php
class M_Product_Images extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	public function save($data = array()){
		return $this->db->insert('product_images', $data);
	}

	public function getAll($order = 'id ASC'){
		return $this->db->order_by($order)->get('product_images')->result();
	}

}
