<?php

class Crud extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
    $this->load->helper('url');
		$this->load->library('upload');
	}

  function index(){
		$data['user'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_user.php',$data);
  }

	function user(){
		$data['user'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_user.php',$data);
	}

  public function registration() {
    $this->load->view('v_register.php');
  }

	public function registration_action() {
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '100';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		$email = $this->input->post('email');
		$password = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
		$gender = $this->input->post('gender');
		$name = $this->input->post('name');
		$telepon = $this->input->post('telepon');
		$pekerjaan = $this->input->post('pekerjaan');
		$foto = $this->input->post('foto');

		$data = array(
			'email' => $email,
			'password' => $password,
			'gender' => $gender,
			'nama' => $name,
			'no_telepon' => $telepon,
			'pekerjaan' => $pekerjaan,
			'photo' => $foto
			);
		$this->m_data->input_data($data,'user');
		redirect('crud/index');
	}

	public function get_data() {
		return print_r(json_encode ($this->m_data->json_data()));
	}
}
