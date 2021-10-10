<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {
	function index(){
		$this->load->model('location_model');
		$data['countries'] = $this->location_model->fetch_countries();
		$this->load->view('location',$data);
	}
	function get_states(){
		$country_id = $this->input->post('id');
		$this->load->model('country');
		$state = $this->country->fetch_states($country_id);
		if (count($state)>0) {

			$pro_select_box .= '';
			echo "<option value=''>Select State</option>";
			foreach ($state as $state) {
				// $pro_select_box .= "<option value='".$state->id."'>".$state->name."</option>";
				echo "<option value='".$state->id."'>".$state->name."</option>";
			}
			echo json_encode($pro_select_box);
		}
		else{
			$this->session->set_flashdata('error', 'Something is wrong.');
		}
	}
	public function get_district()
	{
		$state_id = $this->input->post('id');
		$this->load->model('location_model');
		$city = $this->location_model->fetch_cities($state_id);
		if (count($city)>0) {

			$pro_select_box .= '';
			echo "<option value=''>Select City/District</option>";
			foreach ($city as $city) {
				echo "<option value='".$city->id."'>".$city->name."</option>";
			}
			echo json_encode($pro_select_box);
		}

	}
}