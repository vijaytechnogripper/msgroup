<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$data['title'] = 'Login';
		$this->load->view('login', $data);
	}
	function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()){
			//true
			// echo "Login Successful!";
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('login_model');
			if ($this->login_model->can_login($username, $password)) {
				$session_data = array(
					'username' => $username
				);
				$this->session->set_userdata($session_data);
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('error', 'Invalid Username And Password');
				redirect('login/index');
			}
			
		}
		else
		{
			//false
			$this->index();
		}
	}
	function enter(){
		if ($this->session->userdata('username') != '') {
			$username = $this->session->userdata('username');

			echo '<h2>Welcome-'.$this->session->userdata('username'). '</h2>';

			echo '<a href="'.base_url().'/login/logout">Logout</a>';
		} else {
			redirect('login');
		}
		
	}
	function logout(){
		$this->session->unset_userdata('username');
		redirect('login');
	}
}
