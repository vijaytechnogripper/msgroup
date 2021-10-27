<?php
class Cms_model extends CI_Model{

	function get_contactinfo(){
		$query = $this->db->get('cms_contactinfo');  
         return $query;
	}
	function get_team(){
		$query = $this->db->get('cms_team');  
         return $query;
	}
	function insert_team($data){
		$this->db->insert("cms_team", $data);
	}
}