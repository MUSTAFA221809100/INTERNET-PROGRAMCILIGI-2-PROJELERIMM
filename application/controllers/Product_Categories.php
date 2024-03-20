<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Categories extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Product_Categories');
	}
	public function index()
	{
		$data['product_categories'] = $this->M_Product_Categories->getAll();
		$this->load->view('v_product_categories/index', $data);
	}
	public function save(){

	}
}
