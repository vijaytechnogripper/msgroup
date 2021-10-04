<?php
	class Login_model extends CI_Model{
		function can_login($username, $password){
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$query = $this->db->get('user');
			if ($query->num_rows() > 0) {
				return true;
			} else {
				return false;

			}
			
		}
		function get_profile($username){
		$this->db->where('username', $username);
		$query = $this->db->get('user')->result_array();
		return $query;
		}
	}