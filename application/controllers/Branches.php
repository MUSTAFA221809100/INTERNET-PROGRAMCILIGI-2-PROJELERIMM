<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branches extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Branches');
	}
	public function index()
	{
		$data['branches'] = $this->M_Branches->getAll();
		$this->load->view('v_branches/index', $data);
	}
	public function save(){

	}
}
