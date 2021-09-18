<?php
class location_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	public function fetch_countries()
	{
		$query = $this->db->get_where('ci_countries');
		return $query->result();
	}
	public function fetch_states($country_id)
	{
		$query = $this->db->get_where('ci_states', array('country_id' => $country_id));
		return $query->result();
	}
	public function fetch_cities($state_id)
	{
		$query = $this->db->get_where('ci_cities', array('state_id' => $state_id));
		return $query->result();
	}
}