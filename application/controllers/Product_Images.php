<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Images extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Product_Images');
	}
	public function index()
	{
		$data['product_images'] = $this->M_Product_Images->getAll();
		$this->load->view('v_product_images/index', $data);
	}
	public function save(){

	}
}
