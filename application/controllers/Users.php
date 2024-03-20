<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Users');
	}
	public function index()
	{
		$data['users'] = $this->M_Users->getAll();
		$this->load->view('v_users/index', $data);
	}
	public function save(){

	}
}
