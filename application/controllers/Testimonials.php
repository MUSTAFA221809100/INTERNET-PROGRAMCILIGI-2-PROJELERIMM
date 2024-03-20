<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Testimonials');
	}
	public function index()
	{
		$data['testimonials'] = $this->M_Testimonials->getAll();
		$this->load->view('v_testimonials/index', $data);
	}
	public function save(){

	}
}
