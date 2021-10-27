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
  public function contact_info(){
    if ($this->session->userdata('username') != '') {
      $username = $this->session->userdata('username');
      $user = $this->profile_model->get_profile($username);
      $info = $this->cms_model->get_contactinfo();
      $data = array();
      $data['user'] = $user;
      $data['info'] = $info;
      $data['title'] = 'Update Contact Info';
      $this->load->view('admin/include/sidebar',$data);
      $this->load->view('admin/cms/contact_info');
      $this->load->view('admin/include/footer');
    } else {
      redirect('login');
    }
  }
  function update_contact_info(){
    $c_id = $this->input->post('c_id');
    $this->form_validation->set_rules("c_id","Select Contact",'required');
    $this->form_validation->set_rules("info","Contact Info",'required');
    if ($this->form_validation->run()) {
       $data = array(
        'c_id' => $this->input->post('c_id'),
        'info' =>$this->input->post('info')
      );
      $this->db->where('c_id', $c_id);
      $this->db->update('cms_contactinfo', $data);
      $this->session->set_flashdata('success_msg', 'Contact Info Updated Successfully !');
      $this->contact_info();
    } else {
      $this->session->set_flashdata('error_msg', validation_errors());
      $this->contact_info();
    }
  }
  function team(){
    if ($this->session->userdata('username') != '') {
      $username = $this->session->userdata('username');
      $this->load->model('profile_model');
      $user = $this->profile_model->get_profile($username);
      $team = $this->cms_model->get_team();
      $data = array();
      $data['user'] = $user;
      $data['team'] = $team;
      $data['title'] = 'Team';
      $this->load->view('admin/include/sidebar',$data);
      $this->load->view('admin/cms/team');
      $this->load->view('admin/include/footer');
    } else {
      redirect('login');
    }
  }
  public function insert_team(){
    $this->form_validation->set_rules("name","Full Name",'required');
    $this->form_validation->set_rules("designation","Designation",'required');
    $this->form_validation->set_rules("role","Role Rank",'required');
    $this->form_validation->set_rules("email","Email ID",'required');
    $this->form_validation->set_rules("mobile","Mobile Number",'required');
    $this->form_validation->set_rules("whatsapp","whatsapp Number",'required');
    $this->form_validation->set_rules("status","Status",'required');
    $this->form_validation->set_rules("photo","Photo",'file_required');
    if ($this->form_validation->run()) {
      if ($this->input->post('facebook')== '') {
        $facebook = '#';
      } else {
        $facebook = $this->input->post('facebook');
      }
      if ($this->input->post('twitter')== '') {
        $twitter = '#';
      } else {
        $twitter = $this->input->post('twitter');
      }
      if ($this->input->post('instagram')== '') {
        $instagram = '#';
      } else {
        $instagram = $this->input->post('instagram');
      }
      if ($this->input->post('linkedin')== '') {
        $linkedin = '#';
      } else {
        $linkedin = $this->input->post('linkedin');
      }
      if(!empty($_FILES['photo']['name'])){
        $team_pic                       = time().$_FILES['photo']['name'];
        $config['file_name']            = str_replace(' ', '_', $team_pic);
        $config['upload_path']          = './assets/uploads/team/';
        $config['allowed_types']        = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
        $config['max_size']             = 5000;
        $config['max_width']            = 5000;
        $config['max_height']           = 5000;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $upload_data = $this->upload->data();
        $teamimage = $upload_data['file_name'];
      }
      else{
        $teamimage='';
      }
      $team_id= "MSGT".mt_rand(1000,9999);
      $whatsapp = "https://wa.me/91".$this->input->post('whatsapp');
      $data = array(
        'team_id'=>$team_id,
        'name'=>$this->input->post('name'),
        'designation'=>$this->input->post('designation'),
        'role'=>$this->input->post('role'),
        'email'=>$this->input->post('email'),
        'mobile'=>$this->input->post('mobile'),
        'whatsapp'=>$whatsapp,
        'facebook'=> $facebook,
        'twitter'=> $twitter,
        'instagram'=> $instagram,
        'linkedin'=> $linkedin,
        'status'=>$this->input->post('status'),
        'photo'=>$teamimage
      );
      $this->insert_teamimage($teamimage);
      $this->load->model('cms_model');
      $this->cms_model->insert_team($data);
      // echo "<pre>";
      // print_r($data);
      $this->session->set_flashdata('success_msg', 'Team Member added Successfully !');
      // $this->team();
    } else {
      $this->session->set_flashdata('error_msg', validation_errors());
      $this->team();
    }
    
  }
  private function insert_teamimage($teamimage){
    $config['file_name']            = $teamimage;
    $config['upload_path']          = './assets/uploads/team/';
    $config['allowed_types']        = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
    $config['max_size']             = 5000;
    $config['max_width']            = 5000;
    $config['max_height']           = 5000;

    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if ( ! $this->upload->do_upload('photo')){
      echo $this->upload->display_errors();  
    }else{
      $this->team();
    }
  }
}