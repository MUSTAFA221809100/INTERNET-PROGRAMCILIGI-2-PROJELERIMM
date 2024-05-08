<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
	public $viewFolder = "";
	public function __construct()
	{
		parent::__construct();
		$this->viewFolder = "users_v";
		$this->load->model("Users_Model");
	}

	public function index()
	{
		$items = $this->Users_Model->getAll();
		//print_r($items);
		//die();
		$viewData = new stdClass();
		$viewData->items = $items;
		$viewData->subViewFolder = "list";
		$viewData->viewFolder = $this->viewFolder;
		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}

	public function new_form()
	{
		$viewData = new stdClass();
		$viewData->subViewFolder = "add";
		$viewData->viewFolder = $this->viewFolder;
		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}
	
	public function save()
	{
		/* Sınıfın Yüklenmesi */
		$this->load->library("form_validation");

		/* Kuralların Yazılması */
		$this->form_validation->set_rules("email", "E-posta", "required|trim|valid_email|is_unique[users.email]");
		$this->form_validation->set_rules("name", "İsim ", "required|trim");
		$this->form_validation->set_rules("surname", "Soyisim", "required|trim");
		$this->form_validation->set_rules("password", "Şifre", "required|trim|min_length[3]|max_length[8]");
		$this->form_validation->set_rules("repass", "Şifre Tekrarı", "required|trim|matches[password]");
		$this->form_validation->set_rules("is_active", "Durum", "required|trim");

		/* Mesajların Oluşturulması  */
		$this->form_validation->set_message(
			array(
				"required" => "<b>{field}</b> alanı doldurulmalıdır.",
				"min_length" => "<b>{field}</b> alanı minimum 3 karakterden oluşabilir.",
				"max_length" => "<b>{field}</b> alanı maksimum 8 karakterden oluşabilir.",
				"matches" => "<b>{field}</b>  'Şifre' alanı ile aynı olmalıdır.",
				"valid_email" => "Lütfen geçerli bir e-posta adresi giriniz.",
				"is_unique" => "Bu e-posta adresi daha önceden sistemde kayıtlıdır.",
				
			)
		);

		/* Çalıştırılması */
		$validate = $this->form_validation->run();

		if ($validate) {
			//echo "Validasyon başarılı, kayıt devam eder.";

			$email = $this->input->post("email");
			$name = $this->input->post("name");
			$surname = $this->input->post("surname");
			$password = $this->input->post("password");
			$is_active = $this->input->post("is_active");

			$data = array(
				"email" => $email,
				"name" => $name,
				"surname" => $surname,
				"password" => $password,
				"is_active" => $is_active,
				
			
			);

			$insert = $this->Users_Model->add($data);

			if ($insert) {
				redirect(base_url("Users"));
			} else {
				echo "Kayıt Ekleme Sırasında Bir Hata Oluştu.";
			}
		} else {
			//echo "Validasyon başarısız, kayıt ekleme işlemine geri döner.";
			$viewData = new stdClass();
			$viewData->viewFolder = $this->viewFolder;
			$viewData->subViewFolder = "add";
			$viewData->formError = true;
			$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
		}
	}

	public function update_form($id) 
	{
		$item = $this->Users_Model->get(
			array(
				"id" => $id
				
			)
		);

		$viewData = new stdClass();
		$viewData->item = $item;
		$viewData->subViewFolder = "update";
		$viewData->viewFolder = $this->viewFolder;
		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}

	public function update($id) 
	{
			/* Sınıfın Yüklenmesi */
		$this->load->library("form_validation");

		/* Kuralların Yazılması */
		$this->form_validation->set_rules("email", "E-posta", "required|trim|valid_email");
		$this->form_validation->set_rules("name", "İsim ", "required|trim");
		$this->form_validation->set_rules("surname", "Soyisim", "required|trim");
		$this->form_validation->set_rules("password", "Şifre", "required|trim|min_length[3]|max_length[8]");
		$this->form_validation->set_rules("repass", "Şifre Tekrarı", "required|trim|matches[password]");
		$this->form_validation->set_rules("is_active", "Durum", "required|trim");

		/* Mesajların Oluşturulması  */
		$this->form_validation->set_message(
			array(
				"required" => "<b>{field}</b> alanı doldurulmalıdır.",
				"min_length" => "<b>{field}</b> alanı minimum 3 karakterden oluşabilir.",
				"max_length" => "<b>{field}</b> alanı maksimum 8 karakterden oluşabilir.",
				"matches" => "<b>{field}</b>  'Şifre' alanı ile aynı olmalıdır.",
				"valid_email" => "Lütfen geçerli bir e-posta adresi giriniz.",
				
				
			)
		);

		/* Çalıştırılması */
		$validate = $this->form_validation->run();

		if ($validate) {
			//echo "Validasyon başarılı, kayıt devam eder.";

			$email = $this->input->post("email");
			$name = $this->input->post("name");
			$surname = $this->input->post("surname");
			$password = $this->input->post("password");
			$is_active = $this->input->post("is_active");

			$data = array(
				"email" => $email,
				"name" => $name,
				"surname" => $surname,
				"password" => $password,
				"is_active" => $is_active,
				
			
			);


			$update = $this->Users_Model->update(
				array(
					"id" => $id

				),
				$data
			);

			if($update)
			{
				redirect(base_url("Users"));
			}
			else 
			{
				echo "Güncelleme başarısız.";
			}
		}else {
			$item = $this->Users_Model->get(
				array(
					"id" => $id
				)
			);
	
			$viewData = new stdClass();
			$viewData->item = $item;
			$viewData->subViewFolder = "update";
			$viewData->viewFolder = $this->viewFolder;
			$viewData->formError = true;
			$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
		}
	}


	public function delete($id) 
	{

		$data = array(
			"id" => $id
		);

		$this->Users_Model->delete($data);

		//TODO alert sistemi entegre edilecek.

		redirect(base_url("Users"));
		

	}
}