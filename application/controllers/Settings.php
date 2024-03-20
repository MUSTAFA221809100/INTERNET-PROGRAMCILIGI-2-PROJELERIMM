<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Settings');
	}
	public function index()
	{
		$data['settings'] = $this->M_Settings->getAll();
		$this->load->view('v_settings/index', $data);
	}
	public function save(){

	}
}
