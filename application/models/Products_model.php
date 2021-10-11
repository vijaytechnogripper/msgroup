<?php
class Products_model extends CI_Model{
	function insert_categories($data){
		$this->db->insert("msg_categories", $data);
	}
	function get_categories(){
		$query = $this->db->get('msg_categories');  
         return $query;  
	}
	function insert_parent_categories($data){
		$this->db->insert("msg_parent_categories", $data);
	}
	function get_parent_categories(){
		$query = $this->db->get('msg_parent_categories');  
         return $query;
	}
	function fetch_parent_categories(){
		$query = $this->db->get_where('msg_parent_categories');
		return $query->result();
	}
}