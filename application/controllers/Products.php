<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Products');
	}
	public function index()
	{
		$data['products'] = $this->M_Products->getAll();
		$this->load->view('v_products/index', $data);
	}
	public function save(){

	}
}
