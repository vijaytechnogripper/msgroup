<?php
class Clients_model extends CI_Model{
	function add_client($data){
		$this->db->insert("ci_clients", $data);
	}
	function get_clients(){
		$query = $this->db->get('ci_clients');  
         return $query;  
	}
}