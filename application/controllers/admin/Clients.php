<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {
	function index(){
		echo "Not Permitted";
	}
	function add_client(){
		if ($this->session->userdata('username') != '') {
			$username = $this->session->userdata('username');
			$this->load->model('profile_model');
			$user = $this->profile_model->get_profile($username);
			$data = array();
			$data['user'] = $user;
			$data['title'] = 'Add Client';
			$this->load->model('country');
			$data['countries'] = $this->country->fetch_countries();
			$this->load->view('admin/include/sidebar',$data);
			$this->load->view('admin/add_client');
			$this->load->view('admin/include/footer');
		} else {
			redirect('login');
		}
	}
	function insert_client(){
		$this->load->model('clients_model');
        $this->load->library('form_validation');
		$this->form_validation->set_rules("client_name", "Client's Name", 'required');
		$this->form_validation->set_rules("company", "Client's Comapany Name", 'required');
		$this->form_validation->set_rules("email", "Client's Email Id", 'required|valid_email|is_unique[ci_clients.email]');
		$this->form_validation->set_rules("c_email", "Confirm Email Id", 'required|matches[email]');
		$this->form_validation->set_rules("mobile", "Mobile Nummber", 'required|min_length[10]|max_length[14]');
		$this->form_validation->set_rules("whatsapp", " WhatsApp Nummber", 'required|min_length[10]|max_length[14]');
		$this->form_validation->set_rules("address", "Address", 'required');
		$this->form_validation->set_rules("country", "Country", 'required');
		$this->form_validation->set_rules("state", "State", 'required');
		$this->form_validation->set_rules("city", "City", 'required');
		$this->form_validation->set_rules("pin_zip", "PIN / Zip Code", 'required|numeric|min_length[4]|max_length[10]');
		if($this->form_validation->run())
		{
			$state =$this->input->post('state');
			$state_name = $this->db->query("SELECT name FROM ci_states WHERE id = '".$state."'");
			if ($state_name->num_rows()>0) {
				foreach ($state_name->result() as $key) {
				$pure_state_name = $key->name;
				}
			}
			else{
				echo "State Not found";
			}
			$country =$this->input->post('country');
			$country_name = $this->db->query("SELECT name,phonecode FROM ci_countries WHERE id = '".$country."'");
			if ($country_name->num_rows()>0) {
				foreach ($country_name->result() as $key) {
				$pure_country_name = $key->name;
				$phonecode = $key->phonecode;

				}
			}
			else{
				echo "State Not found";
			}
			$city =$this->input->post('city');
			$city_name = $this->db->query("SELECT name FROM ci_cities WHERE id = '".$city."'");
			if ($city_name->num_rows()>0) {
				foreach ($city_name->result() as $key) {
				$pure_city_name = $key->name;
				}
			}
			else{
				echo "State Not found";
			}
			 
			$rand = $this->input->post('mobile');
	        $rand_num = "FLMCLI-".$rand;
			$data = array(
				'client_id'  => $rand_num,
				'client_name' =>$this->input->post('client_name'),
				'company' =>$this->input->post('company'),
				'email' =>$this->input->post('email'),
				'mobile' => "+".$phonecode.$this->input->post('mobile'),
				'whatsapp' => "https://wa.me/".$phonecode.$this->input->post('whatsapp'),
				'address' =>$this->input->post('address'),
				'city' =>$pure_city_name, 
				'state' =>$pure_state_name, 
				'country' =>$pure_country_name,
				'pin_zip' =>$this->input->post('pin_zip'), 
				'created_at'=> date('d-m-Y H:i:s')
				);
				echo "<pre>";
				print_r($data);
				$this->clients_model->add_client($data);
				$this->session->set_flashdata('success_msg', 'Client Added Sucessfully');
		}
		else
		{
			$this->add_client();
		}
	}
	function view_clients(){
		if ($this->session->userdata('username') != '') {
			$username = $this->session->userdata('username');
			$this->load->model('profile_model');
			$user = $this->profile_model->get_profile($username);
			$data = array();
			$data['user'] = $user;
			$data['title'] = 'View Client';
			$this->load->model('country');
			$data['countries'] = $this->country->fetch_countries();
			$this->load->model('clients_model'); 
		 	$data['h']=$this->clients_model->get_clients();
			$this->load->view('admin/include/sidebar',$data);
			$this->load->view('admin/view_clients');
			$this->load->view('admin/include/footer');
		} else {
			redirect('login');
		}
	}

}