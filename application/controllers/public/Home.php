<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['title']="Home";
		$this->load->view('public/include/header',$data);
		$this->load->view('public/home');
		$this->load->view('public/include/footer');
	}
	public function about()
	{
		$data['title']="About Us";
		$this->load->view('public/include/header',$data);
		$this->load->view('public/about');
		$this->load->view('public/include/footer');
	}
	public function services()
	{
		$data['title']="Services";
		$this->load->view('public/include/header',$data);
		$this->load->view('public/services');
		$this->load->view('public/include/footer');
	}
	public function process()
	{
		$data['title']="Process";
		$this->load->view('public/include/header',$data);
		$this->load->view('public/process');
		$this->load->view('public/include/footer');
	}
	public function products()
	{
		$data['title']="Products";
		$this->load->view('public/include/header',$data);
		$this->load->view('public/products');
		$this->load->view('public/include/footer');
	}
	public function careers()
	{
		$data['title']="Careers";
		$this->load->view('public/include/header',$data);
		$this->load->view('public/careers');
		$this->load->view('public/include/footer');
	}
	public function contact()
	{
		$data['title']="Contact Us";
		$this->load->view('public/include/header',$data);
		$this->load->view('public/contact');
		$this->load->view('public/include/footer');
	}
}
