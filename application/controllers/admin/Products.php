<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function index(){

	}
	function add_categories(){
		if ($this->session->userdata('username') != '') {
			$username = $this->session->userdata('username');
			$this->load->model('profile_model');
			$this->load->model('products_model');
			$user = $this->profile_model->get_profile($username);
			$data = array();
			$data['user'] = $user;
			$data['categories'] = $this->products_model->get_parent_categories();
			$data['category'] = $this->products_model->fetch_parent_categories();
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
	function insert_categories(){
		$this->load->model('products_model');
        $this->load->library('form_validation');
        if ($this->input->post('parent_category') == '' OR $this->input->post('parent_category') == 'none') {
        	$this->form_validation->set_rules("category", "Category Name", 'required');
        	if ($this->form_validation->run()) {
        		// echo $this->input->post('category');
        		// echo " is parent Category";
        		$data =array(
        			'parent_name' => $this->input->post('category')
        		);
        		$this->products_model->insert_parent_categories($data);
        		$this->session->set_flashdata('success_msg', 'Parent Category Added Sucessfully');
        		$this->add_categories();

        	} else {
        		$this->add_categories();
        	}
        	

        } else {
        	$this->form_validation->set_rules("category", "Category Name", 'required');
        	$this->form_validation->set_rules("category", "Category Name", 'required');
        	if ($this->form_validation->run()) {
        		// echo $this->input->post('category');
        		// echo " is not Parent Category";
        		$data =array(
        			'category' => $this->input->post('category'),
        			'parent_category' => $this->input->post('parent_category')
        		);
        		$this->products_model->insert_categories($data);
        		$this->add_categories();
        		$this->session->set_flashdata('success_msg', 'Category Added Sucessfully');
        	} else {
        		$this->add_categories();
        	}
        }
        
	}
}