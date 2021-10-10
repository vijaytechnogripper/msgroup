<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function index(){

	}
	function add_categories(){
		if ($this->session->userdata('username') != '') {
			$username = $this->session->userdata('username');
			$this->load->model('profile_model');
			$user = $this->profile_model->get_profile($username);
			$data = array();
			$data['user'] = $user;
			$data['title'] = 'Add Categories';
			$this->load->model('country');
			$data['countries'] = $this->country->fetch_countries();
			$this->load->view('admin/include/sidebar',$data);
			$this->load->view('admin/products/add_categories');
			$this->load->view('admin/include/footer');
		} else {
			redirect('login');
		}
	}
}