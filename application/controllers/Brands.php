<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brands extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Brands');
	}
	public function index()
	{
		$data['brands'] = $this->M_Brands->getAll();
		$this->load->view('v_brands/index', $data);
	}
	public function save(){

	}
}
