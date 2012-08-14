<?php
class model_user extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_users($slug = FALSE)
	{
		if ($slug === FALSE)
		{
			$query = $this->db->get('user');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('user', array('name' => $slug));
		return $query->row_array();
	}
	
	public function save_user($sender=FALSE)
	{
		if ($sender===FALSE)
		{
			return FALSE;
		}
		$query = $this->db->get_where('user', array('name' => $slug));
		return $query->row_array();
		
	}
}