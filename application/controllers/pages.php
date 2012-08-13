<?php

class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_user');
		$this->load->helper('form');
		
	}

	public function view($page = 'home')
	{
		if (!file_exists('application/views/pages/'.$page.'.php')){
			//It doesn't exist
			show_404();
		}
		
		switch ($page)
		{
			case 'home':
				
				$data['title']  = ucfirst($page); //Capitalize first letter
				
				//DATA FOR THE REGISTRATION DIALOG
				
				$data['register_title'] = "Registro de nuevo usuario";
				$data['hidden'] = array('sender' => TRUE);
				$data['name'] = array(
					'name'        => 'name',
					'id'          => 'name'
				);
				$data['nick'] = array(
					'name'        => 'nick',
					'id'          => 'nick'
				);
				$data['surname'] = array(
					'name'        => 'surname',
					'id'          => 'surname'
				);
				$data['password1'] = array(
					'name'        => 'password1',
					'id'          => 'pass1'
				);
				$data['password2'] = array(
					'name'        => 'password2',
					'id'          => 'pass2'
				);
				$data['email'] = array(
					'name'        => 'email',
					'id'          => 'email'
				);
				$data['city'] = array(
					'name'        => 'city',
					'id'          => 'city'
				);
				$data['birthday'] = array(
					'name'        => 'datepicker',
					'id'          => 'datepicker'
				);
				$data['sex1'] = array(
					'name'        => 'sex',
					'id'          => 'sex',
					'value'		  => 'H'
				);
				$data['sex2'] = array(
					'name'        => 'sex',
					'id'          => 'sex',
					'value'		  => 'M'
				);
				$data['email_login'] = array(
					'name'        => 'email_login',
					'id'          => 'email_login'
				);
				$data['password_login'] = array(
					'name'        => 'password_login',
					'id'          => 'password_login'
				);
				
				$this->load->view('pages/header',$data);
				$this->load->view('pages/'.$page,$data);
				$this->load->view('pages/footer',$data);
				break;
			
			case 'register_step1':
				
				if (($_POST['sender'])&&($_POST['password1'] == $_POST['password2']))
				{
				$pass = $_POST['password1'];
				$data = array(
				   'name' => $_POST['name'],
				   'surname' => $_POST['surname'],
				   'birthday' => $_POST['datepicker'],
				   'address' => '',
				   'idcity' => $_POST['city'],
				   'idstate' => '',
				   'idcountry' => '34',
				   'nick' => $_POST['nick'],
				   'pass' => md5($pass),
				   'mobile1' => $_POST['mobile1'],
				   'mobile2' => $_POST['mobile2'],
				   'other' => $_POST['other'],
				   'logindate' => $_POST['logindate'],
				   'creationdate' => date('Y-m-d H:i:s'),
				   'reputation' => '000',
				   'visible' => '1'
				);

				$this->db->insert('user', $data); 
				
				$this->load->view('pages/header',$data);
				$this->load->view('pages/main',$data);
				$this->load->view('pages/footer',$data);
				break;
				}
				else
				{
				$this->load->view('pages/header',$data);
				$this->load->view('pages/home',$data);
				$this->load->view('pages/footer',$data);
				break;
				}
				
		}
	}
	

}