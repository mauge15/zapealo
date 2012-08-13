<?php
class model_admin extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_users($idUser= FALSE)
	{
		if ($idUser === FALSE)
		{
			$query = $this->db->get('user');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('user', array('idUser' => $idUser));
		return $query->row_array();
	}
	
	public function check_admin($admin= FALSE, $admin_pass = FALSE)
	{
		if ($admin === FALSE || $admin_pass === FALSE )
		{
			return;
		}
		
		$query = $this->db->get_where('admin_user', array('admin_user_name' => $admin, 'admin_password' => $admin_pass));
		return $query->row_array();
	}
}