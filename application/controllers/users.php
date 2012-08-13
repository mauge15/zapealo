<?php
class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_user');
	}

	public function index()
	{
		$data['usuarios'] = $this->model_user->get_users();
		$data['title'] = 'Usuarios';
		$this->load->view('templates/header', $data);
		$this->load->view('users/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug)
	{
		$data['usuarios'] = $this->model_user->get_users($slug);
		if (empty($data['usuarios']))
		{
			show_404();
		}

		$data['title'] = $data['usuarios']['name'];
		$this->load->view('templates/header', $data);
		$this->load->view('users/view', $data);
		$this->load->view('templates/footer');
	}
}