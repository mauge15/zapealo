<?php 
//if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_admin');
		$this->load->helper('form');
		
	}
	public function index($msg=''){
		$data['title'] = "ADMIN";
		
		$data['content'] = "Welcome administration panel";
		$data['hidden'] = array('sender' => 'adminGo');
		$data['msg'] = $msg;
		$data['username'] = array(
              'name'        => 'username',
              'id'          => 'username'
            );
		
		$data['password'] = array(
              'name'        => 'password',
              'id'          => 'pass'
            );
		$this->load->view('admin/header',$data);
		//$this->load->view('admin/menu',$data);
		$this->load->view('admin/index', $data);
		$this->load->view('admin/footer',$data);
	}
	

	public function view($section='login',$v1 ='0')
	{
	
	$data['add'] ="";
		if (!file_exists('application/views/admin/'.$section.'.php')){
			//It doesn't exist
			show_404();
		}
		
		switch ($section)
		{
		
			case "login":
				
				if (!empty($_POST['sender']))
				{
					$username = $_POST['username'];
					$password = $_POST['password'];
					$admin = $this->model_admin->check_admin($username, md5($password));
				}
				else
				{
					$this->index();
					break;
				}
				
				
				
				if (!empty($admin))
				{
					$data['username'] = $data_session['user'] = $admin['admin_user_name'];
					$data['title'] = "ADMIN";
					$data['date'] = $admin['date'];
					$data['content'] = "Administration panel";
					$this->load->view('admin/session',$data_session);
					$this->load->view('admin/header',$data);
					$this->load->view('admin/menu',$data);
					$this->load->view('admin/login', $data);
					$this->load->view('admin/footer',$data);
					break;
				}
				else
				{
					$msg = "El nombre o usuario no coinciden.";
					$this->index($msg);
					break;
				}
				
			case "list_users":
				
				$data['users'] = $this->model_admin->get_users();
				$data['title'] = "ADMIN";
				$data['content'] = "Welcome administration panel";
				
				$this->load->view('admin/header',$data);
				$this->load->view('admin/menu',$data);
				$this->load->view('admin/list_users', $data);
				$this->load->view('admin/footer',$data);
				break;

			case "edit_users":
				
				$data['add'] ="../";
				$data['user'] = $this->model_admin->get_users($v1);
				$data['title'] = "ADMIN";
				$data['content'] = "Welcome administration panel";
				
				$this->load->view('admin/header',$data);
				$this->load->view('admin/menu',$data);
				$this->load->view('admin/edit_users', $data);
				$this->load->view('admin/footer',$data);
				break;
				
			default: 
			
				// $data['title'] = $section;
				$data['content'] = "Welcome otro admin";
				
				$data['title'] = ucfirst($section); //Capitalize first letter
				
				$this->load->view('templates/header',$data);
				// $this->load->view('pages/'.$section,$data);
				$this->load->view('admin/'.$section,$data);
				$this->load->view('templates/footer',$data);break;
		
		}
		
		
		 
	}
	

}

?>