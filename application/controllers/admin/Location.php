<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {
	function index(){
		$this->load->model('Location_model');
		$data['countries'] = $this->Location_model->fetch_countries();
		$this->load->view('location',$data);
	}
	function get_states(){
		$country_id = $this->input->post('id');
		$this->load->model('location_model');
		$state = $this->location_model->fetch_states($country_id);
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
	public function get_test_state(){
		$country_id = $this->input->post('id');
		$this->load->model('location_model');
		$state = $this->location_model->fetch_states($country_id);
		if (count($state)>0) {

			// print_r($state);
			foreach($state as $state){
				echo $state->id;
				echo '-';
				echo $state->name;
				echo '<br>';

			}
			// $pro_select_box .= '';
			// $pro_select_box .= '<option>Select District</option>';
			// foreach ($state as $state) {
			// 	$pro_select_box .= '<option>'.$state->name;
			// }
			// echo json_encode($pro_select_box);
		}
		else{
			$this->session->set_flashdata('error', 'Something is wrong.');
		}
	}
	public function get_test_city(){
		$state_id = $this->input->post('id');
		$this->load->model('location_model');
		$city = $this->location_model->fetch_cities($state_id);
		if (count($city)>0) {

			// print_r($state);
			foreach($city as $city){
				echo $city->id;
				echo '-';
				echo $city->name;
				echo '<br>';

			}
			// $pro_select_box .= '';
			// $pro_select_box .= '<option>Select District</option>';
			// foreach ($state as $state) {
			// 	$pro_select_box .= '<option>'.$state->name;
			// }
			// echo json_encode($pro_select_box);
		}
		else{
			$this->session->set_flashdata('error', 'Something is wrong.');
		}
	}
}