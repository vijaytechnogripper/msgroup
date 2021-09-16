<?php
class Profile_model extends CI_Model{
	function get_profile($username){
		$this->db->where('username', $username);
		$query = $this->db->get('user')->result_array();
		return $query;
	}

}