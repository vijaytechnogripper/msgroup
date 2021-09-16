<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {

  public function achivements()
  {
    
    if ($this->session->userdata('username') != '') {
      $username = $this->session->userdata('username');
      $this->load->model('profile_model');
      $user = $this->profile_model->get_profile($username);
      $data = array();
      $data['user'] = $user;
      $data['title'] = 'Achivements';
      $this->load->view('admin/include/sidebar',$data);
      $this->load->view('admin/cms/achivements');
      $this->load->view('admin/include/footer');
    } else {
      redirect('login');
    }
  }
}