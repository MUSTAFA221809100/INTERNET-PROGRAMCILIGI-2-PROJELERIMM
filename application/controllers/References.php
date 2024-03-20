<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class References extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_References');
	}
	public function index()
	{
		$data['references'] = $this->M_References->getAll();
		$this->load->view('v_references/index', $data);
	}
	public function save(){

	}
}
